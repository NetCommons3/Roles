<?php
/**
 * DefaultRolePermissionFixture
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

/**
 * DefaultRolePermissionFixture
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Roles\Test\Fixture
 */
class DefaultRolePermissionFixture extends CakeTestFixture {

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'role_key' => 'room_administrator',
			'type' => 'room_role',
			'permission' => 'page_editable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'room_administrator',
			'type' => 'room_role',
			'permission' => 'block_editable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'room_administrator',
			'type' => 'room_role',
			'permission' => 'content_readable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'room_administrator',
			'type' => 'room_role',
			'permission' => 'content_creatable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'room_administrator',
			'type' => 'room_role',
			'permission' => 'content_editable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'room_administrator',
			'type' => 'room_role',
			'permission' => 'content_publishable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'room_administrator',
			'type' => 'room_role',
			'permission' => 'content_comment_creatable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'room_administrator',
			'type' => 'room_role',
			'permission' => 'content_comment_editable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'room_administrator',
			'type' => 'room_role',
			'permission' => 'content_comment_publishable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'room_administrator',
			'type' => 'room_role',
			'permission' => 'block_permission_editable',
			'value' => 1,
			'fixed' => 1,
		),

		array(
			'role_key' => 'chief_editor',
			'type' => 'room_role',
			'permission' => 'page_editable',
			'value' => 1,
			'fixed' => 0,
		),
		array(
			'role_key' => 'chief_editor',
			'type' => 'room_role',
			'permission' => 'block_editable',
			'value' => 1,
			'fixed' => 0,
		),
		array(
			'role_key' => 'chief_editor',
			'type' => 'room_role',
			'permission' => 'content_readable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'chief_editor',
			'type' => 'room_role',
			'permission' => 'content_creatable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'chief_editor',
			'type' => 'room_role',
			'permission' => 'content_editable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'chief_editor',
			'type' => 'room_role',
			'permission' => 'content_publishable',
			'value' => 1,
			'fixed' => 0,
		),
		array(
			'role_key' => 'chief_editor',
			'type' => 'room_role',
			'permission' => 'content_comment_creatable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'chief_editor',
			'type' => 'room_role',
			'permission' => 'content_comment_editable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'chief_editor',
			'type' => 'room_role',
			'permission' => 'content_comment_publishable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'chief_editor',
			'type' => 'room_role',
			'permission' => 'block_permission_editable',
			'value' => 0,
			'fixed' => 1,
		),

		array(
			'role_key' => 'editor',
			'type' => 'room_role',
			'permission' => 'page_editable',
			'value' => 0,
			'fixed' => 0,
		),
		array(
			'role_key' => 'editor',
			'type' => 'room_role',
			'permission' => 'block_editable',
			'value' => 0,
			'fixed' => 0,
		),
		array(
			'role_key' => 'editor',
			'type' => 'room_role',
			'permission' => 'content_readable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'editor',
			'type' => 'room_role',
			'permission' => 'content_creatable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'editor',
			'type' => 'room_role',
			'permission' => 'content_editable',
			'value' => 1,
			'fixed' => 0,
		),
		array(
			'role_key' => 'editor',
			'type' => 'room_role',
			'permission' => 'content_publishable',
			'value' => 0,
			'fixed' => 0,
		),
		array(
			'role_key' => 'editor',
			'type' => 'room_role',
			'permission' => 'content_comment_creatable',
			'value' => 1,
			'fixed' => 0,
		),
		array(
			'role_key' => 'editor',
			'type' => 'room_role',
			'permission' => 'content_comment_editable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'editor',
			'type' => 'room_role',
			'permission' => 'content_comment_publishable',
			'value' => 0,
			'fixed' => 0,
		),
		array(
			'role_key' => 'editor',
			'type' => 'room_role',
			'permission' => 'block_permission_editable',
			'value' => 0,
			'fixed' => 1,
		),

		array(
			'role_key' => 'general_user',
			'type' => 'room_role',
			'permission' => 'page_editable',
			'value' => 0,
			'fixed' => 1,
		),
		array(
			'role_key' => 'general_user',
			'type' => 'room_role',
			'permission' => 'block_editable',
			'value' => 0,
			'fixed' => 1,
		),
		array(
			'role_key' => 'general_user',
			'type' => 'room_role',
			'permission' => 'content_readable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'general_user',
			'type' => 'room_role',
			'permission' => 'content_creatable',
			'value' => 1,
			'fixed' => 0,
		),
		array(
			'role_key' => 'general_user',
			'type' => 'room_role',
			'permission' => 'content_editable',
			'value' => 0,
			'fixed' => 1,
		),
		array(
			'role_key' => 'general_user',
			'type' => 'room_role',
			'permission' => 'content_publishable',
			'value' => 0,
			'fixed' => 1,
		),
		array(
			'role_key' => 'general_user',
			'type' => 'room_role',
			'permission' => 'content_comment_creatable',
			'value' => 1,
			'fixed' => 0,
		),
		array(
			'role_key' => 'general_user',
			'type' => 'room_role',
			'permission' => 'content_comment_editable',
			'value' => 0,
			'fixed' => 1,
		),
		array(
			'role_key' => 'general_user',
			'type' => 'room_role',
			'permission' => 'content_comment_publishable',
			'value' => 0,
			'fixed' => 1,
		),
		array(
			'role_key' => 'general_user',
			'type' => 'room_role',
			'permission' => 'block_permission_editable',
			'value' => 0,
			'fixed' => 1,
		),

		array(
			'role_key' => 'visitor',
			'type' => 'room_role',
			'permission' => 'page_editable',
			'value' => 0,
			'fixed' => 1,
		),
		array(
			'role_key' => 'visitor',
			'type' => 'room_role',
			'permission' => 'block_editable',
			'value' => 0,
			'fixed' => 1,
		),
		array(
			'role_key' => 'visitor',
			'type' => 'room_role',
			'permission' => 'content_readable',
			'value' => 1,
			'fixed' => 1,
		),
		array(
			'role_key' => 'visitor',
			'type' => 'room_role',
			'permission' => 'content_creatable',
			'value' => 0,
			'fixed' => 1,
		),
		array(
			'role_key' => 'visitor',
			'type' => 'room_role',
			'permission' => 'content_editable',
			'value' => 0,
			'fixed' => 1,
		),
		array(
			'role_key' => 'visitor',
			'type' => 'room_role',
			'permission' => 'content_publishable',
			'value' => 0,
			'fixed' => 1,
		),
		array(
			'role_key' => 'visitor',
			'type' => 'room_role',
			'permission' => 'content_comment_creatable',
			'value' => 0,
			'fixed' => 0,
		),
		array(
			'role_key' => 'visitor',
			'type' => 'room_role',
			'permission' => 'content_comment_editable',
			'value' => 0,
			'fixed' => 1,
		),
		array(
			'role_key' => 'visitor',
			'type' => 'room_role',
			'permission' => 'content_comment_publishable',
			'value' => 0,
			'fixed' => 1,
		),
		array(
			'role_key' => 'visitor',
			'type' => 'room_role',
			'permission' => 'block_permission_editable',
			'value' => 0,
			'fixed' => 1,
		),

		//メール設定編集権限
		array('role_key' => 'room_administrator', 'type' => 'room_role', 'permission' => 'mail_editable', 'value' => '1', 'fixed' => '1', ),
		array('role_key' => 'chief_editor', 'type' => 'room_role', 'permission' => 'mail_editable', 'value' => '1', 'fixed' => '1', ),
		array('role_key' => 'editor', 'type' => 'room_role', 'permission' => 'mail_editable', 'value' => '0', 'fixed' => '1', ),
		array('role_key' => 'general_user', 'type' => 'room_role', 'permission' => 'mail_editable', 'value' => '0', 'fixed' => '1', ),
		array('role_key' => 'visitor', 'type' => 'room_role', 'permission' => 'mail_editable', 'value' => '0', 'fixed' => '1', ),
	);

/**
 * Initialize the fixture.
 *
 * @return void
 */
	public function init() {
		require_once App::pluginPath('Roles') . 'Config' . DS . 'Schema' . DS . 'schema.php';
		$this->fields = (new RolesSchema())->tables[Inflector::tableize($this->name)];

		require_once App::pluginPath('Roles') . 'Config' . DS . 'Migration' . DS . '1469603399_records.php';
		$this->records = (new RolesRecords())->records[$this->name];

		parent::init();
	}

}
