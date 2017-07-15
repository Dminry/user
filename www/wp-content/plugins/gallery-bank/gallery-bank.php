<?php
/*
 * Plugin Name: Gallery Bank - Photo Gallery - Image Gallery - Photo Albums - WordPress Gallery Plugin
 * Plugin URI: https://gallery-bank.tech-banker.com
 * Description: Photo Gallery Plugin for WordPress. Creates elegant responsive gallery widget, image gallery, media gallery, portfolio gallery and albums.
 * Author: Tech Banker
 * Author URI: https://gallery-bank.tech-banker.com
 * Version: 4.0.7
 * License: GPLv3
 * Text Domain: gallery-bank
 * Domain Path: /languages
 */
if (!defined("ABSPATH")) {
   exit;
} // Exit if accessed directly

/* Constant Declaration */

if (!defined("GALLERY_BANK_PLUGIN_DIR_PATH")) {
   define("GALLERY_BANK_PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));
}

if (!defined("GALLERY_BANK_PLUGIN_DIRNAME")) {
   define("GALLERY_BANK_PLUGIN_DIRNAME", plugin_basename(dirname(__FILE__)));
}

if (!defined("GALLERY_BANK_MAIN_DIR")) {
   define("GALLERY_BANK_MAIN_DIR", dirname(dirname(dirname(__FILE__))) . "/gallery-bank/");
}

if (!defined("GALLERY_BANK_UPLOAD_DIR")) {
   define("GALLERY_BANK_UPLOAD_DIR", GALLERY_BANK_MAIN_DIR . "original-uploads/");
}

if (!defined("GALLERY_BANK_THUMBS_CROPPED_DIR")) {
   define("GALLERY_BANK_THUMBS_CROPPED_DIR", GALLERY_BANK_MAIN_DIR . "thumbs-cropped/");
}

if (!defined("GALLERY_BANK_THUMBS_NON_CROPPED_DIR")) {
   define("GALLERY_BANK_THUMBS_NON_CROPPED_DIR", GALLERY_BANK_MAIN_DIR . "thumbs-non-cropped/");
}

if (!defined("GALLERY_BANK_ORIGINAL_DIR")) {
   define("GALLERY_BANK_ORIGINAL_DIR", GALLERY_BANK_MAIN_DIR . "original-images/");
}

if (!defined("GALLERY_BANK_ALBUMS_ORIGINAL_DIR")) {
   define("GALLERY_BANK_ALBUMS_ORIGINAL_DIR", GALLERY_BANK_MAIN_DIR . "albums-original-images/");
}
if (!defined("GALLERY_BANK_USER_VIEWS_PATH")) {
   define("GALLERY_BANK_USER_VIEWS_PATH", GALLERY_BANK_PLUGIN_DIR_PATH . "user-views/");
}

if (!defined("GALLERY_BANK_PLUGIN_DIR_URL")) {
   define("GALLERY_BANK_PLUGIN_DIR_URL", plugin_dir_url(__FILE__));
}

if (!defined("GALLERY_BANK_MAIN_URL")) {
   define("GALLERY_BANK_MAIN_URL", content_url() . "/gallery-bank/");
}

if (!defined("GALLERY_BANK_ORIGINAL_URL")) {
   define("GALLERY_BANK_ORIGINAL_URL", content_url() . "/gallery-bank/original-images/");
}

if (!defined("GALLERY_BANK_THUMBS_CROPPED_URL")) {
   define("GALLERY_BANK_THUMBS_CROPPED_URL", content_url() . "/gallery-bank/thumbs-cropped/");
}

if (!defined("GALLERY_BANK_THUMBS_NON_CROPPED_URL")) {
   define("GALLERY_BANK_THUMBS_NON_CROPPED_URL", content_url() . "/gallery-bank/thumbs-non-cropped/");
}
if (is_ssl()) {
   if (!defined("tech_banker_url")) {
      define("tech_banker_url", "https://tech-banker.com");
   }
   if (!defined("tech_banker_gallery_url")) {
      define("tech_banker_gallery_url", "https://gallery-bank.tech-banker.com/");
   }
} else {
   if (!defined("tech_banker_url")) {
      define("tech_banker_url", "http://tech-banker.com");
   }
   if (!defined("tech_banker_gallery_url")) {
      define("tech_banker_gallery_url", "http://gallery-bank.tech-banker.com/");
   }
}

if (!is_dir(GALLERY_BANK_MAIN_DIR)) {
   wp_mkdir_p(GALLERY_BANK_MAIN_DIR);
}
if (!is_dir(GALLERY_BANK_UPLOAD_DIR)) {
   wp_mkdir_p(GALLERY_BANK_UPLOAD_DIR);
}
if (!is_dir(GALLERY_BANK_THUMBS_NON_CROPPED_DIR)) {
   wp_mkdir_p(GALLERY_BANK_THUMBS_NON_CROPPED_DIR);
}
if (!is_dir(GALLERY_BANK_THUMBS_CROPPED_DIR)) {
   wp_mkdir_p(GALLERY_BANK_THUMBS_CROPPED_DIR);
}
if (!is_dir(GALLERY_BANK_ORIGINAL_DIR)) {
   wp_mkdir_p(GALLERY_BANK_ORIGINAL_DIR);
}

$memory_limit_gallery_bank = intval(ini_get("memory_limit"));
if (!extension_loaded('suhosin') && $memory_limit_gallery_bank < 512) {
   @ini_set("memory_limit", "1024M");
}
@ini_set("max_execution_time", 6000);

/*
  Function Name: install_script_for_gallery_bank
  Parameter: No
  Description: This function is used to include install script for gallery bank
  Created On: 01-06-2017 09:00
  Created By: Tech Banker Team
 */
function install_script_for_gallery_bank() {
   global $wpdb;
   if (is_multisite()) {
      $blog_ids = $wpdb->get_col("SELECT blog_id FROM $wpdb->blogs");
      foreach ($blog_ids as $blog_id) {
         switch_to_blog($blog_id);
         $version = get_option("gallery-bank-pro-edition");
         if ($version < "4.0") {
            if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "lib/install-script.php")) {
               include GALLERY_BANK_PLUGIN_DIR_PATH . "lib/install-script.php";
            }
         }
         restore_current_blog();
      }
   } else {
      $version = get_option("gallery-bank-pro-edition");
      if ($version < "4.0") {
         if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "lib/install-script.php")) {
            include_once GALLERY_BANK_PLUGIN_DIR_PATH . "lib/install-script.php";
         }
      }
   }
}
/*
  Function Name: gallery_bank
  Parameter: no
  Description: This function is used for creating a parent table.
  Created On: 01-06-2017 09:00
  Created By: Tech Banker Team
 */
