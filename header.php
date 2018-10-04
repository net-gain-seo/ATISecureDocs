<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
   <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
    <?php wp_head(); ?>
    <script type="application/ld+json">
		[{
			"@context": "https://schema.org",
			"@type": "LocalBusiness",
			"name": "ATI SECURE DOCS",
			"address": {
				"@type": "PostalAddress",
				"streetAddress": "7305-B Burleson Rd",
				"addressLocality": "Austin",
				"addressRegion": "TX",
				"addressCountry": "US",
				"postalCode": "78744"
			},
			"description": "ATI Secure Docs brings local complete & secure shredding services to greater central & southeast Texas. We make a difference to our clients.",
			"legalName": "ATI SECURE DOCS",
			"openingHours": [
				"Mo-Fr 8:00-17:30",
				"Sa-Su Closed"
			],
			"telephone": "877 314 5273",
			"url": "https://austintask.com/",
			"image" : "https://austintask.com/wp-content/themes/ati-child/img/logo.png"
		},
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"url": "https://austintask.com/",
			"sameAs" : [ 
				"https://www.facebook.com/ShreddingServices/",
				"https://twitter.com/ATISecureDocs",
				"https://www.youtube.com/user/ATISecureDocs"
			],
			"logo" : "https://austintask.com/wp-content/themes/ati-child/img/logo.png",
			"contactPoint" : [{
				"@type" : "ContactPoint",
				"telephone" : "+1-877-314-5273",
				"contactType" : "Customer Service"
			
			}]
		}]
	</script>
</head>

<body <?php body_class(); ?>>

<header class="container-fluid site-header">
    <div class="container flex-header">
        <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="ATI Secure Docs logo"></a></div>
        <div class="stickylogo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-sticky.png" alt="ATI Secure Docs Condensed Logo"></a></div>
        <div class="header-block">
            <div class="inner-block">
                <div class="phone"><a href="tel:18773145273">Call: 877-314-5273</a></div>
            </div>
        </div>
        <div class="header-nav">
            <div class="container padding0">
                  <div class="mobile-icons">
                    <a href="javascript:void(0);" id="navToggle" class="nav-toggle">
                        <i class="fa fa-bars"></i>
                        <span>MENU</span>
                    </a>
                    <a href="tel:18773145273" class="nav-phone">
                        <i class="fa fa-phone"></i>
                        <span>CALL</span>
                    </a>

                    <a href="<?php echo home_url(); ?>/contact/" class="nav-contact">
                        <i class="fa fa-envelope"></i>
                        <span>CONTACT</span>
                    </a>
                </div>
                <nav id="mainNav" class="mobile-nav" role="navigation">
                  <a href="javascript:void(0);" class="get-quote" data-toggle="modal" data-target="#popForm">Let Us Help</a>
                   <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '' ) ); ?>
                </nav>
            </div>
        </div>
    </div>
</header>
<main>
