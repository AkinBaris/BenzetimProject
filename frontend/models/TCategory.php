<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "t_category".
 *
 * @property integer $ID
 * @property string $C_Name
 * @property integer $C_UpID
 */
class TCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['C_Name', 'C_UpID'], 'required'],
            [['C_UpID'], 'integer'],
            [['C_Name'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'C_Name' => 'C  Name',
            'C_UpID' => 'C  Up ID',
        ];
    }
}
