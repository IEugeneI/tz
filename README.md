Для запуска проекта:
1)git clone https://github.com/IEugeneI/tz.git в рабочей директории
2) composer update
3) Вставляем .htaccess файл (в зависимости от системы которой вы пользуетесь)
4)Даем доступ к папке /storage
5)Настраиваем .env файл( ОБЯЗАТЕЛЬНО: поменять свойство APP_URL в файле на ваш url!!!)
6)php artisan migrate
7)php artisan db:seed
8)Вся документация по апи {{base_url}}/docs

