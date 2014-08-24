<?php
/**
 * Roles Controller
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 * @package     app.Plugin.Roles.Controller
 */

App::uses('RolesAppController', 'Roles.Controller');

/**
 * Roles Controller
 *
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package     app.Plugin.Roles.Controller
 */
class RolesController extends RolesAppController {

/**
 * use model
 *
 * @author    Shohei Nakajima <nakajimashouhei@gmail.com>
 * @var       array
 */
	//public $uses = array();

/**
 * beforeFilter
 *
 * @author   Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return   void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}

/**
 * index
 *
 * @author   Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return   CakeResponse
 */
	public function index() {
		return $this->render('Roles/index');
	}
}
