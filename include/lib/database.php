<?php
/**
 * Database operation routing
 *
 * @package EMLOG
 * @link https://www.emlog.net
 */

class Database {

	public static function getInstance() {
		if (class_exists('mysqli', FALSE)) {
			return MySqlii::getInstance();
		} elseif (class_exists('pdo', false)) {
			return Mysqlpdo::getInstance();
		} else {
			emMsg('服务器空间PHP不支持MySql数据库');
		}
	}

}
