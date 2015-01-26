<?php
	class Model_Createit{
		
		// Create session
		public static function createSession(array $data){
			Session::set('username', $data['anyKeyYouLike']);
			Session::set('id', $data['anyKeyYouLike']);
			Session::set('login', Encode::encrypt('anyCodeYouWant'));
		}
		
	}
		