<?php

/**
 * This is the model class for table "bo_page_categories".
 *
 * The followings are the available columns in table 'bo_page_categories':
 * @property string $pcat_id
 * @property string $pcat_name
 * @property string $pcal_desc
 * @property string $is_active
 *
 * The followings are the available model relations:
 * @property BoPageInfo[] $boPageInfos
 */
class PageCategories extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bo_page_categories';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pcat_name, pcal_desc', 'required'),
			array('pcat_name', 'length', 'max'=>60),
			array('pcal_desc', 'length', 'max'=>512),
			array('is_active', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pcat_id, pcat_name, pcal_desc, is_active', 'safe', 'on'=>'search'),
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
			'boPageInfos' => array(self::HAS_MANY, 'BoPageInfo', 'pcat_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pcat_id' => 'Pcat',
			'pcat_name' => 'Pcat Name',
			'pcal_desc' => 'Pcal Desc',
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

		$criteria->compare('pcat_id',$this->pcat_id,true);
		$criteria->compare('pcat_name',$this->pcat_name,true);
		$criteria->compare('pcal_desc',$this->pcal_desc,true);
		$criteria->compare('is_active',$this->is_active,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PageCategories the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
