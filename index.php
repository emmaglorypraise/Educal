<!DOCTYPE html>
<html>
<head>
<!-- meta tags -->
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=n">
    
<!-- site title -->
<title>EDUCAL</title>
<link rel="icon" type="icon/css" href="images/icon2.png"/>

<!-- Bootstrap  -->
<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
<!-- <link rel="stylesheet" href="bootstrap3/css/bootstrap.css">   -->
<link rel="stylesheet" href="bootstrap4/bootstrap.min.css">  

    
<!-- Owl Carousel -->
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
    
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- font-awesome link -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- personal css -->
<link rel="stylesheet" href="css/main.css"/>
<link rel

</head>

<body>
<header>

    <nav class="navbar navbar-expand-md navbar-light ">
        <a class="navbar-brand" href="#"> EDU<span style="color:  #858688;font-family: 'Oswald', sans-serif;">CAL</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
          <div class="navbar-nav ">
            <div class="container">
            <div class="row">

            <div class="col-md-6">
            <!-------search box------->
           <a class="nav-item" href="">
              <div class="search-box">
              <form class="search-form">
                  <input class="form-control" type="text" placeholder="Search">
                  <button class="btn search-btn"><i class="fas fa-search"></i></button>
              </form>  
            </div>
           </a>
          </div><br><br>

          <div class="col-md-6">
            <!--------register button/modal ---------->
            <a class="nav-item" href="">
            <a class="btn sign" data-toggle="modal" role="button" data-target="#myModal"><span class="fas fa-plus-square">Sign-In Or Register</span></a>
            <!-- Modal -->
           <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Sign-In</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body">
                     <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                         <?php include 'signin.php';
                         echo $autherr; ?>
                       <div class="form-group">
                         <input type="text-area" class="form-control input" id="formGroupInput" name="Authinput" placeholder="Enter RegNo/Staff ID">
                       </div><br>
                       <div class="form-group">
                         <input type="password" class="form-control input" id="exampleInputPassword1" name="Password" placeholder="Enter Password">
                       </div>
                       <small id="emailHelp" class="form-text text-muted">Not Registered? <a href="register1.php">Register Now</a></small>
                     
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn" data-dismiss="modal">Close</button>
                     <button type="submit" name="submit" class="btn " role="button">Sign-In</button>
                     </form>
                   </div>
                 </div>
               </div>
             </div>
            </a>
          </div>
            </div>
           </div>
          </div>
        </div>
      </nav>





<!-- main navigation -->

<!-- main navigation -->
<nav> 
    <ul class="nav navbar ">
      <li class="nav-link"><a class="active" href="index1.php">Home</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">About <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <a class="dropdown-item" href="history.html">History</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="history.html">Anthem</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="history.html">Administration</a>
        </ul>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Academics <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <a class="dropdown-item" href="academics.html">Faculties</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="academics.html">Colleges</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="academics.html">Schools</a>
          </ul>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Admission<span class="caret"></span></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Undergraduate</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Postgraduate</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Predegree/Basic</a>
          </div> 
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Portals<span class="caret"></span></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Student</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Staff</a>
          </div>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Units&Centers<span class="caret"></span></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Alumni</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Counselling Unit</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Bursery Unit</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">HRDC Unit</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Sport Unit</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Library</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Enterpreniural</a>
          </div>
      </li>
      <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">News&Events<span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Events Gallery</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Latest News</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Featured News</a>
              </div>
      </li>
    </ul>
  </div>
</div>
</nav>

</nav>
    

</header>

<!-- banner -->
<div class="jumbotron jumbo">
    <div class="main-text">
        <center>
           <h1>EDUCAL</h1>
           <h4>Learning and Excellence</h4> 
           <h5>We ensure better education for the world</h5>
        </center>
        
    </div>
</div>


<!-- detail box -->

