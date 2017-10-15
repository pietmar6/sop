<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "statusy_zatrudnienia".
 *
 * @property integer $ID_statusu_zatrudnienia
 * @property string $status_zatrudnienia
 *
 * @property Zatrudnienia[] $zatrudnienias
 */
class StatusyZatrudnienia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'statusy_zatrudnienia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status_zatrudnienia'], 'required'],
            [['status_zatrudnienia'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_statusu_zatrudnienia' => 'Id Statusu Zatrudnienia',
            'status_zatrudnienia' => 'Status Zatrudnienia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZatrudnienias()
    {
        return $this->hasMany(Zatrudnienia::className(), ['status_zatrudnienia_id' => 'ID_statusu_zatrudnienia']);
    }
}
