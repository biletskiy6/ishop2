<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 24/10/2019
 * Time: 14:03
 */

namespace ishop;


class Db
{
    use TSingletone;

    protected function __construct()
    {
        $db = require_once CONF . '/db_params.php';
        class_alias('\RedBeanPHP\R', '\R');
        \R::setup($db['dsn'], $db['username'], $db['password']);
        if (!\R::testConnection()) {
            throw new \Exception('No connection with db', 500);
        }
        \R::freeze(true);
        if(DEBUG) {
//            \R::debug(true);
        }
    }
}