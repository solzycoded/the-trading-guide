<?php
	// start up eloquent
	require '_posts.php';

	Class Pages {

		function __construct() {
			
		}

		// what's displayed on the left page of the website, depends on the parameter that's passed here
		function displaypage($page, $page_content = []){
			if($page=='home')
				$this->home_page();
			else if($page=='allposts')
				$this->posts_page();
			else if($page=='category')
				$this->posts_category_page();
		}

		// DISPLAY POSTS -> CATEGORY
		function posts_category_page(){
			?>		
	            <!-- Blog entry -->
	            <div class="w3-card-4 w3-margin w3-white">

	                <!-- page header -->
	                <div class="container-fluid pageheader">
						<div class="row">
						    <!-- page navigation -->
						    <div class="col-lg-12 pagenav">
						        <span><a href="/">Home</a></span><span class="parting">/</span>
						        <span><a href="/posts">Posts</a></span><span class="parting">/</span>
						        <span><a href="/posts/cryptocurrency">Cryptocurrency</a></span><span class="parting">/</span>
						        <span id="navpagetitle">How do i make money from cryptocurrency?</span>
						    </div>

						    <!-- page header info -->
						    <div class="col-lg-12 postinfo">

						        <!-- page title -->
						        <h1 id="pagetitle">How do i make money from cryptocurrency?</h1>

						        <!-- page info -->
						        <div class="w3-container postheading">
						            <h5 class="w3-opacity postheadingcontent">
						                <span><i class="fa fa-folder-open"></i> Cryptocurrency</span>
						                <span><i class="fa fa-calendar"></i> April 7, 2014</span>
						                <span><i class="fa fa-comments"></i> 1 Comment(s)</span>
						            </h5>
						        </div>

						    </div>
						</div>
	                </div>
	                <!-- end page header -->
	      
	                <img src="imgs/2.jpg" alt="Nature" style="width:100%;">
	                
	                <div class="w3-container postcontent">
	                    <p>
	                        A cryptocurrency, crypto-currency, or crypto is a digital currency designed to work as a medium of exchange through a computer network that is not reliant on any central authority, such as a government or bank, to uphold or maintain it. Individual coin ownership records are stored in a digital ledger, which is a computerized database using strong cryptography to secure transactionrecords.
	                    </p>

	                    <div class="container-fluid">
	                        <div class="row">
	                           <!--  <div class="col-lg-12 text-left" style="padding: 15px 0px 0px 0px;height: 56px;">
	                                <span class="posttags">
	                                    <span style="color: gray !important">
	                                        <i class="fa fa-tags"></i>
	                                    </span>
	                                    <a href=""><small>#cryptocurrency</small></a> 
	                                    <a href=""><small>#bitcoin</small></a>
	                                    <a href=""><small>#scam</small></a>
	                                </span>
	                            </div> -->

	                            <p class="col-lg-12 sharethisheader">KINDLY SHARE THIS</p>
	                            <!-- share this -->
	                            <div class="col-lg-12 sharethis">
	                                <a href="#" class="col-lg-3 shareit social facebook">
	                                    <i class="fa fa-facebook-f"></i>
	                                </a>

	                                <a href="#" class="col-lg-3 shareit social twitter">
	                                    <i class="fa fa-twitter"></i>
	                                </a>

	                                <a href="#" class="col-lg-3 shareit social whatsapp">
	                                    <i class="fa fa-whatsapp"></i>
	                                </a>
	                            </div>
	                           
	                            <!-- related posts -->
	                            <p class="col-lg-12 relatedpostsheader">RELATED POSTS</p>
	                            <!-- share this -->
	                            <div class="container-fluid relatedposts col-lg-12">
	                                <div class="row">
	                                    <!-- 1 -->
	                                    <div class="col-sm-12 col-md-6 col-lg-4 relatedpostcontent">
	                                        <a href="">                                
	                                            <!-- title -->
	                                            <p class="relatedpostcontenttitle">How do i make money from cryptocurrency?</p>
	                                            <!-- date -->
	                                            <p class="relatedpostcontentdate">October 15, 1996</p>
	                                            <!-- category -->
	                                            <p class="relatedpostcontentcategory">In "<span>Cryptocurrency</span>"</p>
	                                        </a>
	                                    </div>

	                                    <!-- 2 -->
	                                    <div class="col-sm-12 col-md-6 col-lg-4 relatedpostcontent">
	                                        <a href="">                                
	                                            <!-- title -->
	                                            <p class="relatedpostcontenttitle">How do i make money from cryptocurrency?</p>
	                                            <!-- date -->
	                                            <p class="relatedpostcontentdate">October 15, 1996</p>
	                                            <!-- category -->
	                                            <p class="relatedpostcontentcategory">In "<span>Cryptocurrency</span>"</p>
	                                        </a>
	                                    </div>

	                                    <!-- 3 -->
	                                    <div class="col-sm-12 col-md-6 col-lg-4 relatedpostcontent">
	                                        <a href="">                                
	                                            <!-- title -->
	                                            <p class="relatedpostcontenttitle">How do i make money from cryptocurrency?</p>
	                                            <!-- date -->
	                                            <p class="relatedpostcontentdate">October 15, 1996</p>
	                                            <!-- category -->
	                                            <p class="relatedpostcontentcategory">In "<span>Cryptocurrency</span>"</p>
	                                        </a>
	                                    </div>
	                                    <!-- end of 3 -->
	                                </div>
	                            </div>
	                            <!-- end related posts -->
	                            <br>
	                            <br>
	                        </div>
	                    </div>
	                    <!-- end of post -->
	                </div>

	                <!-- continue: previous and next posts -->
	                <div class="prevandnextpost">
	                    <!-- previous post -->
	                    <div class="text-left prevpost">
	                        <button class="btn btn-default">
	                            <i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i> previous post
	                        </button>
	                    </div>

	                    <!-- next post -->
	                    <div class="text-right nextpost">
	                        <button class="btn btn-default">
	                            next post <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i>
	                        </button>
	                    </div>
	                </div>
	                <br>
	                <br>

	                <!-- continue: comments -->
	                <div class="container-fluid commentsection">
	                    <div class="row">
	                        <!-- add comments section -->
	                        <div class="col-lg-12">
	                            <form class="form-group" action="">
	                                <p class="commentheader">Comments</p>
	                                <textarea class="guestcomment form-control" name="comment" placeholder="Leave a Reply" rows="7"></textarea>
	                                <input type="text" class="guestname form-control" name="guestname" placeholder="Nickname">
	                                <input type="email" class="guestemail form-control" name="guestemail" placeholder="Email Address">
	                                <input type="url" class="guestwebsite form-control" name="guestwebsiteurl" placeholder="Website Url (optional)">

	                                <!-- check boxes -->
	                                <div class="form-check">
	                                    <input class="form-check-input" type="checkbox" value="" id="saveguestinfo">
	                                    <label class="form-check-label" for="saveguestinfo">
	                                        Save my Name, Email, and Website on this browser for the next time I comment.
	                                    </label>
	                                </div>

	                                <div class="form-check">
	                                    <input class="form-check-input" type="checkbox" value="" id="notifyguestofcomment">
	                                    <label class="form-check-label" for="notifyguestofcomment">
	                                        Notify me of follow-up comments by Email.
	                                    </label>
	                                </div>

	                                <div class="form-check">
	                                    <input class="form-check-input" type="checkbox" value="" id="notifyguestbyemail">
	                                    <label class="form-check-label" for="notifyguestbyemail">
	                                        Notify me of new posts by Email.
	                                    </label>
	                                </div>

	                                <!-- submit form -->
	                                <div class="submitcommentcontainer">
	                                    <button type="submit" class="btn btn-primary submitcomment">Send comment</button>
	                                </div>
	                            </form>
	                        </div>
	                        
	                        <!-- list comments section -->
	                        <div class="col-lg-12 guestcomments">
	                            <p class="noofcomments">1 Comment(s)</p>

	                            <!-- comment -->
	                            <div class="guestcommentdisplay">
	                                <div class="guestcommenttop">
	                                    <div class="guestimage">
	                                        <i class="fa fa-user"></i>
	                                    </div>
	                                    <div class="guestcontent">
	                                        <!-- name/websiteurl and comment -->
	                                        <p class="guestnamedisplay">something fishy <span class="guestcommentdate">feb 2014</span></p>
	                                        <p>Wow... I didn't even know that some of these things existed. GOOD JOB YOU'RE DOING BRO!</p>
	                                        <!-- reply -->
	                                        <div class="guestcommentbottom">
	                                            <button type="button" class="btn button replycomment"><i class="fa fa-reply"></i> Reply</button>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- end comment -->

	                            <!-- comment -->
	                            <div class="guestcommentdisplay">
	                                <div class="guestcommenttop">
	                                    <div class="guestimage">
	                                        <i class="fa fa-user"></i>
	                                    </div>
	                                    <div class="guestcontent">
	                                        <!-- name/websiteurl and comment -->
	                                        <p class="guestnamedisplay">something fishy <span class="guestcommentdate">feb 2014</span></p>
	                                        <p>Wow... I didn't even know that some of these things existed. GOOD JOB YOU'RE DOING BRO!</p>
	                                        <!-- reply -->
	                                        <div class="guestcommentbottom">
	                                            <button type="button" class="btn button replycomment"><i class="fa fa-reply"></i> Reply</button>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- end comment -->

	                        </div>
	                    </div>
	                </div>

	            </div>
	            <hr>

			<?php
		}
		// DISPLAY POSTS -> CATEGORY (END)

		// DISPLAY POSTS
		function posts_page(){
			?>
				<!-- page header -->
	            <div class="container-fluid pageheader" style="margin: 0 13px 0 13px">
					<div class="row">
					    <!-- page navigation -->
					    <div class="col-lg-12 pagenav">
					        <span><a href="/">Home</a></span><span class="parting">/</span>
					        <span><a href="/posts">Posts</a></span><span class="parting">/</span>
					        <span>Cryptocurrency</span>
					    </div>

					    <!-- page header info -->
					    <div class="col-lg-12 postinfo" style="margin: 0;padding: 0">

					        <!-- page title -->
					        <h1 id="pagetitle">Cryptocurrency</h1>

					        <!-- page filter -->
					        <div class="w3-container gotopage">
					            <div class="dropdown dropup">
					                <button class="btn btn-secondary dropdown-toggle" type="button" id="gotopage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					                    Go TO <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i>
					                </button>
					                <div class="dropdown-menu dropdown-menu-right gotopagemenu"  aria-labelledby="gotopage">
					                    <a class="dropdown-item allcategories" href="#">All</a>
					                    <div class="dropdown-divider"></div>
					                    <a class="dropdown-item" href="#">Cryptocurrency</a>
					                    <div class="dropdown-divider"></div>
					                    <a class="dropdown-item" href="#">synthetic indices</a>
					                    <div class="dropdown-divider"></div>
					                    <a class="dropdown-item" href="#">forex</a>
					                </div>
					            </div>
					        </div>

					    </div>
					</div>
	            </div>
	            <!-- end page header -->


	            <!-- display posts -->
	            <div class="container-fluid">
	                <!-- posts (THIS IS THE PART THAT WILL BE LOOPED... the rest is CONSTANT) -->
	                <div class="row posts">
	                    <!-- post -->
	                    <div class="col-sm-12 col-md-6 col-lg-6 eachpost">
	                        <a href="/posts/cryptocurrency/how do i make money from cryptocurrency?">
	                            <img src="imgs/post.jpg" style="width:100%">
	                        </a>

	                        <div class="w3-container w3-white eachpostcontent">
	                            <div class="postcategory">
	                                <a href="">synthetic indices</a>
	                            </div>

	                            <h4 class="eachpostcontenttitle"><a href="/posts/go somewhere"><b>I just want to guide you on your investment/trading journey. Let me be your guide.I just want to guide you on your investment/trading journey. Let me be your guide.I just want to guide you on your investment/trading journey. Let me be your guide.I just want to guide you on your investment/trading journey. Let me be your guide.I just want to guide you on your investment/trading journey. Let me be your guide.I just want to guide you on your investment/trading journey. Let me be your guide.</b></a></h4>
	                            <h5 class="w3-opacity eachpostcontentdetails">
	                                <!-- <span><a href="" style="color: inherit;"></a> | crytocurrency investor | web developer</span> -->
	                                <div class="w3-container postheading">
	                                    <h5 class="w3-opacity postheadingcontent">
	                                        <!-- <span><i class="fa fa-folder-open"></i> Cryptocurrency</span> -->
	                                        <span><i class="fa fa-calendar"></i> April 7, 2014</span>
	                                        <span><i class="fa fa-comments"></i> 1 Comment(s)</span>
	                                    </h5>
	                                </div>
	                            </h5>
	                            <!-- <h6 class="tags">
	                                <span class="posttags">
	                                    <span class="tagicon">
	                                        <i class="fa fa-tags"></i>
	                                    </span>
	                                    <a href=""><small>#cryptocurrency</small></a> 
	                                    <a href=""><small>#bitcoin</small></a>
	                                    <a href=""><small>#scam</small></a>
	                                </span>
	                            </h6> -->
	                        </div>

	                    </div>
	                    <!-- end of post -->
	                    
	                    <!-- pagination -->
	                    <nav class="col-lg-12" aria-label="..." style="text-align: center;">
	                        <ul class="pagination">
	                            <li class="page-item disabled">
	                                <a class="page-link" href="#" tabindex="-1">
	                                    <i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i>
	                                </a>
	                            </li>
	                            <li class="page-item active">
	                                <a class="page-link" href="#">1</a>
	                            </li>
	                            <li class="page-item disabled">
	                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
	                            </li>
	                            <li class="page-item disabled">
	                                <a class="page-link" href="#">3</a>
	                            </li>
	                            <li class="page-item disabled">
	                                <a class="page-link" href="#">4</a>
	                            </li>
	                            <li class="page-item disabled">
	                                <a class="page-link" href="#">5</a>
	                            </li>
	                            <li class="page-item disabled">
	                                <a class="page-link" href="#">...</a>
	                            </li>
	                            <li class="page-item disabled">
	                                <a class="page-link" href="#">100</a>
	                            </li>
	                            <li class="page-item disabled">
	                                <a class="page-link" href="#">
	                                    <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i>
	                                </a>
	                            </li>
	                        </ul>
	                    </nav>
	                    <!-- pagination end -->
	                </div>
	                <!-- posts end -->
	            </div>
			<?php
		}
		// DISPLAY POSTS (END)

		// DISPLAY HOME PAGE
		function home_page(){
			?>
				<!-- Blog entry -->
		        <div class="w3-card-4 w3-margin w3-white">
		            <img src="imgs/2.jpg" alt="Nature" style="width:100%;">
		            <div class="w3-container postheading">
		                <h3><b>TITLE HEADING</b></h3>
		                <h5 class="w3-opacity postheadingcontent">
		                    <span><i class="fa fa-calendar"></i> April 7, 2014</span>
		                    <span><i class="fa fa-folder-open"></i> Cryptocurrency</span>
		                    <span><i class="fa fa-comments"></i> 1 Comment(s)</span>
		                </h5>
		            </div>

		            <div class="w3-container">
		                <p>
		                    A cryptocurrency, crypto-currency, or crypto is a digital currency designed to work as a medium of exchange through a computer network that is not reliant on any central authority, such as a government or bank, to uphold or maintain it. Individual coin ownership records are stored in a digital ledger, which is a computerized database using strong cryptography to secure transactionrecords.
		                </p>
		                <div class="container-fluid">
		                    <div class="row">
		                       <!--  <div class="col-sm-6 col-md-6 col-lg-6 text-left" style="padding: 15px 0px 0px 0px;height: 56px">
		                            <span class="posttags">
		                                <span style="color: gray !important">
		                                    <i class="fa fa-tags"></i>
		                                </span>
		                                <a href=""><small>#cryptocurrency</small></a> 
		                                <a href=""><small>#bitcoin</small></a>
		                                <a href=""><small>#scam</small></a>
		                            </span>
		                        </div> -->
		                        <div class="col-sm-12 col-md-12 col-lg-12 text-right" style="padding: 0;margin-top: 10px;">
		                            <p><button class="w3-button w3-padding-large w3-white w3-border" type="button" data-toggle="modal" data-target="#privacypolicyModal" data-whatever="@getbootstrap"><b>READ MORE »</b></button></p>
		                        </div>
		                    </div>
		                </div>

		            </div>
		        </div>
		        <hr>
		        <!-- Blog entry end -->     

			<?php
		}
		// DISPLAY HOME PAGE (END)
	}
	// CLASS_PAGES (END)
?>