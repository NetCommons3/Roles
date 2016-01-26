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
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'language_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6, 'unsigned' => false),
		'key' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Key of the role.', 'charset' => 'utf8'),
		'type' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'Type of the role
1: User role, 2: Room role, 2: Group role'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Name of the role.
e.g.) Administrator, User Manager, Chief, User
', 'charset' => 'utf8'),
		'is_system' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '0: normalized, 1: systemized'),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
	);

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

}
