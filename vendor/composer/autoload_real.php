<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbaa1f0cb8616655c263dd1a7015eda68
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

        spl_autoload_register(array('ComposerAutoloaderInitbaa1f0cb8616655c263dd1a7015eda68', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbaa1f0cb8616655c263dd1a7015eda68', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbaa1f0cb8616655c263dd1a7015eda68::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
