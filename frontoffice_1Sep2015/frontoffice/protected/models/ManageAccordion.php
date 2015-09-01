<?php

/**
 * This is the model class for table "bo_manage_accordion_block".
 *
 * The followings are the available columns in table 'bo_manage_accordion_block':
 * @property integer $acc_id
 * @property string $acc_title
 * @property string $acc_descr
 * @property integer $added_by
 * @property integer $acc_order
 * @property string $updated_date
 * @property integer $is_active
 */
class ManageAccordion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bo_manage_accordion_block';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('acc_title, acc_descr, added_by, acc_order, updated_date, is_active', 'required'),
			array('added_by, acc_order, is_active', 'numerical', 'integerOnly'=>true),
			array('acc_title', 'length', 'max'=>254),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('acc_id, acc_title, acc_descr, added_by, acc_order, updated_date, is_active', 'safe', 'on'=>'search'),
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
			'acc_id' => 'Acc',
			'acc_title' => 'Acc Title',
			'acc_descr' => 'Acc Descr',
			'added_by' => 'Added By',
			'acc_order' => 'Acc Order',
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

		$criteria->compare('acc_id',$this->acc_id);
		$criteria->compare('acc_title',$this->acc_title,true);
		$criteria->compare('acc_descr',$this->acc_descr,true);
		$criteria->compare('added_by',$this->added_by);
		$criteria->compare('acc_order',$this->acc_order);
		$criteria->compare('updated_date',$this->updated_date,true);
		$criteria->compare('is_active',$this->is_active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ManageAccordion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
