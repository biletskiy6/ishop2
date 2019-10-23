<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23/10/2019
 * Time: 17:16
 */

namespace app\controllers;

use ishop\App;

class MainController extends AppController
{

    public function actionIndex()
    {
        $this->setMeta(App::$app->getProperty('shop_name'));
        $this->set(['name' => 'Andrey']);
    }
}