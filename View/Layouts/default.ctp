<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
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
		 echo $this->Html->css('/Usermangmt/css/bootstrap.min.css');
		 echo $this->Html->css('/Usermangmt/css/admin.css');
		 echo $this->Html->css('/Usermangmt/css/font-awesome/css/font-awesome.min.css');
		echo $this->fetch('script');
	?>
</head>
<body>

    <div id="wrapper">    

        <div id="page-wrapper">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
        </div>
        <!-- /#page-wrapper -->
        <?php echo $this->element('sql_dump'); ?>
    </div>
    <!-- /#wrapper -->
	
	

	   <!-- jQuery -->
   <?php  echo $this->Html->script('/Usermangmt/js/jquery.js');?>">
   <?php  echo $this->Html->script('/Usermangmt/js/bootstrap.min.js');?>">
   <?php  echo $this->Html->script('/Usermangmt/js/plugins/morris/raphael.min.js');?>">
   <?php  echo $this->Html->script('/Usermangmt/js/plugins/morris/morris.min.js');?>">
   <?php  echo $this->Html->script('/Usermangmt/plugins/morris/morris-data.js');?>">
  
</body>
</html>
