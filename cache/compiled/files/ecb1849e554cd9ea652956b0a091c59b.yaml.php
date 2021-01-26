<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/spiro_d/user/config/plugins/backup-manager.yaml',
    'modified' => 1532112072,
    'data' => [
        'enabled' => true,
        'backup' => [
            'testmode' => [
                'enabled' => false,
                'compressionratio' => 1.2
            ],
            'phptimeout' => 600,
            'storage' => [
                'maxspace' => 10,
                'keepdays' => 10,
                'showbackups' => 50
            ],
            'log' => true,
            'ignore' => [
                'foldercase' => true,
                'toplevelintersect' => true,
                'folders' => [
                    0 => 'testing',
                    1 => 'old_portfolio',
                    2 => 'dev',
                    3 => 'guyspiro'
                ],
                'foldersintersect' => false,
                'forceaddasempty' => false,
                'toplevelfolders' => [
                    0 => 'testing',
                    1 => 'old-portfolio',
                    2 => 'spirographics.com',
                    3 => 'uploads_fromsite'
                ]
            ]
        ]
    ]
];
