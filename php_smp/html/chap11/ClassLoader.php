<?php

class ClassLoader
{
    private $namespaces = array();

    public function __construct($namespaces = array())
    {
        $this->namespaces = $namespaces;
    }

    public function registerNamespace($namespace, $dir)
    {
        $this->namespaces[$namespace] = $dir;
    }

    public function register()
    {
        spl_autoload_register(array($this, 'loadClass'));
    }

    public function loadClass($class)
    {
        $class = ltrim($class, '\\');

        if (false !== ($pos = strrpos($class, '\\'))) {
            $namespace = substr($class, 0, $pos);
            $class = substr($class, $pos + 1);

            foreach ($this->namespaces as $ns => $dir) {
                if (0 === strrpos($namespace, $ns)) {
                    $path = $dir . DIRECTORY_SEPARATOR
                        . str_replace('\\', DIRECTORY_SEPARATOR, $namespace)
                        . DIRECTORY_SEPARATOR
                        . str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php';

                    if (is_file($path))
                }
            }
        }
    }
}
