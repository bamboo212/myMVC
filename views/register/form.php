<?php
/**
 * Created by PhpStorm.
 * User: sinclair
 * Date: 11/4/2016
 * Time: 6:07 PM
 */

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       Welcome...
    </p>

    <div class="row">
        <div class="col-lg-3">&nbsp;</div>
        <div class="col-lg-6">

            <?php $form = ActiveForm::begin(['id' => 'register-form']); ?>

            <?= $form->field($model, 'firstname')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'lastname')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'gender')->radioList(['M' => 'Male', 'F' => 'Female']) ?>

            <?= $form->field($model, 'dob')->label('D.O.B') ?>

            <?= $form->field($model, 'Yearsofexperience')->label('Years Of Experience');?>

            <?= $form->field($model, 'industry') ?>

            <?= $form->field($model, 'aboutme')->textarea()->label('About Me') ?>

            <?= $form->field($model, 'photo')->fileInput(['multiple'=>'multiple'])  ?>
            <p>
                Skills
            </p>
            <?= $form->field($model, 'title') ?>

            <?= $form->field($model, 'careerLevel')->label('Career Level')->hint('1%-100%') ?>

            <?= $form->field($model, 'comms')->label('Communication Level') ?>
            <?= $form->field($model, 'org')->label('Organizational Level') ?>
            <?= $form->field($model, 'jobl')->label('Job related Level') ?>
            <p>
                Contact
            </p>
            <?= $form->field($model, 'address') ?>

            <?= $form->field($model, 'address')->label('Phone Number') ?>
            <?= $form->field($model, 'website') ?>
            <?= $form->field($model, 'email') ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'register-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
        <div class="col-lg-3">&nbsp;</div>
    </div>

</div>