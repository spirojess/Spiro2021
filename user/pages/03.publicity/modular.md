---
title: 'Product Development & Promotion'
content:
    items: '@self.modular'
    order:
        by: default
        dir: asc
        custom:
            - _product
            - _promotion
body_classes: 'modular header-image fullwidth'
menu: Publicity
visible: false
recaptchacontact:
    enabled: false
onpage_menu: true
form:
    action: /thankyou
    name: Contact
    fields:
        -
            name: name
            id: name
            label: Name
            classes: 'form-control form-control-lg'
            placeholder: 'Enter your name'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            id: email
            classes: 'form-control form-control-lg'
            label: Email
            placeholder: 'Enter your email address'
            type: text
            validate:
                rule: email
                required: true
        -
            name: message
            label: Message
            classes: 'form-control form-control-lg'
            size: long
            placeholder: 'Enter your message'
            type: textarea
            validate:
                required: true
        -
            name: g-recaptcha-response
            label: Captcha
            type: captcha
            recatpcha_site_key: 6Lc9BhYTAAAAAHRIL5SnaR5hSJZCk3jb_sclwORq
            recaptcha_not_validated: 'Captcha not valid!'
            validate:
                required: false
    buttons:
        -
            type: submit
            value: Submit
            class: 'btn btn-primary btn-block'
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to:
                    - '{{ config.plugins.email.from }}'
                    - '{{ form.value.email }}'
                subject: '[Feedback] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            captcha:
                recatpcha_secret: 6Lc9BhYTAAAAADgeoIzYwjEnn47dJwxO0Qf6BTuP
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Thank you for your feedback!'
        -
            display: thankyou
---

#Product Development and Promotion