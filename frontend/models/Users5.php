<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $ID
 * @property string $Username
 * @property string $Password
 * @property string $LastLogin
 * @property integer $tip
 * @property string $Name
 * @property string $Surname
 * @property string $Email
 */
class Users5 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Username', 'Password', 'LastLogin', 'tip', 'Name', 'Surname', 'Email'], 'required'],
            [['LastLogin'], 'safe'],
            [['tip'], 'integer'],
            [['Name', 'Surname', 'Email'], 'string'],
            [['Username', 'Password'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Username' => 'Username',
            'Password' => 'Password',
            'LastLogin' => 'Last Login',
            'tip' => 'Tip',
            'Name' => 'Name',
            'Surname' => 'Surname',
            'Email' => 'Email',
        ];
    }
}
