<?php

/**
 * This is the model class for table "bo_forgot_password".
 *
 * The followings are the available columns in table 'bo_forgot_password':
 * @property string $fp_id
 * @property string $uid
 * @property string $pass_code
 * @property integer $time_stamp
 * @property string $is_active
 *
 * The followings are the available model relations:
 * @property BoUsers $u
 */
class ForgotPassword extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bo_forgot_password';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, pass_code, time_stamp', 'required'),
			array('time_stamp', 'numerical', 'integerOnly'=>true),
			array('uid', 'length', 'max'=>10),
			array('pass_code', 'length', 'max'=>32),
			array('is_active', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('fp_id, uid, pass_code, time_stamp, is_active', 'safe', 'on'=>'search'),
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
			'u' => array(self::BELONGS_TO, 'BoUsers', 'uid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fp_id' => 'Fp',
			'uid' => 'Uid',
			'pass_code' => 'Pass Code',
			'time_stamp' => 'Time Stamp',
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

		$criteria->compare('fp_id',$this->fp_id,true);
		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('pass_code',$this->pass_code,true);
		$criteria->compare('time_stamp',$this->time_stamp);
		$criteria->compare('is_active',$this->is_active,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ForgotPassword the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
