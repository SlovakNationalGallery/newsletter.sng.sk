<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Spatie\Newsletter\NewsletterFacade as Newsletter;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/subscribe', function (Request $request) {

    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'selected' => 'required|array',
        'selected_interests' => 'array',
    ]);

    if ($validator->fails()) {
        return response()->json(['success' => false, 'error_message' => $validator->errors()->first()], 422);
    }

    $validated = $validator->validated();

    foreach ($validated['selected'] as $list) {
        if (config()->has('newsletter.lists.' . $list)) {

            $options = [];

            if ($list == 'edu-newsletter' && !empty($validated['selected_interests'])) {
                $options['interests'] = collect($validated['selected_interests'])->mapWithKeys(function ($item, $key) use ($list) {
                    if (config()->has('newsletter.lists.' . $list . '.interests.' . $item)) {
                        return [config('newsletter.lists.' . $list . '.interests.' . $item) => true];
                    }
                })->all();
            }

            Newsletter::subscribe($validated['email'], [], $list, $options);
            Newsletter::setMarketingPermission($validated['email'], 'default', true, $list);

            if (!Newsletter::lastActionSucceeded()) {
                $this->addError('subscription', Newsletter::getLastError());
                return response()->json(['success' => false, 'error_message' => Newsletter::getLastError()], 500);
            }
        }
    }

    return response()->json(['success' => true]);
});