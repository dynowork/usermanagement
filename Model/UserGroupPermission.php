<?php
/*
	This file is part of Usermangmt.
	Author: dynoworkd@gmail.com
*/
App::uses('UsermangmtAppModel', 'Usermangmt.Model');
App::uses('CakeEmail', 'Network/Email');
class UserGroupPermission extends UsermangmtAppModel {
	 var $belongsTo = array('Usermangmt.UserGroup');
}