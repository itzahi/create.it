<?php

	class Controller_Createit extends Controller{

		// Add function for auth or any other you like before main controller (can create session or check if has one for example).
		// public function before(){
		// 	parent::before();
		// 	Model_Createit::createSession(array['key' => 'value']);
		// 	
		// }
		
		// Main function for handling the rouoting and any pages/params added to the uri (if they exist here)
		public function home(){
			if(! $this->param('action')){
				return View::load('homepage')->render();
			}
			
			$action = $this->param('action');
			if(! method_exists($this, $action)){
				return View::load('error')->render();
			}
			
			$this->{$action}();
		}
		
		// Action generated from home method
		private function createit(){
			return View::load('createit')->render();
			
		}


		
	}
