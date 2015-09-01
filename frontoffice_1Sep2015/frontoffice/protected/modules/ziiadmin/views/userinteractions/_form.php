<?php
/* @var $this UserinteractionsController */
/* @var $model UserInteractions */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-interactions-form',
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
	//'enctype'=>"multipart/form-data",
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="formRow">
		<label>Name</label>
		<div class="formRight">
		<?php 
			echo Users::model()->findByPk($model->user_id)->full_name;
			//echo $form->textField($model,'user_id'); ?>
		<?php	
			//echo $form->error($model,'user_id'); ?>
			</div>
        <div class="clear"></div>
	</div>
	
	<div class="formRow">
		<label>Mobile</label>
		<div class="formRight">
		<?php 
			echo Users::model()->findByPk($model->user_id)->mobile;
			//echo $form->textField($model,'user_id'); ?>
		<?php	
			//echo $form->error($model,'user_id'); ?>
			</div>
        <div class="clear"></div>
	</div>	
	<div class="formRow">
		<label>E-mail</label>
		<div class="formRight">
		<?php 
			echo Users::model()->findByPk($model->user_id)->email;
			//echo $form->textField($model,'user_id'); ?>
		<?php	
			//echo $form->error($model,'user_id'); ?>
			</div>
        <div class="clear"></div>
	</div>

	<div class="formRow">
		<?php echo $form->labelEx($model,'message'); ?>
		<div class="formRight">
		<?php echo $model->message;
			//echo $form->textArea($model,'message',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'message'); ?>
		</div>
        <div class="clear"></div>
	</div>

	<div class="formRow">
		<?php echo $form->labelEx($model,'attachment'); ?>
		<div class="formRight">
		<?php $attachment=($model->attachment);
			 $name=basename($attachment);
			 echo "<a target='_blank' href='$attachment'>$name</a>";
			 echo "<input type='file' name='attachments[]' />";			 
			 //echo $form->textField($model,'msg_type',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'msg_type'); ?>
		</div>
        <div class="clear"></div>
	</div>
	
	<!--div class="formRow">
		<?php echo $form->labelEx($model,'msg_type'); ?>
		<div class="formRight">
		<?php echo ucwords($model->msg_type);
			//echo $form->textField($model,'msg_type',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'msg_type'); ?>
		</div>
        <div class="clear"></div>
	</div-->

	<div class="formRow">
		<?php 
			echo $form->labelEx($model,'added_date');
		?>
		<div class="formRight">
		<?php 
			$added_date=$model->added_date; 
			$added_date=strtotime($added_date);
			echo date("F j, Y, g:i a",$added_date);
			//echo $form->textField($model,'added_date'); ?>
		<?php echo $form->error($model,'added_date'); ?>
		</div>
        <div class="clear"></div>
	</div>
	
		<div class="formRow">
		<?php 
			echo "<label>Remarks / Comments / Reply</label>";
			@session_start();
			
			$from=$to=NULL;
			$from=$model->user_id;
			//$to=$model->msg_to;
			$repliesArray=Utility::getUserInteractions(NULL, $model->user_id);
			//echo "<pre>"; print_r($repliesArray); echo "</pre>";
			$message="\r\n\r\n\r\n\r\n";
			foreach($repliesArray as $reply){
				$message.="\r\n\r\n".$reply['message'];
			}
		?>
		<div class="formRight">
			<textarea rows="10" onkeyup="enableForm()" onblur="enableForm()" id="ui_ta" name='UserInteractions[remarks]'><?=$message?></textarea> 
			<input type="hidden" name='UserInteractions[msg_id]' value="<?=$_GET['id']?>" />
			<input type="hidden" name='UserInteractions[reply_to]' value="<?=$model->user_id?>" />
			<input type="hidden" name='UserInteractions[userid]' value="<?=$_SESSION['UID']?>" />
		</div>
        <div class="clear"></div>
	</div>

	
	
		
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Reply Now', array(
            'disabled' => "disabled",
            'id'=>'ui_submit'
        )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
	function enableForm(){
		var t=$("#ui_ta").val();
		t=t.length;
		if(t>10){
			$("#ui_submit").removeAttr("disabled");
		}
		else{
			$("#ui_submit").attr("disabled","disabled");
		}
	}
</script>
