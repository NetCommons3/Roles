<?php
/**
 * Migration file
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

/**
 * Migration file
 *
 * フィールド名を変更
 * * is_systemized -> is_system
 *
 * @package NetCommons\UserAttributes\Config\Migration
 * @link https://github.com/NetCommons3/Roles/issues/9
 */
class RenameFieldToIsSystem extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'rename_field_to_is_system';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_field' => array(
				'roles' => array(
					'is_system' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '0: normalized, 1: systemized', 'after' => 'name'),
				),
			),
			'drop_field' => array(
				'roles' => array('is_systemized'),
			),
		),
		'down' => array(
			'drop_field' => array(
				'roles' => array('is_system'),
			),
			'create_field' => array(
				'roles' => array(
					'is_systemized' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '0: normalized, 1: systemized'),
				),
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
		return true;
	}
}
