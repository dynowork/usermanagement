<?php
/*
	This file is part of Usermangmt.
	Author: dynoworkd@gmail.com
*/
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		 echo $this->Html->css('/usermangmt/css/bootstrap.min.css');
		 echo $this->Html->css('/Usermangmt/css/login.css');
		 echo $this->Html->css('/Usermangmt/css/font-awesome/css/font-awesome.min.css');
		echo $this->fetch('script');
	?>
	 <?php  echo $this->Html->script('/Usermangmt/js/jquery.js');?>
</head>
<body>

<div class="container">
	<div class="row">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
			 <?php echo $this->element('sql_dump'); ?>
	</div>
	
</div>
   <!-- jQuery -->
  
   <?php  echo $this->Html->script('/Usermangmt/js/bootstrap.min.js');?>">
   <?php  echo $this->Html->script('/Usermangmt/js/plugins/morris/raphael.min.js');?>">
   <?php  echo $this->Html->script('/Usermangmt/js/plugins/morris/morris.min.js');?>">
   <?php  echo $this->Html->script('/Usermangmt/plugins/morris/morris-data.js');?>">
  
</body>
</html>
