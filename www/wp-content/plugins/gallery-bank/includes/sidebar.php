<?php
/**
 * This file is used for displaying sidebar menus.
 *
 * @author   Tech Banker
 * @package  gallery-bank/includes
 * @version  4.0.0
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
      ?>
      <div class="page-sidebar-wrapper-tech-banker">
         <div class="page-sidebar-tech-banker navbar-collapse collapse">
            <div class="sidebar-menu-tech-banker">
               <ul class="page-sidebar-menu-tech-banker" data-slide-speed="200">
                  <div class="sidebar-search-wrapper" style="padding:20px;text-align:center">
                     <a class="plugin-logo" href="<?php echo tech_banker_gallery_url;?>" target="_blank">
                        <img src="<?php echo GALLERY_BANK_PLUGIN_DIR_URL . "assets/global/img/logo.png"; ?>"/>
                     </a>
                  </div>
                  <li id="ux_li_welcome">
                     <a  href="admin.php?page=gb_welcome_gallery_bank">
                        <i class=" icon-custom-present"></i>
                        <?php echo $gb_overview; ?>
                     </a>
                  </li>
                  <li id="ux_li_galleries">
                     <a href="javascript:;">
                        <i class="icon-custom-picture"></i>
                        <span class="title">
                           <?php echo $gb_galleries; ?>
                        </span>
                     </a>
                     <ul class="sub-menu">
                        <li id="ux_li_manage_galleries">
                           <a href="admin.php?page=gallery_bank">
                              <i class="icon-custom-picture"></i>
                              <?php echo $gb_manage_galleries; ?>
                           </a>
                        </li>
                        <li id="ux_li_add_galleries">
                           <a href="javascript:;" onclick="get_gallery_id_gallery_bank();">
                              <i class="icon-custom-plus"></i>
                              <?php echo $gb_add_gallery; ?>
                           </a>
                        </li>
                        <li id="ux_li_sort_galleries">
                           <a href="admin.php?page=gb_sort_galleries">
                              <i class="icon-custom-list"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_sort_galleries; ?>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li id="ux_li_album">
                     <a href="javascript:;">
                        <i class="icon-custom-folder"></i>
                        <span class="badge">Pro</span>
                        <span class="title">
                           <?php echo $gb_albums; ?>
                        </span>
                     </a>
                     <ul class="sub-menu">
                        <li id="ux_li_manage_albums">
                           <a href="admin.php?page=gb_manage_albums">
                              <i class="icon-custom-folder"></i>
                              <?php echo $gb_manage_albums; ?>
                           </a>
                        </li>
                        <li id="ux_li_add_album">
                           <a href="admin.php?page=gb_add_album">
                              <i class="icon-custom-plus"></i>
                              <?php echo $gb_add_album; ?>
                           </a>
                        </li>
                        <li id="ux_li_sort_albums">
                           <a href="admin.php?page=gb_sort_albums">
                              <i class="icon-custom-list"></i>
                              <?php echo $gb_sort_albums; ?>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li id="ux_li_tags">
                     <a href="javascript:;">
                        <i class="icon-custom-tag"></i>
                        <span class="badge">Pro</span>
                        <span class="title">
                           <?php echo $gb_tags; ?>
                        </span>
                     </a>
                     <ul class="sub-menu">
                        <li id="ux_li_manage_tags">
                           <a href="admin.php?page=gb_manage_tags">
                              <i class="icon-custom-tag"></i>
                              <?php echo $gb_manage_tags; ?>
                           </a>
                        </li>
                        <li id="ux_li_add_tag">
                           <a href="admin.php?page=gb_add_tag">
                              <i class="icon-custom-plus"></i>
                              <?php echo $gb_add_tag; ?>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li id="ux_li_layout_settings">
                     <a href="javascript:;">
                        <i class="icon-custom-settings"></i>
                        <span class="title">
                           <?php echo $gb_layout_settings; ?>
                        </span>
                     </a>
                     <ul class="sub-menu">
                        <li id="ux_li_thumbnail_layout">
                           <a href="admin.php?page=gb_thumbnail_layout">
                              <i class="icon-custom-screen-tablet"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_thumbnail_layout; ?>
                           </a>
                        </li>
                        <li id="ux_li_masonry_layout">
                           <a href="admin.php?page=gb_masonry_layout">
                              <i class="icon-custom-energy"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_masonry_layout; ?>
                           </a>
                        </li>
                        <li id="ux_li_slideshow_layout">
                           <a href="admin.php?page=gb_slideshow_layout">
                              <i class="icon-custom-control-play"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_slideshow_layout; ?>
                           </a>
                        </li>
                        <li id="ux_li_image_browser_layout">
                           <a href="admin.php?page=gb_image_browser_layout">
                              <i class="icon-custom-feed"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_image_browser_layout; ?>
                           </a>
                        </li>
                        <li id="ux_li_justified_grid_layout">
                           <a href="admin.php?page=gb_justified_grid_layout">
                              <i class="icon-custom-grid"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_justified_grid_layout; ?>
                           </a>
                        </li>
                        <li id="ux_li_blog_style_layout">
                           <a href="admin.php?page=gb_blog_style_layout">
                              <i class="icon-custom-bubble"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_blog_style_layout; ?>
                           </a>
                        </li>
                        <li id="ux_li_compact_album_layout">
                           <a href="admin.php?page=gb_compact_album_layout">
                              <i class="icon-custom-bubbles"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_compact_album_layout; ?>
                           </a>
                        </li>
                        <li id="ux_li_extended_album_layout">
                           <a href="admin.php?page=gb_extended_album_layout">
                              <i class="icon-custom-diamond"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_extended_album_layout; ?>
                           </a>
                        </li>
                        <li id="ux_li_custom_css">
                           <a href="admin.php?page=gb_custom_css">
                              <i class="icon-custom-pencil"></i>
                              <?php echo $gb_custom_css; ?>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li id="ux_li_lightboxes">
                     <a href="javascript:;">
                        <i class="icon-custom-frame"></i>
                        <span class="title">
                           <?php echo $gb_lightboxes; ?>
                        </span>
                     </a>
                     <ul class = "sub-menu">
                        <li id="ux_li_gb_lightcase">
                           <a href="admin.php?page=gb_lightcase">
                              <i class="icon-custom-magnet"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_lightcase; ?>
                           </a>
                        </li>
                        <li id="ux_li_fancy_box">
                           <a href="admin.php?page=gb_fancy_box">
                              <i class="icon-custom-social-dropbox"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_fancy_box; ?>
                           </a>
                        </li>
                        <li id="ux_li_color_box">
                           <a href="admin.php?page=gb_color_box">
                              <i class="icon-custom-magic-wand"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_color_box; ?>
                           </a>
                        </li>
                        <li id="ux_li_foo_box_free_edition">
                           <a href="admin.php?page=gb_foo_box_free_edition">
                              <i class="icon-custom-frame"></i>
                              <span class="badge">Pro</span>
                              <?php echo class_exists("fooboxV2") ? $gb_foo_box_premium : $gb_foo_box_free_edition; ?>
                           </a>
                        </li>
                        <li id="ux_li_nivo_light_box">
                           <a href="admin.php?page=gb_nivo_lightbox">
                              <i class="icon-custom-paper-plane"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_nivo_lightbox; ?>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li id="ux_li_general_settings">
                     <a href="javascript:;">
                        <i class="icon-custom-wrench"></i>
                        <span class="title">
                           <?php echo $gb_general_settings; ?>
                        </span>
                     </a>
                     <ul class="sub-menu">
                        <li id="ux_li_global_options">
                           <a href="admin.php?page=gb_global_options">
                              <i class="icon-custom-globe"></i>
                              <?php echo $gb_global_options; ?>
                           </a>
                        </li>
                        <li id="ux_li_lazyload_settings">
                           <a href="admin.php?page=gb_lazy_load_settings">
                              <i class="icon-custom-reload"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_lazy_load_settings; ?>
                           </a>
                        </li>
                        <li id="ux_li_filter_settings">
                           <a href="admin.php?page=gb_filter_settings">
                              <i class="icon-custom-hourglass"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_filter_settings; ?>
                           </a>
                        </li>
                        <li id="ux_li_orderby_settings">
                           <a href="admin.php?page=gb_order_by_settings">
                              <i class="icon-custom-check"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_order_by_settings; ?>
                           </a>
                        </li>
                        <li id="ux_li_searchbox_settings">
                           <a href="admin.php?page=gb_search_box_settings">
                              <i class="icon-custom-magnifier"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_search_box_settings; ?>
                           </a>
                        </li>
                        <li id="ux_li_page_navigation">
                           <a href="admin.php?page=gb_page_navigation">
                              <i class="icon-custom-arrow-right"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_page_navigation; ?>
                           </a>
                        </li>
                        <li id="ux_li_watermark_settings">
                           <a href="admin.php?page=gb_watermark_settings">
                              <i class="icon-custom-note"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_watermark_settings; ?>
                           </a>
                        </li>
                        <li id="ux_li_advertisement">
                           <a href="admin.php?page=gb_advertisement">
                              <i class="icon-custom-volume-2"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_advertisement; ?>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li id="ux_li_shortcode_generator">
                     <a href="javascript:;">
                        <i class="icon-custom-rocket"></i>
                        <span class="title">
                           <?php echo $gb_shortcode_generator; ?>
                        </span>
                     </a>
                     <ul class="sub-menu">
                        <li id="ux_li_thumbnail_layout_shortcode">
                           <a href="admin.php?page=gb_thumbnail_layout_shortcode">
                              <i class="icon-custom-screen-tablet"></i>
                              <?php echo $gb_thumbnail_layout; ?>
                           </a>
                        </li>
                        <li id="ux_li_masonry_layout_shortcode">
                           <a href="admin.php?page=gb_masonry_layout_shortcode">
                              <i class="icon-custom-energy"></i>
                              <?php echo $gb_masonry_layout; ?>
                           </a>
                        </li>
                        <li id="ux_li_slideshow_layout_shortcode">
                           <a href="admin.php?page=gb_slideshow_layout_shortcode">
                              <i class="icon-custom-control-play"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_slideshow_layout; ?>
                           </a>
                        </li>
                        <li id="ux_li_image_browser_layout_shortcode">
                           <a href="admin.php?page=gb_image_browser_layout_shortcode">
                              <i class="icon-custom-feed"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_image_browser_layout; ?>
                           </a>
                        </li>
                        <li id="ux_li_justified_grid_layout_shortcode">
                           <a href="admin.php?page=gb_justified_grid_layout_shortcode">
                              <i class="icon-custom-grid"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_justified_grid_layout; ?>
                           </a>
                        </li>
                        <li id="ux_li_blog_style_layout_shortcode">
                           <a href="admin.php?page=gb_blog_style_layout_shortcode">
                              <i class="icon-custom-bubble"></i>
                              <span class="badge">Pro</span>
                              <?php echo $gb_blog_style_layout; ?>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li id="ux_li_other_setting">
                     <a href="admin.php?page=gb_other_settings">
                        <i class="icon-custom-wrench"></i>
                        <?php echo $gb_other_setting; ?>
                     </a>
                  </li>
                  <li id="ux_li_roles_capabilities">
                     <a href="admin.php?page=gb_roles_and_capabilities">
                        <i class="icon-custom-users"></i>
                        <span class="badge">Pro</span>
                        <?php echo $gb_roles_and_capabilities; ?>
                     </a>
                  </li>
                  <li id="ux_li_feature_requests">
                     <a href="admin.php?page=gb_feature_requests">
                        <i class="icon-custom-call-out"></i>
                        <span class="title">
                           <?php echo $gb_feature_requests; ?>
                        </span>
                     </a>
                  </li>
                  <li id="ux_li_system_information">
                     <a href="admin.php?page=gb_system_information">
                        <i class="icon-custom-screen-desktop"></i>
                        <span class="title">
                           <?php echo $gb_system_information; ?>
                        </span>
                     </a>
                  </li>
                  <li id="ux_li_upgrade">
                     <a href="admin.php?page=gb_upgrade">
                        <i class="icon-custom-briefcase"></i>
                        <span class="title">
                           <?php echo $gb_upgrade; ?>
                        </span>
                     </a>
                  </li>

               </ul>
            </div>
         </div>
      </div>
      <div class="page-content-wrapper">
         <div class="page-content">
            <?php
         }
      }