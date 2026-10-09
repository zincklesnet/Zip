<?php
namespace ZCCNG;
if(!defined('ABSPATH'))exit;
final class Plugin{private static $instance;public static function instance(){if(!self::$instance)self::$instance=new self();return self::$instance;}public function boot(){Installer::sync_roles();Permissions::instance();Api::instance();Communications::instance();Candidates::instance();Forms::instance();Documents::instance();Archives::instance();Security::instance();Academy::instance();Knowledge::instance();Lifecycle::instance();Workforce_Mail::instance();Core_Migrations::instance();Core_Settings::instance();Admin::instance();add_action('admin_init',[Installer::class,'maybe_install_site'],1);add_action('wp_initialize_site',[Installer::class,'initialize_site'],20,1);}}
