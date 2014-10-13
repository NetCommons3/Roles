<?php
/**
 * PluginsRole Test Case
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('PluginsRole', 'Roles.Model');

/**
 * PluginsRole Test Case
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Roles\Test\Case\Model
 */
class PluginsRoleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.roles.language',
		'plugin.roles.plugin',
		'plugin.roles.plugins_role',
		'plugin.roles.role',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PluginsRole = ClassRegistry::init('Roles.PluginsRole');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PluginsRole);
		parent::tearDown();
	}

/**
 * testGetPluginData
 *
 * @return void
 */
	public function testGetPlugins() {
		$roleKey = 'system_administrator';
		$langId = 2;
		$type = PluginsRole::PLUGIN_TYPE_FOR_CONTROL_PANEL;
		$plugins = $this->PluginsRole->getPlugins($type, $roleKey, $langId);

		$this->assertTrue(is_array($plugins));
	}

/**
 * testGetPluginsError
 *
 * @return void
 */
	public function testGetPluginsError() {
		$roleId = 0;
		$langId = 0;
		$type = PluginsRole::PLUGIN_TYPE_FOR_CONTROL_PANEL;
		$plugins = $this->PluginsRole->getPlugins($type, $roleId, $langId);

		$this->assertFalse($plugins);
	}

/**
 * testGetPluginByFolder
 *
 * @return void
 */
	public function testGetPluginByKey() {
		$roleId = 1;
		$langId = 2;
		$key = 'roles';
		$plugins = $this->PluginsRole->getPluginByKey($key, $roleId, $langId);

		$this->assertTrue(is_array($plugins));
	}

/**
 * testGetPluginByFolderError
 *
 * @return void
 */
	public function testGetPluginByKeyError() {
		$roleId = 0;
		$langId = 0;
		$key = 'roles';
		$plugins = $this->PluginsRole->getPluginByKey($key, $roleId, $langId);

		$this->assertFalse($plugins);
	}

}
