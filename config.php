$ php bin/composer install
$ ./vendor/bin/doctrine orm:generate-proxies
$ ./vendor/bin/doctrine orm:schema-tool:create --dump-sql >> schema.sql
