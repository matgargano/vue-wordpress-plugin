<?php

namespace VWP;

class Enqueues {

	public function init() {
		$this->attach_hooks();
	}

	public function attach_hooks() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
	}

	public function enqueue() {

		wp_enqueue_script( 'VWP', plugin_dir_url( dirname( __FILE__ ) ) . 'dist/js/bundle.js' );

	}

}