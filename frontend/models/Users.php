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
 */
class Users extends \yii\db\ActiveRecord
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
            [['Username', 'Password', 'LastLogin'], 'required'],
            [['LastLogin'], 'safe'],
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
        ];
    }
}
