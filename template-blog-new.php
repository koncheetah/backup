<?php
/**
 * Template Name: New Blog Homepage
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Flames_ERP
 * @since 1.0
 * @version 1.0
 */

?>

<?php get_header('erp'); ?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <style>
    .section-featured {
      padding-top: 60px;
      background: linear-gradient(to bottom, rgba(0,0,0,0), rgba(88,196,196,0.5)), url(<?php echo get_stylesheet_directory_uri(); ?>/img/neuro-network-back.png);
      background-size: cover;
      background-position: bottom center;
    }
    .avatar {
      display: block;
      border-radius: 50px;
      width: 80px;
      height: 80px;
      position: absolute;
      bottom: -40px;
      left: 15px;
      border: 4px solid rgba(255,255,255,1);
      background-color: rgba(255,255,255,1);
      box-shadow: inset 1px 1px 5px rgba(0,0,0,0.1), 1px 1px 5px rgba(0,0,0,0.1);
    }
    .author-name {
      position: absolute;
      left: 145px;
      padding: 5px 0;
      font-size: 14px;
    }
    .post-date {
      position: absolute;
      right: 15px;
      padding: 5px 0;
      font-size: 14px;
    }
    .blogpost-wrapper,
    .blogpost-wrapper p {
      font-size: 14px;
      line-height: 28px;
    }
    @media (max-width: 576px) {
      .author-name {
        font-size: 14px;
      }
      .post-date {
        left: 145px;
        bottom: -60px;
        font-size: 14px;
      }
    }
    .blogpost-wrapper a {
      color: #2196f3;
    }
    .blogpost-wrapper .avatar {
      border: 4px solid rgba(255,255,255,1) !important;
      /*box-shadow: inset 1px 1px 10px rgba(0,0,0,0.05), 1px 1px 10px rgba(0,0,0,0.05) !important;*/
    }
    .big-post,
    .regular-post {
      margin-bottom: 30px;
    }
    .blogpost-wrapper {
      margin-bottom: 30px;
      /*padding-bottom: 15px;*/
      background-color: rgba(255,255,255,1);
      box-shadow: 1px 1px 20px rgba(0,0,0,0.1);
      border-radius: 15px 0 15px 0;
      /*min-height: 450px;*/
      height: 100%;
      background: rgba(255,255,255,1) url(<?php echo get_stylesheet_directory_uri(); ?>/img/neuro-network-back.png);
      background-size: cover;
      background-position: bottom center;
      overflow: hidden;
    }
    .sidebar-wrapper {
      background-color: rgba(255,255,255,1);
      box-shadow: 1px 1px 20px rgba(0,0,0,0.1);
      padding: 15px;
      margin-bottom: 30px;
      border-radius: 15px 0 15px 0;
      overflow: hidden;
    }
    .preview-text {
      padding: 0 15px;
    }
    .thumbnail-wrapper {
      margin-bottom: 60px;
      position: relative;
      border-radius: 15px 0 0 0;
    }
    .blogpost-wrapper .wp-post-image {
      width: 100%;
      height: auto;
    }
    .blogpost-wrapper img {
      border: 3px solid rgba(255,255,255,1);
      box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.15);
    }
    .thumbnail-wrapper img {
      border: 0 !important;
      box-shadow: none !important;
    }
    .thumbnail-wrapper > a > img {
      width: 100%;
      height: auto;
    }
    .thumbnail-wrapper a {
      display: block;
      max-height: 146px;
      overflow: hidden;
    }
    .bg-custom .navbar-nav .nav-link {
      color: rgba(0,0,0,1);
      text-shadow: none;
    }
    .category-item a {
      color: #2196f3;
    }
  </style>

  <?php get_template_part('template-parts/header/header', 'styles-general'); ?>
  <?php get_template_part('template-parts/header/header', 'styles-racesostac'); ?>

  <style>
    .bg-custom .navbar-nav .nav-link {
      color: rgba(0,0,0,1);
      text-shadow: none;
    }
    @media (max-width: 576px) {
      .bg-custom {
        background: #f8f9fa;
      }
    }
  </style>

