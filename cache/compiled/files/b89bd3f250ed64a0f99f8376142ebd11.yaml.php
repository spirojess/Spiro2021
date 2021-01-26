<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/spiro_d/user/config/site.yaml',
    'modified' => 1493835846,
    'data' => [
        'title' => 'Spiro Graphics, Inc.',
        'author' => [
            'name' => 'Admin',
            'email' => 'webmaster@spirographics.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'A full-service graphic design studio for print and websites.   We design printed products and develop websites that support your business.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => [
            '/redirect-test' => '/',
            '/old/(.*)' => '/new/$1'
        ],
        'routes' => [
            '/something/else' => '/blog/sample-3',
            '/new/(.*)' => '/blog/$1'
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
