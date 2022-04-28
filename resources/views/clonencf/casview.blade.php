
<!DOCTYPE html>
<html lang="en">

  <head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6DJGYP8R2P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6DJGYP8R2P');
</script>

   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="https://www.ncf.edu.ph" />
    <meta name="google-site-verification" content="3Z5krN0E2uiC0WtiDUiwMCdXH07oDhx0hB5hicI3W-c" />
    <meta property="og:url" content="https://www.facebook.com/nagacollegefoundation1947/" />
    <meta property="og:title" content="Naga College Foundation, Inc. - The Home of the Champions | NCF" />
    <meta property="og:site_name" content="Naga College Foundation, Inc. - Home of the Champions | NCF" />
    <meta property="og:description" content="The Naga College Foundation, Inc.(NCF)" />
    <meta name="keywords" content="ncf,tigers, ncftigers,ncean,melchorvillanueva,mtv,mariovillanueva,tigers,nagacollegefoundation,homeofthechampions,naga,scholarship,college,bicol">
    <meta name="description" content="The Naga College Foundation, Inc.(NCF)">
    <meta name="author" content="ncf,melchor villanueva,mario villanueva,naga college foundation,lolo mel">

    <title>Naga College Foundation, Inc. - Home of the Champions | NCF</title>

    <!-- Bootstrap core CSS -->
 <!--    <link href="" rel="stylesheet">
    <script src=""></script> -->
    
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
  <script src="{{ asset('lib/fontk.js')}}"></script>
  <script src="{{ asset('lib/jquery.min.js')}}"></script>
   <script src="{{ asset('lib/bootstrap.min.js')}}"></script>


<link href="{{ asset('lib/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('lib/all.css')}}" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 70%;
    }

    body{
      font-family: https://www.ncf.edu.ph/plugins/font/aileron.otf;
    }



    </style>

  </head>

  <body id="fpage">
<body>
<style type="text/css">
  .dropdown-submenu {
  position: relative;

}

.dropdown-submenu a::after {
  transform: rotate(-90deg);
  position: absolute;
  right: 6px;
  top: .8em;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-left: .1rem;
  margin-right: .1rem;
}

.dropdown-menu
{
  background-color: #064518;


}

.dropdown-item
{
  color: white;
}

nav.navbar{
   -webkit-transition: all 0.4s ease;
   transition: all 0.4s ease;
}

nav.navbar-inverse {
    background-color: #222;
    border-color: #080808;
}

nav.navbar.transparent {
  background-color:rgba(0,0,0,0);
}

.nav-link
{
  color: white !important;
  text-shadow: 2px 2px 8px #2b2d2f;
}

</style>


<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-transparent" id="a" style="background-color: #064518;background-image: url('https://www.ncf.edu.ph/plugins/img/nav.png');background-repeat: no-repeat;" >
 
  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon">
    <i class="fas fa-bars" style="font-size: 30px;"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/cashome') }}" id="home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="casFaculty" href="{{ url('/casfac') }}">Faculty</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="casStories" href="{{ url('/casstories') }}">Stories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="casResearch" href="{{ url('/casres') }}">Research</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="casGallery" href="{{ url('/casgal') }}">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="casAboutUs" href="{{ url('/casabout') }}">About CAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="casContactUs" href="{{ url('/cascon') }}">Contact Us</a>
      </li>


    </ul>
  </div>  
</nav>

<script type="text/javascript">
  $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});


$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('.navbar').removeClass('bg-transparent');
  } else {
    $('.navbar').addClass('bg-transparent');
  }
});



/*mediaquery*/

function myFunction(x) {
  if (x.matches) { // If media query matches
    $('.navbar').removeClass('fixed-top');
    $('.navbar').removeClass('bg-transparent');
    $('.navbar').addClass('navbar-static-top');


    $(window).scroll(function() {

  if ($(document).scrollTop() > 50) {
    $('.navbar').removeClass('bg-transparent');
  } else {
    $('.navbar').removeClass('bg-transparent');
  }
});
  }



}

