<?php
/**
 * RolesController Test Case
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 * @package     app.Plugin.Roles.Test.Controller.Case
 */

App::uses('RolesController', 'Roles.Controller');

/**
 * RolesController Test Case
 *
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package     app.Plugin.Roles.Test.Controller.Case
 */
class RolesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @var     array
 */
	public $fixtures = array(
		'app.Session',
		'app.SiteSetting',
		'app.SiteSettingValue',
	);

/**
 * setUp
 *
 * @author   Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return   void
 */
	public function setUp() {
		parent::setUp();
	}

/**
 * tearDown method
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return  void
 */
	public function tearDown() {
		parent::tearDown();
	}

/**
 * index
 *
 * @author   Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return   void
 */
	public function testIndex() {
		$frameId = 1;
		$this->testAction('/roles/roles/index/' . $frameId . '/', array('method' => 'get'));
		$this->assertTextNotContains('ERROR', $this->view);
	}

}
