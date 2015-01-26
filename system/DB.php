<?php

	class DB{
		
		private static $env = array();
		private static $dblink = NULL;
		
		private static function	config(){
			include APPPATH.'config'.DS.'database.php';
			self::$env = $db;
		}	
		
		private function __construct(){}
		
		private static function connect(){
			self::config();
			self::$dblink = mysql_connect(self::$env['host'], self::$env['user'], self::$env['pass']);
			mysql_select_db(self::$env['dbname'], self::$dblink);
			mysql_set_charset('utf8', self::$dblink);
		}
		
		public static function query($sql){
			
			if(! self::$dblink){
				self::connect();
			}
			
			$res = mysql_query($sql, self::$dblink);
			
			$arr = array();
			
			if(stristr($sql, 'select')){
				while($row = mysql_fetch_assoc($res)){
					$arr[] = $row;
				}
			}

			return $arr;
		}
	}
