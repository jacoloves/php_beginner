<?php

class MiniBlogApplication extends Application
{
    protected $login_action = array('account', 'signin');

    public function getRootDir()
    {
        // TODO: Implement getRootDir() method.
        return dirname(__FILE__);
    }

    protected function registerRoutes()
    {
        // TODO: Implement registerRoutes() method.
        return array(
            '/account'
                => array('controller' => 'account', 'action' => 'index'),
            '/account/:action'
                => array('controller' => 'account'),
        );
    }

    protected function configure()
    {
        $this->db_manager->connect('master', array(
            'dsn'      => 'mysql:dbname=mini_blog;host=mysql',
            'user'     => 'root',
            'password' => 'root',
        ));
    }
}