<div>
    <div class="container detail-box">
        <div class="row detail-box-row">
            <div class="col-sm-12 col-md-6 box">         
               <h3><spam class="fas fa-users"></spam></h3> 
               <h3>Qualified lecturers </h3>
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat quod culpa earum eos praesentium nesciunt vero, fugit consequatur atque. Alias voluptatem dignissimos recusandae accusantium natus laborum accusamus aut voluptatibus debitis.</p>
            </div>
            <div class="col-sm-12 col-md-6 box">
               <h3><spam class="fas fa-leaf"></spam></h3>
               <h3>Safe Learning Enviroment</h3>
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat quod culpa earum eos praesentium nesciunt vero, fugit consequatur atque. Alias voluptatem dignissimos recusandae accusantium natus laborum accusamus aut voluptatibus debitis.</p>
            </div>
        </div>
        <div class="row detail-box-row">
            <div class="col-sm-12 col-md-6 box">
               <h3><spam class="fas fa-institution"></spam></h3> 
               <h3>Infastructures </h3>
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat quod culpa earum eos praesentium nesciunt vero, fugit consequatur atque. Alias voluptatem dignissimos recusandae accusantium natus laborum accusamus aut voluptatibus debitis.</p>
            </div>
            <div class="col-sm-12 col-md-6 box">
               <h3><spam class="fas fa-book"></spam><h3> 
               <h3>Standard Library </h3>
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat quod culpa earum eos praesentium nesciunt vero, fugit consequatur atque. Alias voluptatem dignissimos recusandae accusantium natus laborum accusamus aut voluptatibus debitis.</p>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
            <img src=""
            </div>
            <div class="col-md-6 col-sm-12">

            </div>
        </div>
    </div>
</div>

<!-- image gallery carousel -->

<div id="slider">
    <div id="event-carousel" class="carousel slide" data-ride="carousel" data-interval="2000">
        <ol class="carousel-indicators">
          <li data-target="#event-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#event-carousel" data-slide-to="1"></li>
          <li data-target="#event-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="images/s-bg.jpg">
            <div class="carousel-caption ">
                <p>Learning And Excellence</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="images/g1.jpg">
            <div class="carousel-caption  ">
                <p>We Raise Leaders Of Tomorrow</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="images/2.jpg">
            <div class="carousel-caption ">
                <p>Solving The Illitracy Problem </p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#event-carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#event-carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>
<br>

<!-- news and achive section -->

<!-- tab heading -->
<div class="card">
  <div class="card-header">Recent News and Events Achives</div>
</div>
<br>  
<!-- end of tab heading -->

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#recent-news" role="tab" aria-controls="home" aria-selected="true">Recent News</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#news-achive" role="tab" aria-controls="profile" aria-selected="false">News Achives</a>
    </li>
    
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="recent-news" role="tabpanel" aria-labelledby="recent-news-tab">
<!-- recent news -->
<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">Panel Header</div>
    <div class="panel-body">Panel Content</div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">Panel Header</div>
    <div class="panel-body">Panel Content</div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">Panel Header</div>
    <div class="panel-body">Panel Content</div>
  </div>
</div>
</div>

    </div>
    <div class="tab-pane fade" id="news-achive" role="tabpanel" aria-labelledby="news-achive-tab">...</div>
    
  </div>


<!-- pagination -->
<nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
</nav>
<br>

<!-- publication & lectures -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 ">
            <div class="card " style="max-width: 18rem;">
                <div class="card-header ">Publication</div>
                <div class="card-body">
                <p class="card-text"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo ea ex autem libero magnam dolorem ipsam consequuntur nihil nemo placeat. </p>
                </div>
                <div class="card-footer ">
                <a href="#" class="btn btn-primary">View Publication<span></span></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card " style="max-width: 18rem;">
                <div class="card-header ">Journals</div>
                <div class="card-body">
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ducimus quod nobis facere iste dolorem vero autem amet. Vero, nisi.</p>
                </div>
                <div class="card-footer ">
                <a href="#" class="btn btn-primary">View Journals<span></span></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card " style="max-width: 18rem;">
                <div class="card-header ">Policies</div>
                <div class="card-body">
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis enim aperiam culpa nulla, soluta ut ipsa accusamus quia optio nam.</p>
                </div>
                <div class="card-footer ">
                <a href="#" class="btn btn-primary">View Policies<span></span></a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4 ">
            <div class="card " style="max-width: 18rem;">
                <div class="card-header ">Inaugural Lectures</div>
                <div class="card-body">
                <p class="card-text"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo ea ex autem libero magnam dolorem ipsam consequuntur nihil nemo placeat. </p>
                </div>
                <div class="card-footer ">
                <a href="#" class="btn btn-primary">View Inaugural Lectures<span></span></a>
                </div>
            </div>
            </div>
        <div class="col-md-4">
            <div class="card " style="max-width: 18rem;">
                <div class="card-header ">Covocation Lectures</div>
                <div class="card-body">
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ducimus quod nobis facere iste dolorem vero autem amet. Vero, nisi.</p>
                </div>
                <div class="card-footer ">
                <a href="#" class="btn btn-primary">View Convocation Lectures<span></span></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card " style="max-width: 18rem;">
                <div class="card-header ">Public Lectures</div>
                <div class="card-body">
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis enim aperiam culpa nulla, soluta ut ipsa accusamus quia optio nam.</p>
                </div>
                <div class="card-footer ">
                <a href="#" class="btn btn-primary">View Public Lectures<span></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>


