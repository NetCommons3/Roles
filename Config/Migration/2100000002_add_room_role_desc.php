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
class AddRoomRoleDesc extends NetCommonsMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'add_room_role_desc';

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
		'Role' => array(
			//ルーム内の役割
			//--日本語
			array(
				'language_id' => 2, 'key' => 'room_administrator', 'type' => 2,
				'description' => 'RoomRoleDesc.room_administrator',
			),
			array(
				'language_id' => 2, 'key' => 'chief_editor', 'type' => 2,
				'description' => 'RoomRoleDesc.chief_editor',
			),
			array(
				'language_id' => 2, 'key' => 'editor', 'type' => 2,
				'description' => 'RoomRoleDesc.editor',
			),
			array(
				'language_id' => 2, 'key' => 'general_user', 'type' => 2,
				'description' => 'RoomRoleDesc.general_user',
			),
			array(
				'language_id' => 2, 'key' => 'visitor', 'type' => 2,
				'description' => 'RoomRoleDesc.visitor',
			),
			//--英語
			array(
				'language_id' => 1, 'key' => 'room_administrator', 'type' => 2,
				'description' => 'RoomRoleDesc.room_administrator',
			),
			array(
				'language_id' => 1, 'key' => 'chief_editor', 'type' => 2,
				'description' => 'RoomRoleDesc.chief_editor',
			),
			array(
				'language_id' => 1, 'key' => 'editor', 'type' => 2,
				'description' => 'RoomRoleDesc.editor',
			),
			array(
				'language_id' => 1, 'key' => 'general_user', 'type' => 2,
				'description' => 'RoomRoleDesc.general_user',
			),
			array(
				'language_id' => 1, 'key' => 'visitor', 'type' => 2,
				'description' => 'RoomRoleDesc.visitor',
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

		$Role = $this->generateModel('Role');
		foreach ($this->records['Role'] as $i => $record) {
			$update = array(
				'description' => '\'' . $record['description'] . '\''
			);
			$conditions = array(
				'language_id' => $record['language_id'],
				'key' => $record['key'],
				'type' => $record['type'],
			);
			if (! $Role->updateAll($update, $conditions)) {
				return false;
			}
		}
		return true;
	}
}
