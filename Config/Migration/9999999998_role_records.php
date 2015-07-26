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
class RoleRecords extends NetCommonsMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'role_records';

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
 * Records keyed by model name.
 *
 * @var array $records
 */
	public $records = array(
		'Role' => array(
			//会員の権限
			array(
				'id' => 1,
				'language_id' => 2,
				'key' => 'system_administrator',
				'type' => 1,
				'name' => 'システム管理者',
			),
			array(
				'language_id' => 2,
				'key' => 'user_administrator',
				'type' => 1,
				'name' => '会員管理者',
			),
			array(
				'language_id' => 2,
				'key' => 'chief_user',
				'type' => 1,
				'name' => '主任',
			),
			array(
				'language_id' => 2,
				'key' => 'general_user',
				'type' => 1,
				'name' => '一般',
			),
			array(
				'language_id' => 2,
				'key' => 'guest_user',
				'type' => 1,
				'name' => 'ゲスト',
			),

			//ルーム内の役割
			array(
				'language_id' => 2,
				'key' => 'room_administrator',
				'type' => 2,
				'name' => 'ルーム管理者',
			),
			array(
				'language_id' => 2,
				'key' => 'chief_editor',
				'type' => 2,
				'name' => '編集長',
			),
			array(
				'language_id' => 2,
				'key' => 'editor',
				'type' => 2,
				'name' => '編集者',
			),
			array(
				'language_id' => 2,
				'key' => 'general_user',
				'type' => 2,
				'name' => '一般',
			),
			array(
				'language_id' => 2,
				'key' => 'visitor',
				'type' => 2,
				'name' => '参観者',
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
}
