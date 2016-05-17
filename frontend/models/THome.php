<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "t_home".
 *
 * @property integer $ID
 * @property string $H_Text
 */
class THome extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_home';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['H_Text'], 'required'],
            [['H_Text'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'H_Text' => 'H  Text',
        ];
    }
}
