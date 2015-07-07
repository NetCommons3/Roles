<?php
/**
 * Init migration
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

/**
 * Init migration
 *
 * @package NetCommons\Roles\Config\Migration
 */
class Init extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'init';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'default_role_permissions' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
					'role_key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'type' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Role type
e.g.) room_role, announcement_block_role, bbs_block_role
', 'charset' => 'utf8'),
					'permission' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Permission name
e.g.) create_page, edit_other_content, post_top_article', 'charset' => 'utf8'),
					'value' => array('type' => 'boolean', 'null' => false, 'default' => null),
					'fixed' => array('type' => 'boolean', 'null' => false, 'default' => null),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'roles' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6, 'unsigned' => false),
					'key' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Key of the role.', 'charset' => 'utf8'),
					'type' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'Type of the role
1: User role, 2: Room role, 2: Group role'),
					'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Name of the role.
e.g.) Administrator, User Manager, Chief, User
', 'charset' => 'utf8'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
			),
		),
		'down' => array(
			'drop_table' => array(
				'default_role_permissions', 'roles'
			),
		),
	);

/**
 * Records keyed by model name.
 *
 * @var array $records
 */
	public $records = array(
		'DefaultRolePermission' => array(
			//ルーム管理者
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
			//編集長
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
			//編集者
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
			//一般
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
				'value' => 0,
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
			//参観者
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
		),

		'Role' => array(
			array(
				'id' => 1,
				'language_id' => 2,
				'key' => 'system_administrator',
				'type' => 1,
				'name' => 'システム管理者',
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
				'name' => 'ルーム管理者',
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
				'name' => '編集長',
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
				'name' => '編集者',
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
				'name' => '一般',
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
				'name' => '参観者',
				'created_user' => 1,
				'created' => false,
				'modified_user' => 1,
				'modified' => false,
			)
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
		if ($direction === 'down') {
			return true;
		}

		foreach ($this->records as $model => $records) {
			if (!$this->updateRecords($model, $records)) {
				return false;
			}
		}

		return true;
	}

/**
 * Update model records
 *
 * @param string $model model name to update
 * @param string $records records to be stored
 * @param string $scope ?
 * @return bool Should process continue
 */
	public function updateRecords($model, $records, $scope = null) {
		$Model = $this->generateModel($model);
		foreach ($records as $record) {
			$Model->create();
			if (!$Model->save($record, false)) {
				return false;
			}
		}

		return true;
	}
}
