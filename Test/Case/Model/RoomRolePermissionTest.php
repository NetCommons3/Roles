<?php
/**
 * RoomRolePermission Test Case
 *
* @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
* @link     http://www.netcommons.org NetCommons Project
* @license  http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('RoomRolePermission', 'Roles.Model');

/**
 * Summary for RoomRolePermission Test Case
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

}