</head>

<body class="page-inventory" data-spy="scroll" data-target="#mainNavbar" data-offset="0" data-fg-landing-id="Tend ERP">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BVXC68"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <section class="section-nav" id="section-nav">
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-custom">
      <div class="container">
        <a class="navbar-brand" href="#"><img class="top-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-tend-erp-2.svg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
          <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item">
              <a class="nav-link" href="#section-top">О системе <span class="sr-only">(текущая)</span></a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="/">ERP</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#section-solutions">Как мы решаем</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="/crm">CRM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/inventory">Склад</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/blog">Блог</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#section-steps">Этапы внедрения</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
  </section>

  <section id="section-featured" class="section-featured">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="row">
            <?php
              $args = array( 'category' => array($cat), 'posts_per_page' => 3 );
              $posts = get_posts( $args );
              $first = true;
              if ( $posts ) {
                foreach($posts as $post) {
                  setup_postdata($post); 
                  if ( $first ) {
                    $first = false; ?>
                    <div class="col-md-12 big-post">
                  <?php }
                  else { ?>
                    <div class="col-md-6 regular-post">
                  <?php } ?>
                      <div class="blogpost-wrapper">
                        <div class="thumbnail-wrapper">
                          <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(300, 9999), ['class' => 'img-responsive']); ?></a>
                          <?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
                          <div class="author-name"><?php echo get_the_author(); ?></div>
                          <div class="post-date"><?php echo get_the_date('d.m.Y'); ?></div>
                        </div>
                        <div class="preview-text">
                          <h3 class="h3"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                          <?php the_excerpt('Read more'); ?>
                        </div>
                      </div>
                    </div>
                  <?php
                }
              }
            ?>
          </div>
        </div>
        <div class="col-md-3">
          <div class="sidebar-wrapper">
            <div class="row">
              <div class="col-md-12">
                <h3 class="h3">Наша рассылка</h3>
              </div>
              <div class="col-md-12">
                <?php echo do_shortcode('[contact_form id="104/81fb25c8975bdf9bd59aa14b4fa7fcee" integrity_hash="d80ef02772e20237580413bb25776ea8"]'); ?>
              </div>
            </div>
          </div>
          <div class="sidebar-wrapper">
            <div class="row">
              <div class="col-md-12">
                <h3 class="h3">Популярные</h3>
              </div>
              <?php
                $args=array(
                  'category' => 8,
                  'posts_per_page' => 4,
                  'post__not_in' => array( $post->ID )
                );
                $posts=get_posts($args);
                if ($posts) {
                  foreach($posts as $post) {
                    setup_postdata($post); ?>
                    <div class="col-md-12 category-item">
                      <a class="preview-link" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                      <div class="preview-container" style="">
                        <div class="preview-title">
                          <?php the_title(); ?>
                        </div>
                      </div>
                      </a>
                    </div>
                    <?php
                  }
                }
              ?>
            </div>
          </div>
          <div class="sidebar-wrapper">
            <div class="row">
              <div class="col-md-12">
                <h3 class="h3">Рубрики</h3>
              </div>
              <?php $args = array(
                'orderby' => 'name',
                'order' => 'ASC',
                'hide_empty' => 1,
                'exclude' => '8, 1'
                );
                $categories = get_categories( $args );
                foreach($categories as $category) {
                ?>
                <div class="col-md-12 category-item">
                  <a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="section-categories" id="section-categories">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12">
          <div class="row align-items-start">
            <div class="col-md-12">
              <h2 class="h2">Статьи по рубрикам</h2>
            </div>        
            <?php $args = array(
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => 1,
            'exclude' => '8, 1'
            );
            $categories = get_categories( $args );
            foreach($categories as $category) {
            ?>
              <div class="col-md-3">
                <div class="sidebar-wrapper">
                  <h3 class="h3 category-header"><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></h3>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <section class="section-form" id="section-form">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <h2 class="h2">Не теряйте деньги - начните использовать продукты Tend ERP</h2>
            </div>
            <div class="col-md-4 offset-md-4">
              <?php echo do_shortcode('[contact_form id="108/db113b7c527e5030ae97eb79de315aad" integrity_hash="43538dbe4c0bbdfe210f6da23b0d0656"]'); ?>
            </div>
          </div>
        </div>
        <div class="col-md-12 text-center">
          <p class="copyright"><?php echo date('Y'); ?> <i class="fa fa-copyright"></i> Tend ERP. Все права защищены. - <a href="/privacy-policy" target="_blank">Политика конфиденциальности</a></p>
        </div>
      </div>
    </div>
  </section>

  <div class="popup-wrapper">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4 offset-md-4">
          <div class="popup-window ">
            <h3 class="h3">Увеличьте продажи с системой Tend CRM</h3>
            <?php echo do_shortcode('[contact_form id="107/45612e642a7ce2b85e10f83e7cd01ecf" integrity_hash="86eacda3450f038d75c92f5697948a83"]'); ?>
            <div class="close-button"><span>×</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <a href="#" id="scrollToTop"><i class="fa fa-angle-up"></i></a>

  <div id="outdated">
    <h6>Your browser is out-of-date!</h6>
    <p>Update your browser to view this website correctly. <a id="btnUpdateBrowser" href="http://outdatedbrowser.com/">Update my browser now </a></p>
    <p class="last"><a href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p>
  </div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js" async="async"></script>

  <script type="text/javascript">
    $('.toggle-popup').click(function(){
      $('.popup-wrapper').fadeIn();
    });
    $('.close-button').click(function(){
      $('.popup-wrapper').fadeOut();
    });
    $('.smooth-scroll').on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
          scrollTop: $(hash).offset().top+0
        }, 800, function(){
        });
      }
    });
    $(function() {
      //caches a jQuery object containing the header element
      var header = $(".bg-custom");
      $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 100) {
          header.addClass("bg-colored");
        } else {
          header.removeClass("bg-colored");
        }
      });
    });
  </script>

