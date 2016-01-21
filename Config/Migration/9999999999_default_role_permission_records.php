<?php
/**
 * Insert records migration
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsMigration', 'NetCommons.Config/Migration');

/**
 * Insert records migration
 *
 * @package NetCommons\Roles\Config\Migration
 */
class DefaultRolePermissionRecords extends NetCommonsMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'default_role_permission_records';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(),
		'down' => array(),
	);

/**
 * Insert records
 *
 * @var array $migration
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
}
