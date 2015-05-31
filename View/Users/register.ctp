<div class="container">
	<div class="row" style="margin-top:20px">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<?php echo $this->Form->create('User', array('action' => 'register')); ?>
				<fieldset>
					<h2><?php echo __('Sign Up'); ?></h2>
					<hr class="colorgraph">
					<?php echo $this->Session->flash(); ?>
					<div class="form-group">
						<?php   if (count($userGroups) >2) { ?>
						<?php echo $this->Form->input("user_group_id" ,array('type' => 'select', 'label' => false,'div' => false,'class'=>"form-control input-lg" ))?>
						<?php   }   ?>
					</div>
					<div class="form-group">
	                    <?php echo $this->Form->input("username" ,array('label' => false,'placeholder'=>'Username','div' => false,'class'=>"form-control input-lg" ))?>
					</div>
					<div class="form-group">
	                   <?php echo $this->Form->input("first_name" ,array('label' => false,'placeholder'=>'First Name','div' => false,'class'=>"form-control input-lg" ))?>
					</div>
					<div class="form-group">
	                   <?php echo $this->Form->input("last_name" ,array('label' => false,'placeholder'=>'Last Name','div' => false,'class'=>"form-control input-lg" ))?>
					</div>
					<div class="form-group">
	                   <?php echo $this->Form->input("email" ,array('label' => false,'placeholder'=>'Email','div' => false,'class'=>"form-control input-lg" ))?>
					</div>
					<div class="form-group">
	                   <?php echo $this->Form->input("password" ,array("type"=>"password",'label' => false,'div' => false,'placeholder'=>'password','class'=>"form-control input-lg" ))?>
					</div>
					<div class="form-group">
	                   <?php echo $this->Form->input("cpassword" ,array("type"=>"password",'placeholder'=>'confirm password','label' => false,'div' => false,'class'=>"form-control input-lg" ))?>
					</div>
					<?php   if(USE_RECAPTCHA && PRIVATE_KEY_FROM_RECAPTCHA !="" && PUBLIC_KEY_FROM_RECAPTCHA !="") { ?>
					<div>
						<div class="umstyle4" style="margin-left:45px"><?php echo $this->UserAuth->showCaptcha(isset($this->validationErrors['User']['captcha'][0]) ? $this->validationErrors['User']['captcha'][0] : ""); ?></div>
						<div style="clear:both"></div>
					</div>
			<?php   } ?>
					<hr class="colorgraph">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6">
						<?php echo $this->Form->button('Sign Up', array('type' => 'submit','class'=>'btn btn-lg btn-success btn-block'));?>                      
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6">						
						<a href="/login" class="btn btn-lg btn-primary btn-block">Back To Login</a>              
						</div>
					</div>
				</fieldset>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>