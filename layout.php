<?php
// if (session_status() == PHP_SESSION_NONE) {
//  session_start();
// }

  // include($_SERVER['DOCUMENT_ROOT'] . '/cocoruns/app/Funcs/Layout/_Layout.php');
    
    include($_SERVER['DOCUMENT_ROOT'] . '/project blog/app/functions/posts/layout.php');

    $layout = new Layout();
    $content = [];
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

    <style>
      body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    </style>
  </head>
  <body class="w3-light-grey">
    <!-- 
        FOCUS:
        THIS PLATFORM IS FOCUSED ON HELPING YOUR BECOME THE BEST TRADER/INVESTOR THAT YOU CAN BE. WE TALK ABOUT THE THINGS THAT MOST OTHER BLOGS/YOUTUBE PAGES/PLATFORMS DON'T LIKE TO TALK ABOUT. WE FOCUS ON TRADING PSYCHOLOGY (BIASES), RISK MANAGEMENT (POSITION SIZING), HOW THEY NEGATIVELY AFFECT YOUR PERFORMANCE & HOW YOU CAN IMPROVE BY FOCUS FIRST ON YOURSELF AND THEN YOUR SYSTEM.

        MANTRA:
        IF YOU KNOW YOURSELF & YOUR ENEMY, YOU NEED NOT FEAR THE OUTCOME OF ANY BATTLE
    -->
    
    <!-- header -->
    <?php
        siteheader();
    ?>

    <!-- main page content -->
    <div class="w3-content" style="max-width:1400px">
      <br>

      <!-- Grid -->
      <div class="w3-row">

        <!-- Blog entries -->
        <div class="w3-col l8 s12">
            <!-- main part (changing part) -->
                <?php
                    $layout->displaypage($page, $content);
                ?>
            <!-- end main part -->
        </div>
        <!-- END BLOG ENTRIES -->

        <!-- introduction menu -->
        <?php
            page_right();
        ?>
        <!-- introduction menu end -->

      </div><br>
    </div>
    <!-- END GRID -->

    <!-- footer -->
    <?php
        footer();
    ?>
    <!-- footer end -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <script src="https://kit.fontawesome.com/6030f7206a.js" crossorigin="anonymous"></script>

    <!-- <script src="js/modal.js"></script> -->
  </body>

</html>
