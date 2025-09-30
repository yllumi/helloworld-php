<?php
namespace Deployer;

require 'recipe/common.php';

// Config

set('repository', 'git@github.com:yllumi/helloworld-php.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

// Host (ambil dari env GitHub Actions)
host('prod')
    ->setHostname(getenv('SSH_HOST') ?: '159.65.8.203')
    ->setRemoteUser(getenv('SSH_USER') ?: 'deployer')
    ->setPort((int)(getenv('SSH_PORT') ?: 22))
    ->set('branch', getenv('BRANCH') ?: 'main')
    ->set('deploy_path', getenv('DEPLOY_PATH') ?: '/var/www/helloworld');

// Hooks

after('deploy:failed', 'deploy:unlock');
