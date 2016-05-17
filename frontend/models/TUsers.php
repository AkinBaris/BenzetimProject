<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "t_users".
 *
 * @property integer $ID
 * @property string $Username
 * @property string $Password
 * @property string $E-mail
 * @property string $Name
 * @property string $Surname
 * @property string $LastLogin
 */
class TUsers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Username', 'Password', 'E-mail', 'Name', 'Surname', 'LastLogin'], 'required'],
            [['LastLogin'], 'safe'],
            [['Username', 'Surname'], 'string', 'max' => 25],
            [['Password'], 'string', 'max' => 11],
            [['E-mail'], 'string', 'max' => 50],
            [['Name'], 'string', 'max' => 40],
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
            'E-mail' => 'E Mail',
            'Name' => 'Name',
            'Surname' => 'Surname',
            'LastLogin' => 'Last Login',
        ];
    }
}
