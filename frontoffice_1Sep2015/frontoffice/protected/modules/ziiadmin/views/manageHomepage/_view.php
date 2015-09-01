<?php
/* @var $this ManageHomepageController */
/* @var $data ManageHomepage */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('content_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->content_id), array('view', 'id'=>$data->content_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('block1_after_slider_heading')); ?>:</b>
	<?php echo CHtml::encode($data->block1_after_slider_heading); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('block1_after_slider_desc')); ?>:</b>
	<?php echo CHtml::encode($data->block1_after_slider_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('block1_after_slider_read_more_link')); ?>:</b>
	<?php echo CHtml::encode($data->block1_after_slider_read_more_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('block2_after_slider_heading')); ?>:</b>
	<?php echo CHtml::encode($data->block2_after_slider_heading); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('block2_after_slider_desc')); ?>:</b>
	<?php echo CHtml::encode($data->block2_after_slider_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('block2_after_slider_read_more_link')); ?>:</b>
	<?php echo CHtml::encode($data->block2_after_slider_read_more_link); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('block3_after_slider_heading')); ?>:</b>
	<?php echo CHtml::encode($data->block3_after_slider_heading); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('block3_after_slider_desc')); ?>:</b>
	<?php echo CHtml::encode($data->block3_after_slider_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('block3_after_slider_read_more_link')); ?>:</b>
	<?php echo CHtml::encode($data->block3_after_slider_read_more_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('block_after_slider_main_heading')); ?>:</b>
	<?php echo CHtml::encode($data->block_after_slider_main_heading); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_minitster_image')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_minitster_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_minister_name')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_minister_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_minister_name2')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_minister_name2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_minister_name3')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_minister_name3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_minister_name4')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_minister_name4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_minister_designation4')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_minister_designation4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_minister_name5')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_minister_name5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_minister_designation')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_minister_designation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_minister_designation2')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_minister_designation2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_minister_designation3')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_minister_designation3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_minister_designation5')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_minister_designation5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_minsiter_message')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_minsiter_message); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_minsiter_message2')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_minsiter_message2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_minsiter_message3')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_minsiter_message3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_minsiter_message4')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_minsiter_message4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_minsiter_message5')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_minsiter_message5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_minister_readmore_link')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_minister_readmore_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home')); ?>:</b>
	<?php echo CHtml::encode($data->home); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_footer_aboutus')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_footer_aboutus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_us_email')); ?>:</b>
	<?php echo CHtml::encode($data->contact_us_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_us_phone')); ?>:</b>
	<?php echo CHtml::encode($data->contact_us_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_us_address')); ?>:</b>
	<?php echo CHtml::encode($data->contact_us_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_text')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_text1')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_text1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_text2')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_text2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_text3')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_text3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_text4')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_text4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_updated_on')); ?>:</b>
	<?php echo CHtml::encode($data->last_updated_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->updated_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />

	*/ ?>

</div>