<?php
/**
 * Get the reliable IP address.
 * @return mixed
 */
function getIpAddress() {
    $result = '';
    foreach (
        array(
            'HTTP_X_REAL_IP',
            'HTTP_CLIENT_IP',
            'HTTP_X_FORWARDED_FOR',
            'HTTP_X_FORWARDED',
            'HTTP_X_CLUSTER_CLIENT_IP',
            'HTTP_FORWARDED_FOR',
            'HTTP_FORWARDED',
            'REMOTE_ADDR'
        ) as $key
    ) {
        if (array_key_exists($key, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                if (filter_var($ip, FILTER_VALIDATE_IP) !== false) {
                    $result = $ip;
                    break 2;
                }
            }
        }
    }
    return $result;
}
?>

<script type="text/javascript">
    var $ = jQuery;
</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/FGFormValidator.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/intlTelInput.min.js"></script>
<script type="text/javascript">
    var validator = new FGFormValidator('.contact-form');
    validator.validate();

    $(".form-tel").intlTelInput({
        initialCountry: "auto",
        autoPlaceholder: "aggressive",
        geoIpLookup: function(callback) {
            try {
                $.get('//csb.flamesgroup.com/api/geo/getcountrycode', function() {}, "json")
                    .always(function(resp) {
                        var countryCode = (resp && resp.country) ? resp.country : "";
                        if (countryCode == "")
                        {
                            var lang = navigator.language || navigator.userLanguage;
                            if (lang != undefined)
                            {
                                lang_parsed = lang.split('-');
                                countryCode = (lang_parsed[1] ? lang_parsed[1] : "");
                                if (countryCode == "")
                                {
                                    countryCode = lang;
                                }
                            }
                        }
                        if (countryCode == 'uk')
                        {
                            countryCode = "UA"
                        }
                        countryCode = countryCode.toUpperCase();
                        callback(countryCode);
                    });
            } catch (err) {
            }
        },
        customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
            var country_code = '+'+selectedCountryData['dialCode'];
            var rest_of_phone = selectedCountryPlaceholder.replace('+'+selectedCountryData['dialCode'], '');
            rest_of_phone = rest_of_phone.trim();
            var rest_of_phone_processed = '';
            for (var i = 0; i < rest_of_phone.length; i++)
            {
                if (rest_of_phone[i] == ' ' || rest_of_phone[i] == '-')
                {
                    rest_of_phone_processed = rest_of_phone_processed+'-';
                }
                else
                {
                    rest_of_phone_processed = rest_of_phone_processed+'_';
                }
            }

            return country_code+rest_of_phone_processed;
        },
        formatOnDisplay: false,
        nationalMode: false,
        utilsScript: "<?php echo get_stylesheet_directory_uri(); ?>/assets/js/utils.js"
    });
