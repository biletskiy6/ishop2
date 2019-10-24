<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23/10/2019
 * Time: 17:38
 */

namespace app\controllers;


use app\models\AppModel;
use ishop\base\Controller;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
    }
}