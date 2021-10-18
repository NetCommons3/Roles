<?php
/**
 * 登録フォームのフォーム投稿の通知をルーム管理には通知せずに本人のみに設定できるようにする
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsMigration', 'NetCommons.Config/Migration');

/**
 * 登録フォームのフォーム投稿の通知をルーム管理には通知せずに本人のみに設定できるようにする
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Roles\Config\Migration
 * @see https://github.com/NetCommons3/NetCommons3/issues/1669
 */
class UpdateMailAnswerReceivable extends NetCommonsMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'update_mail_answer_receivable';

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
		if ($direction === 'up') {
			$update = array(
				'fixed' => '\'0\'',
				'modified' => '\'' . gmdate('Y-m-d H:i:s') . '\''
			);
			$conditions = array(
				'role_key' => 'room_administrator',
				'permission' => 'mail_answer_receivable',
			);
			$DefaultRolePermission = $this->generateModel('DefaultRolePermission');
			$DefaultRolePermission->updateAll($update, $conditions);
		}
		return true;
	}
}