</script>

<script type="text/javascript">
  (function(d, w, s) {
      var widgetHash = 'zud2x30l7ly8rsfm4fbz', ctw = d.createElement(s); ctw.type = 'text/javascript'; ctw.async = true;
      ctw.src = '//widgets.binotel.com/calltracking/widgets/'+ widgetHash +'.js';
      var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(ctw, sn);
  })(document, window, 'script');
</script>

<script type="text/javascript">
    //event listener: DOM ready
    function addLoadEvent(func) {
        var oldonload = window.onload;
        if (typeof window.onload != 'function') {
            window.onload = func;
        } else {
            window.onload = function() {
                if (oldonload) {
                    oldonload();
                }
                func();
            }
        }
    }
    //call plugin function after DOM ready
    addLoadEvent(function(){
        outdatedBrowser({
            bgColor: '#f25648',
            color: '#ffffff',
            lowerThan: 'borderImage',
            languagePath: 'your_path/outdatedbrowser/lang/en.html'
        })
    });
</script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/outdatedbrowser.min.js" async="async"></script>

<!-- Gather : START -->

<script type='text/javascript' src='https://en.antrax.mobi/wp-content/themes/twentythirteen-child/js/jquery.cookie/jquery.cookie.js?ver=1.0.0' async="async"></script>
<script type='text/javascript' src='https://en.antrax.mobi/wp-content/themes/twentythirteen-child/js/jstz.min.js?ver=1.0.0' async="async"></script>
<script type='text/javascript' src='https://cdn.tenderp.com/js/fingerprint2.js?ver=1.5.1' async="async"></script>
<script type='text/javascript' src='https://en.antrax.mobi/wp-content/themes/twentythirteen-child/js/uuid.js?ver=5.0.0' async="async"></script>
<script type='text/javascript' src='https://en.antrax.mobi/wp-content/themes/twentythirteen-child/js/fg/identify.js?ver=5.0.0' async="async"></script>
<script type='text/javascript' src='https://en.antrax.mobi/wp-content/themes/twentythirteen-child/js/fg/fg-robber.erp.js?ver=5.0.0' async="async"></script>
<script type="text/javascript"' src="https://tenderp.com/wp-content/plugins/fg-form/js/garlic.min.js"></script>
<script type="text/javascript">
  // $("#section-top").delay(3000).slideUp();
</script>

<script>

    jQuery( "form[id^='form-']" ).attr("data-destroy", "false");
    jQuery( 'form' ).garlic();

    jQuery(function() {

        FG.Identify.init(function () {

            window.__IP__     = "<?php echo getIpAddress(); ?>";
            window.__FG_UID__ = FG.Identify.getFgUid();
            window.__FG_CID__ = FG.Identify.getCID();

            FG.Identify.traceHistory();

            dataLayer.push({
                userId: __FG_UID__,
                clientId: __FG_CID__
            });

            jQuery("form").FGRobber({fg_uid: __FG_UID__, fg_cid: __FG_CID__, send_on: "submit"});
            jQuery("form").FGRobber({fg_uid: __FG_UID__, fg_cid: __FG_CID__, send_on: "change"});
            jQuery("body").FGRobber({fg_uid: __FG_UID__, fg_cid: __FG_CID__, send_on: "load"});

            jQuery("input[name='uid']").val(__FG_UID__);

        });

    });
</script>

<!-- Gather : END -->

<script src='https://www.google.com/recaptcha/api.js?render=explicit'></script>

</body>

</html>

