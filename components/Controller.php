<?php
/**
 * Created by PhpStorm.
 * User: vovichua
 * Date: 10.10.18
 * Time: 11:35
 */

abstract class Controller
{
    public $model;
    public $view;

    public function __construct()
    {
        $this->view = new View;

        if (!empty($this->model)) {
            require_once './models' . $this->model . '.php';
        }
    }

    abstract public function actionIndex();

}