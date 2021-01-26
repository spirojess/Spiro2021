<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/Spiro2021/user/plugins/sitemap/languages.yaml',
<<<<<<< refs/remotes/origin/master
    'modified' => 1611596616,
=======
    'modified' => 1611691848,
>>>>>>> End of day Tuesday
    'data' => [
        'en' => [
            'PLUGIN_SITEMAP' => [
                'SITEMAP' => 'Sitemap',
                'HEADER_IGNORE' => 'Sitemap ignore page',
                'HEADER_CHANGEFREQ' => 'Sitemap change frequency',
                'HEADER_PRIORITY' => 'Sitemap priority',
                'CHANGEFREQ' => 'Global - sitemap change frequency',
                'CHANGEFREQ_DEFAULT' => 'Use Global (daily)',
                'CHANGEFREQ_ALWAYS' => 'Always',
                'CHANGEFREQ_HOURLY' => 'Hourly',
                'CHANGEFREQ_DAILY' => 'Daily',
                'CHANGEFREQ_WEEKLY' => 'Weekly',
                'CHANGEFREQ_MONTHLY' => 'Monthly',
                'CHANGEFREQ_YEARLY' => 'Yearly',
                'CHANGEFREQ_NEVER' => 'Never',
                'PRIORITY' => 'Global - sitemap priority',
                'PRIORITY_USE_GLOBAL' => 'Use Global (1)',
                'ROUTE' => 'Route to sitemap',
                'IGNORES' => 'Ignore',
                'IGNORES_HELP' => 'URLs to ignore (You can ignore all children of a path by using regex and appending ".*" to the ignore path)',
                'ADDITIONS' => 'Additional URLs',
                'ADDITIONS_HELP' => 'Add external URLs to the sitemap',
                'LOCATION' => 'The URL location',
                'LASTMOD' => 'Last modification e.g. 2017-04-06',
                'IGNORE_EXTERNAL' => 'Ignore External URLs',
                'IGNORE_EXTERNAL_HELP' => 'By default Sitemap hides pages that have an `external` URL',
                'IGNORE_PROTECTED' => 'Ignore Protected Pages',
                'IGNORE_PROTECTED_HELP' => 'Ignore pages that custom "access" set to protect them via a login'
            ]
        ],
        'ru' => [
            'PLUGIN_SITEMAP' => [
                'SITEMAP' => 'Карта сайта',
                'HEADER_CHANGEFREQ' => 'Частота обновления карты сайта',
                'HEADER_PRIORITY' => 'Приоритет карты сайта',
                'CHANGEFREQ' => 'Глобальное - частота обновления карты сайта',
                'CHANGEFREQ_DEFAULT' => 'Использовать глобальное (ежедневно)',
                'CHANGEFREQ_ALWAYS' => 'Всегда',
                'CHANGEFREQ_HOURLY' => 'Ежечасно',
                'CHANGEFREQ_DAILY' => 'Ежедневно',
                'CHANGEFREQ_WEEKLY' => 'Еженедельно',
                'CHANGEFREQ_MONTHLY' => 'Ежемесячно',
                'CHANGEFREQ_YEARLY' => 'Ежегодно',
                'CHANGEFREQ_NEVER' => 'Никогда',
                'PRIORITY' => 'Глобальное - приоритет карты сайта',
                'PRIORITY_USE_GLOBAL' => 'Использовать глобальное (1)',
                'ROUTE' => 'Маршрут к карте сайта',
                'IGNORES' => 'Игнорировать',
                'IGNORES_HELP' => 'URL-адреса для игнорирования (Вы можете игнорировать всех дочерних элементов пути, используя регекс и добавляя ".*" к игнорируемому пути).',
                'ADDITIONS' => 'Дополнительные URL',
                'ADDITIONS_HELP' => 'Добавить внешние URL в карту сайта',
                'LOCATION' => 'Расположение URL',
                'LASTMOD' => 'Последнее изменение, например 2017-04-06'
            ]
        ],
        'uk' => [
            'PLUGIN_SITEMAP' => [
                'SITEMAP' => 'Карта сайту',
                'HEADER_CHANGEFREQ' => 'Частота оновлення карти сайту',
                'HEADER_PRIORITY' => 'Пріоритет карти сайту',
                'CHANGEFREQ' => 'Глобальне - частота оновлення карти сайту',
                'CHANGEFREQ_DEFAULT' => 'Використовувати глобальне (щодня)',
                'CHANGEFREQ_ALWAYS' => 'Завжди',
                'CHANGEFREQ_HOURLY' => 'Погодинно',
                'CHANGEFREQ_DAILY' => 'Щодня',
                'CHANGEFREQ_WEEKLY' => 'Щотижня',
                'CHANGEFREQ_MONTHLY' => 'Щомісячно',
                'CHANGEFREQ_YEARLY' => 'Щорічно',
                'CHANGEFREQ_NEVER' => 'Ніколи',
                'PRIORITY' => 'Глобальне - пріоритет карта сайту',
                'PRIORITY_USE_GLOBAL' => 'Використовувати глобальний (1)',
                'ROUTE' => 'Маршрут до карти сайту',
                'IGNORES' => 'Ігнорувати',
                'IGNORES_HELP' => 'URL-адреси для ігнорування',
                'ADDITIONS' => 'Додаткові URL-адреси',
                'ADDITIONS_HELP' => 'Додати зовнішні URL-адреси до карти сайту',
                'LOCATION' => 'Розташування URL-адреси',
                'LASTMOD' => 'Остання модифікація, напр. 2017-04-06'
            ]
        ],
        'de' => [
            'PLUGIN_SITEMAP' => [
                'SITEMAP' => 'Sitemap',
                'HEADER_CHANGEFREQ' => 'Sitemap Änderungsfrequenz',
                'HEADER_PRIORITY' => 'Sitemap Priorität',
                'CHANGEFREQ' => 'Global - Sitemap Änderungsfrequenz',
                'CHANGEFREQ_DEFAULT' => 'Benutze Global (Täglich)',
                'CHANGEFREQ_ALWAYS' => 'Immer',
                'CHANGEFREQ_HOURLY' => 'Stündlich',
                'CHANGEFREQ_DAILY' => 'Täglich',
                'CHANGEFREQ_WEEKLY' => 'Wöchentlich',
                'CHANGEFREQ_MONTHLY' => 'Monatlich',
                'CHANGEFREQ_YEARLY' => 'Jährlich',
                'CHANGEFREQ_NEVER' => 'Nie',
                'PRIORITY' => 'Global - Sitemap Priorität',
                'PRIORITY_USE_GLOBAL' => 'Benutze Global (1)',
                'ROUTE' => 'Pfad zur Sitemap',
                'IGNORES' => 'Ignorieren',
                'IGNORES_HELP' => 'Zu ignorierende URLs (Um alle Unterseiten einer URL zu ignorieren, können Sie Regex nutzen und ".*" an die zu ignorierende URL anhängen)',
                'ADDITIONS' => 'Zusätzliche URLs',
                'ADDITIONS_HELP' => 'Füge externe URLs zur Sitemap hinzu',
                'LOCATION' => 'Seiten Pfad',
                'LASTMOD' => 'Letzte Änderung e.g. 2017-04-06'
            ]
        ],
        'zh' => [
            'PLUGIN_SITEMAP' => [
                'SITEMAP' => '网站地图',
                'HEADER_CHANGEFREQ' => '网站地图变更频率',
                'HEADER_PRIORITY' => '网站地图优先级',
                'CHANGEFREQ' => '全局 - 网站地图变更频率',
                'CHANGEFREQ_DEFAULT' => '使用全局 (每日)',
                'CHANGEFREQ_ALWAYS' => '总是',
                'CHANGEFREQ_HOURLY' => '每小时',
                'CHANGEFREQ_DAILY' => '每天',
                'CHANGEFREQ_WEEKLY' => '每周',
                'CHANGEFREQ_MONTHLY' => '每月',
                'CHANGEFREQ_YEARLY' => '每年',
                'CHANGEFREQ_NEVER' => '永不',
                'PRIORITY' => '全局 - 网站地图优先级',
                'PRIORITY_USE_GLOBAL' => '使用全局 (1)',
                'ROUTE' => '网站地图路径',
                'IGNORES' => '忽略',
                'IGNORES_HELP' => '忽略的 URL (你可以通过使用regex并在忽略路径后添加".*"来忽略一个路径的所有子节点)',
                'ADDITIONS' => '附加 URL',
                'ADDITIONS_HELP' => '添加外部 URL 到网站地图',
                'LOCATION' => 'URL 地址',
                'LASTMOD' => '上次修改 例如 2017-04-06'
            ]
        ]
    ]
];
