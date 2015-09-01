<?php
/* @var $this PageCategoryRelationController */
/* @var $model PageCategoryRelation */
/* @var $form CActiveForm */


?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'page-category-relation-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="formRow">
		<?php echo $form->labelEx($model,'page_id'); ?>
		<?php //echo $form->textField($model,'page_id'); ?>
		<?php //echo $form->error($model,'page_id'); ?>
		<div class="formRight"><?php
			$pages = Yii::app()->db->createCommand()
			->select('*')
			->from('page_info')
			->queryAll();
		   // ->where('First_name like :name', array(':name'=>$_GET['name']))
			echo "<select id='PageCategoryRelation_page_id' name='PageCategoryRelation[page_id]'>";
			foreach($pages as $k=>$v) {
				if($v['page_id'] == $model->page_id){
					$sel = "selected='selected'";
				} else {
					$sel = "";
				}
				echo "<option ".$sel." value='".$v['page_id']."'>".$v['page_name']."</option>";
			}
			echo "</select>";
		?></div>
		<div class="clear"></div>
	</div>

	<div class="formRow">
		<?php echo $form->labelEx($model,'cat_id'); ?>
		<?php //echo $form->textField($model,'cat_id'); ?>
		<div class="formRight"><?php
			$id = 1;
			$pages = Yii::app()->db->createCommand()
                                ->select('*')
                                ->from('page_categories')
                                ->where('is_active = :id', array(':id'=>$id))
                                ->queryAll();
                                echo "<select id='PageCategoryRelation_cat_id' name='PageCategoryRelation[cat_id]'>";
                                foreach($pages as $k=>$v) {
                                        if($v['pcat_id'] == $model->cat_id){
                                                $sel = "selected='selected'";
                                        } else {
                                                $sel = "";
                                        }
                                        echo "<option ".$sel." value='".$v['pcat_id']."'>".$v['pcat_name']."</option>";
                                }
                                echo "</select>";
		?>
		<?php echo $form->error($model,'cat_id'); ?>
		</div>
		<div class="clear"></div>
		
	</div>
        
        <div class="formRow">
            <label><?php echo $form->labelEx($model,'page_order'); ?></label>
            <div class="formRight"><?php 
                    $orderArray=Utility::getTotalPageOrder();
                    echo CHtml::dropDownList('PageCategoryRelation[page_order]', $model->page_order, $orderArray);
                ?>
		<?php echo $form->error($model,'page_order'); ?>
            </div>
            <div class="clear"></div>
	</div>

	<div class="formRow">
            <label><?php echo $form->labelEx($model,'is_active'); ?></label>
            <div class="formRight">
                <?php                     
                    echo "<label>Active: </label>".$form->radioButton($model, 'is_active', array(
                        'value'=>1,
                        'uncheckValue'=>null
                    ));
                    
                    echo "<label>Inactive: </label>".$form->radioButton($model, 'is_active', array(
                        'value'=>0,
                        'uncheckValue'=>null
                    ));
                ?>
		<?php echo $form->error($model,'is_active'); ?>
            </div>
            <div class="clear"></div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
      
    function getPageCatId(){        
        
    }
    
    
</script>