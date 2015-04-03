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
App::uses('Role', 'Roles.Model');

/**
 * RolesController Test Case
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Roles\Test\Case\Controller
 */
class RolesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.Session',
		'plugin.net_commons.site_setting',
		'plugin.pages.page',
		'plugin.roles.role',
		'plugin.users.user',
	);

/**
 * Roles data for testing
 *
 * @var array
 */
	public static $roles = [
		'system_administrator' => [
			'id' => 1,
			'username' => 'admin',
			'password' => 'admin',
			'role_key' => 'system_administrator',
		],
		'editor' => [
			'id' => 3,
			'username' => 'editor',
			'password' => 'editor',
			'role_key' => 'editor',
		],
		'visitor' => [
			'id' => 5,
			'username' => 'visitor',
			'password' => 'visitor',
			'role_key' => 'visitor',
		],
	];

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

/**
 * Login as given roles
 *
 * @param CakeTestCase $test CakeTestCase instance
 * @param string $role role key
 * @return void
 */
	public static function login(CakeTestCase $test, $role = Role::ROLE_KEY_SYSTEM_ADMINISTRATOR) {
		$test->controller->Components->Auth
			->staticExpects($test->any())
			->method('user')
			->will($test->returnCallback(function () use ($role) {
				CakeSession::write('Auth.User', self::$roles[$role]);
				return self::$roles[$role];
			}));

		$test->controller->Components->Auth->login([
			'username' => self::$roles[$role]['username'],
			'password' => self::$roles[$role]['password'],
		]);
	}
}
