<?php
    $title = "the trading guide | cryptocurrency"
?>

<!DOCTYPE html> 
<html>
  <head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <link rel="stylesheet" href="css/w3.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/posts.css">
    <link rel="stylesheet" href="css/admin.css">

    <style>
      body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    </style>
  </head>
  <body class="w3-light-grey">
    <!-- 
        FOCUS:
        THIS PLATFORM IS FOCUSED ON HELPING YOU BECOME THE BEST TRADER/INVESTOR THAT YOU CAN BE. WE TALK ABOUT THE THINGS THAT MOST OTHER PEOPLE DON'T FOCUS ON. WE FOCUS ON TRADING PSYCHOLOGY (BIASES), RISK MANAGEMENT (POSITION SIZING), HOW THEY NEGATIVELY AFFECT YOUR PERFORMANCE & HOW YOU CAN IMPROVE BY FOCUSING FIRST ON YOURSELF (YOUR TRADING PSYCHOLOGY) AND THEN YOUR SYSTEM.

        MANTRA:
        IF YOU KNOW YOURSELF & YOUR ENEMY (the market), YOU NEED NOT FEAR THE OUTCOME OF ANY BATTLE
    -->

    <!-- SWITCH USER VIEW_ADMIN FUNCTION -->
    <div class="adminswitch">
        <div class="switchto" class="col-sm-12 col-md-6 col-lg-6">
            <span class="switchtouser">
                <a href="/project blog/posts" class="">
                    <i class="fa-solid fa-arrow-left"></i>
                    user
                </a>
            </span>
            <span class="switchto_divider">
                <div class="switchto_dividerword">SWITCH TO</div>
                <div class="switchto_dividericon"><i class="fa-solid fa-arrow-right-arrow-left"></i></div>
            </span>
            <span class="switchtoadmin">
                <a href="/project blog/posts#switch_admin" class="">
                    admin 
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </span>
        </div>
    </div>
    <!-- SWITCH USER VIEW_ADMIN FUNCTION (END) -->

    <!-- Header -->
    <nav class="navbar navbar-inverse topmenunav">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle navbartoggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand websitename" href="#">
            THE <span>TRADING GUIDE</span>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav topmenu">
              <li><a href="#">HOME</a></li>
              <li><a href="#">CRYTOCURRENCY</a></li>
              <li><a href="#">FOREX</a></li>
              <li><a href="#">SYNTHETIC INDICES</a></li>
              <li><a href="#">ABOUT</a></li>
            </ul>

            <div class="navbar-right container-fluid" style="margin-top: 10px">
                <div class="row">
                    <div class="col-12 container-fluid" style="padding-left: 0">
                        <div class="row" style="margin: 0">
                           <a href="#" class="col-lg-3 social">
                            <i class="fa fa-facebook-f"></i>
                           </a>
                           <a href="#" class="col-lg-3 social">
                            <i class="fa fa-twitter"></i>
                           </a>
                           <a href="#" class="col-lg-3 social">
                            <i class="fa fa-instagram"></i>
                           </a>
                           <a href="#" class="col-lg-3 social">
                            <i class="fa fa-telegram"></i>
                           </a>
                        </div>
                    </div>

                    <form class="col-12 navbar-form" action="/action_page.php" style="border-width: 0;border-radius: 0;border-bottom-style: solid;border-bottom-width: 1px;border-color: #272727;text-align: center;padding-left: 0;display: inline-flex;">
                      <button type="submit" class="btn btn-default" style="background-color: inherit;border: none;margin: 0;padding: 0;font-size: 20px;font-weight: lighter;">
                        <i class="fa fa-search"></i>
                      </button>
                      <div class="form-group" style="margin-left: 0;">
                        <input type="search" class="searchbar" placeholder="Search...">
                      </div>
                    </form>
                </div>
            </div>

        </div>
      </div>
    </nav>

    <!-- w3-content defines a container for fixed size centered content, 
    and is wrapped around the whole page content, except for the footer in this privacypolicy -->
    <div class="w3-content" style="max-width:1400px">
      <br>
      
      <!-- Grid -->
      <div class="w3-row">

        <!-- Blog entries -->
        <div class="w3-col l8 s12">
            
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
                        <h1 id="pagetitle"> 
                            CryptocurrencyCryptocurrencyCryptocurrencyCryptocurrencyCryptocurrencyCryptocurrency
                        </h1>

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
                    <div class="col-sm-12 col-md-6 col-lg-6 eachpost" >
                        <div style="position: relative;text-align: center;">
                            <img class="img img-responsive post_image" id="target_image_13" src="" style="width:100%">

                            <div class="uploadpostpic">
                                <label class="btn addpic" style="margin: 0 auto;display: flex;align-items: center;justify-content: center;" for="selectpostpic_13"> 
                                    <input class="uploadfromlib" id="selectpostpic_13" name="displaypic_1" type="file" style="display:none;" accept="image/jpeg, image/png, image/jpg">
                                    
                                    <div style="text-align: center;font-size: 30px;">
                                        <i class="fa fa-camera"></i>
                                    </div>
                                </label>
                            </div>

                            <div class="uploadeimg_loader fa-3x">
                                <i class="fas fa-spinner fa-pulse"></i>
                            </div>
                        </div>

                        <div class="w3-container w3-white eachpostcontent">
                            <div class="postcategory">
                                <div class="dropdown dropup">
                                    <button class="btn btn-secondary dropdown-toggle changepostcategory" type="button" id="changepostcategory_1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>select category</span>
                                        <!-- only show this when price hovers on button -->
                                        <i class="fa-solid fa-pencil changepostcategory_editicon"></i></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right changepostcategory_options"  aria-labelledby="changepostcategory_1">
                                        <a class="dropdown-item" href="#edit_category">Cryptocurrency</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#edit_category">synthetic indices</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#edit_category">forex</a>
                                    </div>
                                </div>
                            </div>

                            <div style="position: relative;" class="eachpostcontenttitle_container">
                                
                                <!-- click enter to save -->
                                <form class="form-group editpost_title" style="position: relative !important;opacity: 1;text-align: right;" action="">
                                    <textarea class="post_title form-control" name="post_title" placeholder="Post must have a title" style="height: 70px !important;margin: 10px 0 15px 0;"></textarea>
                                    <input type="hidden" name="post_id">

                                    <button type="submit" class="btn btn-primary" style="position: relative !important">Submit <i class="fa-solid fa-angles-right"></i></button>
                                </form>
                            </div>
                            <br>
                            <br>
                            <br>
                        </div>

                    </div>
                    <!-- end of post -->
                    
                    <!-- post -->
                    <div class="col-sm-12 col-md-6 col-lg-6 eachpost">
                        <div style="position: relative;text-align: center;">
                            <img class="img img-responsive post_image" id="target_image_16" src="imgs/post.jpg" style="width:100%">

                            <div class="uploadpostpic">
                                <label class="btn addpic" style="margin: 0 auto;display: flex;align-items: center;justify-content: center;" for="selectpostpic_16"> 
                                    <input class="uploadfromlib" id="selectpostpic_16" name="displaypic_1" type="file" style="display:none;" accept="image/jpeg, image/png, image/jpg">
                                    
                                    <div style="text-align: center;font-size: 30px;">
                                        <i class="fa fa-camera"></i>
                                    </div>
                                </label>
                            </div>

                            <div class="uploadeimg_loader fa-3x">
                                <i class="fas fa-spinner fa-pulse"></i>
                            </div>
                        </div>

                        <div class="w3-container w3-white eachpostcontent">
                            <div class="postcategory">
                                <div class="dropdown dropup">
                                    <button class="btn btn-secondary dropdown-toggle changepostcategory" type="button" id="changepostcategory_1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>synthetic indices</span>
                                        <!-- only show this when price hovers on button -->
                                        <i class="fa-solid fa-pencil changepostcategory_editicon"></i></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right changepostcategory_options"  aria-labelledby="changepostcategory_1">
                                        <a class="dropdown-item" href="#edit_category">Cryptocurrency</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#edit_category">synthetic indices</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#edit_category">forex</a>
                                    </div>
                                </div>
                            </div>

                            <div style="position: relative;" class="eachpostcontenttitle_container">
                                <h4 class="eachpostcontenttitle eachpostcontenttitle_admin">
                                    <b>I just want to guide you on your investment/trading journey. Let me be your guide.I just want to guide you on your investment/trading journey. Let me be your guide.I just want to guide you on your investment/trading journey. Let me be your guide.I just want to guide you on your investment/trading journey. Let me be your guide.I just want to guide you on your investment/trading journey. Let me be your guide.I just want to guide you on your investment/trading journey. Let me be your guide.</b>
                                </h4>
                                
                                <button class="btn btn-default edittitle edittitle_icon"><i class="fa-solid fa-pencil"></i></button>
                                <button class="btn btn-default closetitle close_edittitle_icon"><i class="fa-solid fa-times"></i></button>
                                
                                <!-- click enter to save -->
                                <form class="form-group editpost_title" action="">
                                    <textarea class="post_title form-control" name="post_title" placeholder="Post must have a title"></textarea>
                                    <input type="hidden" name="post_id">
                                </form>
                            </div>

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
                            <br>
                            <a href="project blog/admin-posts/posts" class="btn btn-secondary dropdown-toggle viewpost">
                                go to post
                                <!-- only show this when price hovers on button -->
                                <i class="fa-solid fa-arrow-right" style="margin-left: 3px;"></i></i>
                            </a>
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
                    <nav class="col-lg-12 col-sm-12 col-md-12" aria-label="..." style="text-align: center;">
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
            <!--  -->
        </div>
        <!-- END BLOG ENTRIES -->

        <!-- Introduction menu -->
        <div class="w3-col l4">

            <!-- About Card -->
            <div class="w3-card w3-margin w3-margin-top">
                <img src="imgs/dp_1.jpg" style="width:100%">
                <div class="w3-container w3-white myprofile">
                    <h4><b>SOLOMON FIDELIS</b></h4>
                    <h5 class="w3-opacity">
                        <span><a href="https://www.google.com/search?q=forex+trader&oq=forex+trader&aqs=chrome..69i57j0i512l4j0i457i512j69i60j69i65.2930j0j7&sourceid=chrome&ie=UTF-8" style="color: inherit;">forex trader</a> | crytocurrency investor | web developer</span>
                    </h5>
                    <h6>
                        I just want to guide you on your investment/trading journey. Let me be your guide.
                    </h6>
                </div>

                <div class="container-fluid mysocialscontainer">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 adminsocials facebook">
                            <i class="fa fa-facebook-f"></i>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 adminsocials twitter">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 adminsocials instagram">
                            <i class="fa fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </div><hr>

            <!-- Popular Posts -->
            <div class="w3-card w3-margin">
                <div class="w3-container w3-padding">
                    <h4>Popular Posts</h4>
                </div>
                <ul class="w3-ul w3-hoverable w3-white">
                    <li class="w3-padding-16">
                        <a href="something fishy" class="popularpostscontent">
                            <img src="imgs/4trans1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large">Title Heading</span><br>
                            <span>this is a short description of this post</span>
                        </a>
                    </li>
                    <li class="w3-padding-16">
                        <a href="something fishy" class="popularpostscontent">
                            <img src="imgs/4trans1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large">Title Heading</span><br>
                            <span>this is a short description of this post</span>
                        </a>
                    </li>
                    <li class="w3-padding-16">
                        <a href="something fishy" class="popularpostscontent">
                            <img src="imgs/4trans1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large">Title Heading</span><br>
                            <span>this is a short description of this post</span>
                        </a>
                    </li>
                    <li class="w3-padding-16">
                        <a href="something fishy" class="popularpostscontent">
                            <img src="imgs/4trans1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large">Title Heading</span><br>
                            <span>this is a short description of this post</span>
                        </a>
                    </li>
                </ul>
            </div>
            <hr> 

            <!-- Latest Posts -->
            <div class="w3-card w3-margin">
                <div class="w3-container w3-padding">
                    <h4>Latest Posts</h4>
                    <a href="">SEE ALL »</a>
                </div>
                
                <ul class="w3-ul w3-hoverable w3-white">
                    <li class="w3-padding-16">
                        <a href="" class="latestpostscontent">
                            <img src="imgs/4trans1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large">Title Heading</span><br>
                            <span>this is a short description of this post</span>
                        </a>
                    </li>
                    <li class="w3-padding-16">
                        <a href="" class="latestpostscontent">
                            <img src="imgs/4trans1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large">Title Heading</span><br>
                            <span>this is a short description of this post</span>
                        </a>
                    </li>
                    <li class="w3-padding-16">
                        <a href="" class="latestpostscontent">
                            <img src="imgs/4trans1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large">Title Heading</span><br>
                            <span>this is a short description of this post</span>
                        </a>
                    </li>
                    <li class="w3-padding-16">
                        <a href="" class="latestpostscontent">
                            <img src="imgs/4trans1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large">Title Heading</span><br>
                            <span>this is a short description of this post</span>
                        </a>
                    </li>
                </ul>
            </div>
            <hr> 

            <!-- Labels / tags -->
            <div class="w3-card w3-margin">
                <div class="w3-container w3-padding">
                    <h4>Tags</h4>
                </div>
                <div class="w3-container w3-white">
                    <p class="tagscontainer">
                        <!-- highlighted tags -->
                        <!-- <span class="w3-tag w3-black w3-margin-bottom"><a href="tags" class="tags">Travel</a></span>  -->
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="tags" class="tags">#cryptocurrency</a></span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="tags" class="tags">#forex</a></span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="tags" class="tags">#stock market</a></span>
                    </p>
                </div>
          </div>

        <!-- END Introduction Menu -->
        </div>

      <!-- END GRID -->
      </div><br>

    <!-- END w3-content -->
    </div>

    <!-- modal -->
    <div class="modal fade" id="privacypolicyModal" tabindex="-1" role="dialog" aria-labelledby="privacypolicyModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen" role="document">
        <div class="modal-content" style="border-radius: 0;">
          <div class="modal-header">
            <h5 class="modal-title" id="privacypolicyModalLabel">New message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Recipient:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Message:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Send message</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal -->

    <!--Footer-->
    <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top" style="background-color: #272727 !important;padding: 30px 100px 25px 100px !important">
        <div class="container-fluid">
            <div class="row">
                <!-- left -->
                <div class="col-sm-12 col-lg-4 container-fluid text-left">
                    <div class="row">
                        <!-- website logo (with mantra, below) -->
                        <div class="col-lg-12" style="height: 120px;padding-left: 0;text-align: left;">
                            <a href="#"><img src="imgs/bottom logo.png" class="img img-responsive" style="height: 120px;width: 120px;"></a>
                            <h5 style="color: #0F97E4">DISCOVER YOUR POTENTIAL.</h5>
                        </div>

                        <!-- social media handles -->
                        <div class="col-lg-12" style="padding-left: 0;margin-top: 40px;">
                            <h5>@thetradingguide</h5>
                            <div class="container-fluid" style="padding-left: 0;font-family: sans-serif;">
                                <div class="row" style="font-size: 22px">
                                   <a href="#" class="col-lg-12" style="display: inline-block;">
                                    <i class="fa fa-facebook-f" style="color: white;width: 24px"></i> <span style="color: white;text-transform: uppercase;font-size: 15px;margin-bottom: 10px">facebook</span>
                                   </a>
                                   <a href="#" class="col-lg-12" style="display: inline-block;">
                                    <i class="fa fa-twitter" style="color: white;width: 24px"></i> <span style="color: white;text-transform: uppercase;font-size: 15px;margin-bottom: 10px">twitter</span>
                                   </a>
                                   <a href="#" class="col-lg-12" style="display: inline-block;">
                                    <i class="fa fa-instagram" style="color: white;width: 24px"></i> <span style="color: white;text-transform: uppercase;font-size: 15px;margin-bottom: 10px">instagram</span>
                                   </a>
                                   <a href="#" class="col-lg-12" style="display: inline-block;">
                                    <i class="fa fa-telegram" style="color: white;width: 24px"></i> <span style="color: white;text-transform: uppercase;font-size: 15px;margin-bottom: 10px">telegram</span>
                                   </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- right -->
                <div class="col-sm-12 col-lg-8" style="text-align: left;border-width: 0px;border-top-width: 1px;border-top-style: solid;padding-top: 10px;margin-top: 20px;padding-left: 0">
                    <h4>If you found any of our posts helpful, <br><span style="color: #0F97E4;">Kindly SUBSCRIBE</span> to receive alerts about our Latest Posts</h4>

                    <form class="navbar-form" action="/action_page.php" style="display: inline-flex;margin-left: 0;padding-left: 0;width: 100%">
                        <div class="form-group" style="width: 100%">
                            <input type="search" class="form-control" placeholder="Search..." style="margin-right: 0 !important;border-radius: 0;width: inherit;">
                        </div>

                        <button type="submit" class="btn" style="color: white;background-color: #0F97E4;width: 120px;height: 100%;margin-left: 0 !important;border-radius: 0px 6px 6px 0px !important;">
                            SUBSCRIBE <i class="fa fa-paper-plane"></i>
                        </button>
                    </form>

                    <!-- privacy policy -->
                    <h5 style="color: gray;display: inline-flex;">
                        <input type="checkbox" name="" class="checkbox" checked>
                        <span style="padding-left: 5px;">
                            I would like to subscribe to (THE TRADING GUIDE) newsletters/posts and special email promotions. (THE TRADING GUIDE) will not sell your email. See <a href="#" style="color: #0F97E4">PRIVACY POLICY</a>.
                        </span>
                    </h5>

                    <h6 style="color: white;margin-top: 30px">
                        Editorial Note: <br>
                        1. Opinions expressed here are the author’s alone. You can and should do a thorough research by yourself, before concluding on using any of the opinions you will come across on this website
                        <br><br>
                        2. Understanding the importance of mastering your trading pyschology & risk management strategy, and how they work together, to help your grow as trader (or INVESTOR) is necessary to establish a viable trading business. <br>
                        Trading/Investing is hard work, and traders who have the discipline and patience to understand what's needed to win (in the long run) & follow their own rules can increase their odds of success in what may seem at first like a very chaotic arena.
                    </h6>

                    <!-- all rights reserved -->
                    <div style="margin-top: 20px">©
                        <?php 
                            $startyear = 2022; 
                            $curyear = date('Y'); 
                            // if current year = start year, show only "startyear" else show "startyear - current year"
                            echo $startyear . (($startyear != $curyear) ? '-' . $curyear : '');
                        ?>
                    THE TRADING GUIDE. ALL RIGHTS RESERVED.</div>
                </div>
            </div>
        </div>
        <!-- <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
        <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button> -->
    </footer>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/6030f7206a.js" crossorigin="anonymous"></script>

    <!-- my scripts -->
    <script src="js/admin/photo.js" crossorigin="anonymous"></script>

    <script src="js/admin/_admin.js" crossorigin="anonymous"></script>
  <!--  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/popper.min.js"></script> -->
   <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  </body>

</html>