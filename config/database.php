<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */
    'default' => env('DB_CONNECTION', 'mysql'),
    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */
    'connections' => [
        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],
'mysqltest1292' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_test1292', 'test1292_db'),
             'username' => env('DB_USERNAME_test1292', 'root'),
             'password' => env('DB_PASSWORD_test1292', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlqweqwe' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_qweqwe', 'qweqwe_db'),
             'username' => env('DB_USERNAME_qweqwe', 'root'),
             'password' => env('DB_PASSWORD_qweqwe', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlqweqwe' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_qweqwe', 'qweqwe_db'),
             'username' => env('DB_USERNAME_qweqwe', 'root'),
             'password' => env('DB_PASSWORD_qweqwe', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlcolorgroupesasasssss' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_colorgroupesasasssss', 'colorgroupesasasssss_db'),
             'username' => env('DB_USERNAME_colorgroupesasasssss', 'root'),
             'password' => env('DB_PASSWORD_colorgroupesasasssss', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlcolorgroupesasasss' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_colorgroupesasasss', 'colorgroupesasasss_db'),
             'username' => env('DB_USERNAME_colorgroupesasasss', 'root'),
             'password' => env('DB_PASSWORD_colorgroupesasasss', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlcolorgroupesasas' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_colorgroupesasas', 'colorgroupesasas_db'),
             'username' => env('DB_USERNAME_colorgroupesasas', 'root'),
             'password' => env('DB_PASSWORD_colorgroupesasas', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlerew' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_erew', 'erew_db'),
             'username' => env('DB_USERNAME_erew', 'root'),
             'password' => env('DB_PASSWORD_erew', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlerew' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_erew', 'erew_db'),
             'username' => env('DB_USERNAME_erew', 'root'),
             'password' => env('DB_PASSWORD_erew', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlcolorgroupesasa' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_colorgroupesasa', 'colorgroupesasa_db'),
             'username' => env('DB_USERNAME_colorgroupesasa', 'root'),
             'password' => env('DB_PASSWORD_colorgroupesasa', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlcolorgroupesasa' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_colorgroupesasa', 'colorgroupesasa_db'),
             'username' => env('DB_USERNAME_colorgroupesasa', 'root'),
             'password' => env('DB_PASSWORD_colorgroupesasa', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlcolorgroupesasa' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_colorgroupesasa', 'colorgroupesasa_db'),
             'username' => env('DB_USERNAME_colorgroupesasa', 'root'),
             'password' => env('DB_PASSWORD_colorgroupesasa', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlcolorgroupesasa' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_colorgroupesasa', 'colorgroupesasa_db'),
             'username' => env('DB_USERNAME_colorgroupesasa', 'root'),
             'password' => env('DB_PASSWORD_colorgroupesasa', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlcolorgroupesasa' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_colorgroupesasa', 'colorgroupesasa_db'),
             'username' => env('DB_USERNAME_colorgroupesasa', 'root'),
             'password' => env('DB_PASSWORD_colorgroupesasa', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlcolorgroupesasa' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_colorgroupesasa', 'colorgroupesasa_db'),
             'username' => env('DB_USERNAME_colorgroupesasa', 'root'),
             'password' => env('DB_PASSWORD_colorgroupesasa', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlsiyaleadertest' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_siyaleadertest', 'siyaleadertest_db'),
             'username' => env('DB_USERNAME_siyaleadertest', 'root'),
             'password' => env('DB_PASSWORD_siyaleadertest', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqladsada' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_adsada', 'adsada_db'),
             'username' => env('DB_USERNAME_adsada', 'root'),
             'password' => env('DB_PASSWORD_adsada', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlcolorgroupe2012' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_colorgroupe2012', 'colorgroupe2012_db'),
             'username' => env('DB_USERNAME_colorgroupe2012', 'root'),
             'password' => env('DB_PASSWORD_colorgroupe2012', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlcolorgroupe' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_colorgroupe', 'colorgroupe_db'),
             'username' => env('DB_USERNAME_colorgroupe', 'root'),
             'password' => env('DB_PASSWORD_colorgroupe', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlseandb2018' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_seandb2018', 'seandb2018_db'),
             'username' => env('DB_USERNAME_seandb2018', 'root'),
             'password' => env('DB_PASSWORD_seandb2018', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlseandb' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_seandb', 'seandb_db'),
             'username' => env('DB_USERNAME_seandb', 'root'),
             'password' => env('DB_PASSWORD_seandb', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlZipoKoto2018' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_ZipoKoto2018', 'zipokoto2018_db'),
             'username' => env('DB_USERNAME_ZipoKoto2018', 'root'),
             'password' => env('DB_PASSWORD_ZipoKoto2018', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
'mysqlZipoKoto' => [
             'driver' => 'mysql',
             'host' => env('DB_HOST', '127.0.0.1'),
             'port' => env('DB_PORT', '3306'),
             'database' => env('DB_DATABASE_ZipoKoto', '_ZipoKoto'),
             'username' => env('DB_USERNAME_ZipoKoto', 'root'),
             'password' => env('DB_PASSWORD_ZipoKoto', 'Null'),
             'unix_socket' => env('DB_SOCKET', ''),
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => true,
             'engine' => null,
         ],
        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],
        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */
    'migrations' => 'migrations',
    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */
    'redis' => [
        'client' => 'predis',
        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],
    ],
         
];