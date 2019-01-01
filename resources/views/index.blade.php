@extends('layoutgen')
@section('content')
<body style="background-color:#333333;">
    <!-- Hero Section-->
    <section style="background: url(img/hero.jpg); background-size:cover; background-position: center center" class="hero">
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

    <section class="featured-posts no-padding-top" style="padding:1px;">
      <div class="container" style="background-color:white;">
        <!-- Post-->
        <div class="row d-flex align-items-stretch" style="padding:4px;">
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content" style="background-color:white;">
                <header class="post-header">
                  <div class="category"><a href="#">Business</a><a href="#">Technology</a></div><a href="{{URL::to('post')}}l">
                    <h2 class="h4">Alberto Savoia Can Teach You About Interior</h2></a>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrude consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                <footer class="post-footer d-flex align-items-center" style="background-color:white;"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid"></div>
                    <div class="title"><span>John Doe</span></div></a>
                  <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                  <div class="comments"><i class="icon-comment"></i>12</div>
                </footer>
              </div>
            </div>
          </div>
          <div class="image col-lg-5"><img src="img/featured-pic-1.jpeg" alt="..."></div>
        </div>
        <!-- Post        -->
        <div class="row d-flex align-items-stretch" style="padding:4px;">
          <div class="image col-lg-5"><img src="img/featured-pic-2.jpeg" alt="..."></div>
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content">
                <header class="post-header">
                  <div class="category"><a href="#">Business</a><a href="#">Technology</a></div><a href="{{URL::to('post')}}">
                    <h2 class="h4">Alberto Savoia Can Teach You About Interior</h2></a>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrude consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="img/avatar-2.jpg" alt="..." class="img-fluid"></div>
                    <div class="title"><span>John Doe</span></div></a>
                  <div class="date"><i class="icon-clock"></i> 2 months ago</div>
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
                    <h2 class="h4">Alberto Savoia Can Teach You About Interior</h2></a>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrude consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                <footer class="post-footer d-flex align-items-center"style="padding:4px;" ><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="img/avatar-3.jpg" alt="..." class="img-fluid"></div>
                    <div class="title"><span>John Doe</span></div></a>
                  <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                  <div class="comments"><i class="icon-comment"></i>12</div>
                </footer>
              </div>
            </div>
          </div>
          <div class="image col-lg-5" style="padding:4px;"><img src="img/featured-pic-3.jpeg" alt="..."></div>
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
        <p class="text-big" style="padding:4px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

        <div class="row">
          <div class="post col-md-4">
            <div class="post-thumbnail"><a href="{{URL::to('post')}}"><img src="img/blog-1.jpg" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date">20 May | 2016</div>
                <div class="category"><a href="#">Business</a></div>
              </div style="padding:4px;"><a href="{{URL::to('post')}}">
                <h3 class="h4" style="padding:4px;">Ways to remember your important ideas</h3></a>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
          <div class="post col-md-4" >
            <div class="post-thumbnail"><a href=""><img src="img/blog-2.jpg" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date">20 May | 2016</div>
                <div class="category"><a href="#">Technology</a></div>
              </div><a href="">
                <h3 class="h4">Diversity in Engineering: Effect on Questions</h3></a>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
          <div class="post col-md-4">
            <div class="post-thumbnail"><a href="{{URL::to('post')}}"><img src="img/blog-3.jpg" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date">20 May | 2016</div>
                <div class="category"><a href="#">Financial</a></div>
              </div><a href="{{URL::to('post')}}">
                <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
              <br/>
              <br/>
            </div>
          </div>
        </div>
      </div>

    </section>


@endsection