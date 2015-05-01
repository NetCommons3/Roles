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
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'language_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6),
		'key' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Key of the role.', 'charset' => 'utf8'),
		'type' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'Type of the role
1: User role, 2: Room role, 2: Group role'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Name of the role.
e.g.) Administrator, User Manager, Chief, User
', 'charset' => 'utf8'),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'language_id' => 2,
			'key' => 'system_administrator',
			'type' => 1,
			'name' => 'system_administrator name',
			'created_user' => 1,
			'created' => false,
			'modified_user' => 1,
			'modified' => false,
		),
		array(
			'id' => 2,
			'language_id' => 2,
			'key' => 'room_administrator',
			'type' => 2,
			'name' => 'room_administrator name',
			'created_user' => 1,
			'created' => false,
			'modified_user' => 1,
			'modified' => false,
		),
		array(
			'id' => 3,
			'language_id' => 2,
			'key' => 'chief_editor',
			'type' => 2,
			'name' => 'chief_editor name',
			'created_user' => 1,
			'created' => false,
			'modified_user' => 1,
			'modified' => false,
		),
		array(
			'id' => 4,
			'language_id' => 2,
			'key' => 'editor',
			'type' => 2,
			'name' => 'editor name',
			'created_user' => 1,
			'created' => false,
			'modified_user' => 1,
			'modified' => false,
		),
		array(
			'id' => 5,
			'language_id' => 2,
			'key' => 'general_user',
			'type' => 2,
			'name' => 'general_user name',
			'created_user' => 1,
			'created' => false,
			'modified_user' => 1,
			'modified' => false,
		),
		array(
			'id' => 6,
			'language_id' => 2,
			'key' => 'visitor',
			'type' => 2,
			'name' => 'visitor name',
			'created_user' => 1,
			'created' => false,
			'modified_user' => 1,
			'modified' => false,
		)
	);

}
