<?php
/**
 * Plugin Name: ZinControlCenter NextGen
 * Description: Network command and staff operations hub for WordPress Multisite.
 * Version: 4.1.4
 * Requires at least: 6.3
 * Requires PHP: 8.1
 * Network: true
 * Author: ZinCelestial
 * Text Domain: zincontrolcenter-nextgen
 */
namespace ZCCNG;
if (!defined('ABSPATH')) { exit; }
define('ZCCNG_VERSION','4.1.4');
define('ZCCNG_FILE',__FILE__);
define('ZCCNG_DIR',plugin_dir_path(__FILE__));
define('ZCCNG_URL',plugin_dir_url(__FILE__));
spl_autoload_register(static function($class){$prefix=__NAMESPACE__.'\\';if(strpos($class,$prefix)!==0)return;$relative=substr($class,strlen($prefix));$file=ZCCNG_DIR.'includes/class-'.strtolower(str_replace(['\\','_'],'-',$relative)).'.php';if(is_readable($file))require_once $file;});
register_activation_hook(__FILE__,[Installer::class,'activate']);
add_action('plugins_loaded',static function(){if(!is_multisite()){add_action('admin_notices',static function(){echo '<div class="notice notice-error"><p>'.esc_html__('ZinControlCenter NextGen requires WordPress Multisite.','zincontrolcenter-nextgen').'</p></div>';});return;}Plugin::instance()->boot();});