var x = window.matchMedia("(max-width: 600px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
/*end of mediaquery*/


$(document).ready(function(){

  $('#home').on('click',function(){

   window.location = "https://www.ncf.edu.ph/index";
  })

  $('#casFaculty').on('click',function(){

   window.location = "https://www.ncf.edu.ph/index/soon";
  })

  $('#casStories').on('click',function(){

   window.location = "https://www.ncf.edu.ph/cas/stories";
  })

  $('#casResearch').on('click',function(){

   window.location = "https://www.ncf.edu.ph/cas/research";
  })

  $('#casGallery').on('click',function(){

   window.location = "https://www.ncf.edu.ph/index/soon";
  })

  $('#casAboutUs').on('click',function(){

   window.location = "https://www.ncf.edu.ph/cas/aboutUs";
  })

  $('#casContactUs').on('click',function(){

   window.location = "https://www.ncf.edu.ph/cas/contactUs";
  })

});

</script><!--carousel/ad section-->
<div id="demo" class="carousel slide" data-ride="carousel" data-interval="6000">


  <!-- <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> -->
  

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('plugins/img/department/cas/cas_banner.jpg')}}" alt="ncf tigers college of arts and sciences">
    </div>
  </div>
 <!--  

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a> -->
</div>
<!--end of carousel-->

  <div id="ncfTop" class="container-fluid parallax" style="background-image: url('https://www.ncf.edu.ph/plugins/img/department/cas/parallax.jpg');">
      <div class="container p-0 pt-sm-4 pb-sm-4">
          <div class="row">
            <div class="col-sm-4 p-sm-4 pt-4 pl-4 pr-4 pb-2">

                  College of Arts and Sciences
                  <h3 style="color: #dbdbdb; text-align: left;"><b>EVERYTHING YOU NEED TO KNOW</b></h3>

        

            </div>
            <div id="ccsHome" class="col-sm-8 p-sm-4 pt-4 pl-4 pr-4 pb-2 ">
                        <h4>BACKGROUND</h4>
                        <p class="lead">
                        The Arts and Sciences program promotes academic excellence in the fields of arts, language, literature and science. It cultivates an atmosphere that fosters critical and analytical thinking, as well as skillful communication.</p>



                        <h4>COURSES OFFERED</h4>
                        <p >
                        <ul class="lead">
                            <li>Bachelor of Arts in Communication</li>
                            <li>Bachelor of Arts in English Language</li>
                            <li>Batsilyer ng Sining sa Filipino</li>
                            <li>Bachelor of Science in Biology</li>
                          <li>Bachelor of Science in Mathematics</li>
                        </ul>






                        </p>
      
      
              </div>
          </div>
     </div>

  </div>
   <div id="ncfBottom" class="container-fluid p-sm-5" style="background-color: #0e2b4f;">
        <div class="container p-0">
          <div class="row p-sm-4 p-4">
            <div class="col-sm-4 pt-2 pb-2">
                  <a href="https://www.ncf.edu.ph/index/soon">
                      <i class="fas fa-feather-alt fa-3x" style="color: white !important;"></i><br>
                        <span><b>Students</b></span>
                        <p>
                        Activities and Gallery
                        </p>
                  </a>
              </div>
              <div class="col-sm-4 pt-2 pb-2">
                <a href="https://www.ncf.edu.ph/index/soon">
                    <i class="fas fa-user-friends fa-3x" style="color: white !important;"></i><br>
                    <span><b>Faculty</b></span>
                     <p>Teaching Force Profile</p>
                </a>
              </div>
              <div class="col-sm-4 pt-2 pb-2">
                <a href="https://www.ncf.edu.ph/cas/research">
                  <i class="fas fa-info-circle fa-3x" style="color: white !important;"></i><br>
                 <span><b>Researches</b></span>
                   <p>Senior Projects and Theses</p>
                </a>
              </div>

           </div>
         </div>

  </div>


