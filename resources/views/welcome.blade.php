<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Info
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Get Real Clothing</title>
  <meta name="description" content="Clothing Skateboarding Chicago Goodness">
  <meta name="author" content="Get Real">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="{{Voyager::setting('logo')}}" />

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600%7CMontserrat:400,700%7COpen+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>

  <!-- ICONS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="stylesheets/ionicons.min.css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="stylesheets/bootstrap.css">
  <link rel="stylesheet" href="stylesheets/isotope.css">
  <link rel="stylesheet" href="stylesheets/venobox.css">
  <link rel="stylesheet" href="stylesheets/owl.carousel.css">
  <link rel="stylesheet" href="stylesheets/sidepanel.css">
  <link rel="stylesheet" href="stylesheets/elements.css">
  <link rel="stylesheet" href="stylesheets/slimmenu.css">
  <link rel="stylesheet" href="stylesheets/main.css">
  <link rel="stylesheet" href="stylesheets/main-bg.css">
  <link rel="stylesheet" href="stylesheets/main-responsive.css">

  <!-- LESS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet/less" type="text/css" href="less/color.less">
  <link rel="stylesheet/less" type="text/css" href="less/fonts.less">
  <script src="less/less.min.js"></script>
  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
  n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
  document,'script','https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '724210990971326'); // Insert your pixel ID here.
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=724210990971326&ev=PageView&noscript=1"
  /></noscript>
  <!-- DO NOT MODIFY -->
  <!-- End Facebook Pixel Code -->


</head>

<body>




    <!-- mobile only navigation : starts -->
      <nav class="mobile-nav">
        <ul class="slimmenu">
          <li><a  href="/">Feed</a></li>
          <li><a  href="/Lookbook-2017">Lookbook</a></li>

        </ul>
      </nav>

      <!-- mobile only navigation : ends -->
  <a class="onscreen-trigger" href="#"><img alt="" title="" src="images/next.svg"/></a>

  <!-- Header
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <header class="masthead white-bg fullheight">
    <div class="valign">
      <div class="inner">
          <a class="ajax-link" ><img alt="" title="" style="height:50px" class="logo" src="{{Voyager::setting('logo')}}"/></a>
          <nav class="mastnav font2">
            {!! Menu::display('main') !!}
          </nav>
      </div>
    </div>

    <div class="sticky-icons">
        <ul>
            <li><a class="fullscreen-toggle" href="#"><img alt="" title="" src="images/prev.svg"/></a></li>
        </ul>
    </div>
  </header>

  <!-- sub navigation panel : starts -->
  <section class="sub-nav-wrap fullheight dark-bg white font2">
    <div class="valign">

      <!-- sub navigation section -->
      <ul class="sub-nav sub-nav-intro">
        <li><a class="ajax-link" href="index01.html">masonry</a></li>
        <li><a class="ajax-link" href="index05.html">agency</a></li>
        <li><a class="ajax-link" href="index02.html">fashion</a></li>
        <li><a class="ajax-link" href="index07.html">photography</a></li>
        <li><a class="ajax-link" href="index06.html">personal</a></li>
        <li><a class="ajax-link" href="index04.html">fullscreen</a></li>
        <li><a class="ajax-link" href="index03.html">bg video</a></li>
      </ul>

    </div>
  </section>
  <!-- sub navigation panel : ends -->

  <!-- dummy overlay for whole page when sidebar is active -->
  <section class="featured-mask-overlay"></section>

  <section class="mastwrap-outer cd-main-content">

  <!-- MASTER CONTENT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="ajax-content" class="mastwrap spaced-left">

  <!--works filter panel :starts -->
  <section id="works-filter-panel" class="works-filter-panel white-bg">
  <div class="works-filter-wrap">
        <ul class="works-filter text-center clearfix font4light">
            <li><a id="all" href="#" data-filter="*" class="active"><span>All</span></a></li>
            <li><a href="#" data-filter=".branding"><span>Branding</span></a></li>
            <li><a href="#" data-filter=".graphics"><span>Graphics</span></a></li>
            <li><a href="#" data-filter=".logos"><span>Logos</span></a></li>
            <li><a href="#" data-filter=".ui"><span>UI</span></a></li>
            <li><a href="#" data-filter=".web"><span>Web</span></a></li>
        </ul>
  </div>
  </section>
  <!-- works filter panel :ends -->
  <section class="intro intro-05 agency-carousel-wrap fullheight">

    <!-- Set up your HTML -->
    <div class="agency-carousel owl-carousel owl-nav-sticky-wide">

      @foreach($products as $product)

        @if($product->id!=5)
        <div class="intro-05-item fullheight text-center img-bg" style="background-image: url({{$product->image}});">
          <span class="fullheight" >
              <div class="intro-05-overlay fullheight">
                  <div class="valign">
                    <a href="{{url('http://getrealclothing.com/Products/'.$product->slug.'')}}">

                    <h3 class="font2 dark"><span>{{$product->name}} </span></h3>
                    <p style="color:#000;margin-top:35px">
                      Click for Details
                    </p>
                  </a>
                  </div>
              </div>
          </span>
        </div>
        @endif



      @endforeach

    </div>
  </section>

  <section id="yo" class="silver-bg project-cover halfheight" >
    <div class="valign">
      <article class="text-center" style="border:none">
        <h1><span class="font2">What We've Been Up To</span></h1>
      </article>
    </div>
  </section>

  <div id="works-container" class="works-container works-masonry-container clearfix white-bg">

    @foreach($posts as $post)
      <!-- start : works-item -->
      <div class="works-item works-item-one-third-spaced zoom web logos" >
        <img alt="" title="" class="img-responsive" src="{{$post->image}}"/>
        <a  href="{{$post->slug}}">
          <div class="works-item-inner">
            <h3 class="color font2">{{$post->title}}</h3>
            <p><span class="dark font4">Video</span></p>
          </div>
        </a>
      </div>
      <!-- end : works-item -->
    @endforeach

    @foreach($instagram as $insta)
      <!-- start : works-item -->
      <div class="works-item works-item-one-third-spaced zoom web logos">
        <img alt="" title="" class="img-responsive" src="  {{$insta['images']['standard_resolution']['url']}}"/>
        <a  class="venobox" s="portfolio-gallery" href="  {{$insta['images']['standard_resolution']['url']}}">
          <div class="works-item-inner">
            <h3 class="color font1">{{$insta['caption']['text']}}</h3>
            <p><span class="dark font4">Instagram</span></p>
          </div>
        </a>
      </div>
      <!-- end : works-item -->
      @endforeach

    </div>
    <!-- end : works-container -->


  </section>
  <!-- end : mastwrap -->

</section>
<!-- mastwrap-outer ends -->

<!--Links to Frinds :starts -->
  @include('components.linksToFriends')
<!-- Links to Frinds :ends -->



  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <script src="javascripts/libs/common.js"></script>
  <script src="javascripts/libs/bootstrap.min.js"></script>
  <script src="javascripts/custom/main.js"></script>

</body>
</html>
