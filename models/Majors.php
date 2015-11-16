<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "majors".
 *
 * @property integer $id
 * @property string $title
 * @property string $year
 * @property integer $semester
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
            [['title', 'year', 'semester'], 'required'],
            [['semester', 'faculty_id'], 'integer'],
            [['title', 'year'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'year' => 'Year',
            'semester' => 'Semester',
            'faculty_id' => 'Faculty ID',
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
