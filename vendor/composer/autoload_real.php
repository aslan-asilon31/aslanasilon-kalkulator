<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit71f840c8acc8214a1828b4988c6c5e6a
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit71f840c8acc8214a1828b4988c6c5e6a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit71f840c8acc8214a1828b4988c6c5e6a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit71f840c8acc8214a1828b4988c6c5e6a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
