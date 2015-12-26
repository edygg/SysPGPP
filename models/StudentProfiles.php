<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student_profiles".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $unitec_id_number
 * @property integer $major_id
 * @property integer $campus_id
 * @property integer $user_id
 *
 * @property Campus $campus
 * @property Majors $major
 */
class StudentProfiles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_profiles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'unitec_id_number'], 'required'],
            [['major_id', 'campus_id', 'user_id'], 'integer'],
            [['first_name', 'last_name', 'unitec_id_number'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'unitec_id_number' => 'Unitec Id Number',
            'major_id' => 'Major ID',
            'campus_id' => 'Campus ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCampus()
    {
        return $this->hasOne(Campus::className(), ['id' => 'campus_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMajor()
    {
        return $this->hasOne(Majors::className(), ['id' => 'major_id']);
    }
}
