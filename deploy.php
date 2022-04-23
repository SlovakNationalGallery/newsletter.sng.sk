<?php
namespace Deployer;

require 'recipe/laravel.php';
require 'contrib/npm.php';

// Config

set('bin/php', 'php7.4');
set('bin/composer', 'php7.4 $(which composer)');

set('application', 'newsletter');

set('repository', 'git@github.com:SlovakNationalGallery/newsletter.sng.sk.git');

add('shared_files', []);
add('shared_dirs', ['storage', 'resources/fonts']);
add('writable_dirs', []);

// Hosts

host('lab_sng@webumenia.sk')
    ->set('deploy_path', '/var/www/newsletter.sng.sk')
    ->set('user', 'lab_sng');

// Tasks

task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'artisan:storage:link',
    'artisan:config:cache',
    'artisan:view:cache',
    'deploy:publish',
]);

after('deploy:failed', 'deploy:unlock');

task('build', function () {
    cd('{{release_path}}');
    run('npm run prod');
});

after('deploy:update_code', 'npm:install');
after('deploy:shared', 'build');

