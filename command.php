<?php

use WP_Forge\WP_Scaffolding_Tool\Package;

if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require __DIR__ . '/vendor/autoload.php';
}

new Package(
	array(
		'base_command'             => 'newfold',
		'template_config_filename' => 'config.json',
		'project_config_filename'  => '.newfold-project.json',
		'global_config_filename'   => '.newfold.json',
		'default_template_repo'    => 'git@github.com:bluehost/scaffolding-templates.git',
	)
);
