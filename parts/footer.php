<?php
    function footer() {
?>
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
<?php
    }
?>