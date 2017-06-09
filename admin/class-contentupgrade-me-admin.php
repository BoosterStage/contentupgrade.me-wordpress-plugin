<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://contentupgrade.me
 * @since      1.0.0
 *
 * @package    ContentUpgrade_Me_Plugin
 * @subpackage ContentUpgrade_Me_Plugin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    ContentUpgrade_Me_Plugin
 * @subpackage ContentUpgrade_Me_Plugin/admin
 * @author     Ryan Crispin Heneise <ryan@mysmallidea.com>
 */
class ContentUpgrade_Me_Plugin_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in ContentUpgrade_Me_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The ContentUpgrade_Me_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/contentupgrade-me-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in ContentUpgrade_Me_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The ContentUpgrade_Me_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/contentupgrade-me-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Register the settings page
	 *
	 * @since      1.0.0
	 * @param      string    $page_title
	 * @param      string    $menu_title
	 * @param      string    $capability
	 * @param      string    $menu_slug
	 * @param      callable  $function
	 * @param      string    $icon_url
	 * @param      int       $position
	 */
	public function add_admin_menu() {
			add_menu_page(
				'ContentUpgrade.me',
				__('ContentUpgrade', 'contentupgrade-me'),
				'manage_options',
				'contentupgrade-me',
				array($this, 'create_admin_interface'),
				plugin_dir_url( dirname( __FILE__ ) ) . 'admin/images/contentupgrade-me.png'
			);

			define('CONTENTUPGRADE_PLUGIN_URL', plugin_dir_url( __FILE__ ));
	}

	/**
	 * Add settings link.
	 *
	 * @since    1.0.2
	 */
	public function add_action_links( $links ) {
		/*
		*  Documentation : https://codex.wordpress.org/Plugin_API/Filter_Reference/plugin_action_links_(plugin_file_name)
		*/
		$settings_link = array(
		 '<a href="' . admin_url( 'admin.php?page=' . $this->plugin_name ) . '">' . __('Settings',   $this->plugin_name) . '</a>',
		);
		return array_merge(  $settings_link, $links );

	}




	/**
	 * Callback function for the admin settings page.
	 *
	 * @since    1.0.0
	 */
	public function create_admin_interface(){

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/header.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/contentupgrade-me-admin-display.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/footer.php';

	}

}
