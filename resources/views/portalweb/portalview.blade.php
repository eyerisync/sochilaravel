
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>NCF Social Network Portal</title>
    <link rel="shortcut icon" href="{{asset('images/portal/ncftiger2.png')}}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&amp;display=swap"/>
    </noscript>
    <link href="{{asset('css/bootstrap.min.css?ver=1.2.0')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome/css/all.min.css?ver=1.2.0')}}" rel="stylesheet">
    <link href="{{asset('css/aos.css?ver=1.2.0')}}" rel="stylesheet">
    <link href="{{asset('css/ekko-lightbox.css?ver=1.2.0')}}" rel="stylesheet">
    <link href="{{asset('css/main.css?ver=1.2.0')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dist/dist/font-awesome.min.css') }}">

    <!--<link rel="stylesheet" href="https://fontawesome.com/v4.7.0/assets/css/site.css">
    <link rel="stylesheet" href="https://fontawesome.com/v4.7.0/assets/css/pygments.css">
    <link rel="stylesheet" href="https://fontawesome.com/v4.7.0/assets/font-awesome/css/font-awesome.css">-->
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="cBuVKSXb"></script>
    <header class="d-flex flex-column bgh">
      <div class="container pt-4">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent px-0">
          <a href="portal"><img src="{{ asset('images/portal/ncftiger2.png') }}" height="50" width="50"></a>&nbsp;&nbsp;&nbsp;
          <a class="text-white navbar-brand" href="portal">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#da-navbarNav" aria-controls="da-navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse text-uppercase" id="da-navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#news">News</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#webchat">Web Chat</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#postq">Post Questions</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#showq">Show Questions</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#complaintbox">Complaint Box</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#portalbulletin">Portal Bulletin</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="da-home-page-text flex-grow-1 d-flex align-items-center" data-aos="fade-right" data-aos-duration="1000">
        <div class="container">
          <div class="col-md-10 col-sm-12 px-0 mx-0">
            <img src="{{ asset('images/portal/ncflogo.png') }}" height="100" width="100">
            <h2 class="display-4 text-warning">Naga College Foundation</h2>
            <h2 class="display-4 text-uppercase">Social Network Portal</h2>
            <h3 class="h4 mt-3 text-light">"If people are doubting how far you can go, go so far that you can't hear them anymore."    - Michele Ruiz</h3><a class="smooth-scroll btn btn-outline-light mt-4" href="#news">Learn More</a>
          </div>
        </div>
      </div>
    </header>
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
              <img src="{{ asset('images/portal/fblogo.jpg') }}" height="40" width="40">
              <img src="{{ asset('images/portal/ncflogo.png') }}" height="35" width="35" style="margin-top: 2.5px;">&nbsp;&nbsp;&nbsp;
              <h5 style="margin-top: 5.3px;"><b>Naga College Foundation</b></h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <div class="fb-page" data-href="https://www.facebook.com/nagacollegefoundation1947" data-tabs="timeline" data-width="460" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/nagacollegefoundation1947" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/nagacollegefoundation1947">Naga College Foundation</a></blockquote></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
    </div>
    <div class="page-content">
      <div>
