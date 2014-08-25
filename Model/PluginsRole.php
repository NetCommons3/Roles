<?php
/**
 * PluginsRole Model
 *
 * @property Role $Role
 * @property Plugin $Plugin
 * @property LanguagesPlugin $LanguagesPlugin
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 * @package     app.Plugin.Roles.Model
 */

App::uses('RolesAppModel', 'Roles.Model');

/**
 * PluginsRole Model
 *
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package     app.Plugin.Roles.Model
 */
class PluginsRole extends RolesAppModel {

/**
 * constant value for frame
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 */
	const PLUGIN_TYPE_FOR_FRAME = '1';

/**
 * constant value for control panel
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 */
	const PLUGIN_TYPE_FOR_CONTROL_PANEL = '2';

/**
 * composer.json file name
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @var     string
 */
	public $composerJsonName = 'composer.json';

/**
 * Validation rules
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @var     array
 */
	public $validate = array(
		'role_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'plugin_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

/**
 * belongsTo associations
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @var     array
 */
	public $belongsTo = array(
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Plugin' => array(
			'className' => 'Plugin',
			'foreignKey' => 'plugin_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'LanguagesPlugin' => array(
			'className' => 'LanguagesPlugin',
			//'foreignKey' => 'plugin_id',
			'foreignKey' => false,
			'conditions' => array('LanguagesPlugin.plugin_id=Plugin.id'),
		),
	);

/**
 * Get plugin data from type and roleId, $langId
 *
 * @param mixed $type array|int 1:for frame/2:for controll panel
 * @param int $roleId roles.id
 * @param int $langId languages.id
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return  mixed array|bool
 */
	public function getPlugins($type, $roleId, $langId) {
		if (! $roleId || ! $langId) {
			return false;
		}

		//ロールIDのセット
		$roleId = (int)$roleId;

		//plugins_languagesテーブルの取得
		$langId = (int)$langId;
		$this->belongsTo['LanguagesPlugin']['conditions']['LanguagesPlugin.language_id'] = $langId;

		//pluginsテーブルの取得
		$plugins = $this->find('all', array(
			'conditions' => array(
				'Plugin.type' => $type,
				'Role.id' => $roleId
			),
			'order' => $this->name . '.id',
		));

		return $plugins;
	}

/**
 * Get composer of plugin
 *
 * @param array $plugin Plugin
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return  array composer
 */
	public function getComposer($plugin) {
		//composerから情報を取得する
		$composer = array();

		$folder = Inflector::camelize($plugin['Plugin']['folder']);
		$path = APP . 'Plugin' . DS . $folder . DS . $this->composerJsonName;

		if (file_exists($path)) {
			$file = new File($path);
			$json = $file->read();
			$file->close();

			$composer = json_decode($json, true);
		}
		if (! isset($composer['version'])) {
			$composer['version'] = '@dev';
		}

		return $composer;
	}

/**
 * Get plugin data from folder and roomId, langId
 *
 * @param int $folder plugins.folder
 * @param int $roleId roles.id
 * @param int $langId languages.id
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since   NetCommons 3.0.0.0
 * @return  int blocks.id
 */
	public function getPluginByFolder($folder, $roleId, $langId) {
		if (! $roleId || ! $langId) {
			return false;
		}

		//ロールIDのセット
		$roleId = (int)$roleId;

		//plugins_languagesテーブルの取得
		$langId = (int)$langId;
		$this->belongsTo['LanguagesPlugin']['conditions']['LanguagesPlugin.language_id'] = $langId;

		//pluginsテーブルの取得
		$plugin = $this->find('first', array(
			'conditions' => array(
				'Plugin.folder' => $folder,
				'Role.id' => $roleId
			)
		));

		return $plugin;
	}

}
