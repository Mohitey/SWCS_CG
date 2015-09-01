<?php

/**
 * This is the model class for table "bo_manage_homepage".
 *
 * The followings are the available columns in table 'bo_manage_homepage':
 * @property string $content_id
 * @property string $block1_after_slider_heading
 * @property string $block1_after_slider_desc
 * @property string $block1_after_slider_read_more_link
 * @property string $block2_after_slider_heading
 * @property string $block2_after_slider_desc
 * @property string $block2_after_slider_read_more_link
 * @property string $block3_after_slider_heading
 * @property string $block3_after_slider_desc
 * @property string $block3_after_slider_read_more_link
 * @property string $block_after_slider_main_heading
 * @property string $homepage_minitster_image
 * @property string $homepage_minister_name
 * @property string $homepage_minister_name2
 * @property string $homepage_minister_name3
 * @property string $homepage_minister_name4
 * @property string $homepage_minister_designation4
 * @property string $homepage_minister_name5
 * @property string $homepage_minister_designation
 * @property string $homepage_minister_designation2
 * @property string $homepage_minister_designation3
 * @property string $homepage_minister_designation5
 * @property string $homepage_minsiter_message
 * @property string $homepage_minsiter_message2
 * @property string $homepage_minsiter_message3
 * @property string $homepage_minsiter_message4
 * @property string $homepage_minsiter_message5
 * @property string $homepage_minister_readmore_link
 * @property string $home
 * @property string $homepage_footer_aboutus
 * @property string $contact_us_email
 * @property string $contact_us_phone
 * @property string $contact_us_address
 * @property string $homepage_text
 * @property string $homepage_text1
 * @property string $homepage_text2
 * @property string $homepage_text3
 * @property string $homepage_text4
 * @property string $last_updated_on
 * @property string $updated_by
 * @property string $is_active
 *
 * The followings are the available model relations:
 * @property BoUsers $updatedBy
 */
