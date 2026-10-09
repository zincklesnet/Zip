<?php
namespace ZCCNG;
if(!defined('ABSPATH'))exit;
final class Core_Migrations{
 private static $instance;
 const VERSION='4.1.4';
 const VERSION_OPTION='zccng_core_schema_version';
 const FACTORY_OPTION='zccng_signature_icons_v1';
 const FACTORY_BACKUP='zccng_4_1_4_removed_icon_factory_backup';
 public static function instance(){if(!self::$instance){self::$instance=new self();add_action('admin_init',[self::$instance,'maybe_run'],1);}return self::$instance;}
 public function maybe_run(){if(!is_multisite()||!is_super_admin())return;$current=(string)get_site_option(self::VERSION_OPTION,'4.1.3');if(version_compare($current,self::VERSION,'>='))return;$drafts=get_site_option(self::FACTORY_OPTION,null);if($drafts!==null&&!get_site_option(self::FACTORY_BACKUP,false))update_site_option(self::FACTORY_BACKUP,['backed_up_at'=>current_time('mysql',true),'source_version'=>$current,'data'=>$drafts]);delete_site_option(self::FACTORY_OPTION);update_site_option(self::VERSION_OPTION,self::VERSION);update_site_option('zccng_last_migration',['version'=>self::VERSION,'status'=>'completed','completed_at'=>current_time('mysql',true),'removed_feature'=>'Signature Icon Factory','backup_option'=>self::FACTORY_BACKUP]);Audit::log('migration_4_1_4','4.1.4 migration completed',['icon_factory_backup_created'=>$drafts!==null]);}
}