<div class="container-fluid">

  <div class="row">

    <div class="col-lg-6" style="background-image: url('https://www.ncf.edu.ph/plugins/img/department/ccs/others/typing.jpg');width: 100%;">
      <div class="row">
        <div class="col-sm-4">
          
        </div>
        <div class="col-sm-8">
          
        </div>
      </div>
    </div>

     
  </div>
  
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row">
          <div>
              
          </div>
          
        </div>
    </div>
</div>




<div class="container-fluid pt-sm-5 pb-sm-5">
  <div class="container">
    <div class="row">
          <div class="jumbotron p-4 p-md-5 text-white rounded d-flex m-0" style="background-image: url('plugins/img/department/cas/s1.jpg');">
              <div class="col-md-6 px-0">
                <h1 class="display-5 text-white ">‘NCF CODES’ Partakes in the 13th RAUL ROCO CUP</h1>
                <p class="lead my-3 p-limit">With the theme, “RE13OLUSYON: When injustice becomes law, resistance becomes duty,” the budding debaters from NCF CODES (NCF College Debate Society) participated in the 13th installment of RAUL ROCO CUP: Bicol Debate Championship 2019 held at Universidad de St. Isabel, Naga City, last Aug. 24-28...</p>
                <a href="https://www.ncf.edu.ph/cas/stories#ccsSignificant" class="text-white font-weight-bold lead">Read More...</a>
              </div>
            </div>



</div>
    </div>
    
  </div>

    <!-- Footer -->
    <footer class="p-sm-4 p-2" style="background-color: #064518;">

    <!-- Footer Links -->
    <div class="container text-center text-white text-md-left p-sm-0 p-0" >

      <!-- Grid row -->
      <div class="row" >

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
          
          <br>
          <ul class="list-unstyled">
            <li>
              
              <a href="https://www.ncf.edu.ph/index/administration" class="text-white">Administrative Officials</a>
            </li>
            <li>
              <a href="https://www.ncf.edu.ph/index/admission" class="text-white">Admission Guide</a>              
            </li>
            <li>
              <a href="https://www.ncf.edu.ph/index/administration" class="text-white">Board of Trustees</a>
            </li>
            <li>
              <a href="https://www.ncf.edu.ph/index/contactUs" class="text-white">Contact Us</a>
            
              
            </li>
           
            
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
        
          <br>
          <ul class="list-unstyled">
           <li>
              <a href="https://www.ncf.edu.ph/index/ncfPrograms" class="text-white">Courses Offered</a>
            </li>
            <li>
              <a href="https://www.ncf.edu.ph/index/admission" class="text-white">Enrollment Procedure</a>
              
            </li>
          
            <li>
              <a href="https://www.ncf.edu.ph/index/soon" class="text-white">One NCF</a>
            </li>
            <li>
              
              
              <a href="https://www.ncf.edu.ph/index/aboutUs" class="text-white">Quality Policy</a>
              
            </li>
            
            
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
          <br>
          

          <ul class="list-unstyled">
            
             <li>
              <a href="https://www.ncf.edu.ph/index/stories" class="text-white">Stories</a>
              
              
            </li>
            <li>
              
              <a href="https://www.ncf.edu.ph/index/scholarships" class="text-white">Scholarship</a>
            </li>
    <!--         <li>
              
              
              <a href="https://www.ncf.edu.ph/index/aboutUs" class="text-white">TRANPARENCY SEAL</a>
            </li> -->
            <li>
              <a href="https://www.ncf.edu.ph/index/aboutUs" class="text-white">Vision-Mission</a>
            </li>
             <li>
              <a href="https://www.ncf.edu.ph/gbox" class="text-white">Gbox</a>
            </li>
          
            
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
         <img src="{{asset('plugins/img/others/footLogo.jpg')}}" style="width: 100%">
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <!--<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->

  </body>

</html>

