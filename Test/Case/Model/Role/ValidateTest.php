<?php
/**
 * Role::validates()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsValidateTest', 'NetCommons.TestSuite');
App::uses('RoleFixture', 'Roles.Test/Fixture');

/**
 * Role::validates()のテスト
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Roles\Test\Case\Model\Role
 */
class RoleValidateTest extends NetCommonsValidateTest {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.roles.role'
	);

/**
 * Plugin name
 *
 * @var array
 */
	public $plugin = 'roles';

/**
 * Model name
 *
 * @var array
 */
	protected $_modelName = 'Role';

/**
 * Method name
 *
 * @var array
 */
	protected $_methodName = 'validates';

/**
 * ValidationErrorのDataProvider
 *
 * #### 戻り値
 *  - field フィールド名
 *  - value セットする値
 *  - message エラーメッセージ
 *  - overwrite 上書きするデータ
 *
 * @return array
 */
	public function dataProviderValidationError() {
		$data['Role'] = (new RoleFixture())->records[0];

		return array(
			array($data, 'language_id', 'a', __d('net_commons', 'Invalid request.')),
			array($data, 'type', 'b', __d('net_commons', 'Invalid request.')),
			array($data, 'type', '3', __d('net_commons', 'Invalid request.')),
			array($data, 'name', '', __d('net_commons', 'Invalid request.')),
		);
	}

}
