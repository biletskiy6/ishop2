<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 24/10/2019
 * Time: 13:57
 */

namespace ishop\base;


use ishop\Db;

abstract class Model
{
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct()
    {
       Db::instance();
    }
}