
@extends('layouts.sidebarlayout')
@section('pagecontent')


<main class="post blog-post col-lg-8">
  <div class="container">
    <div class="post-single">
      <div class="post-thumbnail"><img src="img/facebooknews.jpg" alt="..." class="img-fluid" width="300" height="300"></div>
      <div class="post-details">
        <div class="post-meta d-flex justify-content-between">
          <div class="category"><a href="#">Business</a><a href="#">Technology</a></div>
        </div>
        <h1>Facebook Rumored To Be Creating Its Own Cryptocurrency<a href="#"><i class="fa fa-bookmark-o"></i></a></h1>
        <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
            <div class="avatar"><img src="img/ovo1.jpg" alt="..." class="img-fluid"></div>
            <div class="title"><span>John Doe</span></div></a>
          <div class="d-flex align-items-center flex-wrap">
            <div class="date"><i class="icon-clock"></i> January 2, 2019</div>
            <div class="views"><i class="icon-eye"></i> 500</div>
            <div class="comments meta-last"><i class="icon-comment"></i>12</div>
          </div>
        </div>
        <div class="post-body">
          <p class="lead">Facebook might be exploring opportunities involving stablecoin. If so, it would be the first major company to pursue blockchain, and it stands to succeed given its massive user base.  ( Thomas Ulrich | Pixabay )
</p><p>


          If Facebook joined the blockchain bandwagon, it would be the largest company to do so. With recent reports alleging the social media company is inching toward its own stablecoin, it's doing exactly just that.
            <br>
            <br/>
The move should perhaps come as no surprise. Facebook did create its own blockchain division back in May, so speculation of a proprietary cryptocurrency was on analysts' minds as early as the first half of this year. Operations in that division have so far been unclear, however. Until now.
<br>
<br/>
According to Bloomberg, the division is currently working on a stablecoin that "let[s] users transfer money on its WhatsApp messaging app, focusing first on the remittances market in India."

<br><br>
"Like many other companies, Facebook is exploring ways to leverage the power of blockchain technology. This new small team is exploring many different applications. We don't have anything further to share."
          </p>


          <p> <img src="img/facebooknews.jpg" alt="..." class="img-fluid"></p>
<h3>Facebook Developing Its Own Cryptocurrency</h3>
          <blockquote class="blockquote">
            <p>the division is currently working on a stablecoin that "let[s] users transfer money on its WhatsApp messaging app, focusing first on the remittances market in India..</p>
            <footer class="blockquote-footer">Bloomberg.
              <cite title="Source Title">Source Title</cite>
            </footer>
          </blockquote>
          <p>Facebook would be the largest company to pursue a consumer blockchain service. Facebook alone reaches more than 2.2 billion people. That's on top of 1.5 billion on WhatsApp, 1.3 billion on Messenger, and a billion more on Instagram, as TechCrunch notes.
<br><br>
As mentioned earlier, the move doesn't come as a surprise. Apart from creating a blockchain division, Facebook also hired former PayPal president David Marcus to run its Messenger app way back in 2014, and as such, there's been much speculation on whether Facebook is planning to make a move in the financial services sector.

</p>

        </div>
        <div class="post-tags"><a href="#" class="tag">#Business</a><a href="#" class="tag">#Tricks</a><a href="#" class="tag">#Financial</a><a href="#" class="tag">#Economy</a></div>
        <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row"><a href="#" class="prev-post text-left d-flex align-items-center">
            <div class="icon prev"><i class="fa fa-angle-left"></i></div>
            <div class="text"><strong class="text-primary">Previous Post </strong>
              <h6>I Bought a Wedding Dress.</h6>
            </div></a><a href="#" class="next-post text-right d-flex align-items-center justify-content-end">
            <div class="text"><strong class="text-primary">Next Post </strong>
              <h6>I Bought a Wedding Dress.</h6>
            </div>
            <div class="icon next"><i class="fa fa-angle-right">   </i></div></a></div>
        <div class="post-comments">
          <header>
            <h3 class="h6">Post Comments<span class="no-of-comments">(3)</span></h3>
          </header>
          <div class="comment">
            <div class="comment-header d-flex justify-content-between">
              <div class="user d-flex align-items-center">
                <div class="image"><img src="img/user.svg" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title"><strong>Jabi Hernandiz</strong><span class="date">January 2, 2019</span></div>
              </div>
            </div>
            <div class="comment-body">
              <p>Welcome to Stamford Bridge!.Pls don't be unfortunate like Morata...</p>
            </div>
          </div>
          <div class="comment">
            <div class="comment-header d-flex justify-content-between">
              <div class="user d-flex align-items-center">
                <div class="image"><img src="img/user.svg" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title"><strong>Nikolas</strong><span class="date">January 2, 2019</span></div>
              </div>
            </div>
            <div class="comment-body">
              <p>Welcome to the best League in the world!</p>
            </div>
          </div>
          <div class="comment">
            <div class="comment-header d-flex justify-content-between">
              <div class="user d-flex align-items-center">
                <div class="image"><img src="img/ovo2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title"><strong>Michael ovo</strong><span class="date">January 2, 2019</span></div>
              </div>
            </div>
            <div class="comment-body">
              <p>Welcome to epl, I hope you will solve our striking problem.</p>
            </div>
          </div>
        </div>
        <div class="add-comment">
          <header>
            <h3 class="h6">Leave a reply</h3>
          </header>


          @if ($errors->any())
     <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
           @endforeach
       </ul>
     </div><br />
   @endif
          <form class="commenting-form" action="{{url('insertcomment')}}" method="post">
            @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="username" placeholder="Name" class="form-control">
              </div>
              <div class="form-group col-md-6">
                <input type="email" name="useremail"  placeholder="Email Address (will not be published)" class="form-control">
              </div>
              <div class="form-group col-md-12">
                <textarea name="usercomment"  placeholder="Type your comment" class="form-control"></textarea>
              </div>
              <div class="form-group col-md-12">
                <button type="submit" class="btn btn-secondary">Submit Comment</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
