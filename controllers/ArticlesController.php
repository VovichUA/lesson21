<?php
/**
 * Created by PhpStorm.
 * User: vovichua
 * Date: 12.10.18
 * Time: 10:15
 */

class ArticlesController extends Controller
{
    public $model = 'Article';

    public function actionIndex()
    {
        $this->view->render('articles/index',[
            'pageTitle' => 'articles list',
            'articles' => Article::findAll()
        ]);
    }

    public function actionView($id)
    {
        $this->view->render('articles/view',[
            'article' => Article::findOne($id)
        ]);
    }
}