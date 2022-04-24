
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
            <li><a href="#">Home</a><span class="divider">/</span></li>
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
          <form action="<?php echo base_url()  . '/index.php/Auth/login'; ?>" method="post" role="form" class="contactForm">
            <div class="row">
              <div class="span6 form-group">
              <label><strong>Username : </strong></label>
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
  