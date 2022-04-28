
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
<body style="margin-top: 55px">
<style type="text/css">

/*@media only screen and (max-width: 600px) 
{
  body
  {
    margin-top:0px !important;
  }
}*/

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


<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="a" style="background-color: #064518;background-image: url('https://www.ncf.edu.ph/plugins/img/nav.png');background-repeat: no-repeat;" >
 
  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon">
    <i class="fas fa-bars" style="font-size: 30px;"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#" id="home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="casFaculty" href="#">Faculty</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="casStories" href="#">Stories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="casResearch" href="#">Research</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="casGallery" href="#">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="casAboutUs" href="#">About CAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="casContactUs" href="#">Contact Us</a>
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





$(document).ready(function(){

 $('#home').on('click',function(){

   window.location = "https://www.ncf.edu.ph/cas";
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

   window.location = "https://www.ncf.edu.ph/index/soon ";
  })

  $('#casAboutUs').on('click',function(){

   window.location = "https://www.ncf.edu.ph/cas/aboutUs";
  })

  $('#casContactUs').on('click',function(){

   window.location = "https://www.ncf.edu.ph/cas/contactUs";
  })

});

</script><div class="row" style="background-color: #f4f6f0;">

<div class="container" style="padding-top: 30px !important;">
	<div class="row">

		<div class="col-lg-8">
<div id="ccsSignificant"></div>			
    <div class="img_container wrapper">
      <img src="{{asset('plugins/img/department/cas/thumbnails/bannerlogo.jpg')}}">
        <div class="caption p-sm-5 p-4">
        	
        		<h3><b>CONTACT US</b></h3><hr>
        		<p class="lead">Naga College Foundation, Inc.<br>
					M.T. Villanueva Ave., Naga City 4400<br>
					Tel. No 472-7526 Local 115 </p>
					
            
        </div>

    </div>



		</div>
	
		<div class="col-lg-4">

			<h4 class="npanel_header cssBg">CAS Quick Links</h4>
			  <ul class="list-group list-group-flush">
			  	<a href="https://www.ncf.edu.ph/index">
	        		<li class="list-group-item">
	        			
	        			 <i class="fas fa-school icon-dark"></i>&nbsp; &nbsp;<span><b>Naga College Foundation, Inc.</b></span>
	                   
	        		</li>
        		</a>

        		<a href="https://www.ncf.edu.ph/cas/index">
        		<li class="list-group-item">
        			<i class="fas fa-laptop icon-dark"></i>&nbsp; &nbsp;<span><b>College of Arts and Sciences</b></span>
        		</li>
        		</a>
        		<a href="https://www.ncf.edu.ph/index/admission">
	        		<li class="list-group-item">
	        			<i class="fas fa-copy icon-dark"></i>&nbsp; &nbsp;<span><b>Admission and Enrollment</b></span>
	        		</li>
	        	</a>

	        	<a href="https://www.ncf.edu.ph/index/scholarships">
	        		<li class="list-group-item">
	        			<i class="fas fa-graduation-cap icon-dark"></i>&nbsp; &nbsp;<span><b>Scholarships</b></span>
	        		</li>
        		</a>

        		<a href="https://www.ncf.edu.ph/index/administration">
	        		<li class="list-group-item">
	        			<i class="fas fa-sitemap icon-dark"></i>&nbsp; &nbsp;<span><b>Administration</b></span>
	        		</li>
        		</a>

        		<a href="https://www.ncf.edu.ph/index/soon">
	        		<li class="list-group-item">
	        			<i class="fas fa-chalkboard-teacher icon-dark"></i>&nbsp; &nbsp;<span><b>One NCF</b></span>
	        		</li>
        		</a>

        		<a href="https://www.ncf.edu.ph/index/aboutUs">
	        		<li class="list-group-item">
	        			<i class="fas fa-info icon-dark"></i>&nbsp; &nbsp;<span><b>About NCF</b></span>
	        		</li>
        		</a>

        		<a href="https://www.ncf.edu.ph/index/contactUs">
	        		<li class="list-group-item">
	        			<i class="fas fa-phone-square-alt icon-dark"></i>&nbsp; &nbsp;<span><b>Contact NCF</b></span>
	        		</li>
        		</a>
        	  </ul>
        	  <br>
		</div>
		
	</div>
	

</div>
</div>    <!-- Footer -->
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

