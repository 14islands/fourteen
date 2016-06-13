<?php

class RegisterTaxonomy {

	function __construct() {
		add_action( 'init', array($this, 'register_taxonomy') );
	}

	/**
	 * @see https://codex.wordpress.org/Function_Reference/register_taxonomy
	 */
	function register_taxonomy() {

		$labels = array(
		  'name'                       => __( 'Clients', 'fourteen' ),
		  'singular_name'              => __( 'Client', 'fourteen' ),
		  'search_items'               => __( 'Search Clients', 'fourteen' ),
		  'popular_items'              => __( 'Popular Clients', 'fourteen' ),
		  'all_items'                  => __( 'All Clients', 'fourteen' ),
		  'parent_item'                => __( 'Parent Client', 'fourteen' ),
		  'parent_item_colon'          => __( 'Parent Client:', 'fourteen' ),
		  'edit_item'                  => __( 'Edit Client', 'fourteen' ),
		  'update_item'                => __( 'Update Client', 'fourteen' ),
		  'add_new_item'               => __( 'Add New Client', 'fourteen' ),
		  'new_item_name'              => __( 'New Client', 'fourteen' ),
		  'separate_items_with_commas' => __( 'Separate clients with commas', 'fourteen' ),
		  'add_or_remove_items'        => __( 'Add or remove clients', 'fourteen' ),
		  'choose_from_most_used'      => __( 'Choose from most used clients', 'fourteen' ),
		  'menu_name'                  => __( 'Clients', 'fourteen' ),
		);

		$arguments = array(
		  'labels'  => $labels,
		  'rewrite' => array( 'with_front' => false ) // Exclude front base
		);

		// Attach to example post type "project"
		register_taxonomy( 'client', array( 'project' ), $arguments );

	}
}

new RegisterTaxonomy();
