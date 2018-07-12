</main>

<footer class="container-fluid site-footer">
    <div class="container flex-footer">
        <div class="f-item ">
          <div class="social">
              <a href="https://www.facebook.com/ShreddingServices/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebookicon.png" width="45px" alt=""></a>
              <a href="https://twitter.com/ATISecureDocs" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twittericon.png" width="45px" alt=""></a>
              <a href="https://plus.google.com/+ATISecureDocsAustin" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/googleicon.png" width="45px" alt=""></a>
              <a href="https://www.youtube.com/user/ATISecureDocs" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/youtubeicon.png" width="45px" alt=""></a>
          </div>
          <div class="logo">
              <a href="http://www.naidonline.org/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/naid-footer.png" width="92px" alt=""></a>
              <a href="https://tibh.org/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/TIBH_logo.png" width="160px" alt=""></a>
              <a href="http://www.txsmartbuy.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/TexasSmart_Logo.png" width="100px" alt=""></a>
          </div>
        </div>
        <div class="f-item phone-assoc">
          <div class="phone">
              ATI SecureDocs <span>|</span> <a href="tel:18773145273">Call 877-314-5273</a>
          </div>
          <div class="location">
            3340-D Greens Rd Ste 425<br/>
            <a href="http://209.126.119.193/~atidocs/service-areas/houston/">Houston</a>, TX 77032<br/>
            <a href="tel:12814165177">Call: 281-416-5177</a>
          </div>
          <div class="location">
            7305-B Burleson Road<br/>
            <a href="http://209.126.119.193/~atidocs/service-areas/austin/">Austin</a>, TX 78744<br/>
            <a href="tel:15123893333">Call: 512-389-3333</a>
          </div>
        </div>
        <div class="f-item copyright">Copyright &copy; <?php echo date("Y"); ?> ATI SecureDocs. All rights reserved.</div>

        <div class="f-item netgain">Website Designed by <a href="http://www.netgainseo.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/netgain.png" alt=""></a></div>
    </div>
</footer>
<div class="modal fade" id="popForm" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header popover-header">
                <h1 class="txt-primary">We can help with your shredding</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode( '[contact-form-7 id="254" title="Popover Form" html_class="popover-form"]' ); ?>
            </div>
        </div>
    </div>
</div>
<a href="#" class="scrollToTop">&uarr;</a>
<div id="refContainer" class="container" style="visibility: hidden;"></div>
<div id="openNavOverlay"></div>
<div id="closeNav" class="close-nav">Close <i class="fa fa-times"></i></button></div>
<?php wp_footer(); ?>
</body>
</html>
