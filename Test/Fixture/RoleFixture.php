<?php
/**
 * RoleFixture
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

/**
 * RoleFixture
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Roles\Test\Fixture
 */
class RoleFixture extends CakeTestFixture {

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		//会員の権限
		array(
			'language_id' => 2, 'key' => 'system_administrator', 'type' => 1, 'name' => 'System administrator', 'is_system' => 1,
		),
		array(
			'language_id' => 2,	'key' => 'administrator', 'type' => 1, 'name' => 'Site administrator', 'is_system' => 1,
		),
		array(
			'language_id' => 2, 'key' => 'common_user', 'type' => 1, 'name' => 'Common user', 'is_system' => 1,
		),
		//ルーム内の役割
		array(
			'language_id' => 2, 'key' => 'room_administrator', 'type' => 2, 'name' => 'Room Manager', 'is_system' => 1,
		),
		array(
			'language_id' => 2, 'key' => 'chief_editor', 'type' => 2, 'name' => 'Chief editor', 'is_system' => 1,
		),
		array(
			'language_id' => 2, 'key' => 'editor', 'type' => 2, 'name' => 'Editor', 'is_system' => 1,
		),
		array(
			'language_id' => 2, 'key' => 'general_user', 'type' => 2, 'name' => 'General user', 'is_system' => 1,
		),
		array(
			'language_id' => 2, 'key' => 'visitor', 'type' => 2, 'name' => 'Visitor', 'is_system' => 1,
		)
	);

/**
 * Initialize the fixture.
 *
 * @return void
 */
	public function init() {
		require_once App::pluginPath('Roles') . 'Config' . DS . 'Schema' . DS . 'schema.php';
		$this->fields = (new RolesSchema())->tables[Inflector::tableize($this->name)];

		parent::init();
	}

}
