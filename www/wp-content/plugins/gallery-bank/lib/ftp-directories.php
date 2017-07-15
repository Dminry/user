<?php
/**
 * Template for add Gallery.
 *
 * @author 	Tech Banker
 * @package 	gallery-bank/lib
 * @version	4.0.0
 */
if (!defined("ABSPATH")) {
   exit;
} // Exit if accessed directly
if (!is_user_logged_in()) {
   return;
} else {
   $access_granted = false;
   foreach ($user_role_permission as $permission) {
      if (current_user_can($permission)) {
         $access_granted = true;
         break;
      }
   }
   if (!$access_granted) {
      return;
   } else {
      if ((wp_verify_nonce($_REQUEST["_wp_nonce"], "ftp_upload")) && ($_REQUEST["param"] == "get_ftp_directories")) {
         $root = rtrim(ABSPATH . "wp-content", "\\/");
         $dir = urldecode($_POST['dir']);
         if (file_exists($root . $dir)) {
            $files = scandir($root . $dir);
            natcasesort($files);

            // The 2 counts for . and ..
            if (count($files) > 2) {
               echo "<ul class=\"jqueryFileTree\" style=\"display: none;\">";

               // return only directories
               foreach ($files as $file) {

                  //reserved name for the thumnbnails, don't use it as folder name
                  if ($file == 'thumbs')
                     continue;

                  if (file_exists($root . $dir . $file) && $file != '.' && $file != '..' && is_dir($root . $dir . $file)) {
                     echo "<li class=\"directory collapsed\"><a href=\"#\" rel=\"" . esc_html($dir . $file) . "/\">" . esc_html($file) . "</a></li>";
                  }
               }
               echo "</ul>";
            }
         }
         die();
      }
   }
}

