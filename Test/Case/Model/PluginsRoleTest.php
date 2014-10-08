<?php
/**
 * PluginsRole Test Case
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 */

App::uses('PluginsRole', 'Roles.Model');

/**
 * PluginsRole Test Case
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package Roles\Test\Model\Case
 */
class PluginsRoleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @var     array
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
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return  void
 */
	public function setUp() {
		parent::setUp();
		$this->PluginsRole = ClassRegistry::init('Roles.PluginsRole');
	}

/**
 * tearDown method
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return  void
 */
	public function tearDown() {
		unset($this->PluginsRole);
		parent::tearDown();
	}

/**
 * testIndex
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return  void
 */
	public function testIndex() {
		$this->assertTrue(true);
	}

/**
 * testGetPluginData
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return  void
 */
	public function testGetPlugins() {
		$this->PluginsRole->composerJsonName = 'composer_test.json';

		$roleKey = 'system_administrator';
		$langId = 2;
		$type = PluginsRole::PLUGIN_TYPE_FOR_CONTROL_PANEL;
		$plugins = $this->PluginsRole->getPlugins($type, $roleKey, $langId);

		$this->assertTrue(is_array($plugins));

		$composer = $this->PluginsRole->getComposer($plugins[0]);
		$this->assertTrue(is_array($composer));
	}

/**
 * testGetPluginsError
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return  void
 */
	public function testGetPluginsError() {
		$this->PluginsRole->composerJsonName = 'composer_test.json';

		$roleId = 0;
		$langId = 0;
		$type = PluginsRole::PLUGIN_TYPE_FOR_CONTROL_PANEL;
		$plugins = $this->PluginsRole->getPlugins($type, $roleId, $langId);

		$this->assertFalse($plugins);
	}

/**
 * testGetPluginByFolder
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return  void
 */
	public function testGetPluginByKey() {
		$this->PluginsRole->composerJsonName = 'composer_test.json';

		$roleId = 1;
		$langId = 2;
		$key = 'roles';
		$plugins = $this->PluginsRole->getPluginByKey($key, $roleId, $langId);

		$this->assertTrue(is_array($plugins));
	}

/**
 * testGetPluginByFolderError
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return  void
 */
	public function testGetPluginByKeyError() {
		$this->PluginsRole->composerJsonName = 'composer_test.json';

		$roleId = 0;
		$langId = 0;
		$key = 'roles';
		$plugins = $this->PluginsRole->getPluginByKey($key, $roleId, $langId);

		$this->assertFalse($plugins);
	}

}
