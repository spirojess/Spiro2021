<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/Spiro2021/user/config/backups.yaml',
    'modified' => 1579705492,
    'data' => [
        'purge' => [
            'trigger' => 'space',
            'max_backups_count' => 12,
            'max_backups_space' => 5,
            'max_backups_time' => 365
        ],
        'profiles' => [
            0 => [
                'name' => 'Default Site Backup',
                'root' => '/',
                'exclude_paths' => '/backup
/cache
/images
/logs
/tmp',
                'exclude_files' => '.DS_Store
.git
.svn
.hg
.idea
.vscode
node_modules
/dev
/testing
/lightbox
/old_portfolio
/pydio',
                'schedule' => true,
                'schedule_at' => '0 3 28 * *'
            ]
        ]
    ]
];
