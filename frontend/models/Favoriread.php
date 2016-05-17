<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "favoriread".
 *
 * @property integer $ID
 * @property integer $USERID
 * @property integer $READID
 * @property string $USERNAME
 */
class Favoriread extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'favoriread';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['USERID', 'READID', 'USERNAME'], 'required'],
            [['USERID', 'READID'], 'integer'],
            [['USERNAME'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'USERID' => 'Userid',
            'READID' => 'Readid',
            'USERNAME' => 'Username',
        ];
    }
}
