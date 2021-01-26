<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/spiro_d/user/themes/spiro16/blueprints.yaml',
    'modified' => 1493835846,
    'data' => [
        'name' => 'Spiro Site 2016',
        'version' => '1.0.0',
        'description' => 'Spiro16 site Extending Antimatter',
        'icon' => 'crosshairs',
        'author' => [
            'name' => 'Jess',
            'email' => 'hispiro@spirographics.com',
            'url' => 'http://spirographics.com',
            'form' => [
                'validation' => 'loose',
                'fields' => [
                    'default_lang' => [
                        'type' => 'text',
                        'size' => 'x-small',
                        'label' => 'Default lang',
                        'default' => 'en',
                        'validate' => [
                            'type' => 'text'
                        ]
                    ]
                ]
            ],
            'dropdown.enabled' => [
                'type' => 'toggle',
                'label' => 'Dropdown in navbar',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ]
            ],
            'Color' => 'red'
        ]
    ]
];
