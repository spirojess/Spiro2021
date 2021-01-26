<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/Spiro2021/system/config/backups.yaml',
<<<<<<< refs/remotes/origin/master
    'modified' => 1611596376,
=======
    'modified' => 1611676792,
>>>>>>> End of day Tuesday
    'data' => [
        'purge' => [
            'trigger' => 'space',
            'max_backups_count' => 25,
            'max_backups_space' => 5,
            'max_backups_time' => 365
        ],
        'profiles' => [
            0 => [
                'name' => 'Default Site Backup',
                'root' => '/',
                'schedule' => false,
                'schedule_at' => '0 3 * * *',
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
node_modules'
            ]
        ]
    ]
];