class ManageHomepage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bo_manage_homepage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('block1_after_slider_heading, block2_after_slider_read_more_link, homepage_minitster_image, homepage_minsiter_message, last_updated_on, updated_by', 'required','on'=>'create'),
			array('block1_after_slider_heading, block2_after_slider_read_more_link, homepage_minsiter_message, last_updated_on, updated_by', 'required','on'=>'update'),
			array('block1_after_slider_heading, block1_after_slider_read_more_link, block2_after_slider_heading, block2_after_slider_read_more_link, block3_after_slider_heading, block3_after_slider_read_more_link, block_after_slider_main_heading, homepage_minister_readmore_link, contact_us_email, contact_us_phone, homepage_text, homepage_text1, homepage_text2, homepage_text3, homepage_text4', 'length', 'max'=>255),
			array('homepage_minitster_image, homepage_minister_name, homepage_minister_name2, homepage_minister_name3, homepage_minister_name4, homepage_minister_designation4, homepage_minister_name5, homepage_minister_designation, homepage_minister_designation2, homepage_minister_designation3, homepage_minister_designation5', 'length', 'max'=>512),
			array('home', 'length', 'max'=>99),
			array('updated_by', 'length', 'max'=>10),
			array('is_active', 'length', 'max'=>1),
			array('block1_after_slider_desc, block2_after_slider_desc, block3_after_slider_desc, homepage_minsiter_message2, homepage_minsiter_message3, homepage_minsiter_message4, homepage_minsiter_message5, homepage_footer_aboutus, contact_us_address', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('content_id, block1_after_slider_heading, block1_after_slider_desc, block1_after_slider_read_more_link, block2_after_slider_heading, block2_after_slider_desc, block2_after_slider_read_more_link, block3_after_slider_heading, block3_after_slider_desc, block3_after_slider_read_more_link, block_after_slider_main_heading, homepage_minitster_image, homepage_minister_name, homepage_minister_name2, homepage_minister_name3, homepage_minister_name4, homepage_minister_designation4, homepage_minister_name5, homepage_minister_designation, homepage_minister_designation2, homepage_minister_designation3, homepage_minister_designation5, homepage_minsiter_message, homepage_minsiter_message2, homepage_minsiter_message3, homepage_minsiter_message4, homepage_minsiter_message5, homepage_minister_readmore_link, home, homepage_footer_aboutus, contact_us_email, contact_us_phone, contact_us_address, homepage_text, homepage_text1, homepage_text2, homepage_text3, homepage_text4, last_updated_on, updated_by, is_active', 'safe', 'on'=>'search'),
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
			'updatedBy' => array(self::BELONGS_TO, 'BoUsers', 'updated_by'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'content_id' => 'Content',
			'block1_after_slider_heading' => 'Block1 After Slider Heading',
			'block1_after_slider_desc' => 'Block1 After Slider Desc',
			'block1_after_slider_read_more_link' => 'Block1 After Slider Read More Link',
			'block2_after_slider_heading' => 'Block2 After Slider Heading',
			'block2_after_slider_desc' => 'Block2 After Slider Desc',
			'block2_after_slider_read_more_link' => 'Block2 After Slider Read More Link',
			'block3_after_slider_heading' => 'Block3 After Slider Heading',
			'block3_after_slider_desc' => 'Block3 After Slider Desc',
			'block3_after_slider_read_more_link' => 'Block3 After Slider Read More Link',
			'block_after_slider_main_heading' => 'Block After Slider Main Heading',
			'homepage_minitster_image' => 'Homepage Minitster Image',
			'homepage_minister_name' => 'Homepage Minister Name',
			'homepage_minister_name2' => 'Homepage Minister Name2',
			'homepage_minister_name3' => 'Homepage Minister Name3',
			'homepage_minister_name4' => 'Homepage Minister Name4',
			'homepage_minister_designation4' => 'Homepage Minister Designation4',
			'homepage_minister_name5' => 'Homepage Minister Name5',
			'homepage_minister_designation' => 'Homepage Minister Designation',
			'homepage_minister_designation2' => 'Homepage Minister Designation2',
			'homepage_minister_designation3' => 'Homepage Minister Designation3',
			'homepage_minister_designation5' => 'Homepage Minister Designation5',
			'homepage_minsiter_message' => 'Homepage Minsiter Message',
			'homepage_minsiter_message2' => 'Homepage Minsiter Message2',
			'homepage_minsiter_message3' => 'Homepage Minsiter Message3',
			'homepage_minsiter_message4' => 'Homepage Minsiter Message4',
			'homepage_minsiter_message5' => 'Homepage Minsiter Message5',
			'homepage_minister_readmore_link' => 'Homepage Minister Readmore Link',
			'home' => 'Home',
			'homepage_footer_aboutus' => 'Homepage Footer Aboutus',
			'contact_us_email' => 'Contact Us Email',
			'contact_us_phone' => 'Contact Us Phone',
			'contact_us_address' => 'Contact Us Address',
			'homepage_text' => 'Homepage Text',
			'homepage_text1' => 'Homepage Text1',
			'homepage_text2' => 'Homepage Text2',
			'homepage_text3' => 'Homepage Text3',
			'homepage_text4' => 'Homepage Text4',
			'last_updated_on' => 'Last Updated On',
			'updated_by' => 'Updated By',
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

		$criteria->compare('content_id',$this->content_id,true);
		$criteria->compare('block1_after_slider_heading',$this->block1_after_slider_heading,true);
		$criteria->compare('block1_after_slider_desc',$this->block1_after_slider_desc,true);
		$criteria->compare('block1_after_slider_read_more_link',$this->block1_after_slider_read_more_link,true);
		$criteria->compare('block2_after_slider_heading',$this->block2_after_slider_heading,true);
		$criteria->compare('block2_after_slider_desc',$this->block2_after_slider_desc,true);
		$criteria->compare('block2_after_slider_read_more_link',$this->block2_after_slider_read_more_link,true);
		$criteria->compare('block3_after_slider_heading',$this->block3_after_slider_heading,true);
		$criteria->compare('block3_after_slider_desc',$this->block3_after_slider_desc,true);
		$criteria->compare('block3_after_slider_read_more_link',$this->block3_after_slider_read_more_link,true);
		$criteria->compare('block_after_slider_main_heading',$this->block_after_slider_main_heading,true);
		$criteria->compare('homepage_minitster_image',$this->homepage_minitster_image,true);
		$criteria->compare('homepage_minister_name',$this->homepage_minister_name,true);
		$criteria->compare('homepage_minister_name2',$this->homepage_minister_name2,true);
		$criteria->compare('homepage_minister_name3',$this->homepage_minister_name3,true);
		$criteria->compare('homepage_minister_name4',$this->homepage_minister_name4,true);
		$criteria->compare('homepage_minister_designation4',$this->homepage_minister_designation4,true);
		$criteria->compare('homepage_minister_name5',$this->homepage_minister_name5,true);
		$criteria->compare('homepage_minister_designation',$this->homepage_minister_designation,true);
		$criteria->compare('homepage_minister_designation2',$this->homepage_minister_designation2,true);
		$criteria->compare('homepage_minister_designation3',$this->homepage_minister_designation3,true);
		$criteria->compare('homepage_minister_designation5',$this->homepage_minister_designation5,true);
		$criteria->compare('homepage_minsiter_message',$this->homepage_minsiter_message,true);
		$criteria->compare('homepage_minsiter_message2',$this->homepage_minsiter_message2,true);
		$criteria->compare('homepage_minsiter_message3',$this->homepage_minsiter_message3,true);
		$criteria->compare('homepage_minsiter_message4',$this->homepage_minsiter_message4,true);
		$criteria->compare('homepage_minsiter_message5',$this->homepage_minsiter_message5,true);
		$criteria->compare('homepage_minister_readmore_link',$this->homepage_minister_readmore_link,true);
		$criteria->compare('home',$this->home,true);
		$criteria->compare('homepage_footer_aboutus',$this->homepage_footer_aboutus,true);
		$criteria->compare('contact_us_email',$this->contact_us_email,true);
		$criteria->compare('contact_us_phone',$this->contact_us_phone,true);
		$criteria->compare('contact_us_address',$this->contact_us_address,true);
		$criteria->compare('homepage_text',$this->homepage_text,true);
		$criteria->compare('homepage_text1',$this->homepage_text1,true);
		$criteria->compare('homepage_text2',$this->homepage_text2,true);
		$criteria->compare('homepage_text3',$this->homepage_text3,true);
		$criteria->compare('homepage_text4',$this->homepage_text4,true);
		$criteria->compare('last_updated_on',$this->last_updated_on,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('is_active',$this->is_active,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ManageHomepage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
