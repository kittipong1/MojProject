<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "image".
 *
 * @property integer $image_id
 * @property string $image_name
 * @property resource $image
 * @property string $path
 * @property integer $ref_id
 * @property integer $sorting
 * @property string $status
 * @property string $create_date
 * @property string $modified_date
 *
 * @property Album $ref
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image_name', 'image', 'path', 'sorting', 'status', 'create_date', 'modified_date'], 'required'],
            [['image', 'path'], 'string'],
            [['ref_id', 'sorting'], 'integer'],
            [['create_date', 'modified_date'], 'safe'],
            [['image_name'], 'string', 'max' => 200],
            [['status'], 'string', 'max' => 255],
            [['ref_id'], 'exist', 'skipOnError' => true, 'targetClass' => Album::className(), 'targetAttribute' => ['ref_id' => 'album_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'image_id' => 'Image ID',
            'image_name' => 'Image Name',
            'image' => 'Image',
            'path' => 'ที่อยู่ของวีดีโอ',
            'ref_id' => 'album_id',
            'sorting' => 'การเรียงลำดับรูปภาพ',
            'status' => 'Status',
            'create_date' => 'Create Date',
            'modified_date' => 'Modified Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRef()
    {
        return $this->hasOne(Album::className(), ['album_id' => 'ref_id']);
    }
}
