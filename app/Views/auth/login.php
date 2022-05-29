<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>eJurnal </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <!-- Segala href yang merujuk ke assets, tambahkan base url di sebelum assets-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
  <link href="<?php echo base_url()  . '/'; ?>assets/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url()  . '/'; ?>assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url()  . '/'; ?>assets/css/docs.css" rel="stylesheet">
  <link href="<?php echo base_url()  . '/'; ?>assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="<?php echo base_url()  . '/'; ?>assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="<?php echo base_url()  . '/'; ?>assets/css/flexslider.css" rel="stylesheet">
  <link href="<?php echo base_url()  . '/'; ?>assets/css/sequence.css" rel="stylesheet">
  <link href="<?php echo base_url()  . '/'; ?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url()  . '/'; ?>assets/color/default.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="icon" type="image/x-icon" href="<?php echo base_url()  . '/'; ?>assets/ico/paper.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()  . '/'; ?>assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()  . '/'; ?>assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()  . '/'; ?>assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()  . '/'; ?>assets/ico/apple-touch-icon-57-precomposed.png">

  <!-- =======================================================
    Theme Name: Serenity
    Theme URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top" >
      <div class="navbar-inner" style="background-color:black;">
        <div class="container" style="background-color:black;">
          <!-- logo -->
          <a class="brand logo" style=color:aqua href="<?php echo base_url()  . '/'; ?>home"><img src="<?php echo base_url()  . '/'; ?>assets/img/logo_ejurnal_black.png" alt=""></a>
          <!-- end logo -->
          <!-- top menu -->
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="dropdown">
                  <a href="<?php echo base_url()  . '/index.php/home'; ?>" style=color:aqua>Home</a>
                </li>                
                  <li class="dropdown">
                  <a href="#" style=color:aqua><?php echo "Login"?> </a>
                  <ul class="dropdown-menu">
                    
                  </ul>
                </li>
                  
              </ul>
                <li>
                
                </li>
            </nav>
              </ul>
            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>
<!-- Subhead
================================================== -->
<section id="subintro" style="background-color:black;">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3 style=color:aqua >Login Page</h3>
              <p style=color:aqua>
                Silahkan Login di sini.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="breadcrumb notop">
            <li><a href="<?php echo base_url()?>">Home</a><span class="divider">/</span></li>
            <li class="active">Login</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent">
    <div class="container">
      <div class="row">
        
        <div class="span8">

          <div class="spacer30"></div>

          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="<?php echo base_url()  . '/Verify/verify_login'; ?>" method="post" role="form" class="contactForm"> <?= csrf_field() ?>
            <div class="row">
              <div class="span6 form-group">
              <label><strong <?= session()->getFlashdata('msg'); ?>>Username : </strong></label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Your username" data-rule="minlen:4"
                  data-msg="Please enter at valid username" />
                <div class="validation"></div>
              </div>
                
              <div class="span6 form-group">
              <label><strong>Password : </strong></label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Your password" data-rule="password"
                  data-msg="Please enter a correct password" />
                <div class="validation"></div>
              </div>
              <div class="span8 form-group">
              </div>
              <div class="span8 form-group">
                <div class="text-center">
                  <button class="btn btn-color btn-rounded" type="submit">Login</button>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>
   <!-- Segala href yang merujuk ke assets, tambahkan base url di sebelum assets-->
    <!-- Footer
 ================================================== -->
 <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="widget">
            <h5>Browse pages</h5>
            <ul class="regular">
              <li><a href="#">Work for us</a></li>
              <li><a href="#">Creative process</a></li>
              <li><a href="#">Case study</a></li>
              <li><a href="#">Scaffold awwards</a></li>
              <li><a href="#">Meet the team</a></li>
            </ul>
          </div>
        </div>
        <div class="span4">
          <div class="widget">
            <h5>Recent blog posts</h5>
            <ul class="regular">
              <li><a href="#">Lorem ipsum dolor sit amet</a></li>
              <li><a href="#">Mea malis nominavi insolens ut</a></li>
              <li><a href="#">Minim timeam has no aperiri sanctus ei mea per pertinax</a></li>
              <li><a href="#">Te malorum dignissim eos quod sensibus</a></li>
            </ul>
          </div>
        </div>
        <div class="span4">
          <div class="widget">
            <!-- logo -->
            <a class="brand logo" href="<?php echo base_url()  . '/index.php/home';?>">
							<img src="<?php echo base_url()  . '/'; ?>assets/img/logo_ejurnal-dark.png" alt="">
						</a>
            <!-- end logo -->
            <address>
							<strong>Registered Companyname, Inc.</strong><br>
							 8895 Somename Ave, Suite 600<br>
							 San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>
          </div>
        </div>
      </div>
    </div>
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="span6">
            <p>
              &copy; Serenity - All right reserved
            </p>
          </div>
          <div class="span6">
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Serenity
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript Library Files -->
  <script src="<?php echo base_url()  . '/'; ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url()  . '/'; ?>assets/js/jquery.easing.js"></script>
  <script src="<?php echo base_url()  . '/'; ?>assets/js/google-code-prettify/prettify.js"></script>
  <script src="<?php echo base_url()  . '/'; ?>assets/js/modernizr.js"></script>
  <script src="<?php echo base_url()  . '/'; ?>assets/js/bootstrap.js"></script>
  <script src="<?php echo base_url()  . '/'; ?>assets/js/jquery.elastislide.js"></script>
  <script src="<?php echo base_url()  . '/'; ?>assets/js/sequence/sequence.jquery-min.js"></script>
  <script src="<?php echo base_url()  . '/'; ?>assets/js/sequence/setting.js"></script>
  <script src="<?php echo base_url()  . '/'; ?>assets/js/jquery.prettyPhoto.js"></script>
  <script src="<?php echo base_url()  . '/'; ?>assets/js/application.js"></script>
  <script src="<?php echo base_url()  . '/'; ?>assets/js/jquery.flexslider.js"></script>
  <script src="<?php echo base_url()  . '/'; ?>assets/js/hover/jquery-hover-effect.js"></script>
  <script src="<?php echo base_url()  . '/'; ?>assets/js/hover/setting.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="<?php echo base_url()  . '/'; ?>assets/js/custom.js"></script>

</body>
</html>