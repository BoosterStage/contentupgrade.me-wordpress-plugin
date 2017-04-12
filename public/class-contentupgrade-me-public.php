<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://contentupgrade.me
 * @since      1.0.0
 *
 * @package    ContentUpgrade_Me_Plugin
 * @subpackage ContentUpgrade_Me_Plugin/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    ContentUpgrade_Me_Plugin
 * @subpackage ContentUpgrade_Me_Plugin/public
 * @author     Ryan Crispin Heneise <ryan@mysmallidea.com>
 */
class ContentUpgrade_Me_Plugin_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $ContentUpgrade_Me_Plugin    The ID of this plugin.
	 */
	private $ContentUpgrade_Me_Plugin;

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
	 * @param      string    $ContentUpgrade_Me_Plugin       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $ContentUpgrade_Me_Plugin, $version ) {

		$this->ContentUpgrade_Me_Plugin = $ContentUpgrade_Me_Plugin;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		// wp_enqueue_style( $this->ContentUpgrade_Me_Plugin, plugin_dir_url( __FILE__ ) . 'css/contentupgrade-me-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		// wp_enqueue_script( $this->ContentUpgrade_Me_Plugin, plugin_dir_url( __FILE__ ) . 'js/contentupgrade-me-public.js', array( 'jquery' ), $this->version, false );
    // wp_enqueue_script( $this->ContentUpgrade_Me_Plugin, plugin_dir_url( __FILE__ ) . 'js/jquery.oembed.js', array( 'jquery' ), $this->version, false );

	}

  public function add_provider() {
    $format = 'https://contentupgrade.me/*';
    $provider = 'https://contentupgrade.me/oembed';
    $regex = false;
    wp_oembed_add_provider( $format, $provider, $regex );
  }

}