<div class="da-section da-work bg-secondary" id="news">
  <div class="container">
    <div class="h3 pb-3 text-center text-white" data-aos="fade-up">NEWS</div>
    <p class="px-5 pb-5 text-center text-white" data-aos="fade-up">You can easily access the past and current news on facebook page of Naga College Foundation by clicking this image.</p>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-left">
          <div class="card-body mt-4 mb-1 text-center"><a href="https://web.facebook.com/"><img src="{{ asset('images/portal/fblogo.jpg') }}" height="80" width="80"></a>
            <div class="h4 pb-3">Facebook</div>
            <p>Redirect to Facebook.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="zoom-in-up">
          <div class="card-body mt-4 mb-1 text-center"><a data-toggle="modal" href="#myModal"><img src="{{ asset('images/portal/ncflogo.png') }}" height="70" width="70"></a>
            <div class="h4 pb-3">Naga College Foundation</div>
            <p>Redirect to Naga College Foundation facebook page.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-right">
          <div class="card-body mt-4 mb-1 text-center"><a href="https://www.instagram.com/ncfofficial/"><img src="{{ asset('images/portal/instalogo.jpg') }}" height="60" width="60"></a>
            <div class="h4 pb-3">Instagram</div>
            <p>Redirect to Naga College Foundation instagram page.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="da-section da-work bg-info" id="webchat">
  <div class="container">
    <div class="h3 pb-3 text-center text-white" data-aos="fade-up">WEB CHAT</div>
    <p class="px-5 pb-5 text-center text-white" data-aos="fade-up">You can now make a discussion between other users here in NCF Social Network Portal!</p>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-left">
          <div class="card-body mt-4 mb-1 text-center"><a href="https://web.facebook.com/"><img src="{{ asset('images/portal/fblogo.jpg') }}" height="80" width="80"></a>
            <div class="h4 pb-3">Facebook</div>
            <p>Redirect to Facebook.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="zoom-in-up">
          <div class="card-body mt-4 mb-1 text-center"><a data-toggle="modal" href="#myModal"><img src="{{ asset('images/portal/ncflogo.png') }}" height="70" width="70"></a>
            <div class="h4 pb-3">Naga College Foundation</div>
            <p>Redirect to Naga College Foundation facebook page.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-right">
          <div class="card-body mt-4 mb-1 text-center"><a href="https://www.instagram.com/ncfofficial/"><img src="{{ asset('images/portal/instalogo.jpg') }}" height="60" width="60"></a>
            <div class="h4 pb-3">Instagram</div>
            <p>Redirect to Naga College Foundation instagram page.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="da-section da-work bg-primary" id="postq">
  <div class="container">
    <div class="h3 pb-3 text-center text-white" data-aos="fade-up">POST QUESTIONS</div>
    <p class="px-5 pb-5 text-center text-white" data-aos="fade-up">You can now post questions in this page.</p>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-left">
          <div class="card-body mt-4 mb-1 text-center"><a href="https://web.facebook.com/"><img src="{{ asset('images/portal/fblogo.jpg') }}" height="80" width="80"></a>
            <div class="h4 pb-3">Facebook</div>
            <p>Redirect to Facebook.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="zoom-in-up">
          <div class="card-body mt-4 mb-1 text-center"><a data-toggle="modal" href="#myModal"><img src="{{ asset('images/portal/ncflogo.png') }}" height="70" width="70"></a>
            <div class="h4 pb-3">Naga College Foundation</div>
            <p>Redirect to Naga College Foundation facebook page.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-right">
          <div class="card-body mt-4 mb-1 text-center"><a href="https://www.instagram.com/ncfofficial/"><img src="{{ asset('images/portal/instalogo.jpg') }}" height="60" width="60"></a>
            <div class="h4 pb-3">Instagram</div>
            <p>Redirect to Naga College Foundation instagram page.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="da-section da-work bg-warning" id="showq">
  <div class="container">
    <div class="h3 pb-3 text-center text-black" data-aos="fade-up">SHOW QUESTIONS</div>
    <p class="px-5 pb-5 text-center text-black" data-aos="fade-up">You can now easily see the questions posted.</p>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-left">
          <div class="card-body mt-4 mb-1 text-center"><a href="https://web.facebook.com/"><img src="{{ asset('images/portal/fblogo.jpg') }}" height="80" width="80"></a>
            <div class="h4 pb-3">Facebook</div>
            <p>Redirect to Facebook.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="zoom-in-up">
          <div class="card-body mt-4 mb-1 text-center"><a data-toggle="modal" href="#myModal"><img src="{{ asset('images/portal/ncflogo.png') }}" height="70" width="70"></a>
            <div class="h4 pb-3">Naga College Foundation</div>
            <p>Redirect to Naga College Foundation facebook page.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-right">
          <div class="card-body mt-4 mb-1 text-center"><a href="https://www.instagram.com/ncfofficial/"><img src="{{ asset('images/portal/instalogo.jpg') }}" height="60" width="60"></a>
            <div class="h4 pb-3">Instagram</div>
            <p>Redirect to Naga College Foundation instagram page.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="da-section da-work bg-success" id="complaintbox">
  <div class="container">
    <div class="h3 pb-3 text-center text-white" data-aos="fade-up">COMPLAINT BOX</div>
    <p class="px-5 pb-5 text-center text-white" data-aos="fade-up">You can now complain in the complain box.</p>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-left">
          <div class="card-body mt-4 mb-1 text-center"><a href="https://web.facebook.com/"><img src="{{ asset('images/portal/fblogo.jpg') }}" height="80" width="80"></a>
            <div class="h4 pb-3">Facebook</div>
            <p>Redirect to Facebook.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="zoom-in-up">
          <div class="card-body mt-4 mb-1 text-center"><a data-toggle="modal" href="#myModal"><img src="{{ asset('images/portal/ncflogo.png') }}" height="70" width="70"></a>
            <div class="h4 pb-3">Naga College Foundation</div>
            <p>Redirect to Naga College Foundation facebook page.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-right">
          <div class="card-body mt-4 mb-1 text-center"><a href="https://www.instagram.com/ncfofficial/"><img src="{{ asset('images/portal/instalogo.jpg') }}" height="60" width="60"></a>
            <div class="h4 pb-3">Instagram</div>
            <p>Redirect to Naga College Foundation instagram page.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="da-section da-work bg-danger" id="portalbulletin">
  <div class="container">
    <div class="h3 pb-3 text-center text-white" data-aos="fade-up">PORTAL BULLETIN</div>
    <p class="px-5 pb-5 text-center text-white" data-aos="fade-up">You can now easily access the Portal Bulletin.</p>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-left">
          <div class="card-body mt-4 mb-1 text-center"><a href="https://web.facebook.com/"><img src="{{ asset('images/portal/fblogo.jpg') }}" height="80" width="80"></a>
            <div class="h4 pb-3">Facebook</div>
            <p>Redirect to Facebook.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="zoom-in-up">
          <div class="card-body mt-4 mb-1 text-center"><a data-toggle="modal" href="#myModal"><img src="{{ asset('images/portal/ncflogo.png') }}" height="70" width="70"></a>
            <div class="h4 pb-3">Naga College Foundation</div>
            <p>Redirect to Naga College Foundation facebook page.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-right">
          <div class="card-body mt-4 mb-1 text-center"><a href="https://www.instagram.com/ncfofficial/"><img src="{{ asset('images/portal/instalogo.jpg') }}" height="60" width="60"></a>
            <div class="h4 pb-3">Instagram</div>
            <p>Redirect to Naga College Foundation instagram page.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <footer class="bg-secondary da-section">
      <div class="container text-white">
        <div class="row">
          <div class="col-md-5">
            <div class="h2 mb-4">Naga College Foundation Inc.</div>
            <p class="mb-3">www.ncf.edu.ph</p>
            <p>+639-175-116-917</p>
          </div>
          <div class="col-md-4">
            <div class="h6 pb-2">Follow Us</div>
            <ul>
              <li class="mb-1"><a class="da-social-link" href="https://www.twitter.com"><i class="fab fa-twitter" aria-hidden="true"></i><span class="ml-2">Twitter</span></a></li>
              <li class="mb-1"><a class="da-social-link" href="https://web.facebook.com/nagacollegefoundation1947"><i class="fab fa-facebook-f" aria-hidden="true"></i><span class="ml-2">Facebook</span></a></li>
              <li class="mb-1"><a class="da-social-link" href="https://www.instagram.com"><i class="fab fa-instagram" aria-hidden="true"></i><span class="ml-2">Instagram</span></a></li>
              <li class="mb-1"><a class="da-social-link" href="https://www.youtube.com"><i class="fab fa-youtube" aria-hidden="true"></i><span class="ml-2">Youtube</span></a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <div class="h6 pb-4">Copyright</div>
            <p class="pb-1">&copy; Naga College Foundation Inc. All rights reserved.</p>
            <!--<p>Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>-->
          </div>
        </div>
      </div>
    </footer>
    <div id="scrolltop">
      <button class="btn btn-primary"><span class="icon"><i class="fas fa-angle-up fa-2x"></i></span></button>
    </div>
    
    <script src="{{asset('scripts/jquery.min.js?ver=1.2.0')}}"></script>
    <script src="{{asset('scripts/bootstrap.bundle.min.js?ver=1.2.0')}}"></script>
    <script src="{{asset('scripts/aos.js?ver=1.2.0')}}"></script>
    <script src="{{asset('scripts/ekko-lightbox.min.js?ver=1.2.0')}}"></script>
    <script src="{{asset('scripts/main.js?ver=1.2.0')}}"></script>
    <!--<script src="https://use.fonticons.com/ffe176a3.js"></script>-->

    <script type="text/javascript">
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
          $("#myBtn").click(function(){
              $("#myModal").modal();
              load_page('https://web.facebook.com/nagacollegefoundation1947');
          });
      });

      function load_page(url){
          $('#modal-isi-body').load(url,function(){});
      }
    </script>
  </body>
</html>

<style type="text/css">
  .bg{
    background-image: url('imagesportal/da-img-2.jpg');
  }
  .bgh{
    background-image: url('images/portal/ncfbg.jpg');
  }
</style>