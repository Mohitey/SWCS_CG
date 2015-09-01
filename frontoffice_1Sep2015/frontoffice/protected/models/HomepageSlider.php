<?php

/**
 * This is the model class for table "bo_manage_homepage_slider".
 *
 * The followings are the available columns in table 'bo_manage_homepage_slider':
 * @property integer $image_id
 * @property string $image_caption
 * @property string $image_path
 * @property integer $Image_order
 * @property string $larger_heading
 * @property string $medium_red_bg_heading
 * @property string $black_bg_h1
 * @property string $black_bg_h2
 * @property string $black_bg_h3
 * @property string $added_date
 * @property string $updated_date
 * @property string $is_active
 */
class HomepageSlider extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bo_manage_homepage_slider';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('image_caption, image_path, Image_order, larger_heading, medium_red_bg_heading, black_bg_h1, black_bg_h2, black_bg_h3, added_date', 'required'),
			array('Image_order', 'numerical', 'integerOnly'=>true),
			array('image_caption', 'length', 'max'=>255),
			array('image_path', 'length', 'max'=>99),
			array('larger_heading, medium_red_bg_heading, black_bg_h1, black_bg_h2, black_bg_h3', 'length', 'max'=>254),
			array('is_active', 'length', 'max'=>1),
			array('updated_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('image_id, image_caption, image_path, Image_order, larger_heading, medium_red_bg_heading, black_bg_h1, black_bg_h2, black_bg_h3, added_date, updated_date, is_active', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'image_id' => 'Image',
			'image_caption' => 'Image Caption',
			'image_path' => 'Image Path',
			'Image_order' => 'Image Order',
			'larger_heading' => 'Larger Heading',
			'medium_red_bg_heading' => 'Medium Red Bg Heading',
			'black_bg_h1' => 'Black Background Heading 1',
			'black_bg_h2' => 'Black Background Heading 2',
			'black_bg_h3' => 'Black Background Heading 3',
			'added_date' => 'Added Date',
			'updated_date' => 'Updated Date',
			'is_active' => 'Is Active',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('image_id',$this->image_id);
		$criteria->compare('image_caption',$this->image_caption,true);
		$criteria->compare('image_path',$this->image_path,true);
		$criteria->compare('Image_order',$this->Image_order);
		$criteria->compare('larger_heading',$this->larger_heading,true);
		$criteria->compare('medium_red_bg_heading',$this->medium_red_bg_heading,true);
		$criteria->compare('black_bg_h1',$this->black_bg_h1,true);
		$criteria->compare('black_bg_h2',$this->black_bg_h2,true);
		$criteria->compare('black_bg_h3',$this->black_bg_h3,true);
		$criteria->compare('added_date',$this->added_date,true);
		$criteria->compare('updated_date',$this->updated_date,true);
		$criteria->compare('is_active',$this->is_active,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HomepageSlider the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
