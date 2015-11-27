<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "majors".
 *
 * @property integer $id
 * @property string $name
 * @property integer $faculty_id
 *
 * @property Faculties $faculty
 */
class Majors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'majors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['faculty_id'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nombre',
            'faculty_id' => 'Facultad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaculty()
    {
        return $this->hasOne(Faculties::className(), ['id' => 'faculty_id']);
    }
}
