<?php

/**
 * This is the model class for table "bo_page_info".
 *
 * The followings are the available columns in table 'bo_page_info':
 * @property string $page_id
 * @property string $page_stub
 * @property string $page_name
 * @property string $page_name1
 * @property string $page_name2
 * @property string $page_name3
 * @property string $page_name4
 * @property string $page_keywords
 * @property string $page_desc
 * @property string $page_content
 * @property string $page_content1
 * @property string $page_content2
 * @property string $page_content3
 * @property string $page_content4
 * @property integer $parent_id
 * @property string $pcat_id
 * @property string $is_active
 *
 * The followings are the available model relations:
 * @property BoPageCategories $pcat
 */
class PageInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bo_page_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('page_stub, page_name, page_keywords, page_desc, page_content, pcat_id', 'required'),
			array('parent_id', 'numerical', 'integerOnly'=>true),
			array('page_stub, page_name, page_name1, page_name2, page_name3, page_name4', 'length', 'max'=>60),
			array('page_keywords', 'length', 'max'=>128),
			array('page_desc', 'length', 'max'=>512),
			array('pcat_id', 'length', 'max'=>10),
			array('is_active', 'length', 'max'=>1),
			array('page_content1, page_content2, page_content3, page_content4', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('page_id, page_stub, page_name, page_name1, page_name2, page_name3, page_name4, page_keywords, page_desc, page_content, page_content1, page_content2, page_content3, page_content4, parent_id, pcat_id, is_active', 'safe', 'on'=>'search'),
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
			'pcat' => array(self::BELONGS_TO, 'BoPageCategories', 'pcat_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'page_id' => 'Page',
			'page_stub' => 'Page Stub',
			'page_name' => 'Page Name',
			'page_name1' => 'Page Name1',
			'page_name2' => 'Page Name2',
			'page_name3' => 'Page Name3',
			'page_name4' => 'Page Name4',
			'link_address'=>'File Link',
			'page_keywords' => 'Page Keywords',
			'page_desc' => 'Page Desc',
			'page_content' => 'Page Content',
			'page_content1' => 'Page Content1',
			'page_content2' => 'Page Content2',
			'page_content3' => 'Page Content3',
			'page_content4' => 'Page Content4',
			'parent_id' => 'Parent',
			'pcat_id' => 'Pcat',
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

		$criteria->compare('page_id',$this->page_id,true);
		$criteria->compare('page_stub',$this->page_stub,true);
		$criteria->compare('page_name',$this->page_name,true);
		$criteria->compare('page_name1',$this->page_name1,true);
		$criteria->compare('page_name2',$this->page_name2,true);
		$criteria->compare('page_name3',$this->page_name3,true);
		$criteria->compare('page_name4',$this->page_name4,true);
		$criteria->compare('page_keywords',$this->page_keywords,true);
		$criteria->compare('page_desc',$this->page_desc,true);
		$criteria->compare('page_content',$this->page_content,true);
		$criteria->compare('page_content1',$this->page_content1,true);
		$criteria->compare('page_content2',$this->page_content2,true);
		$criteria->compare('page_content3',$this->page_content3,true);
		$criteria->compare('page_content4',$this->page_content4,true);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('pcat_id',$this->pcat_id,true);
		$criteria->compare('is_active',$this->is_active,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PageInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
