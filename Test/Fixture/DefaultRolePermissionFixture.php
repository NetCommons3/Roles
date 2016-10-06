<?php
/**
 * DefaultRolePermissionFixture
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

/**
 * DefaultRolePermissionFixture
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Roles\Test\Fixture
 */
class DefaultRolePermissionFixture extends CakeTestFixture {

/**
 * Initialize the fixture.
 *
 * @return void
 */
	public function init() {
		require_once App::pluginPath('Roles') . 'Config' . DS . 'Schema' . DS . 'schema.php';
		$this->fields = (new RolesSchema())->tables[Inflector::tableize($this->name)];

		require_once App::pluginPath('Roles') . 'Config' . DS . 'Migration' . DS . '1469603399_records.php';
		$this->records = (new RolesRecords())->records[$this->name];
		parent::init();
	}

}
