<?php
namespace Deployer;

require 'recipe/common.php';

// Config

set('repository', 'https://github.com/jonnygoespro/webops.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('167.235.71.112')
    ->set('remote_user', 'admin')
    ->set('deploy_path', '/var/www/webops');

// Hooks

// Tasks
desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    'deploy:publish'
]);


after('deploy:failed', 'deploy:unlock');
