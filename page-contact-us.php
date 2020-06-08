<?php
/*
*template for the contact us page
*/
get_header();
?>


<div class="subpage-head has-margin-bottom">
  <div class="container">
    <h3><?php the_title();?></h3>
    <p class="lead">Our Church address and contact details</p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6 has-margin-bottom">
         <?php echo do_shortcode('[contact-form-7 html_id="phpcontactform" html_class="text-left" id="64" title="Contact form 1"]'); ?>
     <!-- <form id="phpcontactform" role="form">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
          <label>Email ID</label>
          <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="mobile" id="mobile">
        </div>
        <div class="form-group">
          <label>Message</label>
          <textarea class="form-control" rows="5" name="message" id="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Send message</button>
        <span class="help-block loading"></span>
      </form>-->
    </div>
    <!--// col md 9-->
    
    <div class="col-md-6 has-margin-bottom">
      <h5>OUR ADDRESS</h5>
      <div class="row">
        <div class="col-lg-6">The body of Christ Church<br>
          P.O.BOX 5635,	Kampala <br>
   Lukuli Makindye</div>
        <div class="col-lg-6">Phone: +256774243066<br>
          Email: <a href="#">info@bccministries.com</a></div>
      </div>
      <hr>
      <h5>ANOTHER ADDRESS</h5>
      <div class="row">
        <div class="col-lg-6">The body of Christ Church<br>
          Banada House, 	Katwe <br>
          P.O.BOX 5635 Uganda</div>
        <div class="col-lg-6">Phone: +256772474430<br>
       Email: <a href="#">info@bccministries.com</a></div>
      </div>
    </div>
  </div>
</div>
<!-- SUBSCRIBE -->
<div class="highlight-bg">
  <div class="container">
    <div class="row">
      <form action="subscribe.php" method="post" class="form subscribe-form" role="form" id="subscribeForm">
        <div class="form-group col-md-3 hidden-sm">
          <h5 class="susbcribe-head"> SUBSCRIBE <span>TO OUR NEWSLETTER</span></h5>
        </div>
        <div class="form-group col-sm-8 col-md-6">
          <label class="sr-only">Email address</label>
          <input type="email" class="form-control input-lg" placeholder="Enter email" name="email" id="address" data-validate="validate(required, email)" required>
          <span class="help-block" id="result"></span> </div>
        <div class="form-group col-sm-4 col-md-3">
          <button type="submit" class="btn btn-lg btn-primary btn-block">Subscribe Now →</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END SUBSCRIBE --> 
<?php get_footer();?>