<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/spiro_d/user/config/plugins/email.yaml',
    'modified' => 1566414648,
    'data' => [
        'enabled' => true,
        'from' => 'webmaster@spirographics.com',
        'from_name' => 'Spiro Graphics, Inc',
        'to' => 'webmaster@spirographics.com',
        'to_name' => 'webmaster@spirographics.com',
        'queue' => [
            'enabled' => false,
            'flush_frequency' => '* * * * *',
            'flush_msg_limit' => 10,
            'flush_time_limit' => 100
        ],
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false,
        'body' => 'Email from Spiro'
    ]
];
