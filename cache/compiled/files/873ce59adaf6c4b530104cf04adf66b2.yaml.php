<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/Spiro2021/user/plugins/logerrors/blueprints.yaml',
    'modified' => 1493835846,
    'data' => [
        'name' => 'Log Errors',
        'version' => '1.0.1',
        'description' => 'Records 404 errors in data folder',
        'icon' => 'edit',
        'author' => [
            'name' => 'Hugo Avila',
            'email' => 'hugoavila@sitoi.com',
            'url' => 'http://sitioi.com'
        ],
        'keywords' => 'plugin, log, errors, 404, not found, data',
        'homepage' => 'https://github.com/hugoaf/grav-plugin-logerrors',
        'bugs' => 'https://github.com/hugoaf/grav-plugin-logerrors/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'filename' => [
                    'type' => 'text',
                    'label' => 'File name',
                    'default' => 'notfound.txt',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'folder' => [
                    'type' => 'text',
                    'label' => 'Folder',
                    'default' => 'logerrors',
                    'validate' => [
                        'type' => 'text'
                    ]
                ]
            ]
        ]
    ]
];
