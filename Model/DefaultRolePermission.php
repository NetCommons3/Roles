<?php
/**
 * DefaultRolePermission Model
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('RolesAppModel', 'Roles.Model');

/**
 * DefaultRolePermission Model
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Roles\Model
 */
class DefaultRolePermission extends RolesAppModel {

/**
 * ルーム権限Type
 *
 * @var const
 */
	const TYPE_ROOM_ROLE = 'room_role';

/**
 * 会員権限Type
 *
 * @var const
 */
	const TYPE_USER_ROLE = 'user_role';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array();

/**
 * Behaviors
 *
 * @var array
 */
	public $actsAs = array(
		'NetCommons.NetCommonsCache',
	);

/**
 * Called during validation operations, before validation. Please note that custom
 * validation rules can be defined in $validate.
 *
 * @param array $options Options passed from Model::save().
 * @return bool True if validate operation should continue, false to abort
 * @link http://book.cakephp.org/2.0/en/models/callback-methods.html#beforevalidate
 * @see Model::save()
 */
	public function beforeValidate($options = array()) {
		$this->validate = ValidateMerge::merge($this->validate, array(
			'role_key' => array(
				'notBlank' => array(
					'rule' => array('notBlank'),
					'message' => __d('net_commons', 'Invalid request.'),
				),
			),
			'type' => array(
				'notBlank' => array(
					'rule' => array('notBlank'),
					'message' => __d('net_commons', 'Invalid request.'),
				),
			),
			'permission' => array(
				'notBlank' => array(
					'rule' => array('notBlank'),
					'message' => __d('net_commons', 'Invalid request.'),
				),
			),
			'value' => array(
				'boolean' => array(
					'rule' => array('boolean'),
					'message' => __d('net_commons', 'Invalid request.'),
				),
			),
			'fixed' => array(
				'boolean' => array(
					'rule' => array('boolean'),
					'message' => __d('net_commons', 'Invalid request.'),
				),
			),
		));

		return parent::beforeValidate($options);
	}

/**
 * デフォルトパーミッションデータ取得
 *
 * @param string $roleKey ロールキー
 * @param string|array $permission パーミッション
 * @param string $type タイプ
 * @return array
 */
	public function getDefaultRolePermissions($roleKey, $permission, $type = self::TYPE_ROOM_ROLE) {
		$permissions = $this->cacheFindQuery('all', array(
			'recursive' => -1,
			'conditions' => array(
				'permission' => $permission,
				'role_key' => $roleKey,
				'type' => $type
			)
		));

		if (! $permissions) {
			return $permissions;
		}

		$result = [];
		foreach ($permissions as $permission) {
			$key = $permission['DefaultRolePermission']['permission'];
			$result[$key] = $permission['DefaultRolePermission'];
		}
		return $result;
	}

}
