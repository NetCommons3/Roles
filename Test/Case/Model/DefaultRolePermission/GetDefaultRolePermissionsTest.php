<?php
/**
 * DefaultRolePermission::getDefaultRolePermissions()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsGetTest', 'NetCommons.TestSuite');

/**
 * DefaultRolePermission::getDefaultRolePermissions()のテスト
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Roles\Test\Case\Model\DefaultRolePermission
 */
class DefaultRolePermissionGetDefaultRolePermissionsTest extends NetCommonsGetTest {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.roles.default_role_permission4test',
		'plugin.roles.role',
	);

/**
 * Plugin name
 *
 * @var string
 */
	public $plugin = 'roles';

/**
 * Model name
 *
 * @var string
 */
	protected $_modelName = 'DefaultRolePermission';

/**
 * Method name
 *
 * @var string
 */
	protected $_methodName = 'getDefaultRolePermissions';

/**
 * getDefaultRolePermissions()のテスト
 *
 * @return void
 */
	public function testGetDefaultRolePermissions() {
		$model = $this->_modelName;
		$methodName = $this->_methodName;

		//データ生成
		$roleKey = 'common_user';
		$permission = 'group_creatable';
		$type = 'user_role';

		//テスト実施
		$result = $this->$model->$methodName($roleKey, $permission, $type);

		//チェック
		$expected = array(
			'group_creatable' => array(
				'id' => '73',
				'role_key' => 'common_user',
				'type' => 'user_role',
				'permission' => 'group_creatable',
				'value' => true,
				'fixed' => false,
				'created_user' => null,
				'created' => null,
				'modified_user' => null,
				'modified' => null,
			),
		);
		$this->assertEquals($result, $expected);
	}

/**
 * 存在しないデータのテスト
 *
 * @return void
 */
	public function testRoleKeyError() {
		$model = $this->_modelName;
		$methodName = $this->_methodName;

		//データ生成
		$roleKey = 'aaaaaa';
		$permission = 'aaaaaa';
		$type = 'user_role';

		//テスト実施
		$result = $this->$model->$methodName($roleKey, $permission, $type);

		//チェック
		$expected = array();
		$this->assertEquals($result, $expected);
	}

}