function gallery_bank_parent() {
   global $wpdb;
   return $wpdb->prefix . "gallery_bank";
}
/*
  Function Name: gallery_bank_meta
  Parameter: no
  Description: This function is used for creating a meta table.
  Created On: 01-06-2017 09:00
  Created By: Tech Banker Team
 */
function gallery_bank_meta() {
   global $wpdb;
   return $wpdb->prefix . "gallery_bank_meta";
}
/*
  Function Name: check_user_roles_gallery_bank
  Parameters: Yes($user)
  Description: This function is used for checking roles of different users.
  Created On: 01-06-2017 09:00
  Created By: Tech Banker Team
 */
function check_user_roles_gallery_bank($user = null) {
   $user = $user ? new WP_User($user) : wp_get_current_user();
   return $user->roles ? $user->roles[0] : false;
}
/*
  Function Name: get_others_capabilities_gallery_bank
  Parameters: No
  Description: This function is used to get all the roles available in WordPress
  Created On: 01-06-2017 09:00
  Created By: Tech Banker Team
 */
function get_others_capabilities_gallery_bank() {
   $user_capabilities = array();
   if (function_exists("get_editable_roles")) {
      foreach (get_editable_roles() as $role_name => $role_info) {
         foreach ($role_info["capabilities"] as $capability => $values) {
            if (!in_array($capability, $user_capabilities)) {
               array_push($user_capabilities, $capability);
            }
         }
      }
   } else {
      $user_capabilities = array(
          "manage_options",
          "edit_plugins",
          "edit_posts",
          "publish_posts",
          "publish_pages",
          "edit_pages",
          "read"
      );
   }
   return $user_capabilities;
}
if (is_admin()) {

   /*
     Function Name: backend_js_css_for_gallery_bank
     Parameter: no
     Description:	This is used for calling a js and css backend function.
     Created On: 01-06-2017 09:00
     Created By: Tech Banker Team
    */
   function backend_js_css_for_gallery_bank($hook) {
      $pages_gallery_bank = array(
          "gb_welcome_gallery_bank",
          "gallery_bank",
          "gb_other_settings",
          "gb_add_gallery",
          "gb_sort_galleries",
          "gb_manage_albums",
          "gb_add_album",
          "gb_sort_albums",
          "gb_add_tag",
          "gb_manage_tags",
          "gb_thumbnail_layout",
          "gb_masonry_layout",
          "gb_slideshow_layout",
          "gb_image_browser_layout",
          "gb_justified_grid_layout",
          "gb_blog_style_layout",
          "gb_compact_album_layout",
          "gb_extended_album_layout",
          "gb_custom_css",
          "gb_fancy_box",
          "gb_color_box",
          "gb_foo_box_free_edition",
          "gb_nivo_lightbox",
          "gb_lightcase",
          "gb_global_options",
          "gb_filter_settings",
          "gb_lazy_load_settings",
          "gb_search_box_settings",
          "gb_order_by_settings",
          "gb_page_navigation",
          "gb_watermark_settings",
          "gb_advertisement",
          "gb_thumbnail_layout_shortcode",
          "gb_masonry_layout_shortcode",
          "gb_slideshow_layout_shortcode",
          "gb_image_browser_layout_shortcode",
          "gb_justified_grid_layout_shortcode",
          "gb_blog_style_layout_shortcode",
          "gb_roles_and_capabilities",
          "gb_feature_requests",
          "gb_system_information",
          "post",
          "gb_upgrade"
      );
      $datatable_pages_gallery_bank = array(
          "gallery_bank",
          "gb_manage_albums",
          "gb_add_gallery",
          "gb_manage_tags",
          "gb_roles_and_capabilities"
      );
      $layout_pages_gallery_bank = array(
          "gb_thumbnail_layout",
          "gb_masonry_layout",
          "gb_slideshow_layout",
          "gb_image_browser_layout",
          "gb_justified_grid_layout",
          "gb_blog_style_layout",
          "gb_compact_album_layout",
          "gb_extended_album_layout",
          "gb_custom_css",
          "gb_fancy_box",
          "gb_color_box",
          "gb_foo_box_free_edition",
          "gb_nivo_lightbox",
          "gb_lightcase",
          "gb_global_options",
          "gb_filter_settings",
          "gb_lazy_load_settings",
          "gb_search_box_settings",
          "gb_order_by_settings",
          "gb_page_navigation",
          "gb_watermark_settings",
          "gb_advertisement"
      );
      if (strpos($hook, "post") !== false) {
         wp_enqueue_script("jquery");
         wp_enqueue_script("custom.js", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/custom/js/custom.js");
         wp_enqueue_script("toastr.js", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/toastr/toastr.js");
         wp_enqueue_style("gallery-bank-custom.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/admin/layout/css/gallery-bank-custom.css");
         if (is_rtl()) {
            wp_enqueue_style("gallery-bank-bootstrap.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/custom/css/custom-rtl.css");
            wp_enqueue_style("tech-banker-custom-rtl.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/admin/layout/css/tech-banker-custom-rtl.css");
         } else {
            wp_enqueue_style("gallery-bank-bootstrap.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/custom/css/custom.css");
            wp_enqueue_style("tech-banker-custom.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/admin/layout/css/tech-banker-custom.css");
         }
         wp_enqueue_style("gallery-bank-toastr.min.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/toastr/toastr.css");
      }
      if (isset($_REQUEST["page"])) {
         $page_url = $_REQUEST["page"];
         if (in_array($page_url, $pages_gallery_bank)) {
            wp_enqueue_script("jquery");
            wp_enqueue_script("custom.js", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/custom/js/custom.js");
            wp_enqueue_script("jquery.validate.js", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/validation/jquery.validate.js");
            wp_enqueue_script("toastr.js", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/toastr/toastr.js");
            wp_enqueue_script("jqueryFileTree.js", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/jqueryFileTree/jqueryFileTree.js");
            wp_enqueue_style("jqueryFileTree.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/jqueryFileTree/jqueryFileTree.css");
            wp_enqueue_style("simple-line-icons.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/icons/icons.css");
            wp_enqueue_style("components.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/css/components.css");
            wp_enqueue_style("gallery-bank-custom.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/admin/layout/css/gallery-bank-custom.css");
            wp_enqueue_style("gallery-bank-premium-edition.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/admin/layout/css/premium-edition.css");
            if (is_rtl()) {
               wp_enqueue_style("gallery-bank-bootstrap.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/custom/css/custom-rtl.css");
               wp_enqueue_style("gallery-bank-layout-rtl.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/admin/layout/css/layout-rtl.css");
               wp_enqueue_style("tech-banker-custom-rtl.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/admin/layout/css/tech-banker-custom-rtl.css");
            } else {
               wp_enqueue_style("gallery-bank-bootstrap.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/custom/css/custom.css");
               wp_enqueue_style("gallery-bank-layout.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/admin/layout/css/layout.css");
               wp_enqueue_style("tech-banker-custom.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/admin/layout/css/tech-banker-custom.css");
            }
            wp_enqueue_script("jquery.clipboard.js", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/clipboard/clipboard.js");
            wp_enqueue_style("gallery-bank-plugins.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/css/plugins.css");
            wp_enqueue_style("gallery-bank-default.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/admin/layout/css/themes/default.css");
            wp_enqueue_style("gallery-bank-toastr.min.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/toastr/toastr.css");
            if (in_array($page_url, $datatable_pages_gallery_bank)) {
               wp_enqueue_script("jquery.datatables.js", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/datatables/media/js/jquery.datatables.js");
               wp_enqueue_script("jquery.fngetfilterednodes.js", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/datatables/media/js/fngetfilterednodes.js");
               wp_enqueue_style("gallery-bank-datatables.foundation.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/datatables/media/css/datatables.foundation.css");
            }
            if (in_array($page_url, $layout_pages_gallery_bank)) {
               wp_enqueue_script("colpick.js", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/colorpicker/colpick.js");
               wp_enqueue_style("colpick.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/colorpicker/colpick.css");
            }
            if ($page_url == "gb_sort_galleries" || $page_url == "gb_sort_albums") {
               wp_enqueue_script("plupload.full.min.js", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/pluploader/js/plupload.full.min.js", array("jquery-ui-draggable", "jquery-ui-sortable", "jquery-ui-dialog", "jquery-ui-widget"), false);
            }
         }
      }
      if (strpos($hook, "gb_add_gallery") !== false) {
         wp_enqueue_script("plupload.full.min.js", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/pluploader/js/plupload.full.min.js", array("jquery-ui-draggable", "jquery-ui-sortable", "jquery-ui-dialog", "jquery-ui-widget", "jquery-ui-progressbar"), null, true);
         wp_enqueue_script("jquery.ui.plupload.js", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/pluploader/js/jquery.ui.plupload.js", null, null, true);
         wp_enqueue_style("jquery.ui.plupload.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/pluploader/css/jquery.ui.plupload.css");
         wp_enqueue_style("jquery-ui.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/pluploader/css/jquery-ui.css");
         wp_enqueue_script("bootstrap-hover-dropdown.js", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/custom/js/bootstrap-hover-dropdown.js");
         wp_enqueue_script("bootstrap-modal.js", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/modal/js/bootstrap-modal.js");
         wp_enqueue_script("bootstrap-modalmanager.js", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/modal/js/bootstrap-modalmanager.js");
         wp_enqueue_style("bootstrap-modal.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/modal/css/bootstrap-modal.css");
         wp_enqueue_style("bootstrap-modal-bs3patch.css", GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/plugins/modal/css/bootstrap-modal-bs3patch.css");
      }
   }
   add_action("admin_enqueue_scripts", "backend_js_css_for_gallery_bank");
}
$version = get_option("gallery-bank-pro-edition");
if ($version == "4.0") {

   /*
     Function Name: get_users_capabilities_gallery_bank
     Parameters: No
     Description: This function is used to get users capabilities.
     Created On: 01-06-2017 09:00
     Created By: Tech Banker Team
    */
   function get_users_capabilities_gallery_bank() {
      global $wpdb;
      $capabilities = $wpdb->get_var
          (
          $wpdb->prepare
              (
              "SELECT meta_value FROM " . gallery_bank_meta() . "
                                WHERE meta_key = %s", "roles_and_capabilities_settings"
          )
      );
      $core_roles = array(
          "manage_options",
          "edit_plugins",
          "edit_posts",
          "publish_posts",
          "publish_pages",
          "edit_pages"
      );
      $unserialized_capabilities = unserialize($capabilities);
      return isset($unserialized_capabilities["capabilities"]) ? $unserialized_capabilities["capabilities"] : $core_roles;
   }
   /*
     Function Name: sidebar_menu_for_gallery_bank
     Parameter: no
     Description: This is used for calling a sidebar menu function.
     Created On: 01-06-2017 09:00
     Created By: Tech Banker Team
    */
   function sidebar_menu_for_gallery_bank() {
      global $wpdb, $current_user;
      $user_role_permission = get_users_capabilities_gallery_bank();
      if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "includes/translations.php")) {
         include GALLERY_BANK_PLUGIN_DIR_PATH . "includes/translations.php";
      }
      if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "lib/sidebar-menu.php")) {
         include_once GALLERY_BANK_PLUGIN_DIR_PATH . "lib/sidebar-menu.php";
      }
   }
   /*
     Function Name: helper_file_for_gallery_bank
     Parameter: no
     Description: This function is used to call helper file for gallery bank
     Created On: 01-06-2017 09:00
     Created By: Tech Banker Team
    */
   function helper_file_for_gallery_bank() {
      global $wpdb, $current_user;
      $user_role_permission = get_users_capabilities_gallery_bank();

      if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "lib/helper.php")) {
         include_once GALLERY_BANK_PLUGIN_DIR_PATH . "lib/helper.php";
      }
   }
   /*
     Function Name: main_ajax_file_for_gallery_bank
     Parameter: no
     Description: This function is used to register ajax for gallery bank
     Created On: 01-06-2017 09:00
     Created By: Tech Banker Team
    */
   function main_ajax_file_for_gallery_bank() {
      global $wpdb, $current_user;
      $user_role_permission = get_users_capabilities_gallery_bank();
      if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "lib/action-library.php")) {
         include_once GALLERY_BANK_PLUGIN_DIR_PATH . "lib/action-library.php";
      }
   }
   /*
     Function Name: top_bar_menu_for_gallery_bank
     Parameter: no
     Description: This is used for calling a top bar menu function.
     Created On: 01-06-2017 09:00
     Created By: Tech Banker Team
    */
   function top_bar_menu_for_gallery_bank() {
      global $wpdb, $current_user, $wp_admin_bar;
      $user_role_permission = get_users_capabilities_gallery_bank();
      $role_capabilities = $wpdb->get_var
          (
          $wpdb->prepare
              (
              "SELECT meta_value from " . gallery_bank_meta() . "
                                            WHERE " . gallery_bank_meta() . " . meta_key = %s", "roles_and_capabilities_settings"
          )
      );
      $role_capabilities_serialized = unserialize($role_capabilities);
      if ($role_capabilities_serialized["show_gallery_bank_top_bar_menu"] == "enable") {
         if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "includes/translations.php")) {
            include GALLERY_BANK_PLUGIN_DIR_PATH . "includes/translations.php";
         }
         if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "lib/admin-bar-menu.php")) {
            include_once GALLERY_BANK_PLUGIN_DIR_PATH . "lib/admin-bar-menu.php";
         }
      }
   }
   /*
     Function Name: plugin_load_textdomain_gallery_bank
     Parameters: No
     Description: This function is used to load languages.
     Created On: 01-06-2017 09:00
     Created By: Tech Banker Team
    */
   function plugin_load_textdomain_gallery_bank() {
      if (function_exists("load_plugin_textdomain")) {
         load_plugin_textdomain("gallery-bank", false, GALLERY_BANK_PLUGIN_DIRNAME . "/languages");
      }
   }
   /*
     Function Name: admin_functions_gallery_bank
     Parameter: no
     Description: This function used for calling admin function fired on admin_init hook.
     Created On: 01-06-2017 09:00
     Created By: Tech Banker Team
    */
   function admin_functions_gallery_bank() {
      helper_file_for_gallery_bank();
   }
   /*
     Function Name: gallery_bank_UrlEncode
     Argument:yes ($string)
     Description: decode url symbols into original form.
     Created On: 01-06-2017 09:00
     Created By: Tech Banker Team
    */
   function gallery_bank_UrlEncode($string) {
      $entities = array("%21", "%2A", "%27", "%28", "%29", "%3B", "%3A", "%40", "%26", "%3D", "%2B", "%24", "%2C", "%2F", "%3F", "%25", "%23", "%5B", "%5D");
      $replacements = array("!", "*", "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
      return str_replace($entities, $replacements, urlencode($string));
   }
   /*
     Function Name: upload_ajax_file_for_gallery_bank
     Parameter: no
     Description: This function is used to register ajax for gallery bank
     Created On: 01-06-2017 09:00
     Created By: Tech Banker Team
    */
   function upload_ajax_file_for_gallery_bank() {
      global $wpdb, $current_user;
      $user_role_permission = get_users_capabilities_gallery_bank();
      if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "lib/upload.php")) {
         include_once GALLERY_BANK_PLUGIN_DIR_PATH . "lib/upload.php";
      }
   }
   /*
     Function Name: ftp_directory_ajax_file_for_gallery_bank
     Parameter: no
     Description: This function is used to register ajax for gallery bank
     Created On: 01-06-2017 09:00
     Created By: Tech Banker Team
    */
   function ftp_directory_ajax_file_for_gallery_bank() {
      global $wpdb, $current_user;
      $user_role_permission = get_users_capabilities_gallery_bank();
      if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "lib/ftp-directories.php")) {
         include_once GALLERY_BANK_PLUGIN_DIR_PATH . "lib/ftp-directories.php";
      }
   }
   function parse_shortcode_content_gallery_bank($content) {

      /* Parse nested shortcodes and add formatting. */
      $content = trim(do_shortcode(shortcode_unautop($content)));

      /* Remove '' from the start of the string. */
      if (substr($content, 0, 4) == '')
         $content = substr($content, 4);

      /* Remove '' from the end of the string. */
      if (substr($content, -3, 3) == '')
         $content = substr($content, 0, -3);

      /* Remove any instances of ''. */
      $content = str_replace(array('<p></p>'), '', $content);
      $content = str_replace(array('<p>  </p>'), '', $content);

      return $content;
   }
   /*
     Function Name: gallery_bank_shortcode
     Parameter: Yes
     Description: It is used for a creating shortcode for gallery bank.
     Created On: 01-06-2017 09:00
     Created by: Tech Banker Team
    */
   function gallery_bank_shortcode($atts, $content) {
      extract(shortcode_atts(array(
          "show_albums" => "",
          "album_id" => "",
          "type" => "",
          "format" => "",
          "title" => "",
          "desc" => "",
          "display" => "",
          "no_of_images" => "",
          "sort_by" => "",
          "animation_effect" => "",
          "albums_in_row" => "",
          "layout_type" => "",
          "source_type" => "",
          "id" => "",
          "album_type" => "",
          "sort_images_by" => "",
          "album_title" => "",
          "album_description" => "",
          "order_images_by" => "",
          "alignment" => "",
          "lightbox_type" => "",
          "columns" => "",
          "filters" => "",
          "lazy_load" => "",
          "search_box" => "",
          "order_by" => "",
          "page_navigation" => "",
          "images_per_page" => "",
          "gallery_title" => "",
          "gallery_description" => "",
          "thumbnail_title" => "",
          "thumbnail_description" => "",
          "animation_effects" => "",
          "special_effects" => "",
          "auto_play" => "",
          "time_interval" => "",
          "next_previous_button" => "",
          "play_pause_button" => "",
          "slideshow_width" => "",
          "control_buttons" => "",
          "buttons_type" => "",
          "slideshow_filmstrips" => "",
          "image_browser_height" => "",
          "image_browser_width" => "",
          "blog_image_width" => "",
          "row_height" => "",
              ), $atts));
      if (!is_feed()) {
         if (isset($type) && $type != "") {
            switch ($type) {
               case "images":
                  $source_type = "gallery";
                  $id = isset($album_id) ? $album_id : 0;
                  break;
               default:
                  $source_type = "album";
                  $album_type = "compact_album";
                  $id = isset($show_albums) && $show_albums != "" ? $show_albums : $album_id;
                  break;
            }
            $gallery_title = $album_title == "true" ? "show" : "hide";
            $thumbnail_title = $title == "true" ? "show" : "hide";
            $thumbnail_description = $desc == "true" ? "show" : "hide";
            $lightbox_type = "foo_box_free_edition";
            switch ($format) {
               case "thumbnail":
                  $layout_type = "thumbnail_layout";
                  break;
               case "masonry":
                  $layout_type = "masonry_layout";
                  break;
            }
            switch ($sort_by) {
               case "title":
                  $sort_images_by = "image_title";
                  break;
               case "date":
                  $sort_images_by = "upload_date";
                  break;
               case "pic_name":
                  $sort_images_by = "image_name";
                  break;
               case "sort_order":
                  $sort_images_by = "sort_order";
                  break;
               case "random":
                  $sort_images_by = "random_order";
                  break;
               case "pic_id":
                  $sort_images_by = "image_name";
                  break;
            }
            $animation_effects = $animation_effect == "" ? "fadeIn" : $animation_effect;
         }
         if (isset($_REQUEST["gallery_id"])) {
            $source_type = "gallery";
            $id = intval($_REQUEST["gallery_id"]);
         }

         if (isset($source_type)) {
            if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "user-views/includes/common-variables.php")) {
               include GALLERY_BANK_PLUGIN_DIR_PATH . "user-views/includes/common-variables.php";
            }
            switch (esc_attr($source_type)) {
               case "gallery" :
                  if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "user-views/includes/galleries/structure.php")) {
                     include GALLERY_BANK_PLUGIN_DIR_PATH . "user-views/includes/galleries/structure.php";
                  }
                  break;
               case "album" :
                  if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "user-views/includes/albums/structure.php")) {
                     include GALLERY_BANK_PLUGIN_DIR_PATH . "user-views/includes/albums/structure.php";
                  }
                  break;
            }
         }
         $content = parse_shortcode_content_gallery_bank($content);
         return $content;
      }
   }
   /*
     Function Name: helper_file_for_gallery_bank_frontend
     Parameter: no
     Description: This function is used to call helper file for gallery bank frontend
     Created On: 01-06-2017 09:00
     Created By: Tech Banker Team
    */
   function helper_file_for_gallery_bank_frontend() {
      global $wpdb;
      if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "user-views/lib/helper.php")) {
         include_once GALLERY_BANK_PLUGIN_DIR_PATH . "user-views/lib/helper.php";
      }
   }
   /*
     Function Name: user_functions_gallery_bank
     Parameter: No
     Description: This function is used to call user_functions_gallery_bank
     Created On: 01-06-2017 09:00
     Created By: Tech Banker Team
    */
   function user_functions_gallery_bank() {
      helper_file_for_gallery_bank_frontend();
      plugin_load_textdomain_gallery_bank();
   }
   /*
     Function Name: add_gallery_bank_shortcode_button
     Parameter: No
     Description: This function is used to create the button in pages and posts.
     Created On: 05-06-2017 10:29
     Created By: Tech Banker Team
    */
   function add_gallery_bank_shortcode_button() {
      echo '<a href="admin.php?page=gb_thumbnail_layout_shortcode" target="_blank" id="insert-gallery-bank-shortcode" class="button" >' . '<img style="width:16px; height:16px; vertical-align:middle; margin-right:3px; margin-top:5px; float:left;" src=' . GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/img/icon.png" . '>' . __("Add Gallery Bank Shortcode", "gallery-bank") . '</a>';
   }
   /*
     Class Name: gallery_bank_widget
     Parameter: No
     Description: This class is used to add widget.
     Created On: 05-06-2017 11:14
     Created By: Tech Banker Team
    */
   class gallery_bank_widget extends WP_Widget {
      function __construct() {
         parent::__construct(
             "gallery_bank_widget", __("Gallery Bank", "gallery-bank"), array("description" => __("Display Gallery Bank", "gallery-bank"),)
         );
      }
      /*
        Function Name: form
        Parameters: Yes($instance)
        Description: This function is used to add widget form.
        Created On: 05-06-2017 11:14
        Created By: Tech Banker Team
       */
      public function form($instance) {
         global $wpdb;
         $user_role_permission = get_users_capabilities_gallery_bank();
         if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "user-views/includes/galleries/translations.php")) {
            include GALLERY_BANK_PLUGIN_DIR_PATH . "user-views/includes/galleries/translations.php";
         }
         if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "user-views/includes/widget-form.php")) {
            include GALLERY_BANK_PLUGIN_DIR_PATH . "user-views/includes/widget-form.php";
         }
      }
      /*
        Function Name: widget
        Parameters: Yes($args, $instance)
        Description: This function is used to display widget.
        Created On: 05-06-2017 11:14
        Created By: Tech Banker Team
       */
      public function widget($args, $instance) {
         extract($args, EXTR_SKIP);
         echo $before_widget;
         $shortcode_data = empty($instance["shortcode"]) ? " " : apply_filters("widget_gallery_bank_shortcode", $instance["shortcode"]);
         if (!empty($shortcode_data)) {
            $shortcode = $shortcode_data;
         }
         echo do_shortcode($shortcode);
         echo $after_widget;
      }
      /*
        Function Name: update
        Parameters: Yes($new_instance, $old_instance)
        Description: This function is used to update widget.
        Created On: 05-06-2017 11:14
        Created By: Tech Banker Team
       */
      public function update($new_instance, $old_instance) {
         $instance = $old_instance;
         $instance["shortcode"] = $new_instance["ux_txt_gallery_bank_shortcode"];
         return $instance;
      }
   }
   /*
     Function Name: gallery_bank_action_links
     Parameters: Yes
     Description: This function is used to create link for Pro Editions.
     Created On: 12-06-2017 17:35
     Created By: Tech Banker Team
    */
   function gallery_bank_action_links($plugin_link) {
      $plugin_link[] = "<a href=" . tech_banker_gallery_url . " style=\"color: red; font-weight: bold;\" target=\"_blank\">Go Pro!</a>";
      return $plugin_link;
   }
   //Hooks

   /* add_action for admin_functions_gallery_bank
     Description: This hook is used for calling all the Backend Functions
     Created On: 01-06-2017 09:00
     Created by: Tech Banker Team
    */

   add_action("admin_init", "admin_functions_gallery_bank");

   /* add_action for main_ajax_file_for_gallery_bank
     Description: This hook is used for calling backend ajax function
     Created On: 01-06-2017 09:00
     Created by: Tech Banker Team
    */

   add_action("wp_ajax_gallery_bank_action_module", "main_ajax_file_for_gallery_bank");

   /* add_action for upload_ajax_file_for_gallery_bank
     Description: This hook is used for calling upload ajax function
     Created On: 01-06-2017 09:00
     Created by: Tech Banker Team
    */

   add_action("wp_ajax_gallery_bank_image_upload", "upload_ajax_file_for_gallery_bank");

   /* add_action for ftp_directory_ajax_file_for_gallery_bank
     Description: This hook is used for calling upload ajax function
     Created On: 23-06-2017 11:13
     Created by: Tech Banker Team
    */

   add_action("wp_ajax_gallery_bank_ftp_directory", "ftp_directory_ajax_file_for_gallery_bank");

   /* add_action
     Description: This hook is used for calling a function of sidebar menu
     Created On: 01-06-2017 09:00
     Created By: Tech Banker Team
    */
   add_action("admin_menu", "sidebar_menu_for_gallery_bank");
   add_action("network_admin_menu", "sidebar_menu_for_gallery_bank");

   /* add_action
     Description: This hook is used for calling a function of top bar menu.
     Created On: 01-06-2017 09:00
     Created By: Tech Banker Team
    */
   add_action("admin_bar_menu", "top_bar_menu_for_gallery_bank", 100);

   /*
     add_action for user_functions_gallery_bank
     Description: This hook is used for calling all the frontend Functions
     Created On: 01-06-2017 09:00
     Created by: Tech Banker Team
    */
   add_action("init", "user_functions_gallery_bank");

   /*
     add_shortcode
     Description: function for shortcode.
     Created On: 01-06-2017 09:00
     Created by: Tech Banker Team
    */
   add_shortcode("gallery_bank", "gallery_bank_shortcode");

   /* add_filter create Go Pro link for Gallery Bank
     Description: This hook is used for create link for premium Editions.
     Created On: 17-06-2017 17:38
     Created by: Tech Banker Team
    */
   add_filter("plugin_action_links_" . plugin_basename(__FILE__), "gallery_bank_action_links");

   /*
     add_action for add_gallery_bank_shortcode_button
     Description: This hook is used for add gallery bank button.
     Created On: 05-06-2017 10:29
     Created by: Tech Banker Team
    */

   add_action("media_buttons", "add_gallery_bank_shortcode_button");

   /*
     add_action for MapWidget class
     Description: This hook is used for initiate Widget
     Created On: 05-06-2017 10:29
     Created by: Tech Banker Team
    */

   add_action("widgets_init", create_function("", "return register_widget(\"gallery_bank_widget\");"));

   /*
     add_action for Widget.
     Description: This hook is used for apply the shortcode for Widget.
     Created On: 05-06-2017 10:29
     Created by: Tech Banker Team
    */

   add_filter("widget_text", "do_shortcode");
} else {
   function sidebar_menu_gallery_bank_temp() {
      add_menu_page("Gallery Bank", "Gallery Bank", "read", "gallery_bank", "", plugins_url("assets/global/img/icon.png", __FILE__));
      add_submenu_page("Gallery Bank", "Gallery Bank", "", "read", "gallery_bank", "gallery_bank");
   }
   function gallery_bank() {
      global $wpdb;
         $user_role_permission = array(
          "manage_options",
          "edit_plugins",
          "edit_posts",
          "publish_posts",
          "publish_pages",
          "edit_pages"
      );
         if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "includes/translations.php")) {
            include GALLERY_BANK_PLUGIN_DIR_PATH . "includes/translations.php";
         }
         if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "includes/queries.php")) {
            include_once GALLERY_BANK_PLUGIN_DIR_PATH . "includes/queries.php";
         }
         if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "includes/header.php")) {
            include_once GALLERY_BANK_PLUGIN_DIR_PATH . "includes/header.php";
         }
         if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "includes/sidebar.php")) {
            include_once GALLERY_BANK_PLUGIN_DIR_PATH . "includes/sidebar.php";
         }
         if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "views/wizard/wizard.php")) {
            include_once GALLERY_BANK_PLUGIN_DIR_PATH . "views/wizard/wizard.php";
         }
         if (file_exists(GALLERY_BANK_PLUGIN_DIR_PATH . "includes/footer.php")) {
            include_once GALLERY_BANK_PLUGIN_DIR_PATH . "includes/footer.php";
         }
   }
   add_action("admin_menu", "sidebar_menu_gallery_bank_temp");
   add_action("network_admin_menu", "sidebar_menu_gallery_bank_temp");
}
// Hooks

