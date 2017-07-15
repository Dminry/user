<?php
/**
 * Template for view wizard.
 *
 * @author 	Tech Banker
 * @package 	gallery-bank/views/wizard
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
      ?>
      <div class="page-bar">
         <ul class="page-breadcrumb">
            <li>
               <i class="icon-custom-home"></i>
               <a href="admin.php?page=gallery_bank">
                  <?php echo $gallery_bank; ?>
               </a>
               <span>></span>
            </li>
            <li>
               <span>
                  <?php echo $gb_overview; ?>
               </span>
            </li>
         </ul>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="portlet box vivid-green">
               <div class="portlet-title">
                  <div class="caption">
                     <i class="icon-custom-present"></i>
                     <?php echo $gb_overview; ?>
                  </div>
               </div>
               <div class="portlet-body form">
                  <form id="ux_frm_wizard">
                     <div class="form-body">
                        <div class="wpb_wrapper">
                           <div class="ult-spacer spacer-59607b6c7fc00" data-id="59607b6c7fc00" data-height="10" data-height-mobile="10" data-height-tab="10" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;">

                           </div>
                           <div class="wpb_text_column wpb_content_element ">
                              <div class="wpb_wrapper">
                                 <h1 style="text-align: center;">Gallery Bank is the most <u style="color: #237371;">Stylish and Elegant</u> Photo Gallery Plugin on WordPress.</h1>
                              </div>
                           </div>
                           <div class="wpb_text_column wpb_content_element ">
                              <div class="wpb_wrapper">
                                 <h3 style="text-align: center;line-height:1.6em;">It is the most Magnificent Plugin to show up your media, images, and much more<br>
                                    with attractive animation effects.</h3>
                                 <h2 style="text-align: center;line-height:1.6em;">Create your Gallery with Images <a href="admin.php?page=gallery_bank">now</a>.</h2>
                              </div>
                           </div>
                           <div class="ult-spacer spacer-59607b6c7fea4" data-id="59607b6c7fea4" data-height="15" data-height-mobile="15" data-height-tab="15" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;">
                           </div>
                        </div>
                        <div class="line-separator"></div>
                        <div class="tabbable-custom">
                           <ul class="nav nav-tabs ">
                              <li class="active">
                                 <a aria-expanded="true" href="#video_tutorials" data-toggle="tab">
                                    <?php echo $gb_video_tutorials; ?>
                                 </a>
                              </li>
                              <li>
                                 <a aria-expanded="false" href="#premium_editions" data-toggle="tab">
                                    <?php echo $gb_premium_editions; ?>
                                 </a>
                              </li>
                              <li>
                                 <a aria-expanded="false" href="#live_demos" data-toggle="tab">
                                    <?php echo $gb_live_demos; ?>
                                 </a>
                              </li>
                              <li>
                                 <a aria-expanded="false" href="#have_suggestions" data-toggle="tab">
                                    <?php echo $gb_have_suggestions; ?>
                                 </a>
                              </li>
                           </ul>
                           <div class="tab-content">
                              <div class="tab-pane active" id="video_tutorials">
                                 <div class="portlet box vivid-green">
                                    <div class="portlet-title" onclick="show_hide_text_field_options('ux_div_create_gallery');">
                                       <div class="caption">
                                          <i class="icon-custom-plus"></i>
                                          How to create a Gallery with Images?
                                       </div>
                                       <span class="dashicons dashicons-arrow-down downarraow-toggle"></span>
                                    </div>
                                    <div class="portlet-body form">
                                       <div class="form-body" id="ux_div_create_gallery">
                                          <iframe class="youtube-player" type="text/html" src="https://www.youtube.com/embed/5tOPGePG9Dw?version=3&amp;rel=1&amp;fs=1&amp;autohide=2&amp;showsearch=0&amp;showinfo=1&amp;iv_load_policy=1&amp;wmode=transparent" allowfullscreen="true" style="border:0;" width="640" height="390"></iframe>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane" id="premium_editions">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="portlet box vivid-green">
                                          <div class="portlet-title">
                                             <div class="caption">
                                                <i class="icon-custom-briefcase"></i>
                                                <?php echo $gb_upgrade; ?>
                                             </div>
                                          </div>
                                          <div class="portlet-body form">
                                             <form id="ux_frm_premium_editions">
                                                <div class="form-body">
                                                   <div class="wpb_wrapper">
                                                      <style type="text/css">
                                                         #go-pricing-table-464 .gw-go {
                                                            margin-left: -30px;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col {
                                                            margin-left: 30px;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap {
                                                            min-width: 130px;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-inner {
                                                            border-radius: 8px 8px 8px 8px;
                                                         }

                                                         #go-pricing-table-464 ul.gw-go-body,
                                                         #go-pricing-table-464 ul.gw-go-body li {
                                                            border: none !important;
                                                            padding-top: 1px;
                                                         }

                                                         #go-pricing-table-464 ul.gw-go-body li .gw-go-body-cell {
                                                            padding-top: 1px;
                                                         }

                                                         #go-pricing-table-464 ul.gw-go-body {
                                                            padding-bottom: 1px;
                                                         }

                                                         #go-pricing-table-464 .gw-go-tooltip-content {
                                                            background-color: #9d9d9d;
                                                            color: #333333;
                                                            max-width: 130px;
                                                         }

                                                         #go-pricing-table-464 .gw-go-tooltip:before {
                                                            border-top-color: #9d9d9d;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-header,
                                                         #go-pricing-table-464 .gw-go-col-wrap-0.gw-go-hover .gw-go-header-bottom,
                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li .gw-go-body-cell:before,
                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-btn {
                                                            background-color: #ef463b;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-price-wrap span,
                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-coinf div,
                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-coinb div {
                                                            color: #ef463b;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-header h3 {
                                                            font-size: 22px !important;
                                                            line-height: 24px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-price-wrap > span {
                                                            font-size: 55px !important;
                                                            line-height: 60px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-price-wrap small {
                                                            font-size: 16px !important;
                                                            line-height: 18px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="0"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="1"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="2"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="3"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="4"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="5"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="6"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="7"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="8"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="9"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="10"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="11"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="12"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="13"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="14"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="15"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="16"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="17"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="18"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="19"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="20"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="21"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="22"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="23"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="24"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="25"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="26"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="27"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="28"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="29"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="30"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="31"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="32"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="33"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="34"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="35"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="36"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="37"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="38"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="39"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="40"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="41"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="42"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="43"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="44"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="45"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="46"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="47"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="48"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="49"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="50"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="51"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="52"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="53"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="54"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="55"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="56"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="57"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="58"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="59"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="60"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="61"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="62"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="63"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="64"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="65"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="66"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="67"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="68"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="69"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="70"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="71"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="72"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="73"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="74"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="75"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="76"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="77"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="78"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="79"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-body li[data-row-index="80"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-footer-row[data-row-index="0"] .gw-go-btn {
                                                            font-size: 14px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-0 .gw-go-footer-row[data-row-index="0"] .gw-go-btn {
                                                            background-color: #ef463b !important;
                                                            color: #ffffff !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-header,
                                                         #go-pricing-table-464 .gw-go-col-wrap-1.gw-go-hover .gw-go-header-bottom,
                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li .gw-go-body-cell:before,
                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-btn {
                                                            background-color: #05458c;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-price-wrap span,
                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-coinf div,
                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-coinb div {
                                                            color: #05458c;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-header h3 {
                                                            font-size: 22px !important;
                                                            line-height: 24px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-price-wrap > span {
                                                            font-size: 55px !important;
                                                            line-height: 60px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-price-wrap small {
                                                            font-size: 16px !important;
                                                            line-height: 18px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="0"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="1"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="2"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="3"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="4"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="5"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="6"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="7"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="8"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="9"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="10"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="11"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="12"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="13"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="14"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="15"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="16"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="17"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="18"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="19"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="20"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="21"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="22"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="23"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="24"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="25"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="26"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="27"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="28"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="29"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="30"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="31"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="32"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="33"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="34"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="35"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="36"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="37"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="38"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="39"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="40"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="41"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="42"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="43"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="44"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="45"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="46"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="47"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="48"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="49"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="50"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="51"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="52"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="53"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="54"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="55"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="56"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="57"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="58"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="59"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="60"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="61"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="62"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="63"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="64"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="65"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="66"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="67"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="68"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="69"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="70"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="71"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="72"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="73"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="74"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="75"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="76"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="77"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="78"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="79"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-body li[data-row-index="80"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-footer-row[data-row-index="0"] .gw-go-btn {
                                                            font-size: 14px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-1 .gw-go-footer-row[data-row-index="0"] .gw-go-btn {
                                                            background-color: #05458c !important;
                                                            color: #ffffff !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-header,
                                                         #go-pricing-table-464 .gw-go-col-wrap-2.gw-go-hover .gw-go-header-bottom,
                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li .gw-go-body-cell:before,
                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-btn {
                                                            background-color: #16bbdc;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-price-wrap span,
                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-coinf div,
                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-coinb div {
                                                            color: #16bbdc;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-header h3 {
                                                            font-size: 22px !important;
                                                            line-height: 24px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-price-wrap > span {
                                                            font-size: 55px !important;
                                                            line-height: 60px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-price-wrap small {
                                                            font-size: 16px !important;
                                                            line-height: 18px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="0"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="1"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="2"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="3"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="4"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="5"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="6"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="7"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="8"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="9"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="10"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="11"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="12"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="13"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="14"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="15"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="16"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="17"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="18"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="19"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="20"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="21"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="22"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="23"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="24"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="25"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="26"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="27"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="28"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="29"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="30"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="31"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="32"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="33"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="34"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="35"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="36"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="37"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="38"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="39"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="40"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="41"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="42"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="43"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="44"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="45"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="46"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="47"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="48"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="49"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="50"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="51"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="52"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="53"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="54"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="55"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="56"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="57"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="58"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="59"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="60"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="61"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="62"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="63"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="64"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="65"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="66"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="67"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="68"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="69"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="70"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="71"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="72"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="73"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="74"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="75"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="76"] {
                                                            font-size: 14px !important;
                                                            line-height: 16px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="77"] {
                                                            font-size: 20px !important;
                                                            line-height: 22px !important;
                                                            font-weight: bold !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="78"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="79"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-body li[data-row-index="80"] {
                                                            font-size: 17px !important;
                                                            line-height: 19px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-footer-row[data-row-index="0"] .gw-go-btn {
                                                            font-size: 14px !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go-col-wrap-2 .gw-go-footer-row[data-row-index="0"] .gw-go-btn {
                                                            background-color: #16bbdc !important;
                                                            color: #ffffff !important;
                                                         }

                                                         #go-pricing-table-464 .gw-go {
                                                            visibility: inherit;
                                                         }
                                                      </style>
                                                      <style>
                                                         @media only screen and (min-width: 480px) and (max-width: 767px) {
                                                            #go-pricing-table-464 .gw-go-col-wrap {
                                                               width: 50%;
                                                            }
                                                         }
                                                      </style>
                                                      <style>
                                                         @media only screen and (max-width: 479px) {
                                                            #go-pricing-table-464 .gw-go-col-wrap {
                                                               width: 100%;
                                                            }
                                                         }
                                                      </style>
                                                      <div id="go-pricing-table-464" class="go-pricing" style="margin-bottom:20px;">
                                                         <div class="gw-go gw-go-clearfix gw-go-enlarge-current gw-go-disable-box-shadow gw-go-3cols" data-id="464" data-colnum="3" data-equalize="{&quot;column&quot;:1,&quot;body&quot;:1,&quot;footer&quot;:1}" data-views="{&quot;tp&quot;:{&quot;min&quot;:&quot;768&quot;,&quot;max&quot;:&quot;959&quot;,&quot;cols&quot;:&quot;&quot;},&quot;ml&quot;:{&quot;min&quot;:&quot;480&quot;,&quot;max&quot;:&quot;767&quot;,&quot;cols&quot;:&quot;2&quot;},&quot;mp&quot;:{&quot;min&quot;:&quot;&quot;,&quot;max&quot;:&quot;479&quot;,&quot;cols&quot;:&quot;1&quot;}}" style="opacity: 1;">
                                                            <div class="gw-go-col-wrap gw-go-col-wrap-0 gw-go-hover gw-go-disable-enlarge gw-go-disable-hover" data-current="1" data-col-index="0" style="max-width: 409px; height: 3385px;">
                                                               <div class="gw-go-col gw-go-clean-style5">
                                                                  <div class="gw-go-col-inner">
                                                                     <div class="gw-go-col-inner-layer"></div>
                                                                     <div class="gw-go-col-inner-layer-over"></div>
                                                                     <div class="gw-go-header gw-go-header-standard">
                                                                        <div class="gw-go-header-top">
                                                                           <h3>PERSONAL</h3></div>
                                                                        <div class="gw-go-header-bottom">
                                                                           <div class="gw-go-price-wrap"><span data-id="price" data-currency="{&quot;currency&quot;:&quot;USD&quot;,&quot;position&quot;:&quot;left&quot;,&quot;thousand-sep&quot;:&quot;,&quot;,&quot;decimal-sep&quot;:&quot;.&quot;,&quot;decimal-no&quot;:2}" data-price="29"><span data-id="currency">$</span><span data-id="amount">29</span></span><small>One Time Purchase</small></div>
                                                                        </div>
                                                                     </div>
                                                                     <ul class="gw-go-body">
                                                                        <li data-row-index="0">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="1">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">PRO SUPPORT</div>
                                                                        </li>
                                                                        <li data-row-index="2">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">1 Installation per License</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="3">
                                                                           <div class="gw-go-body-cell" style="height: 37px;">1 week of Technical Support</div>
                                                                        </li>
                                                                        <li data-row-index="4">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">1 year of Free Updates</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="5">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Automatic Plugin Updates</div>
                                                                        </li>
                                                                        <li data-row-index="6">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="7">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">GALLERIES</div>
                                                                        </li>
                                                                        <li data-row-index="8">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Manage Galleries</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="9">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Add Gallery</div>
                                                                        </li>
                                                                        <li data-row-index="10">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Sort Galleries</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="11">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li data-row-index="12">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">ALBUMS</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="13">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                        <li data-row-index="14">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="15">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                        <li data-row-index="16">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="17">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">TAGS</div>
                                                                        </li>
                                                                        <li data-row-index="18">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Manage Tags</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="19">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Add Tag</div>
                                                                        </li>
                                                                        <li data-row-index="20">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="21">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">LAYOUT SETTINGS</div>
                                                                        </li>
                                                                        <li data-row-index="22">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Thumbnail Layout</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="23">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Masonry Layout</div>
                                                                        </li>
                                                                        <li data-row-index="24">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Slideshow Layout</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="25">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Image Browser Layout</div>
                                                                        </li>
                                                                        <li data-row-index="26">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="27">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                        <li data-row-index="28">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="29">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                        <li data-row-index="30">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Custom CSS</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="31">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li data-row-index="32">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">LIGHTBOXES</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="33">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Lightcase</div>
                                                                        </li>
                                                                        <li data-row-index="34">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Fancy Box</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="35">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                        <li data-row-index="36">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="37">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                        <li data-row-index="38">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="39">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">GENERAL SETTINGS</div>
                                                                        </li>
                                                                        <li data-row-index="40">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Global Options</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="41">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Lazy Load Settings</div>
                                                                        </li>
                                                                        <li data-row-index="42">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Filters Settings</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="43">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                        <li data-row-index="44">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="45">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Page Navigation</div>
                                                                        </li>
                                                                        <li data-row-index="46">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="47">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                        <li data-row-index="48">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="49">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">MAIN FEATURES</div>
                                                                        </li>
                                                                        <li data-row-index="50">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Shortcode Wizard</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="51">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Unlimited Galleries and Images</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="53">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Duplicate Gallery</div>
                                                                        </li>
                                                                        <li data-row-index="54">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="55">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Filmstrip Gallery</div>
                                                                        </li>
                                                                        <li data-row-index="56">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Multiple Browser Compatible</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="57">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Supports Media Manager</div>
                                                                        </li>
                                                                        <li data-row-index="58">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Copy Images</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="59">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Move Images</div>
                                                                        </li>
                                                                        <li data-row-index="60">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Rotate Clockwise</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="61">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Rotate Anti-Clockwise</div>
                                                                        </li>
                                                                        <li data-row-index="62">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Flip Images Vertically</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="63">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Flip Images Horizontally</div>
                                                                        </li>
                                                                        <li data-row-index="64">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Restore Images</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="65">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                        <li data-row-index="66">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="67">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                        <li data-row-index="68">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Hover Effects</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="69">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Animation Effects</div>
                                                                        </li>
                                                                        <li data-row-index="70">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Special Effects</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="71">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Purge Galleries</div>
                                                                        </li>
                                                                        <li data-row-index="72">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">SEO Friendly</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="73">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Title &amp; Description</div>
                                                                        </li>
                                                                        <li data-row-index="74">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Font Settings</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="75">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Border Settings</div>
                                                                        </li>
                                                                        <li data-row-index="76">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="77">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">OTHER SETTINGS</div>
                                                                        </li>
                                                                        <li data-row-index="78">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Feature Requests</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="79">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Roles and Capabilities</div>
                                                                        </li>
                                                                        <li data-row-index="80">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">-</div>
                                                                        </li>
                                                                     </ul>
                                                                     <div class="gw-go-footer-wrap">
                                                                        <div class="gw-go-footer-spacer"></div>
                                                                        <div class="gw-go-footer">
                                                                           <div class="gw-go-footer-rows">
                                                                              <div class="gw-go-footer-row" data-row-index="0">
                                                                                 <div class="gw-go-footer-row-inner" style="height: 44px;"><a href="<?php echo tech_banker_gallery_url;?>product/personal-edition/" class="gw-go-btn gw-go-btn-large"><span class="gw-go-btn-inner">BUY NOW</span></a></div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="gw-go-tooltip"></div>
                                                               </div>
                                                            </div>
                                                            <div class="gw-go-col-wrap gw-go-col-wrap-1 gw-go-hover gw-go-disable-enlarge gw-go-disable-hover" data-current="1" data-col-index="1" style="max-width: 409px; height: 3385px;">
                                                               <div class="gw-go-col gw-go-clean-style5">
                                                                  <div class="gw-go-col-inner">
                                                                     <div class="gw-go-col-inner-layer"></div>
                                                                     <div class="gw-go-col-inner-layer-over"></div>
                                                                     <div class="gw-go-ribbon-right"><img src="<?php echo plugins_url("assets/global/img/ribbon_green_right_top.png", dirname(dirname(__FILE__))); ?>"></div>
                                                                     <div class="gw-go-header gw-go-header-standard">
                                                                        <div class="gw-go-header-top">
                                                                           <h3>BUSINESS</h3></div>
                                                                        <div class="gw-go-header-bottom">
                                                                           <div class="gw-go-price-wrap"><span data-id="price" data-currency="{&quot;currency&quot;:&quot;USD&quot;,&quot;position&quot;:&quot;left&quot;,&quot;thousand-sep&quot;:&quot;,&quot;,&quot;decimal-sep&quot;:&quot;.&quot;,&quot;decimal-no&quot;:2}" data-price="38"><span data-id="currency">$</span><span data-id="amount">38</span></span><small>One Time Purchase</small></div>
                                                                        </div>
                                                                     </div>
                                                                     <ul class="gw-go-body">
                                                                        <li data-row-index="0">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="1">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">PRO SUPPORT</div>
                                                                        </li>
                                                                        <li data-row-index="2">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">1 Installation per License</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="3">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">1 month of Technical Support</div>
                                                                        </li>
                                                                        <li data-row-index="4">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">1 year of Free Updates</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="5">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Automatic Plugin Updates</div>
                                                                        </li>
                                                                        <li data-row-index="6">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="7">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">GALLERIES</div>
                                                                        </li>
                                                                        <li data-row-index="8">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Manage Galleries</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="9">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Add Gallery</div>
                                                                        </li>
                                                                        <li data-row-index="10">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Sort Galleries</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="11">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li data-row-index="12">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">ALBUMS</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="13">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Manage Albums</div>
                                                                        </li>
                                                                        <li data-row-index="14">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Add Album</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="15">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Sort Albums</div>
                                                                        </li>
                                                                        <li data-row-index="16">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="17">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">TAGS</div>
                                                                        </li>
                                                                        <li data-row-index="18">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Manage Tags</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="19">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Add Tag</div>
                                                                        </li>
                                                                        <li data-row-index="20">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="21">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">LAYOUT SETTINGS</div>
                                                                        </li>
                                                                        <li data-row-index="22">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Thumbnail Layout</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="23">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Masonry Layout</div>
                                                                        </li>
                                                                        <li data-row-index="24">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Slideshow Layout</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="25">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Image Browser Layout</div>
                                                                        </li>
                                                                        <li data-row-index="26">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Justified Grid Layout</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="27">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Blog Style Layout</div>
                                                                        </li>
                                                                        <li data-row-index="28">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Compact Album</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="29">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Extended Album</div>
                                                                        </li>
                                                                        <li data-row-index="30">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Custom CSS</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="31">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li data-row-index="32">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">LIGHTBOXES</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="33">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Lightcase</div>
                                                                        </li>
                                                                        <li data-row-index="34">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Fancy Box</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="35">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Color Box</div>
                                                                        </li>
                                                                        <li data-row-index="36">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Foo Box</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="37">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Nivo Lightbox</div>
                                                                        </li>
                                                                        <li data-row-index="38">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="39">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">GENERAL SETTINGS</div>
                                                                        </li>
                                                                        <li data-row-index="40">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Global Options</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="41">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Lazy Load Settings</div>
                                                                        </li>
                                                                        <li data-row-index="42">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Filters Settings</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="43">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Order By Settings</div>
                                                                        </li>
                                                                        <li data-row-index="44">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Search Box Settings</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="45">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Page Navigation</div>
                                                                        </li>
                                                                        <li data-row-index="46">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Watermark Settings</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="47">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Advertisement</div>
                                                                        </li>
                                                                        <li data-row-index="48">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="49">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">MAIN FEATURES</div>
                                                                        </li>
                                                                        <li data-row-index="50">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Shortcode Wizard</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="51">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Unlimited Galleries and Images</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="53">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Duplicate Gallery</div>
                                                                        </li>
                                                                        <li data-row-index="54">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Duplicate Albums</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="55">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Filmstrip Gallery</div>
                                                                        </li>
                                                                        <li data-row-index="56">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Multiple Browser Compatible</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="57">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Supports Media Manager</div>
                                                                        </li>
                                                                        <li data-row-index="58">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Copy Images</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="59">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Move Images</div>
                                                                        </li>
                                                                        <li data-row-index="60">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Rotate Clockwise</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="61">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Rotate Anti-Clockwise</div>
                                                                        </li>
                                                                        <li data-row-index="62">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Flip Images Vertically</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="63">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Flip Images Horizontally</div>
                                                                        </li>
                                                                        <li data-row-index="64">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Restore Images</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="65">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Cropping Images</div>
                                                                        </li>
                                                                        <li data-row-index="66">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Editing Images</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="67">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Saturation Images</div>
                                                                        </li>
                                                                        <li data-row-index="68">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Hover Effects</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="69">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Animation Effects</div>
                                                                        </li>
                                                                        <li data-row-index="70">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Special Effects</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="71">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Purge Galleries</div>
                                                                        </li>
                                                                        <li data-row-index="72">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">SEO Friendly</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="73">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Title &amp; Description</div>
                                                                        </li>
                                                                        <li data-row-index="74">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Font Settings</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="75">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Border Settings</div>
                                                                        </li>
                                                                        <li data-row-index="76">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="77">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">OTHER SETTINGS</div>
                                                                        </li>
                                                                        <li data-row-index="78">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Feature Requests</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="79">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Roles and Capabilities</div>
                                                                        </li>
                                                                        <li data-row-index="80">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Bulk Deletion of Records</div>
                                                                        </li>
                                                                     </ul>
                                                                     <div class="gw-go-footer-wrap">
                                                                        <div class="gw-go-footer-spacer"></div>
                                                                        <div class="gw-go-footer">
                                                                           <div class="gw-go-footer-rows">
                                                                              <div class="gw-go-footer-row" data-row-index="0">
                                                                                 <div class="gw-go-footer-row-inner" style="height: 44px;"><a href="<?php echo tech_banker_gallery_url;?>product/business-edition/" class="gw-go-btn gw-go-btn-large"><span class="gw-go-btn-inner">BUY NOW</span></a></div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="gw-go-tooltip"></div>
                                                               </div>
                                                            </div>
                                                            <div class="gw-go-col-wrap gw-go-col-wrap-2 gw-go-hover gw-go-disable-enlarge gw-go-disable-hover" data-current="1" data-col-index="2" style="max-width: 409px; height: 3385px;">
                                                               <div class="gw-go-col gw-go-clean-style5">
                                                                  <div class="gw-go-col-inner">
                                                                     <div class="gw-go-col-inner-layer"></div>
                                                                     <div class="gw-go-col-inner-layer-over"></div>
                                                                     <div class="gw-go-header gw-go-header-standard">
                                                                        <div class="gw-go-header-top">
                                                                           <h3>DEVELOPER</h3></div>
                                                                        <div class="gw-go-header-bottom">
                                                                           <div class="gw-go-price-wrap"><span data-id="price" data-currency="{&quot;currency&quot;:&quot;USD&quot;,&quot;position&quot;:&quot;left&quot;,&quot;thousand-sep&quot;:&quot;,&quot;,&quot;decimal-sep&quot;:&quot;.&quot;,&quot;decimal-no&quot;:2}" data-price="146"><span data-id="currency">$</span><span data-id="amount">146</span></span><small>One Time Purchase</small></div>
                                                                        </div>
                                                                     </div>
                                                                     <ul class="gw-go-body">
                                                                        <li data-row-index="0">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="1">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">PRO SUPPORT</div>
                                                                        </li>
                                                                        <li data-row-index="2">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">5 Installations per License</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="3">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">6 months of Technical Support</div>
                                                                        </li>
                                                                        <li data-row-index="4">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Life Time Free Updates</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="5">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Automatic Plugin Updates</div>
                                                                        </li>
                                                                        <li data-row-index="6">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="7">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">GALLERIES</div>
                                                                        </li>
                                                                        <li data-row-index="8">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Manage Galleries</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="9">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Add Gallery</div>
                                                                        </li>
                                                                        <li data-row-index="10">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Sort Galleries</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="11">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li data-row-index="12">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">ALBUMS</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="13">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Manage Albums</div>
                                                                        </li>
                                                                        <li data-row-index="14">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Add Album</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="15">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Sort Albums</div>
                                                                        </li>
                                                                        <li data-row-index="16">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="17">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">TAGS</div>
                                                                        </li>
                                                                        <li data-row-index="18">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Manage Tags</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="19">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Add Tag</div>
                                                                        </li>
                                                                        <li data-row-index="20">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="21">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">LAYOUT SETTINGS</div>
                                                                        </li>
                                                                        <li data-row-index="22">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Thumbnail Layout</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="23">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Masonry Layout</div>
                                                                        </li>
                                                                        <li data-row-index="24">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Slideshow Layout</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="25">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Image Browser Layout</div>
                                                                        </li>
                                                                        <li data-row-index="26">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Justified Grid Layout</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="27">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Blog Style Layout</div>
                                                                        </li>
                                                                        <li data-row-index="28">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Compact Album</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="29">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Extended Album</div>
                                                                        </li>
                                                                        <li data-row-index="30">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Custom CSS</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="31">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li data-row-index="32">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">LIGHTBOXES</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="33">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Lightcase</div>
                                                                        </li>
                                                                        <li data-row-index="34">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Fancy Box</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="35">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Color Box</div>
                                                                        </li>
                                                                        <li data-row-index="36">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Foo Box</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="37">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Nivo Lightbox</div>
                                                                        </li>
                                                                        <li data-row-index="38">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="39">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">GENERAL SETTINGS</div>
                                                                        </li>
                                                                        <li data-row-index="40">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Global Options</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="41">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Lazy Load Settings</div>
                                                                        </li>
                                                                        <li data-row-index="42">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Filters Settings</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="43">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Order By Settings</div>
                                                                        </li>
                                                                        <li data-row-index="44">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Search Box Settings</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="45">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Page Navigation</div>
                                                                        </li>
                                                                        <li data-row-index="46">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Watermark Settings</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="47">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Advertisement</div>
                                                                        </li>
                                                                        <li data-row-index="48">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="49">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">MAIN FEATURES</div>
                                                                        </li>
                                                                        <li data-row-index="50">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Shortcode Wizard</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="51">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Unlimited Galleries and Images</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="53">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Duplicate Gallery</div>
                                                                        </li>
                                                                        <li data-row-index="54">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Duplicate Albums</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="55">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Filmstrip Gallery</div>
                                                                        </li>
                                                                        <li data-row-index="56">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Multiple Browser Compatible</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="57">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Supports Media Manager</div>
                                                                        </li>
                                                                        <li data-row-index="58">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Copy Images</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="59">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Move Images</div>
                                                                        </li>
                                                                        <li data-row-index="60">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Rotate Clockwise</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="61">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Rotate Anti-Clockwise</div>
                                                                        </li>
                                                                        <li data-row-index="62">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Flip Images Vertically</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="63">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Flip Images Horizontally</div>
                                                                        </li>
                                                                        <li data-row-index="64">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Restore Images</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="65">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Cropping Images</div>
                                                                        </li>
                                                                        <li data-row-index="66">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Editing Images</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="67">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Saturation Images</div>
                                                                        </li>
                                                                        <li data-row-index="68">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Hover Effects</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="69">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Animation Effects</div>
                                                                        </li>
                                                                        <li data-row-index="70">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Special Effects</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="71">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Purge Galleries</div>
                                                                        </li>
                                                                        <li data-row-index="72">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">SEO Friendly</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="73">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Title &amp; Description</div>
                                                                        </li>
                                                                        <li data-row-index="74">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Font Settings</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="75">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Border Settings</div>
                                                                        </li>
                                                                        <li data-row-index="76">
                                                                           <div class="gw-go-body-cell" style="height: 0px;"></div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="77">
                                                                           <div class="gw-go-body-cell" style="height: 22px;">OTHER SETTINGS</div>
                                                                        </li>
                                                                        <li data-row-index="78">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Feature Requests</div>
                                                                        </li>
                                                                        <li class="gw-go-even" data-row-index="79">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Roles and Capabilities</div>
                                                                        </li>
                                                                        <li data-row-index="80">
                                                                           <div class="gw-go-body-cell" style="height: 19px;">Bulk Deletion of Records</div>
                                                                        </li>
                                                                     </ul>
                                                                     <div class="gw-go-footer-wrap">
                                                                        <div class="gw-go-footer-spacer"></div>
                                                                        <div class="gw-go-footer">
                                                                           <div class="gw-go-footer-rows">
                                                                              <div class="gw-go-footer-row" data-row-index="0">
                                                                                 <div class="gw-go-footer-row-inner" style="height: 44px;"><a href="<?php echo tech_banker_gallery_url;?>product/developer-edition/" class="gw-go-btn gw-go-btn-large"><span class="gw-go-btn-inner">BUY NOW</span></a></div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane" id="live_demos">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="portlet box vivid-green">
                                          <div class="portlet-title" onclick="show_hide_text_field_options('ux_div_thumbnail_layout');">
                                             <div class="caption">
                                                <i class="icon-custom-plus"></i>
                                                <?php echo "Thumbnail Layout"; ?>
                                             </div>
                                             <span class="dashicons dashicons-arrow-down downarraow-toggle"></span>
                                          </div>
                                          <div class="portlet-body form">
                                             <div class="form-body" id="ux_div_thumbnail_layout">
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <h3 style="color: #000000;text-align: left" class="vc_custom_heading">Individual Images</h3>
                                                      <div class="standard-arrow list-divider bullet-top">
                                                         <ul>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-title-thumbnail-layout/">With Title</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-title-description-thumbnail-layout/">With Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-without-title-description-thumbnail-layout/">Without Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-lightboxes-thumbnail-layout/">Lightboxes</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-pagination-thumbnail-layout/">Pagination</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/individual-images-with-lazy-load-thumbnail-layout/">Lazy Load</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-filters-thumbnail-layout/">Filters</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/individual-images-with-order-by-thumbnail-layout/">Order By</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/individual-images-with-search-box-thumbnail-layout/">Search Box</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-watermark-thumbnail-layout/">Watermark</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-animation-thumbnail-layout/">Animation</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-special-effects-thumbnail-layout/">Special Effects</a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <h3 style="color: #000000;text-align: left" class="vc_custom_heading">Compact Album</h3>
                                                      <div class="standard-arrow list-divider bullet-top">
                                                         <ul>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-title-thumbnail-layout/">With Title</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-title-description-thumbnail-layout/">With Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-without-title-description-thumbnail-layout/">Without Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-lightboxes-thumbnail-layout/">Lightboxes</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-pagination-thumbnail-layout/">Pagination</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-lazy-load-thumbnail-layout/">Lazy Load</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-filters-thumbnail-layout/">Filters</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-order-by-thumbnail-layout/">Order By</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-search-box-thumbnail-layout/">Search Box</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-watermark-thumbnail-layout/">Watermark</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-animation-thumbnail-layout/">Animation</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-special-effects-thumbnail-layout/">Special Effects</a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <h3 style="color: #000000;text-align: left" class="vc_custom_heading">Extended Album</h3>
                                                      <div class="standard-arrow list-divider bullet-top">
                                                         <ul>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-title-thumbnail-layout/">With Title</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-title-description-thumbnail-layout/">With Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-without-title-description-thumbnail-layout/">Without Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-lightboxes-thumbnail-layout/">Lightboxes</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-pagination-thumbnail-layout/">Pagination</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-lazy-load-thumbnail-layout/">Lazy Load</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-filters-thumbnail-layout/">Filters</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-order-by-thumbnail-layout/">Order By</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-search-box-thumbnail-layout/">Search Box</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-watermark-thumbnail-layout/">Watermark</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-animation-thumbnail-layout/">Animation</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-special-effects-thumbnail-layout/">Special Effects</a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="portlet box vivid-green toggle-portlet">
                                          <div class="portlet-title" onclick="show_hide_text_field_options('ux_div_masonry_layout');">
                                             <div class="caption">
                                                <i class="icon-custom-plus"></i>
                                                <?php echo "Masonry Layout"; ?>
                                             </div>
                                             <span class="dashicons dashicons-arrow-down downarraow-toggle"></span>
                                          </div>
                                          <div class="portlet-body form">
                                             <div class="form-body" id="ux_div_masonry_layout">
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <h3 style="color: #000000;text-align: left" class="vc_custom_heading">Individual Images</h3>
                                                      <div class="standard-arrow list-divider bullet-top">
                                                         <ul>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-title-masonry-layout/">With Title</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-title-description-masonry-layout/">With Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-without-title-description-masonry-layout/">Without Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-lightboxes-masonry-layout/">Lightboxes</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-pagination-masonry-layout/">Pagination</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/individual-images-with-lazy-load-masonry-layout/">Lazy Load</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-filters-masonry-layout/">Filters</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/individual-images-with-order-by-masonry-layout/">Order By</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/individual-images-with-search-box-masonry-layout/">Search Box</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-watermark-masonry-layout/">Watermark</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-animation-masonry-layout/">Animation</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-special-effects-masonry-layout/">Special Effects</a></li>
                                                         </ul>  
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <h3 style="color: #000000;text-align: left" class="vc_custom_heading">Compact Album</h3>
                                                      <div class="standard-arrow list-divider bullet-top">
                                                         <ul>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-title-masonry-layout/">With Title</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-title-description-masonry-layout/">With Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-without-title-description-masonry-layout/">Without Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-lightboxes-masonry-layout/">Lightboxes</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-pagination-masonry-layout/">Pagination</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/compact-album-with-lazy-load-masonry-layout/">Lazy Load</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-filters-masonry-layout/">Filters</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/compact-album-with-order-by-masonry-layout/">Order By</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/compact-album-with-search-box-masonry-layout/">Search Box</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-watermark-masonry-layout/">Watermark</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-animation-masonry-layout/">Animation</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-special-effects-masonry-layout/">Special Effects</a></li>
                                                         </ul>  
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <h3 style="color: #000000;text-align: left" class="vc_custom_heading">Extended Album</h3>
                                                      <div class="standard-arrow list-divider bullet-top">
                                                         <ul>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-title-masonry-layout/">With Title</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-title-description-masonry-layout/">With Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-without-title-description-masonry-layout/">Without Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-lightboxes-masonry-layout/">Lightboxes</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-pagination-masonry-layout/">Pagination</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/extended-album-with-lazy-load-masonry-layout/">Lazy Load</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-filters-masonry-layout/">Filters</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/extended-album-with-order-by-masonry-layout/">Order By</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/extended-album-with-search-box-masonry-layout/">Search Box</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-watermark-masonry-layout/">Watermark</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-animation-masonry-layout/">Animation</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-special-effects-masonry-layout/">Special Effects</a></li>
                                                         </ul>  
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="portlet box vivid-green toggle-portlet">
                                          <div class="portlet-title" onclick="show_hide_text_field_options('ux_div_slideshow_layout');">
                                             <div class="caption">
                                                <i class="icon-custom-plus"></i>
                                                <?php echo "SlideShow Layout"; ?>
                                             </div>
                                             <span class="dashicons dashicons-arrow-down downarraow-toggle"></span>
                                          </div>
                                          <div class="portlet-body form">
                                             <div class="form-body" id="ux_div_slideshow_layout">
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <h3 style="color: #000000;text-align: left" class="vc_custom_heading">Individual Images</h3>
                                                      <div class="standard-arrow list-divider bullet-top">
                                                         <ul>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-title-slideshow-layout/">With Title</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-title-description-slideshow-layout/">With Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-without-title-description-slideshow-layout/">Without Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/individual-images-with-lazy-load-slideshow-layout/">Lazy Load</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-filters-slideshow-layout/">Filters</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/individual-images-with-order-by-slideshow-layout/">Order By</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/individual-images-with-search-box-slideshow-layout/">Search Box</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-watermark-slideshow-layout/">Watermark</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-animation-slideshow-layout/">Animation</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-special-effects-slideshow-layout/">Special Effects</a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <h3 style="color: #000000;text-align: left" class="vc_custom_heading">Compact Album</h3>
                                                      <div class="standard-arrow list-divider bullet-top">
                                                         <ul>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-title-slideshow-layout/">With Title</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-title-description-slideshow-layout/">With Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-without-title-description-slideshow-layout/">Without Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/compact-album-with-lazy-load-slideshow-layout/">Lazy Load</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-filters-slideshow-layout/">Filters</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/compact-album-with-order-by-slideshow-layout/">Order By</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/compact-album-with-search-box-slideshow-layout/">Search Box</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-watermark-slideshow-layout/">Watermark</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-animation-slideshow-layout/">Animation</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-special-effects-slideshow-layout/">Special Effects</a></li>
                                                         </ul> 
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <h3 style="color: #000000;text-align: left" class="vc_custom_heading">Extended Album</h3>
                                                      <div class="standard-arrow list-divider bullet-top">
                                                         <ul>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-title-slideshow-layout/">With Title</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-title-description-slideshow-layout/">With Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-without-title-description-slideshow-layout/">Without Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/extended-album-with-lazy-load-slideshow-layout/">Lazy Load</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-filters-slideshow-layout/">Filters</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/extended-album-with-order-by-slideshow-layout/">Order By</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/extended-album-with-search-box-slideshow-layout/">Search Box</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-watermark-slideshow-layout/">Watermark</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-animation-slideshow-layout/">Animation</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-special-effects-slideshow-layout/">Special Effects</a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="portlet box vivid-green toggle-portlet">
                                          <div class="portlet-title" onclick="show_hide_text_field_options('ux_div_image_browser_layout');">
                                             <div class="caption">
                                                <i class="icon-custom-plus"></i>
                                                <?php echo "Image Browser Layout"; ?>
                                             </div>
                                             <span class="dashicons dashicons-arrow-down downarraow-toggle"></span>
                                          </div>
                                          <div class="portlet-body form">
                                             <div class="form-body" id="ux_div_image_browser_layout">
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <h3 style="color: #000000;text-align: left" class="vc_custom_heading">Individual Images</h3>
                                                      <div class="standard-arrow list-divider bullet-top">
                                                         <ul>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-title-image-browser-layout/">With Title</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-title-description-image-browser-layout/">With Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-without-title-description-image-browser-layout/">Without Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/individual-images-with-lazy-load-image-browser-layout/">Lazy Load</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-filters-image-browser-layout/">Filters</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/individual-images-with-order-by-image-browser-layout/">Order By</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/individual-images-with-search-box-image-browser-layout/">Search Box</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-watermark-image-browser-layout/">Watermark</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-animation-image-browser-layout/">Animation</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-special-effects-image-browser-layout/">Special Effects</a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <h3 style="color: #000000;text-align: left" class="vc_custom_heading">Compact Album</h3>
                                                      <div class="standard-arrow list-divider bullet-top">
                                                         <ul>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-title-image-browser-layout/">With Title</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-title-description-image-browser-layout/">With Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-without-title-description-image-browser-layout/">Without Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/compact-album-with-lazy-load-image-browser-layout/">Lazy Load</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-filters-image-browser-layout/">Filters</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/compact-album-with-order-by-image-browser-layout/">Order By</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/compact-album-with-search-box-image-browser-layout/">Search Box</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-watermark-image-browser-layout/">Watermark</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-animation-image-browser-layout/">Animation</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-special-effects-image-browser-layout/">Special Effects</a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <h3 style="color: #000000;text-align: left" class="vc_custom_heading">Extended Album</h3>
                                                      <div class="standard-arrow list-divider bullet-top">
                                                         <ul>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-title-image-browser-layout/">With Title</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-title-description-image-browser-layout/">With Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-without-title-description-image-browser-layout/">Without Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/extended-album-with-lazy-load-image-browser-layout/">Lazy Load</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-filters-image-browser-layout/">Filters</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/extended-album-with-order-by-image-browser-layout/">Order By</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/extended-album-with-search-box-image-browser-layout/">Search Box</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-watermark-image-browser-layout/">Watermark</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-animation-image-browser-layout/">Animation</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-special-effects-image-browser-layout/">Special Effects</a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="portlet box vivid-green toggle-portlet">
                                          <div class="portlet-title" onclick="show_hide_text_field_options('ux_div_justified_grid_layout');">
                                             <div class="caption">
                                                <i class="icon-custom-plus"></i>
                                                <?php echo "Justified Grid Layout"; ?>
                                             </div>
                                             <span class="dashicons dashicons-arrow-down downarraow-toggle"></span>
                                          </div>
                                          <div class="portlet-body form">
                                             <div class="form-body" id="ux_div_justified_grid_layout">
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <h3 style="color: #000000;text-align: left" class="vc_custom_heading">Individual Images</h3>
                                                      <div class="standard-arrow list-divider bullet-top">
                                                         <ul>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-title-justified-grid-layout/">With Title</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-title-description-justified-grid-layout/">With Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-without-title-description-justified-grid-layout/">Without Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-lightboxes-justified-grid-layout/">Lightboxes</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-pagination-justified-grid-layout/">Pagination</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/individual-images-with-lazy-load-justified-grid-layout/">Lazy Load</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-filters-justified-grid-layout/">Filters</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/individual-images-with-order-by-justified-grid-layout/">Order By</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/individual-images-with-search-box-justified-grid-layout/">Search Box</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-watermark-justified-grid-layout/">Watermark</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-animation-justified-grid-layout/">Animation</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-special-effects-justified-grid-layout/">Special Effects</a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <h3 style="color: #000000;text-align: left" class="vc_custom_heading">Compact Album</h3>
                                                      <div class="standard-arrow list-divider bullet-top">
                                                         <ul>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-title-justified-grid-layout/">With Title</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-title-description-justified-grid-layout/">With Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-without-title-description-justified-grid-layout/">Without Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-lightboxes-justified-grid-layout/">Lightboxes</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-pagination-justified-grid-layout/">Pagination</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/compact-album-with-lazy-load-justified-grid-layout/">Lazy Load</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-filters-justified-grid-layout/">Filters</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/compact-album-with-order-by-justified-grid-layout/">Order By</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/compact-album-with-search-box-justified-grid-layout/">Search Box</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-watermark-justified-grid-layout/">Watermark</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-animation-justified-grid-layout/">Animation</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-special-effects-justified-grid-layout/">Special Effects</a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <h3 style="color: #000000;text-align: left" class="vc_custom_heading">Extended Album</h3>
                                                      <div class="standard-arrow list-divider bullet-top">
                                                         <ul>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-title-justified-grid-layout/">With Title</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-title-description-justified-grid-layout/">With Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-without-title-description-justified-grid-layout/">Without Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-lightboxes-justified-grid-layout/">Lightboxes</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-pagination-justified-grid-layout/">Pagination</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/extended-album-with-lazy-load-justified-grid-layout/">Lazy Load</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-filters-justified-grid-layout/">Filters</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/extended-album-with-order-by-justified-grid-layout/">Order By</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/extended-album-with-search-box-justified-grid-layout/">Search Box</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-watermark-justified-grid-layout/">Watermark</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-animation-justified-grid-layout/">Animation</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-special-effects-justified-grid-layout/">Special Effects</a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="portlet box vivid-green toggle-portlet">
                                          <div class="portlet-title" onclick="show_hide_text_field_options('ux_div_blog_style_layout');">
                                             <div class="caption">
                                                <i class="icon-custom-plus"></i>
                                                <?php echo "Blog Style Layout"; ?>
                                             </div>
                                             <span class="dashicons dashicons-arrow-down downarraow-toggle"></span>
                                          </div>
                                          <div class="portlet-body form">
                                             <div class="form-body" id="ux_div_blog_style_layout">
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <h3 style="color: #000000;text-align: left" class="vc_custom_heading">Individual Images</h3>
                                                      <div class="standard-arrow list-divider bullet-top">
                                                         <ul>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-title-blog-style-layout/">With Title</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-title-description-blog-style-layout/">With Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-without-title-description-blog-style-layout/">Without Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-lightboxes-blog-style-layout/">Lightboxes</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-pagination-blog-style-layout/">Pagination</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/individual-images-with-lazy-load-blog-style-layout/">Lazy Load</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-filters-blog-style-layout/">Filters</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/individual-images-with-order-by-blog-style-layout/">Order By</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/individual-images-with-search-box-blog-style-layout/">Search Box</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-watermark-blog-style-layout/">Watermark</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-animation-blog-style-layout/">Animation</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/individual-images-with-special-effects-blog-style-layout/">Special Effects</a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <h3 style="color: #000000;text-align: left" class="vc_custom_heading">Compact Album</h3>
                                                      <div class="standard-arrow list-divider bullet-top">
                                                         <ul>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-title-blog-style-layout/">With Title</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-title-description-blog-style-layout/">With Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-without-title-description-blog-style-layout/">Without Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-lightboxes-blog-style-layout/">Lightboxes</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-pagination-blog-style-layout/">Pagination</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/compact-album-with-lazy-load-blog-style-layout/">Lazy Load</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-filters-blog-style-layout/">Filters</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/compact-album-with-order-by-blog-style-layout/">Order By</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/compact-album-with-search-box-blog-style-layout/">Search Box</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-watermark-blog-style-layout/">Watermark</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-animation-blog-style-layout/">Animation</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/compact-album-with-special-effects-blog-style-layout/">Special Effects</a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <h3 style="color: #000000;text-align: left" class="vc_custom_heading">Extended Album</h3>
                                                      <div class="standard-arrow list-divider bullet-top">
                                                         <ul>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-title-blog-style-layout/">With Title</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-title-description-blog-style-layout/">With Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-without-title-description-blog-style-layout/">Without Title &amp; Description</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-lightboxes-blog-style-layout/">Lightboxes</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-pagination-blog-style-layout/">Pagination</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/extended-album-with-lazy-load-blog-style-layout/">Lazy Load</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-filters-blog-style-layout/">Filters</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/extended-album-with-order-by-blog-style-layout/">Order By</a></li>
                                                            <li><a target = "_blank" href="https://gallery-bank.tech-banker.com/frontend-demos/extended-album-with-search-box-blog-style-layout/">Search Box</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-watermark-blog-style-layout/">Watermark</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-animation-blog-style-layout/">Animation</a></li>
                                                            <li><a target = "_blank" href="<?php echo tech_banker_gallery_url;?>frontend-demos/extended-album-with-special-effects-blog-style-layout/">Special Effects</a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>





                              </div>
                              <div class="tab-pane" id="have_suggestions">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="portlet box vivid-green">
                                          <div class="portlet-title">
                                             <div class="caption">
                                                <i class="icon-custom-call-out"></i>
                                                <?php echo $gb_feature_requests; ?>
                                             </div>
                                             <p class="premium-editions">
                                                <?php echo $gb_upgrade_need_help ?><a href="<?php echo tech_banker_gallery_url;?>" target="_blank" class="premium-editions-documentation"><?php echo $gb_documentation ?></a><?php echo $gb_read_and_check; ?><a href="<?php echo tech_banker_gallery_url;?>frontend-demos/" target="_blank" class="premium-editions-documentation"><?php echo $gb_demos_section; ?></a>
                                             </p>
                                          </div>
                                          <div class="portlet-body form">
                                             <form id="ux_frm_feature_requests">
                                                <div class="form-body">
                                                   <div class="note note-warning">
                                                      <?php
                                                      if ($gb_message_translate_help != "") {
                                                         ?>
                                                         <h4 class="block">
                                                            <?php echo $gb_important_disclaimer; ?>
                                                         </h4>
                                                         <p><strong><?php echo $gb_message_translate_help; ?> <a href="javascript:void(0);" data-popup-open="ux_open_popup_translator" class="custom_links_feature" onclick="show_pop_up_gallery_bank();"><?php echo $gb_message_translate_here; ?></a></strong></p>
                                                         <?php
                                                      }
                                                      ?>
                                                      <h4 class="block"><?php echo $gb_feature_requests_thank_you; ?></h4>
                                                      <p><?php echo $gb_feature_requests_fill_form; ?></p>
                                                      <p><?php echo $gb_feature_requests_any_suggestion; ?></p>
                                                      <p><?php echo $gb_feature_requests_write_us_on; ?>
                                                         <a href="mailto:support@tech-banker.com" target="_blank">support@tech-banker.com</a>
                                                      </p>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label class="control-label">
                                                               <?php echo $gb_feature_requests_name_title; ?> :
                                                               <i class="icon-custom-question tooltips" data-original-title="<?php echo $gb_feature_requests_name_tooltip; ?>" data-placement="right"></i>
                                                               <span class="required" aria-required="true">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" name="ux_txt_your_name" id="ux_txt_your_name" value="" placeholder="<?php echo $gb_feature_requests_name_placeholder; ?>">
                                                         </div>
                                                      </div>
                                                      <div class=col-md-6>
                                                         <div class="form-group">
                                                            <label class="control-label">
                                                               <?php echo $gb_feature_requests_email_title; ?> :
                                                               <i class="icon-custom-question tooltips" data-original-title="<?php echo $gb_feature_requests_email_tooltip; ?>" data-placement="right"></i>
                                                               <span class="required" aria-required="true">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" name="ux_txt_email_address" id="ux_txt_email_address" value=""  placeholder="<?php echo $gb_feature_requests_email_placeholder; ?>">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="control-label">
                                                         <?php echo $gb_feature_requests; ?> :
                                                         <i class="icon-custom-question tooltips" data-original-title="<?php echo $gb_feature_requests_tooltip; ?>" data-placement="right"></i>
                                                         <span class="required" aria-required="true">*</span>
                                                      </label>
                                                      <textarea class="form-control" name="ux_txtarea_feature_request" id="ux_txtarea_feature_request" rows="8"  placeholder="<?php echo $gb_feature_requests_placeholder; ?>"></textarea>
                                                   </div>
                                                   <div class="line-separator"></div>
                                                   <div class="form-actions">
                                                      <div class="pull-right">
                                                         <button type="submit" class="btn vivid-green" name="ux_btn_send_request" id="ux_btn_send_request"><?php echo $gb_feature_requests_send_request; ?></button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <?php
   }
}