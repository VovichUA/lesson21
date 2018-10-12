<?php
/**
 * Created by PhpStorm.
 * User: vovichua
 * Date: 12.10.18
 * Time: 10:22
 */

class SiteController extends Controller
{
    public function actionIndex()
    {
        $this->view->render('site/index');
    }

    public function actionContacts()
    {
        echo "Contact page";
    }
}