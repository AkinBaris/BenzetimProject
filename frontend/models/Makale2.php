<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "makale".
 *
 * @property integer $ID
 * @property string $MName
 * @property string $Text
 * @property string $FDate
 * @property integer $CID
 * @property string $CDC
 */
class Makale2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'makale';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MName', 'Text', 'FDate', 'CID', 'CDC'], 'required'],
            [['Text'], 'string'],
            [['FDate'], 'safe'],
            [['CID'], 'integer'],
            [['MName', 'CDC'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'MName' => 'Mname',
            'Text' => 'Text',
            'FDate' => 'Fdate',
            'CID' => 'Cid',
            'CDC' => 'Cdc',
        ];
    }
}
