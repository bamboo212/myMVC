<?php
/**
 * Created by PhpStorm.
 * User: sinclair
 * Date: 11/4/2016
 * Time: 6:17 PM
 */

namespace app\models;
use Yii;
use yii\base\Model;

class Register extends Model
{
    public $firstname;
    public $lastname;

    public $dob;
    public  $Yearsofexperience;
    public $industry;
    public $aboutme;
    public $photo;
    public $title;
    public $careerLevel;
    public $comms;
    public $org;
    public $jobl;
    public $address;
    public $phone;
    public $website;
    public $email;
    public $gender;






    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['firstname', 'email', 'dob', 'Yearsofexperience', 'aboutme', 'gender', 'phone'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
        ];
    }
    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
            'name' => 'Full Name'
        ];
    }

}