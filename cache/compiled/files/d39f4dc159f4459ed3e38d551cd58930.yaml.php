<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/spiro_d/user/config/plugins/simple_contact.yaml',
    'modified' => 1493835846,
    'data' => [
        'enabled' => false,
        'subject' => 'New contact from Grav site!',
        'recipient' => 'hispiro@spirographics.com',
        'fields' => [
            'name' => [
                'label' => 'Name',
                'placeholder' => 'Add your name'
            ],
            'email' => [
                'label' => 'Email',
                'placeholder' => 'Add your email'
            ],
            'message' => [
                'label' => 'Message',
                'placeholder' => 'Add your message'
            ],
            'antispam' => [
                'label' => 'Antispam',
                'placeholder' => 'Please leave this field empty for Antispam'
            ],
            'submit' => [
                'label' => 'Submit'
            ]
        ],
        'messages' => [
            'success' => 'Thank You! Your message has been sent.',
            'error' => 'Oops! There was a problem with your submission. Please complete the form and try again.',
            'fail' => 'Oops! Something went wrong and we couldn\'t send your message.'
        ]
    ]
];