/* register_activation_hook
  Description: This hook is used to call install script
  Created On: 01-06-2017 09:00
  Created By: Tech Banker Team
 */
register_activation_hook(__FILE__, "install_script_for_gallery_bank");

/*
  add_action for install_script_for_gallery_bank
  Description: This hook is used for calling the function of install script.
  Created On: 01-06-2017 09:00
  Created By: Tech Banker Team
 */

add_action("admin_init", "install_script_for_gallery_bank");

/*
  Class Name: plugin_activate_gallery_bank
  Description: This function is used to add option on plugin activation.
  Created On: 01-06-2017 09:00
  Created By: Tech Banker Team
 */
function plugin_activate_gallery_bank() {
   add_option("gallery_bank_do_activation_redirect", true);
}
/*
  Class Name: gallery_bank_redirect
  Description: This function is used to redirect to manage maps menu.
  Created On: 01-06-2017 09:00
  Created By: Tech Banker Team
 */
function gallery_bank_redirect() {
   if (get_option('gallery_bank_do_activation_redirect', false)) {
      delete_option("gallery_bank_do_activation_redirect");
      wp_redirect(admin_url("admin.php?page=gb_welcome_gallery_bank"));
      exit;
   }
}
/*

  /*
  plugin_activate_gallery_bank
  Description: This Hook is used for redirecting to main menu after activation.
  Created On: 01-06-2017 09:00
  Created By: Tech Banker Team
 */

register_activation_hook(__FILE__, "plugin_activate_gallery_bank");
add_action("admin_init", "gallery_bank_redirect");
