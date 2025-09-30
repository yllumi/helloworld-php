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
host('main')
    ->setHostname('159.65.8.203')
    ->setRemoteUser('deployer')
    ->setPort(22)
    ->set('branch', 'main')
    ->set('deploy_path', '/var/www/helloworld')
    ->set('stage', 'main');

// Tentukan host untuk development
host('dev')
    ->setHostname('159.65.8.203')
    ->setRemoteUser('deployer')
    ->setPort(22)
    ->set('branch', 'dev')
    ->set('deploy_path', '/var/www/helloworld-dev')
    ->set('stage', 'dev');

// Hooks

after('deploy:failed', 'deploy:unlock');
