<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "home".
 *
 * @property integer $ID
 * @property string $HText
 */
class Home extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'home';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HText'], 'required'],
            [['HText'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'HText' => 'Htext',
        ];
    }
}