<!-- newsletter session -->
<div class="newsletter-section">
    <div class="container">
        <div class="row"
            <div class="col-md-6 col-sm-6" >
                <h4>Newsletter</h4>
                <p>Subscribe and get the latest news and useful academic tips, latest events and best scholarship offer.</p>
            </div>
            <div class="col-md-6 col-sm-6">
                <form class="newsletter">
                    <input type="text" placeholder="Enter your email">
                    <button class="site-btn">SUBSCRIBE</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end of newsletter -->

<!-- footer section -->
<footer id="footer">
   <div class="container footer-top">
       <div class="row">
           <div class="col-md-4">
                <h6 class="f-title">Faculties</h6>
                <ul class="footer-links">
                    <li>Engineering</li>
                    <li><a href="#">Medical Sciences</a></li>
                    <li><a href="#">Business Administration</a></li>
                    <li><a href="#">Law</a></li>
                </ul>
           </div>
           <div class="col-md-4">
                <h6 class="f-title">News</h6>
                <ul class="footer-links">
                    <li><a href="blog.html">Featured News</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Exhibitions</a></li>
                </ul>
           </div>
           <div class="col-md-4">
                <h6 class="f-title">Quick Links</h6>
                <p>
                    <ul class="footer-links">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Admission</a></li>
                        <li><a href="#">Academics</a></li>
                        <li><a href="#">Portals</a></li>
                        <li><a href="#">Units&Centers</a></li>
                    </ul>
                </p>
           </div>
       </div>

<hr style="width:90%; border-width:1px; border-color:#fff; border-radius:5px; margin-top:50px; margin-bottom: 50px;">
       <div class="container-fluid">
       <div class="row">
            <div class="col-md-6">
                 <h6 class="f-title">Resources</h6>
                 <ul class="footer-links">
                     <li>E-Library</li>
                     <li><a href="#">ICT</a></li>
                     <li><a href="#">Inaugural Lectures</a></li>
                     <li><a href="#"></a></li>
                 </ul>
            </div>
            
            <div class="col-md-6">
                <h6 class="f-title">CONTACT</h6>
				<ul class="contact">
					<li><p><i class="fas fa-globe-africa"></i> 40 Baria Street,Ogun State,Nigeria</p></li>
					<li><p><i class="fas fa-mobile-alt"></i> (+234) 111 555 666</p></li>
					<li><p><i class="fas fa-envelope-open"></i> educalschools@gmail.com</p></li>
					<li><p><i class="fas fa-clock-o"></i> Monday - Friday, 08:00AM - 06:00 PM</p></li>
				</ul>
            </div>
        </div>
        </div>
        <hr style="width:90%; border-width:1px; border-color:#fff; border-radius:5px; margin-top:50px; margin-bottom: 50px;">
        <center>Copyright &copy All right reserved | EDUCAL</center>
    </div>
</footer>






<script>
$("#carouselExampleIndicators").carousel()
</script>

  <script>

// owl carousel
$(document).ready(function(){
    $(".owl-carousel").owlCarousel();
  });

  </script>


<!-- bootstrap jquery& js  -->
<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Bootstrap -->
<script src="boostrap4/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="boostrap4/bootstrap.min.js"></script>
<script src="boostrap4/popper.js"></script>
<!-- Owl carousel -->
<script src="js/owl.carousel.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!-- main -->
<script src="js/main.js"></script>

</body>
</html>