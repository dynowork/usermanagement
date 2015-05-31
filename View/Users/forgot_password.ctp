<div class="container">
	<div class="row" style="margin-top:20px">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<?php echo $this->Form->create('User', array('action' => 'forgotPassword')); ?>
				<fieldset>
					<h2><?php echo __('Forgot Password'); ?></h2>
					<hr class="colorgraph">
					<?php echo $this->Session->flash(); ?>
					<div class="form-group">
	                    <?php echo $this->Form->input("email" ,array('label' => false,'placeholder'=>'Enter Email / Username','div' => false,'class'=>"form-control input-lg" ))?>
					</div>
					
					<hr class="colorgraph">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6">
						<?php echo $this->Form->button('Send Email', array('type' => 'submit','class'=>'btn btn-lg btn-success btn-block'));?>                      
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