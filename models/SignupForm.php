<?php
namespace app\models;

use yii\base\Model;



/**
 * Signup form
 */
class SignupForm extends Model
{

    public $email;
    public $password;
    public $repeatpass;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'], 'filter', 'filter' => 'trim'],
            [['email'], 'required'],
            [['email'], 'email'],
            [['email'], 'string', 'max' => 255],
            [['email'], 'unique', 'targetClass' => 'app\models\User', 'message' => 'Email in use'],

            [['password'], 'required'],
            [['password'], 'string', 'min' => 4],
            [['password'], 'match', 'pattern' => '/^[a-zA-Z0-9]*$/'],

            [['repeatpass'], 'required'],
            [['repeatpass'], 'compare', 'compareAttribute'=>'password', 'message'=>"Password mismatch"],
        ];
    }
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {

        if ($this->validate()) {
            $user = new User();
            $user->email = $this->email;
            $user->setPassword($this->password);

            if ($user->save()) {
                return $user;
            }
        }
        return null;
    }
}
