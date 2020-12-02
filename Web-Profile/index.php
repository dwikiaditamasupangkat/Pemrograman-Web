<?php
    include ('auth.php'); 
    include ('conn.php'); 
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <!-- Csrf Token -->
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV Dwiki Aditama Supangkat</title>
    <meta name="description" content="Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience."/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="#top" rel="tooltip">Curriculum Vitae</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#top">Home</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About Me</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Skills</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#hobby">Hobby</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/background.jpg');"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="images/foto.jpg" alt="Image"/></a></div>
          <div class="h2 title">Dwiki Aditama Supangkat</div>
          <p class="category text-white">I'm Informatics Student</p><a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Hire Me</a><a class="btn btn-primary printPage"  data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Google+"><i class="fa fa-google-plus"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="h5 text-center mb-4 title">
    <button class="desk" class="btn-primary btn-sm"></i>Press to Show About Me</button>
  </div>
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12 desk2">
          <div class="card-body">
            <div class="h4 mt-0 title">About</div>
            <p>Hello! I am Dwiki Aditama Supangkat. An Informatics Student.</p>
            <p>I'm usually called Diki, born in Jombang, May 1, 1999. I'm an Informatics student at a university in Surabaya. I am very interested in the IT world. That's why I'm majoring in Informatics at this time. Besides being interested in IT world, I'm also interested in the automotive.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 desk2">
          <div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
              <div class="col-sm-8">21 Years</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8">dwikiaditamasupangkat@gmail.com</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
              <div class="col-sm-8">+6285-804-555-646</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
              <div class="col-sm-8">Dsn. Kedungboto, Ds. Podoroto, Kec. Kesamben, Kab. Jombang, Jawa Timur</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
              <div class="col-sm-8">English, Indonesian, Javanese</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="skill">
  <div class="container">
    <div class="h4 text-center mb-4 title">Skills</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">C Programming</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div><span class="progress-value">80%</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">Java</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">75%</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">CSS</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div><span class="progress-value">60%</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">HTML</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div><span class="progress-value">70%</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">PHP</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">75%</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">MySql</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div><span class="progress-value">70%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="hobby">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto mr-auto">
        <div class="h4 text-center mb-4 title">
          hobby <br>
          <div id="hobby-btn" class="btn-primary btn-sm"></i> Press to See My Hobbies </div>
        </div>
      </div>
    </div>
    <div class="tab-content gallery mt-5">
      <div class="tab-pane active" id="hobby"></div>
        <div class="ml-auto mr-auto">
          <div class="row">
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <figure class="cc-effect hobi1"><img src="images/hobi/thumb/1.jpg" data-large="images/hobi/large/1.jpg" alt="Image"/>
                  <figcaption>
                    <p><p></p></p>
                    <div class="h4">Travelling</div>
                  </figcaption>
                </figure></a>
              </div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <figure class="cc-effect hobi2"><img src="images/hobi/thumb/2.jpg" data-large="images/hobi/large/2.jpg" alt="Image"/>
                  <figcaption>
                    <div class="h4">Culinary</div>
                  </figcaption>
                </figure></a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <figure class="cc-effect hobi3"><img src="images/hobi/thumb/3.jpg" data-large="images/hobi/large/3.jpg" alt="Image"/>
                  <figcaption>
                    <div class="h4">Fishing in river</div>
                  </figcaption>
                </figure></a>
              </div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <figure class="cc-effect hobi4"><img src="images/hobi/thumb/4.jpg" data-large="images/hobi/large/4.jpg" alt="Image"/>
                  <figcaption>
                    <div class="h4">Swimming</div>
                  </figcaption>
                </figure></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="education">
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title">Education</div>
    <div class="data"></div>
    <div class="h6 text-center mb-4 title">
    <button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="input btn btn-info col-md-2"> <i class="fa fa-pencil-square-o"></i> Insert Education </button>
   </div>
  </div>
