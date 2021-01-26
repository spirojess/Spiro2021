<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/Applications/MAMP/htdocs/spiro_d/user/pages/01.home/modular.md',
    'modified' => 1611610614,
    'data' => [
        'header' => [
            'title' => 'Graphic Design & Web Development',
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc',
                    'custom' => [
                        0 => '_slider',
                        1 => '_services',
                        2 => '_portfolio',
                        3 => '_features'
                    ]
                ]
            ],
            'body_classes' => 'modular header-image fullwidth',
            'menu' => 'Home',
            'recaptchacontact' => [
                'enabled' => true,
                'recipient' => 'info@spirographics.com',
                'subject' => 'Contact from Website'
            ],
            'onpage_menu' => true,
            'form' => [
                'action' => '/thankyou',
                'name' => 'Contact',
                'fields' => [
                    0 => [
                        'name' => 'name',
                        'id' => 'name',
                        'label' => 'Name',
                        'classes' => 'form-control form-control-lg',
                        'placeholder' => 'Enter your name',
                        'autocomplete' => 'on',
                        'type' => 'text',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    1 => [
                        'name' => 'email',
                        'id' => 'email',
                        'classes' => 'form-control form-control-lg',
                        'label' => 'Email',
                        'placeholder' => 'Enter your email address',
                        'type' => 'text',
                        'validate' => [
                            'rule' => 'email',
                            'required' => true
                        ]
                    ],
                    2 => [
                        'name' => 'message',
                        'label' => 'Message',
                        'classes' => 'form-control form-control-lg',
                        'size' => 'long',
                        'placeholder' => 'Enter your message',
                        'type' => 'textarea',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    3 => [
                        'name' => 'g-recaptcha-response',
                        'label' => 'Captcha',
                        'type' => 'captcha',
                        'recatpcha_site_key' => '6Lc9BhYTAAAAAHRIL5SnaR5hSJZCk3jb_sclwORq',
                        'recaptcha_not_validated' => 'Captcha not valid!',
                        'validate' => [
                            'required' => false
                        ]
                    ]
                ],
                'buttons' => [
                    0 => [
                        'type' => 'submit',
                        'value' => 'Submit',
                        'class' => 'btn btn-primary btn-block'
                    ]
                ],
                'process' => [
                    0 => [
                        'email' => [
                            'from' => '{{ config.plugins.email.from }}',
                            'to' => [
                                0 => '{{ config.plugins.email.from }}',
                                1 => '{{ form.value.email }}'
                            ],
                            'subject' => '[Feedback] {{ form.value.name|e }}',
                            'body' => '{% include \'forms/data.html.twig\' %}'
                        ]
                    ],
                    1 => [
                        'captcha' => [
                            'recatpcha_secret' => '6Lc9BhYTAAAAADgeoIzYwjEnn47dJwxO0Qf6BTuP'
                        ]
                    ],
                    2 => [
                        'save' => [
                            'fileprefix' => 'feedback-',
                            'dateformat' => 'Ymd-His-u',
                            'extension' => 'txt',
                            'body' => '{% include \'forms/data.txt.twig\' %}'
                        ]
                    ],
                    3 => [
                        'message' => 'Thank you for your feedback!'
                    ],
                    4 => [
                        'display' => 'thankyou'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: \'Graphic Design & Web Development\'
content:
    items: \'@self.modular\'
    order:
        by: default
        dir: asc
        custom:
            - _slider
            - _services
            - _portfolio
            - _features
body_classes: \'modular header-image fullwidth\'
menu: Home
recaptchacontact:
    enabled: true
    recipient: info@spirographics.com
    subject: \'Contact from Website\'
onpage_menu: true
form:
    action: /thankyou
    name: Contact
    fields:
        -
            name: name
            id: name
            label: Name
            classes: \'form-control form-control-lg\'
            placeholder: \'Enter your name\'
            autocomplete: \'on\'
            type: text
            validate:
                required: true
        -
            name: email
            id: email
            classes: \'form-control form-control-lg\'
            label: Email
            placeholder: \'Enter your email address\'
            type: text
            validate:
                rule: email
                required: true
        -
            name: message
            label: Message
            classes: \'form-control form-control-lg\'
            size: long
            placeholder: \'Enter your message\'
            type: textarea
            validate:
                required: true
        -
            name: g-recaptcha-response
            label: Captcha
            type: captcha
            recatpcha_site_key: 6Lc9BhYTAAAAAHRIL5SnaR5hSJZCk3jb_sclwORq
            recaptcha_not_validated: \'Captcha not valid!\'
            validate:
                required: false
    buttons:
        -
            type: submit
            value: Submit
            class: \'btn btn-primary btn-block\'
    process:
        -
            email:
                from: \'{{ config.plugins.email.from }}\'
                to:
                    - \'{{ config.plugins.email.from }}\'
                    - \'{{ form.value.email }}\'
                subject: \'[Feedback] {{ form.value.name|e }}\'
                body: \'{% include \'\'forms/data.html.twig\'\' %}\'
        -
            captcha:
                recatpcha_secret: 6Lc9BhYTAAAAADgeoIzYwjEnn47dJwxO0Qf6BTuP
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: \'{% include \'\'forms/data.txt.twig\'\' %}\'
        -
            message: \'Thank you for your feedback!\'
        -
            display: thankyou',
        'markdown' => ''
    ]
];
