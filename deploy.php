<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'Code Belgium');

// Project repository
set('repository', 'git@bitbucket.org:thevinaybansal/codebelgium.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);

//Set master branch
set('branch', 'master');

// Hosts

host('codebelgium.com')
    ->user('deployer')
    ->identityFile('~/.ssh/deployerkey')
    ->set('writable_use_sudo', false)
    ->set('deploy_path', '/var/www/smartsites/codebelgium.com');    
    
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// Stop Optimize Command (Route Closure)
task('artisan:optimize', function () {});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

