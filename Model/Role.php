<?php
/**
 * Role Model
 *
 * @property Language $Language
 * @property Plugin $Plugin
 * @property Room $Room
 * @property UserAttribute $UserAttribute
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('RolesAppModel', 'Roles.Model');

/**
 * Role Model
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Roles\Model
 */
class Role extends RolesAppModel {

/**
 * Role types
 */
	const
		ROLE_TYPE_USER = '1',
		ROLE_TYPE_ROOM = '2',
		ROLE_TYPE_GROUP = '3';

/**
 * Role keys
 *
 * @var const
 */
	//後で、ROOM_ROLE_KEYに置き換える
	const
		ROLE_KEY_SYSTEM_ADMINISTRATOR = 'system_administrator',
		ROLE_KEY_EDITOR = 'editor',
		ROLE_KEY_VISITOR = 'visitor';

/**
 * Room Role keys
 *
 * @var const
 */
	const
		ROOM_ROLE_KEY_ROOM_ADMINISTRATOR = 'room_administrator',
		ROOM_ROLE_KEY_CHIEF_EDITOR = 'chief_editor',
		ROOM_ROLE_KEY_EDITOR = 'editor',
		ROOM_ROLE_KEY_GENERAL_USER = 'general_user',
		ROOM_ROLE_KEY_VISITOR = 'visitor';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'language_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'type' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Language' => array(
			'className' => 'M17n.Language',
			'foreignKey' => 'language_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Plugin' => array(
			'className' => 'Plugin',
			'joinTable' => 'plugins_roles',
			'foreignKey' => 'role_id',
			'associationForeignKey' => 'plugin_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Room' => array(
			'className' => 'Rooms.Room',
			'joinTable' => 'roles_rooms',
			'foreignKey' => 'role_id',
			'associationForeignKey' => 'room_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		//'UserAttribute' => array(
		//	'className' => 'UserAttribute',
		//	'joinTable' => 'roles_user_attributes',
		//	'foreignKey' => 'role_id',
		//	'associationForeignKey' => 'user_attribute_id',
		//	'unique' => 'keepExisting',
		//	'conditions' => '',
		//	'fields' => '',
		//	'order' => '',
		//	'limit' => '',
		//	'offset' => '',
		//	'finderQuery' => '',
		//)
	);

}
