<?php


define('ABSPATH', dirname(__FILE__) . '/' );

require_once( ABSPATH . '../Api2Db/Api2Db.php');
require_once( ABSPATH . 'include/converts.php');
require_once( ABSPATH . 'include/checks.php');
require_once( ABSPATH . 'include/functions.php');
require_once( ABSPATH . 'include/triggers.php');


class Application extends Api2Db {


	public function __construct(){


		require( ABSPATH . 'include/def_params.php');
		require( ABSPATH . 'config.php');
		require( ABSPATH . 'include/names.php');
		require( ABSPATH . 'include/errors.php');
		

		$module_files 	= glob( ABSPATH . 'modules/*.php');
		$modules 		= array();

		foreach( $module_files as $module )
			require( $module );	
		

		$params = array(
			'modules' 			=> $modules,
			'config'			=> $config,
			'names' 			=> $names,
			'errors'			=> $errors,
			'converts' 			=> new Application_Converts( new Application_Functions() ),
			'checks' 			=> new Application_Checks( new Application_Functions() ),
			'functions' 		=> new Application_Functions(),
			'triggers' 			=> new Application_Triggers( $this )
		);


		// init Api2Db
		parent::__construct( $params );
	}


}
