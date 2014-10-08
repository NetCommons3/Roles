<?php
/**
 * RolesApp Controller
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 */

App::uses('AppController', 'Controller');

/**
 * RolesApp Controller
 *
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package     Roles\Controller
 */
class RolesAppController extends AppController {

/**
 * use component
 *
 * @author    Shohei Nakajima <nakajimashouhei@gmail.com>
 * @var       array
 */
	public $components = array(
		'Security'
	);
}