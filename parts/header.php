<?php
  function siteheader (){
?>
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
              <li><a href="/project blog">HOME</a></li>
              <li><a href="/project blog/posts">CRYTOCURRENCY</a></li>
              <li><a href="/project blog/category">FOREX</a></li>
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
    <!-- header end -->
<?php
  }
?>