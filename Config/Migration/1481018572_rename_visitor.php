<?php
/**
 * 参観者からゲストに修正
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsMigration', 'NetCommons.Config/Migration');

/**
 * 参観者からゲストに修正
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Roles\Config\Migration
 */
class RenameVisitor extends NetCommonsMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'add_table_for_m17n_1';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
		),
		'down' => array(
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
		$Roles = $this->generateModel('Roles');
		if ($direction === 'up') {
			$update = array(
				'name' => '\'ゲスト\''
			);
			$conditions = array(
				'language_id' => 2, 'key' => 'visitor', 'type' => 2, 'is_system' => 1,
			);
			$Roles->updateAll($update, $conditions);

			$update = array(
				'name' => '\'Guest\''
			);
			$conditions = array(
				'language_id' => 1, 'key' => 'visitor', 'type' => 2, 'is_system' => 1,
			);
			$Roles->updateAll($update, $conditions);
		}
		return true;
	}
}
