<?php
/*
	This file is part of Usermangmt.
	Author: dynoworkd@gmail.com
*/
class UsermangmtAppController extends AppController {
	public $components = array('Session');

	public function beforeFilter() {
		parent::beforeFilter();
	}
}