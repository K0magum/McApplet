<?php 
/*
*template for the footer
*/
?>
<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <h5>ABOUT THE CHURCH</h5>
        <p>For the word of God is living and active. Sharper than any double-edged sword, it penetrates even to dividing soul and spirit, joints and marrow; it judges the thoughts and attitudes.</p>
      </div>
      <div class="col-sm-6 col-md-3">
        <h5>QUICK LINKS</h5>
        <ul class="footer-links">
          <li><a href="#">Upcoming events</a></li>
          <li><a href="#">Ministries</a></li>
          <li><a href="#">Recent Sermons</a></li>
          <li><a href="#">Contact us</a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-md-3">
        <h5>OUR ADDRESS</h5>
        <p> Body of Christ<br>
          Lukuli, Makindye <br>
          P.O.Box  5635 Kampala Ug<br>
          <br>
          Phone: +256772474430<br>
          Email: <a href="#">mail@ministries.com</a></p>
      </div>
      <div class="col-sm-6 col-md-3">
        <h5>CONNECT</h5>
        <div class="social-icons"><a href=""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/fb-icon.png" alt="social"></a> <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/tw-icon.png" alt="social"></a> <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/in-icon.png" alt="social"></a></div>
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <p class="text-center">Copyright © 2020 Bcc Ministries</p>
    </div>
  </div>
</footer>
<!-- // END FOOTER --> 

<!-- // END --> 

<!-- Bootstrap core JavaScript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<!--<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="</*?php echo esc_url(get_template_directory_uri());?>/js/owl.carousel.min.js"></script>
<script src="js/ketchup.all.js"></script> 
<script src="js/fancybox.js"></script> 
<script src="</*?php echo esc_url(get_template_directory_uri());?>/js/script.js"></script> -->
<?php wp_footer();?>
</body>
</html>