</div>
<div class="section" id="contact">
  <div class="cc-contact-information" style="background-image: url('images/mapimage.jpg');">
    <div class="container">
      <div class="cc-contact">
        <div class="row">
          <div class="col-md-9">
            <div class="card mb-0" data-aos="zoom-in">
              <div class="h4 text-center title">Contact Me</div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card-body">
                    <form action="https://formspree.io/dwikiaditamasupangkat@gmail.com" method="POST">
                      <div class="p pb-3"><strong>Feel free to contact me </strong></div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input class="form-control" type="text" name="name" placeholder="Name" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                            <input class="form-control" type="text" name="Subject" placeholder="Subject" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="email" name="_replyto" placeholder="E-mail" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Your Message" required="required"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <button class="btn btn-primary" type="submit">Send</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <p class="mb-0"><strong>Address </strong></p>
                    <p class="pb-2">Dsn. Kedungboto, Ds. Podoroto, Kec. Kesamben, Kab. Jombang, Jawa Timur</p>
                    <p class="mb-0"><strong>Phone</strong></p>
                    <p class="pb-2">+6285-804-555-646</p>
                    <p class="mb-0"><strong>Email</strong></p>
                    <p>dwikiaditamasupangkat@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
    </div>
    <footer class="footer">
      <div class="container text-center"><a class="cc-facebook btn btn-link" href="#"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="#"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link" href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="#"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
      <div class="h4 title text-center">Dwiki Aditama Supangkat</div>
      <div class="text-center text-muted">
        <p>&copy; dwikiaditamasupangkat</p>
      </div>
    </footer>

    <div id="myModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Insert Education</h4>
          </div>
          <div class="modal-body">
            <form method="post" class="form-data" id="form-data">
              <div class="form-group">
                <label>Years</label>
                <input type="hidden" name="id" id="id">
                <input name="tahun" type="text" id="tahun" class="form-control" placeholder="Years Start Until Graduation" required="true">
                <p class="text-danger" id="err_tahun"></p>
              </div>
              <div class="form-group">
                <label>Kind Of Education</label>
                <input name="jenis" type="text" id="jenis" class="form-control" placeholder="Kind Of Education" required="true">
                <p class="text-danger" id="err_jenis"></p>
              </div>
              <div class="form-group">
                <label>Name Of Educational Institution</label>
                <input name="nama_pendidikan" type="text" id="nama_pendidikan" class="form-control" placeholder="Name Of Educational Institution" required="true">
                <p class="text-danger" id="err_nama_pendidikan"></p>
              </div>
              <div class="form-group">
                <label>Educational Specifications</label>
                <input name="tipe" type="text" id="tipe" class="form-control" placeholder="Educational Specifications">
                <p class="text-danger" id="err_tipe"></p>
              </div>
              <div class="form-group">
                <label>Description</label>
                <input name="deskripsi" type="text" id="deskripsi" class="form-control" placeholder="Description">
                <p class="text-danger" id="err_deskripsi"></p>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn-default" data-dismiss="modal">Cancel</button>
              <button type="button" name="save" id="save" class="btn btn-primary">
                <i class="fa fa-save"></i> Save
		          </button>
            </div>
          </form>
        </div>
      </div>
		</div>
    
    <!-- lightbox start -->
<div class="lightbox">
  <div class="img-box">
    <div class="lightbox-close">&times;</div>
    <img src="images/hobi/large/3.jpg" class="lightbox-img" alt="img">
    <div class="lightbox-caption">
      <div class="lightbox-category">
        
      </div>
      <div class="lightbox-counter">
        
      </div>
    </div>
    <div class="lightbox-controls">
      <div class="prev">
        <img src="images/prev.svg" alt="prev">
            </div>
            <div class="next">
              <img src="images/next.svg" alt="next">
            </div>
    </div>
  </div>
</div>
<!-- lightbox end -->

    <script src="js/core/jquery.3.2.1.min.js"></script>
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/now-ui-kit.js?v=1.1.0"></script>
    <script src="js/aos.js"></script>
    <script src="scripts/main.js"></script>

    <script>
    $(document).ready(function(){
      $('.desk').click(function(){
        $('.desk2').fadeToggle("slow");
      });
    });

    $(document).ready(function(){
      $(".desk").click(function(){
        $(".desk").hide();
      });
    });
    </script>
  </body>
</html>