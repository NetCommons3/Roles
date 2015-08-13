<?php
/**
 * DefaultRolePermission Test Case
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('DefaultRolePermission', 'Roles.Model');
App::uses('YACakeTestCase', 'NetCommons.TestSuite');

/**
 * DefaultRolePermission Test Case
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Roles\Test\Case\Model
 */
class DefaultRolePermissionTest extends YACakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.roles.default_role_permission'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DefaultRolePermission = ClassRegistry::init('Roles.DefaultRolePermission');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DefaultRolePermission);

		parent::tearDown();
	}

/**
 * testGetPluginByFolderError
 *
 * @return void
 */
	public function testIndex() {
		$this->assertTrue(true);
	}

}
