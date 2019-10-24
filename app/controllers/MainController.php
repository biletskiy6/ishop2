<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23/10/2019
 * Time: 17:16
 */

namespace app\controllers;

use ishop\App;
use ishop\Cache;

class MainController extends AppController
{

    public function actionIndex()
    {
        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id = ?', [2]);

        $cache = Cache::instance();
//        $cache->set('posts', $posts);
        $cache->delete('posts');
        $this->setMeta(App::$app->getProperty('shop_name'));
        $this->set(compact('posts'));
    }
}