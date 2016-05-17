<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "t_makale".
 *
 * @property integer $ID
 * @property string $M_Name
 * @property string $M_Text
 * @property string $M_FDate
 * @property integer $C_ID
 * @property string $C_DC
 */
class TMakale44 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_makale';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['M_Name', 'M_Text', 'M_FDate', 'C_ID', 'C_DC'], 'required'],
            [['M_Text'], 'string'],
            [['M_FDate'], 'safe'],
            [['C_ID'], 'integer'],
            [['M_Name', 'C_DC'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'M_Name' => 'M  Name',
            'M_Text' => 'M  Text',
            'M_FDate' => 'M  Fdate',
            'C_ID' => 'C  ID',
            'C_DC' => 'C  Dc',
        ];
    }
}
