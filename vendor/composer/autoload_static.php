<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit440f3ed4841de68fd162e857f252896f
{
    public static $files = array (
        '5ec26a44593cffc3089bdca7ce7a56c3' => __DIR__ . '/../..' . '/core/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\DashboardController' => __DIR__ . '/../..' . '/app/Controllers/DashboardController.php',
<<<<<<< HEAD
=======
        'App\\Controllers\\ExampleController' => __DIR__ . '/../..' . '/app/Controllers/ExampleController copy.php',
>>>>>>> Back-plus-front
        'App\\Controllers\\LandingPageController' => __DIR__ . '/../..' . '/app/Controllers/LandingPageController.php',
        'App\\Controllers\\ListPostController' => __DIR__ . '/../..' . '/app/Controllers/ListPostController.php',
        'App\\Controllers\\LoginController' => __DIR__ . '/../..' . '/app/Controllers/LoginController.php',
        'App\\Controllers\\PostController' => __DIR__ . '/../..' . '/app/Controllers/PostController.php',
<<<<<<< HEAD
        'App\\Controllers\\SinglePostController' => __DIR__ . '/../..' . '/app/Controllers/SinglePostController copy.php',
=======
        'App\\Controllers\\SinglePostController' => __DIR__ . '/../..' . '/app/Controllers/SinglePostController.php',
>>>>>>> Back-plus-front
        'App\\Controllers\\UserController' => __DIR__ . '/../..' . '/app/Controllers/UserController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'App\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'ComposerAutoloaderInit440f3ed4841de68fd162e857f252896f' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit440f3ed4841de68fd162e857f252896f' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PHPMailer\\PHPMailer\\DSNConfigurator' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/DSNConfigurator.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\OAuthTokenProvider' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuthTokenProvider.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit440f3ed4841de68fd162e857f252896f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit440f3ed4841de68fd162e857f252896f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit440f3ed4841de68fd162e857f252896f::$classMap;

        }, null, ClassLoader::class);
    }
}
