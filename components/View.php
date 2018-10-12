<?php
/**
 * Created by PhpStorm.
 * User: vovichua
 * Date: 10.10.18
 * Time: 11:36
 */

class View
{
    public function render($template, $param = [], $layout = 'layout')
    {
        extract($param);

        include './views' . $layout . '.php';
    }

}