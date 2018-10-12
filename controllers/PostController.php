<?php
/**
 * Created by PhpStorm.
 * User: vovichua
 * Date: 10.10.18
 * Time: 14:46
 */

class PostController extends Controller
{
    public $model = 'Post';


    public function actionIndex()
    {
        $this->view->render('posts/index',[
            'pageTitle' => 'Posts List',
            'posts' => Post::findAll()
        ]);
    }

    public function actionView($id)
    {
        $this->view->render('posts/view',[
            'posts' => Post::findOne($id)
        ]);
    }

}