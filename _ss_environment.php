<?php
/**
 * 
 * SilverStripe environment file for use with Shippable CI
 * 
 * This is pretty basic at the moment, but will get you up and running
 * quickly.
 * 
 * @author Russell Michell 2015 <russ@theruss.com>
 * 
 */

/*
 *
 * User configuration:
 * 
 * Set the variables below to match your own VCS setup
 *
 */

// This is either 'bitbucket.com' or 'github.com'
define('SHIPPABLE_FS_REPO_HOST', '');

// The user with access to your hosted VCS repo
define('SHIPPABLE_FS_REPO_USER', '');

// The name of your hosted VCS repo 
define('SHIPPABLE_FS_REPO_NAME', '');

/*
 * Do not edit anything below here
 * 
 */

// Are we in the Shippable environment?
$isEnvShippable = function() {
	if($dir = getcwd()) {
		return (strstr($dir, 'shippable') !== false);
	}
	
	return false;
};

// Environments: Shippable
if($isEnvShippable()) {

	// Standard shippable MySQL config - don't change!
	define('SS_ENVIRONMENT_TYPE', 'dev');
	define('SS_DATABASE_SERVER', '127.0.0.1');
	define('SS_DATABASE_USERNAME', 'shippable');
	define('SS_DATABASE_PASSWORD', '');

	// Required for unit-tests etc to run
	$path = array(
		SHIPPABLE_FS_REPO_HOST,
		SHIPPABLE_FS_REPO_USER,
		SHIPPABLE_FS_REPO_NAME
	);
	$_FILE_TO_URL_MAPPING[join('/', $path)] = 'http://localhost';
}
// Environments: DEV, SIT, UAT, PROD (etc)
else {
	// Place your own constants here
}
