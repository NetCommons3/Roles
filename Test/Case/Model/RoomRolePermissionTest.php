<?php
/**
 * RoomRolePermission Test Case
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('RoomRolePermission', 'Roles.Model');

/**
 * RoomRolePermission Test Case
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Roles\Test\Case\Model
 */
class RoomRolePermissionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.roles.room_role_permission',
		'plugin.roles.roles_room'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RoomRolePermission = ClassRegistry::init('Roles.RoomRolePermission');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RoomRolePermission);

		parent::tearDown();
	}

/**
 * testIndex
 *
 * @return  void
 */
	public function testIndex() {
		$this->assertTrue(true);
	}

}
