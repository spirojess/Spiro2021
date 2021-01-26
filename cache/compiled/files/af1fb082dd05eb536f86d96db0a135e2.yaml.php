<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/Spiro2021/user/plugins/data-manager/blueprints.yaml',
    'modified' => 1566327050,
    'data' => [
        'name' => 'Data Manager',
        'version' => '1.2.0',
        'description' => 'Adds an administration panel to visualize the data',
        'icon' => 'database',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-data-manager',
        'keywords' => 'admin, plugin, manager, panel, data, manager',
        'bugs' => 'https://github.com/getgrav/grav-plugin-data-manager/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'admin',
                'version' => '>=1.7.4'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
