<?php
/**
 * Created by PhpStorm.
 * User: sinclair
 * Date: 11/4/2016
 * Time: 5:23 PM
 */
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Register;


class RegisterController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }


    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionForm()
    {
        $model = new Register();

        if ($model->load(Yii::$app->request->post())) {
            return $this->render('register', ['register_info' => $model]);
        }
        return $this->render('form', [
            'model' => $model,
        ]);
    }

    // -----custom codes starts here
    public function actionRegister(){
        return $this -> render('register');
    }








}