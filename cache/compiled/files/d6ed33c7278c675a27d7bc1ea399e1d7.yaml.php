<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/Spiro2021/user/plugins/login/languages/ru.yaml',
    'modified' => 1611596614,
    'data' => [
        'PLUGIN_LOGIN' => [
            'USERNAME' => 'Логин',
            'EMAIL' => 'Email',
            'USERNAME_EMAIL' => 'Логин/Email',
            'PASSWORD' => 'Пароль',
            'ACCESS_DENIED' => 'Доступ закрыт...',
            'LOGIN_FAILED' => 'Ошибка входа...',
            'LOGIN_SUCCESSFUL' => 'Вы успешно вошли в систему.',
            'BTN_LOGIN' => 'Войти',
            'BTN_LOGOUT' => 'Выйти',
            'BTN_FORGOT' => 'Забыл',
            'BTN_REGISTER' => 'Регистрация',
            'BTN_RESET_PASSWORD' => 'Сброс пароля',
            'BTN_RESET' => 'Reset',
            'BTN_SUBMIT' => 'Submit',
            'BTN_SUBMIT_PROFILE' => 'Submit',
            'BTN_SEND_INSTRUCTIONS' => 'Отправить инструкции по сбросу',
            'RESET_LINK_EXPIRED' => 'Время ссылки для сброса истекло, повторите попытку',
            'RESET_PASSWORD_RESET' => 'Пароль был сброшен',
            'RESET_INVALID_LINK' => 'Неверная ссылка сброса, повторите попытку',
            'FORGOT_INSTRUCTIONS_SENT_VIA_EMAIL' => 'Инструкции по сбросу пароля были отправлены по электронной почте',
            'FORGOT_FAILED_TO_EMAIL' => 'Не удалось отправить инструкции по электронной почте, повторите попытку позже',
            'FORGOT_CANNOT_RESET_EMAIL_NO_EMAIL' => 'Не удается сбросить пароль для %s, адресс электронной почты не установлен',
            'FORGOT_CANNOT_RESET_EMAIL_NO_PASSWORD' => 'Невозможно сбросить пароль для %s, этот email связан с удаленной учетной записью',
            'FORGOT_USERNAME_DOES_NOT_EXIST' => 'Пользователь с именем <b>%s</b> не существует',
            'FORGOT_EMAIL_NOT_CONFIGURED' => 'Невозможно сбросить пароль. Этот сайт не настроен для отправки писем',
            'FORGOT_EMAIL_SUBJECT' => '%s Запрос на сброс пароля',
            'FORGOT_EMAIL_BODY' => '<h1>Восстановление пароля</h1><p>Уважаемый %1$s,</p><p>Был сделан запрос для сброса пароля от <b>%4$s</b>.</p><p><br /><a href="%2$s" class="btn-primary">Нажмите, чтобы сбросить пароль</a><br /><br /></p><p>Или скопируйте следующий URL-адрес в адресную строку браузера:</p> <p class="word-break"><a href="%2$s">%2$s</a></p> <p><br />С уважением,<br /><br />%3$s</p>',
            'SESSION' => '&ldquo;Запомнить меня&rdquo;-Сессия',
            'REMEMBER_ME' => 'Запомнить меня',
            'REMEMBER_ME_HELP' => 'Устанавливает постоянный файл cookie в вашем браузере, чтобы разрешить постоянную аутентификацию входа между сеансами.',
            'REMEMBER_ME_STOLEN_COOKIE' => 'Кто-то еще использовал вашу регистрационную информацию для доступа к этой странице! Все сеансы были отключены. Войдите в свою учетную запись и проверьте свои данные.',
            'BUILTIN_CSS' => 'Использовать встроенный CSS',
            'BUILTIN_CSS_HELP' => 'Использовать CSS, предоставленный плагином администратора.',
            'ROUTE' => 'Путь страницы входа',
            'ROUTE_HELP' => 'Путь к пользовательской странице входа, которую предоставляет ваша тема',
            'ROUTE_REGISTER' => 'Путь регистрации',
            'ROUTE_REGISTER_HELP' => 'Путь к пользовательской странице регистрации. Заполните, если вы хотите использовать встроенную страницу регистрации. Оставьте его пустым, если у вас есть собственная регистрационная форма',
            'USERNAME_NOT_VALID' => 'Имя пользователя должно быть от 3 до 16 символов, включая строчные буквы, цифры, символы подчеркивания и дефисы. Прописные буквы, пробелы и специальные символы не допускаются',
            'USERNAME_NOT_AVAILABLE' => 'Имя пользователя %s уже существует, выберите другое имя пользователя',
            'EMAIL_NOT_AVAILABLE' => 'Адрес электронной почты %s уже существует, выберите другой адрес электронной почты',
            'PASSWORD_NOT_VALID' => 'Пароль должен содержать как минимум одно число, одну прописную и строчную букву, и быть не менее 8 символов',
            'PASSWORDS_DO_NOT_MATCH' => 'Пароли не совпадают. Дважды проверьте, что вы дважды ввели тот же пароль',
            'USER_NEEDS_EMAIL_FIELD' => 'Пользователю требуется поле электронной почты',
            'EMAIL_SENDING_FAILURE' => 'Произошла ошибка при отправке письма',
            'ACTIVATION_EMAIL_SUBJECT' => 'Активируйте свою учетную запись %s',
            'ACTIVATION_EMAIL_BODY' => 'Привет %s, перейдите <a href="%s">сюда</a> для активации вашей учетной записи %s',
            'ACTIVATION_NOTICE_MSG' => 'Привет %s, ваша учетная запись создана, пожалуйста проверьте электронную почту, чтобы полностью ее активировать',
            'WELCOME_EMAIL_SUBJECT' => 'Добро пожаловать в %s',
            'WELCOME_EMAIL_BODY' => 'Привет %s, добро пожаловать в %s!',
            'WELCOME_NOTICE_MSG' => 'Привет %s, ваша учетная запись была успешно создана',
            'NOTIFICATION_EMAIL_SUBJECT' => 'Новый пользователь %s',
            'NOTIFICATION_EMAIL_BODY' => 'Привет, новый пользователь, зарегистрированный на %s. Имя пользователя: %s, email: %s',
            'EMAIL_FOOTER' => 'GetGrav.org',
            'ACTIVATION_LINK_EXPIRED' => 'Время ссылки для активации истекло',
            'USER_ACTIVATED_SUCCESSFULLY' => 'Пользователь успешно активирован',
            'USER_ACTIVATED_SUCCESSFULLY_NOT_ENABLED' => 'Аккаунт пользователя активирован, но учетная запись просматривается',
            'INVALID_REQUEST' => 'Неверный запрос',
            'USER_REGISTRATION' => 'Регистрация пользователя',
            'USER_REGISTRATION_ENABLED_HELP' => 'Включить регистрацию пользователя',
            'VALIDATE_PASSWORD1_AND_PASSWORD2' => 'Двойная проверка введенного пароля',
            'VALIDATE_PASSWORD1_AND_PASSWORD2_HELP' => 'Подтвердить и сравнить два разных поля для паролей с именами `password1` и` password2`. Включите это, если у вас есть два поля пароля в регистрационной форме',
            'SET_USER_DISABLED' => 'Установить пользователя как отключенный',
            'SET_USER_DISABLED_HELP' => 'Лучше всего использовать электронную почту «Отправить электронную почту активации». Добавляет пользователя в Grav, но устанавливает его как отключенный',
            'LOGIN_AFTER_REGISTRATION' => 'Вход в систему после регистрации',
            'LOGIN_AFTER_REGISTRATION_HELP' => 'Автоматический вход в систему после регистрации. Если требуется активация электронной почты, пользователь будет входить в систему сразу после активации учетной записи',
            'SEND_ACTIVATION_EMAIL' => 'Отправить письмо активации',
            'SEND_ACTIVATION_EMAIL_HELP' => 'Отправляет электронное письмо пользователю для активации своей учетной записи. Включите параметр «Установить пользователя как отключенный» при использовании этой функции, чтобы пользователь был отключен, и для активации учетной записи будет отправлено электронное письмо',
            'SEND_NOTIFICATION_EMAIL' => 'Отправить уведомление по электронной почте',
            'SEND_NOTIFICATION_EMAIL_HELP' => 'Сообщает администратору сайта о регистрации нового пользователя. Электронная почта будет отправлена в поле «Кому» в конфигурации плагина электронной почты',
            'SEND_WELCOME_EMAIL' => 'Отправить приветственное письмо',
            'SEND_WELCOME_EMAIL_HELP' => 'Отправляет электронное письмо вновь зарегистрированному пользователю',
            'DEFAULT_VALUES' => 'Значения по умолчанию',
            'DEFAULT_VALUES_HELP' => 'Список названий полей и связанных значений, которые будут добавлены в профиль пользователя (файл yaml) по умолчанию, без настройки пользователем. Разделите несколько значений запятой, без пробелов между значениями',
            'ADDITIONAL_PARAM_KEY' => 'Параметр',
            'ADDITIONAL_PARAM_VALUE' => 'Значение',
            'REGISTRATION_FIELDS' => 'Регистрационные поля',
            'REGISTRATION_FIELDS_HELP' => 'Добавьте поля, которые будут добавлены в файл yaml пользователя. Поля, не перечисленные здесь, не будут добавлены, даже если они присутствуют в регистрационной форме',
            'REGISTRATION_FIELD_KEY' => 'Имя поля',
            'REDIRECT_AFTER_LOGIN' => 'Перенаправление после входа в систему',
            'REDIRECT_AFTER_LOGIN_HELP' => 'Пользовательский маршрут для перенаправления после входа в систему',
            'REDIRECT_AFTER_LOGOUT' => 'Перенаправление после выхода из системы',
            'REDIRECT_AFTER_LOGOUT_HELP' => 'Пользовательский маршрут для перенаправления после выхода из системы',
            'REDIRECT_AFTER_REGISTRATION' => 'Перенаправление после регистрации',
            'REDIRECT_AFTER_REGISTRATION_HELP' => 'Пользовательский маршрут для перенаправления после регистрации',
            'OPTIONS' => 'Опции',
            'EMAIL_VALIDATION_MESSAGE' => 'Адрес эл. почты должен быть действительным',
            'PASSWORD_VALIDATION_MESSAGE' => 'Пароль должен содержать как минимум одно число, одну прописную и строчную букву и быть не менее 8 символов',
            'TIMEOUT_HELP' => 'Устанавливает тайм-аут сеанса в секундах, когда функция «Запомнить меня» включена и установлена пользователем. Минимум 604800, что означает 1 неделю',
            'GROUPS_HELP' => 'Список групп, в которые войдет новый зарегистрированный пользователь',
            'SITE_ACCESS_HELP' => 'Список уровней доступа к сайту, зарегистрированных пользователей. Пример: `login` ->` true`',
            'WELCOME' => 'Добро пожаловать',
            'REDIRECT_AFTER_ACTIVATION' => 'Перенаправление после активации пользователя',
            'REDIRECT_AFTER_ACTIVATION_HELP' => 'Используется, если пользователю требуется активировать учетную запись по электронной почте. После активации этот маршрут будет показан',
            'REGISTRATION_DISABLED' => 'Регистрация отключена',
            'USE_PARENT_ACL_LABEL' => 'Использовать родительские правила доступа',
            'USE_PARENT_ACL_HELP' => 'Проверьте правила доступа к родителям, если правила не определены',
            'PROTECT_PROTECTED_PAGE_MEDIA_LABEL' => 'Защита защищенных страниц.',
            'PROTECT_PROTECTED_PAGE_MEDIA_HELP' => 'Если этот параметр включен, то доступ к защищенной странице для входа в систему также защищен паролем, и его нельзя увидеть, если он не зарегистрирован',
            'SECURITY_TAB' => 'Безопасность',
            'MAX_RESETS_COUNT' => 'Максимальное количество сброса пароля',
            'MAX_RESETS_COUNT_HELP' => 'Настройка защиты пароля от флуда (0 - не ограничено)',
            'MAX_RESETS_INTERVAL' => 'Максимальный интервал сброса пароля',
            'MAX_RESETS_INTERVAL_HELP' => 'Интервал времени для максимального количества сбросов пароля',
            'FORGOT_CANNOT_RESET_IT_IS_BLOCKED' => 'Невозможно сбросить пароль для %s, функция сброса пароля временно отключена, попробуйте позже (максимум %s минут)',
            'MAX_LOGINS_COUNT' => 'Максимальное количество входов',
            'MAX_LOGINS_COUNT_HELP' => 'Настройка защиты от флуда (0 - не ограничено)',
            'MAX_LOGINS_INTERVAL' => 'Максимальный интервал входа',
            'MAX_LOGINS_INTERVAL_HELP' => 'Временной интервал для значения счетчика входа',
            'TOO_MANY_LOGIN_ATTEMPTS' => 'Слишком много неудачных попыток входа в настроенное время (%s минут)',
            'SECONDS' => 'секунд',
            'MINUTES' => 'минут',
            'RESETS' => 'сбросов',
            'ATTEMPTS' => 'попыток',
            'ROUTES' => 'Маршруты',
            'ROUTE_FORGOT' => 'Забыли пароль',
            'ROUTE_RESET' => 'Сброса пароля',
            'ROUTE_PROFILE' => 'Профиля пользователя',
            'ROUTE_ACTIVATE' => 'Активации пользователя',
            'LOGGED_OUT' => 'Вы успешно вышли из системы...',
            'PAGE_RESTRICTED' => 'Доступ ограничен, войдите в систему...',
            'DYNAMIC_VISIBILITY' => 'Динамическая видимость страницы',
            'DYNAMIC_VISIBILITY_HELP' => 'Позволяет динамически обрабатывать видимость страницы на основе правил доступа, если для параметра login.visibility_requires_access установлено значение true на странице',
            'USER_IS_REMOTE_ONLY' => 'Этот пользователь аутентифицирован с помощью удаленного сервиса, поэтому профиль не может быть сохранен',
            '2FA_TITLE' => '2-факторная аутентификация',
            '2FA_INSTRUCTIONS' => '##### 2-факторная аутентификация
В вашем аккаунте включена **2FA**. Пожалуйста, используйте свое **2FA** приложение для ввода текущего **6-значного кода** для завершения процесса входа в систему.',
            '2FA_REGEN_HINT' => 'Чтобы восстановить секрет, вам потребуется обновить приложение для аутентификации',
            '2FA_FAILED' => 'Недопустимый код проверки подлинности 2-факторной аутентификации, повторите попытку....',
            '2FA_ENABLED' => '2FA Включена',
            '2FA_ENABLED_HELP' => 'Включает двухфакторную аутентификацию для всех пользователей',
            '2FA_CODE_INPUT' => '000000',
            '2FA_SECRET' => '2FA Секрет',
            '2FA_SECRET_HELP' => 'Сканируйте этот QR-код в свое [Приложение аутентификации](https://learn.getgrav.org/admin-panel/2fa#apps). Также рекомендуется сохранить секрет в безопасном месте, если вам прийдется переустановить приложение. Проверьте [Grav docs](https://learn.getgrav.org/admin-panel/2fa) для дополнительной информации ',
            '2FA_REGENERATE' => 'Сгенерировать повторно',
            'BTN_CANCEL' => 'Отмена',
            'MANUALLY_ENABLE' => 'Вручную включить',
            'MANUALLY_ENABLE_HELP' => 'При использовании «активации по электронной почте» и «уведомление по электронной почте» вы можете убедиться, что пользователь может самостоятельно активироваться, но пользователь требует ручного включения для входа в систему',
            'PROFILE_UPDATED' => 'Your profile has been updated',
            'ENTER_EMAIL' => 'Enter your email',
            'ENTER_NEW_PASSWORD' => 'Enter new password',
            'ENTER_PASSWORD' => 'Enter a password',
            'ENTER_PASSWORD_AGAIN' => 'Enter the password again',
            'REGISTRATION_THANK_YOU' => 'Thank you for registering.',
            'USER_ACCOUNT_DISABLED' => 'Your user account is disabled or it has not yet been activated.'
        ]
    ]
];
