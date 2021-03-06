<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
  <header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
    <div class="<?php print $container_class; ?>">
      <div class="row">
        <div class="col-xs-6 col-sm-4 main-logo">
          <?php if ($logo): ?>
          <a class="logo navbar-btn" href="<?php print $front_page; ?>" title="<?php print t('Go City Montevideo'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Go City Montevideo'); ?>" />
        </a>
          <?php endif; ?>
        </div>
        <div class="col-lg-7 col-sm-6 hidden-xs">
          <div class="call-us">
            <a href="tel:+59894893823">
              <ul>
                <li>
                  <img class="icon-wp" src="/sites/all/themes/go_city/images/whatsapp.svg">
                  <span class="transport"><?php print t('CALL US NOW'); ?> <br> <?php print t('FOR YOUR TRANSPORT'); ?></span>
                </li>
                <li>
                  <span class="phone-number">(+598) 94 893 823</span>
                </li>

              </ul>
            </a>
          </div>
        </div>
        <div class="col-xs-3 col-sm-2 col-md-1 item-menu-mobile">
        <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php endif; ?>
        </div>
        <div class="col-xs-3 col-sm-1 col-md-2 col-lg-1 item-language-select">
          <?php if (!empty($page['language_select'])): ?>
            <?php print render($page['language_select']); ?>
          <?php endif; ?>
        </div>


        <div class="navbar-header">
          <?php if (!empty($site_name)): ?>
          <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
            <?php print $site_name; ?>
          </a>
          <?php endif; ?>


        </div>

        <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <div class="navbar-collapse collapse" id="navbar-collapse">
          <nav id="go-city-menu" role="navigation">
            <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
            <?php endif; ?>
          </nav>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </header>
  <?php if (!empty($page['hero_slider'])): ?>
  <?php print render($page['hero_slider']); ?>
  <?php endif; ?>
  <div class="main-container">

    <header role="banner" id="page-header">

      <?php print render($page['header']); ?>
    </header>
    <!-- /#page-header -->
    <div class="container">
      <?php print $messages; ?>
    </div>

    <div class="section-about clearfix" id="about-us">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="heading">
              <?php if (!empty($page['about_us_heading'])): ?>
              <?php print render($page['about_us_heading']); ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-xs-12">
            <?php if (!empty($page['about_us_message'])): ?>
            <?php print render($page['about_us_message']); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>


    <div class="section-services clearfix" id="services">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="heading">
              <?php if (!empty($page['service_heading'])): ?>
              <?php print render($page['service_heading']); ?>
              <?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-4">
              <?php if (!empty($page['service_one'])): ?>
              <?php print render($page['service_one']); ?>
              <?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-4">
              <?php if (!empty($page['service_two'])): ?>
              <?php print render($page['service_two']); ?>
              <?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-4">
              <?php if (!empty($page['service_three'])): ?>
              <?php print render($page['service_three']); ?>
              <?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-4">
              <?php if (!empty($page['service_four'])): ?>
              <?php print render($page['service_four']); ?>
              <?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-4">
              <?php if (!empty($page['service_five'])): ?>
              <?php print render($page['service_five']); ?>
              <?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-4">
              <?php if (!empty($page['service_six'])): ?>
              <?php print render($page['service_six']); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section-reservation clearfix" id="reservation">
      <div class="filter">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="heading">
                <?php if (!empty($page['reservation_heading'])): ?>
                <?php print render($page['reservation_heading']); ?>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-xs-12">
              <?php if (!empty($page['reservation_form'])): ?>
              <?php print render($page['reservation_form']); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="section-fleet clearfix" id="fleet">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="heading">
              <?php if (!empty($page['fleet_heading'])): ?>
              <?php print render($page['fleet_heading']); ?>
              <?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-4">
              <?php if (!empty($page['fleet_one'])): ?>
              <?php print render($page['fleet_one']); ?>
              <?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-4">
              <?php if (!empty($page['fleet_two'])): ?>
              <?php print render($page['fleet_two']); ?>
              <?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-4">
              <?php if (!empty($page['fleet_three'])): ?>
              <?php print render($page['fleet_three']); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="section-contact clearfix" id="contact">
      <div class="filter">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="heading">
                <?php if (!empty($page['contact_heading'])): ?>
                <?php print render($page['contact_heading']); ?>
                <?php endif; ?>
              </div>
              <div class="col-xs-12 col-sm-12">
                <?php if (!empty($page['contact_block'])): ?>
                <?php print render($page['contact_block']); ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




        <?php if (!empty($page['sidebar_first'])): ?>
        <aside class="col-sm-3" role="complementary">
          <?php print render($page['sidebar_first']); ?>
        </aside>
        <!-- /#sidebar-first -->
        <?php endif; ?>


      <?php if (!empty($page['footer'])): ?>
      <footer class="footer">
        <?php print render($page['footer']); ?>
      </footer>
      <?php endif; ?>
      <script>(function($){
  $(document).on("ready", function () {
      var urlHash = window.location.href.split("#")[1];
      $('html,body').animate({
          scrollTop: $('.' + urlHash + ', #' + urlHash +',[name='+urlHash+']').first().offset().top +1
      }, 1250);
  });
 
})(jQuery);
 
 
// =================================== SMOOTH SCROLLING LOCAL ANCHOR //
(function($) {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top +1
                }, 1250);
                return false;
              }
            }
        });
})(jQuery);
      </script>
