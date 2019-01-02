@extends('layoutgen')
@section('content')
<body style="background-color:#000000;">
    <!-- Hero Section-->
    <section style="background: url(img/blogBg.jpg); background-size:cover; background-position: center center" class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h1>The Michaels blog - Welcome</h1><a href="#" class="hero-link">Discover More</a>
          </div>
        </div><a href="#intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Scroll Down</a>
      </div>
    </section>
    <!-- Intro Section-->
    <!--section class="intro" style="padding:4px;" id ="intro">
      <div class="container" style="background-color:white;">
        <div class="row">
          <div class="col-lg-8">
            <h2 class="h3">Some great intro here</h2>
            <p class="text-big">Place a nice <strong>introduction</strong> here <strong>to catch reader's attention</strong>. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi.</p>
          </div>
        </div>
      </div>
    </section-->

    <section class="featured-posts no-padding-top" style="padding:1px;"  id ="intro">
      <div class="container" style="background-color:white;">
        <!-- Post-->
        <div class="row d-flex align-items-stretch" style="padding:4px;">
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content" style="background-color:white;">
                <header class="post-header">
                  <div class="category"><a href="#">Business</a><a href="{{URL::to('faceb')}}">Technology</a></div><a href="{{URL::to('faceb')}}">
                    <h2 class="h4">Facebook Rumored To Be Creating Its Own Cryptocurrency</h2></a>
                </header>
                <p>Facebook might be exploring opportunities involving stablecoin. If so, it would be the first major company to pursue blockchain, and it stands to succeed given its massive user base.</p>
                <footer class="post-footer d-flex align-items-center" style="background-color:white;"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="img/ovo1.jpg" alt="..." class="img-fluid"></div>
                    <div class="title"><span>Michael ovo</span></div></a>
                  <div class="date"><i class="icon-clock"></i> 	December 21, 2018 </div>
                  <div class="comments"><i class="icon-comment"></i>12</div>
                </footer>
              </div>
            </div>
          </div>
          <div class="image col-lg-5"><a href="{{URL::to('faceb')}}"><img src="img/facebooknews.jpg" alt="..." width="450" height ="200"></a></div>
        </div>
        <!-- Post        -->
        <div class="row d-flex align-items-stretch" style="padding:4px;">
          <div class="image col-lg-5"><a href="{{URL::to('post')}}"><img src="img/pulisic.jpg" alt="..."></a></div>
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content">
                <header class="post-header">
                  <div class="category"><a href="{{URL::to('post')}}">Sports</a><a href="{{URL::to('post')}}">Football</a></div><a href="{{URL::to('post')}}">
                    <h2 class="h4">Dortmund star Pulisic to join Chelsea in £58m deal</h2></a>
                </header>
                <p>Unable to agree new terms with the attacking midfielder, BVB felt that the deal offered by the Blues was one they could not afford to turn down </p>
                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="img/ovo1.jpg" alt="..." class="img-fluid"></div>
                    <div class="title"><span>Michael ovo</span></div></a>
                  <div class="date"><i class="icon-clock"></i> January 2, 2019</div>
                  <div class="comments"><i class="icon-comment"></i>12</div>
                </footer>
              </div>
            </div>
          </div>
        </div>
        <!-- Post                            -->
        <div class="row d-flex align-items-stretch" style="padding:4px;">
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content" style="background-color:white; padding:4px;">
                <header class="post-header">
                  <div class="category"><a href="#">Business</a><a href="#">Technology</a></div><a href="{{URL::to('post')}}">
                    <h2 class="h4">These Super Healthy Foods Must Be Included In Your 2019 Diet Plan</h2></a>
                </header>
                <p>Eating some healthy foods daily does not mean you have to go out of the box. Some easily available foods are also extremely nutritious and can do wonders for your health. Have a look at the diet plan of 2019!</p>
                <footer class="post-footer d-flex align-items-center"style="padding:4px;" ><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="img/ovo2.jpg" alt="..." class="img-fluid"></div>
                    <div class="title"><span>Michael ovo</span></div></a>
                  <div class="date"><i class="icon-clock"></i> January 2, 2019</div>
                  <div class="comments"><i class="icon-comment"></i>12</div>
                </footer>
              </div>
            </div>
          </div>
          <div class="image col-lg-5" style="padding:4px;"><a href="{{URL::to('post')}}"><img src="img/eggs.jpg" alt="..." width="450" height ="400"></a></div>
        </div>
      </div>
    </section>

    <!-- Latest Posts -->
    <section class="latest-posts" style="padding:4px;" >
      <div class="container" style="background-color:white;padding:4px;">
        <!--header style="padding:4px;">
          <h2>Latest from the blog</h2>
          <p class="text-big" style="padding:4px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </header-->
        <h2>Latest from the blog</h2>
        <p class="text-big" style="padding:4px;">News from around the world.</p>

        <div class="row">
          <div class="post col-md-4">
            <div class="post-thumbnail"><a href="{{URL::to('post')}}"><img src="img/kaka.jpg" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date">20 May | 2016</div>
                <div class="category"><a href="#">Sports</a></div>
              </div style="padding:4px;"><a href="{{URL::to('post')}}">
                <h3 class="h4" style="padding:4px;">Kaka blames Mourinho for Real Madrid struggles</h3></a>
              <p class="text-muted">The Brazilian failed to hold down a regular spot in the Blancos starting XI, with the Portuguese preferring Mesut Ozil to him in the lineup. </p>
            </div>
          </div>
          <div class="post col-md-4" >
            <div class="post-thumbnail"><a href=""><img src="img/blog-2.jpg" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date">20 May | 2018</div>
                <div class="category"><a href="#">Technology</a></div>
              </div><a href="">
                <h3 class="h4">Amazon Go Cashierless Stores Reportedly Coming To Airports</h3></a>
              <p class="text-muted">Amazon is setting sights on bigger things for its cashierless grocery concept. Depending on how plans go, travelers could soon find an Amazon Go in their airport.</p>
            </div>
          </div>
          <div class="post col-md-4">
            <div class="post-thumbnail"><a href="{{URL::to('post')}}"><img src="img/nija.jpg" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date">20 Dec | 2018</div>
                <div class="category"><a href="#">Economy</a></div>
              </div><a href="{{URL::to('post')}}">
                <h3 class="h4">Nigeria's economy in bad shape - Buhari</h3></a>
              <p class="text-muted">Nigerian President Muhammadu Buhari Friday told the state governors that the country's economy is in a bad shape.</p>
              <br/>
              <br/>
            </div>
          </div>
        </div>
      </div>

    </section>


@endsection
