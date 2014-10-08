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
 */

App::uses('RolesAppModel', 'Roles.Model');

/**
 * PluginsRole Model
 *
 * @author      Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package     Roles\Model
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
 * belongsTo associations
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @var     array
 */
	public $belongsTo = array(
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => false,
			'conditions' => array('PluginsRole.role_key = Role.key'),
			'fields' => '',
			'order' => ''
		),
		'Plugin' => array(
			'className' => 'Plugin',
			'foreignKey' => false,
			'conditions' => array('PluginsRole.plugin_key = Plugin.key'),
			'fields' => '',
			'order' => ''
		),
	);

/**
 * Get plugin data from type and roleId, $langId
 *
 * @param mixed $type array|int 1:for frame/2:for controll panel
 * @param int $roleKey roles.key
 * @param int $langId languages.id
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return  mixed array|bool
 */
	public function getPlugins($type, $roleKey, $langId) {
		if (! $roleKey || ! $langId) {
			return false;
		}

		//ロールIDのセット
		//$roleId = (int)$roleId;

		//plugins_languagesテーブルの取得
		$langId = (int)$langId;
		$this->belongsTo['Plugin']['conditions']['Plugin.language_id'] = $langId;

		//pluginsテーブルの取得
		$plugins = $this->find('all', array(
			'conditions' => array(
				'Plugin.type' => $type,
				'Role.key' => $roleKey
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

		$key = Inflector::camelize($plugin['Plugin']['key']);
		$path = APP . 'Plugin' . DS . $key . DS . $this->composerJsonName;

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
 * @param int $key plugins.folder
 * @param int $roleId roles.id
 * @param int $langId languages.id
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @since   NetCommons 3.0.0.0
 * @return  int blocks.id
 */
	public function getPluginByKey($key, $roleId, $langId) {
		if (! $roleId || ! $langId) {
			return false;
		}

		//ロールIDのセット
		$roleId = (int)$roleId;

		//plugins_languagesテーブルの取得
		$langId = (int)$langId;
		$this->belongsTo['Plugin']['conditions']['Plugin.language_id'] = $langId;

		//pluginsテーブルの取得
		$plugin = $this->find('first', array(
			'conditions' => array(
				'Plugin.key' => $key,
				'Role.id' => $roleId
			)
		));

		return $plugin;
	}

}
