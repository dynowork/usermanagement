<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<?php echo $this->Form->create('User', array('action' => 'login')); ?>
			<fieldset>
				<h2>Please Sign In</h2>
				<hr class="colorgraph">
				<?php echo $this->Session->flash(); ?>
				<div class="form-group">
                    <?php echo $this->Form->input("email" ,array('label' => false,'placeholder'=>'Email Address','div' => false,'class'=>"form-control input-lg" ))?>
				</div>
				<div class="form-group">
				<?php echo $this->Form->input("password" ,array("type"=>"password",'placeholder'=>'Password','label' => false,'div' => false,'class'=>"form-control input-lg" ))?>
                   
				</div>
					<?php   if(!isset($this->request->data['User']['remember']))
								$this->request->data['User']['remember']=true;
					?>
				<span class="button-checkbox">
					<button type="button" class="btn" data-color="info">Remember Me</button>
                    <?php echo $this->Form->input("remember" ,array("type"=>"checkbox",'class'=>'hidden','div'=>false,'label' => false))?>
					<a href="/forgotPassword" class="btn btn-link pull-right">Forgot Password?</a>
				</span>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
					<?php echo $this->Form->button('Submit Form', array('type' => 'submit','class'=>'btn btn-lg btn-success btn-block'));?>                      
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<a href="/register" class="btn btn-lg btn-primary btn-block">Register</a>
					</div>
				</div>
			</fieldset>
		<?php echo $this->Form->end(); ?>
	</div>
</div>

</div>
<script type="text/javascript">
	$(function(){
    $('.button-checkbox').each(function(){
		var $widget = $(this),
			$button = $widget.find('button'),
			$checkbox = $widget.find('input:checkbox'),
			color = $button.data('color'),
			settings = {
					on: {
						icon: 'glyphicon glyphicon-check'
					},
					off: {
						icon: 'glyphicon glyphicon-unchecked'
					}
			};

		$button.on('click', function () {
			$checkbox.prop('checked', !$checkbox.is(':checked'));
			$checkbox.triggerHandler('change');
			updateDisplay();
		});

		$checkbox.on('change', function () {
			updateDisplay();
		});

		function updateDisplay() {
			var isChecked = $checkbox.is(':checked');
			// Set the button's state
			$button.data('state', (isChecked) ? "on" : "off");

			// Set the button's icon
			$button.find('.state-icon')
				.removeClass()
				.addClass('state-icon ' + settings[$button.data('state')].icon);

			// Update the button's color
			if (isChecked) {
				$button
					.removeClass('btn-default')
					.addClass('btn-' + color + ' active');
			}
			else
			{
				$button
					.removeClass('btn-' + color + ' active')
					.addClass('btn-default');
			}
		}
		function init() {
			updateDisplay();
			// Inject the icon if applicable
			if ($button.find('.state-icon').length == 0) {
				$button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
			}
		}
		init();
	});
});
</script>