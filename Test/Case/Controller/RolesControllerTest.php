<?php
/**
 * RolesController Test Case
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('RolesController', 'Roles.Controller');

/**
 * RolesController Test Case
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package Roles\Test\Case\Controller
 */
class RolesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.Session',
		'app.SiteSetting',
	);

/**
 * setUp
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		parent::tearDown();
	}

/**
 * index
 *
 * @return void
 */
	public function testIndex() {
		$roleId = 1;
		$this->testAction('/roles/roles/index/' . $roleId . '/', array('method' => 'get'));
		$this->assertTextNotContains('ERROR', $this->view);
	}

}
