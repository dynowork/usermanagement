<?php
/*
	This file is part of Usermangmt.
	Author: dynoworkd@gmail.com
*/
?>
<?php echo $this->Session->flash(); ?>
<?php echo $this->element('dashboard'); ?>
<div class="">
	<div class="title"><h2><?php echo __('Edit User'); ?></h2></div>
	<div class="row">
	 <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
	<?php echo $this->Form->create('User'); ?>
		<fieldset>
					<?php echo $this->Form->input("id" ,array('type' => 'hidden', 'label' => false,'div' => false))?>
			<?php   if (count($userGroups) >2) { ?>
						<div>
							<div class="umstyle3"><?php echo __('Group');?><font color='red'>*</font></div>
							<div class="umstyle4" ><?php echo $this->Form->input("user_group_id" ,array('type' => 'select', 'label' => false,'div' => false,'class'=>"form-control" ))?></div>
							<div style="clear:both"></div>
						</div>
			<?php   }   ?>


					<div class="form-group">
						<div class="umstyle3"><?php echo __('Username');?><font color='red'>*</font></div>
						<?php echo $this->Form->input("username" ,array('label' => false,'div' => false,'class'=>"form-control" ))?>
						
					</div>
					<div>
						<div class="umstyle3"><?php echo __('First Name');?><font color='red'>*</font></div>
						<div class="umstyle4" ><?php echo $this->Form->input("first_name" ,array('label' => false,'div' => false,'class'=>"form-control" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div>
						<div class="umstyle3"><?php echo __('Last Name');?><font color='red'>*</font></div>
						<div class="umstyle4" ><?php echo $this->Form->input("last_name" ,array('label' => false,'div' => false,'class'=>"form-control" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div>
						<div class="umstyle3"><?php echo __('Email');?><font color='red'>*</font></div>
						<div class="umstyle4" ><?php echo $this->Form->input("email" ,array('label' => false,'div' => false,'class'=>"form-control" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div>
						<div class="umstyle3"></div>
						<div class="umstyle4"><?php echo $this->Form->Submit(__('Update User'));?></div>
						<div style="clear:both"></div>
					</div>
					</fieldset>
					<?php echo $this->Form->end(); ?>
					</div>
</div>
</div>

<script>
document.getElementById("UserUserGroupId").focus();
</script>