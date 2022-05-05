<?php

return [

    /*
     * The driver to use to interact with MailChimp API.
     * You may use "log" or "null" to prevent calling the
     * API directly from your environment.
     */
    'driver' => env('MAILCHIMP_DRIVER', 'api'),

    /*
     * The API key of a MailChimp account. You can find yours at
     * https://us10.admin.mailchimp.com/account/api-key-popup/.
     */
    'apiKey' => env('MAILCHIMP_APIKEY'),

    /*
     * The listName to use when no listName has been specified in a method.
     */
    'defaultListName' => 'sng-newsletter',

    /*
     * Here you can define properties of the lists.
     */
    'lists' => [

        'sng-newsletter' => [
            'id' => '0a3f7e4691',
            'marketing_permissions' => [
                'default' => 'd71f653fb6', // i.e. "Súhlasím"
            ],
        ],

        'webumenia-newsletter' => [
            'id' => '1d7d3f54f9',
            'marketing_permissions' => [
                'default' => '1e03249552', // i.e. "Súhlasím"
            ],
        ],

        'edu-newsletter' => [
            'id' => '5839efcae6',
            'marketing_permissions' => [
                'default' => '27960e0757', // i.e. "Súhlasím"
            ],
            'interests' => [
                'pre-dospelych' => 'f987384886',
                'rodinne' => 'c33c3c82fa',
                'male-divy' => '4bd0ad8c37',
                'skolske' => 'f8a2b16690',
                'meetup-sng' => 'a650dc86df',
            ]
        ],

        'schaubmarov-mlyn-newsletter' => [
            'id' => 'd2e08a6f3e',
            'marketing_permissions' => [
                'default' => '7841519794', // i.e. "Súhlasím"
            ],
        ],
    ],

    /*
     * If you're having trouble with https connections, set this to false.
     */
    'ssl' => true,

];
