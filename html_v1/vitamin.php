
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>YOU C 1000</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/easy-responsive-tabs.css" rel="stylesheet">
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="vitamin-bg">

    <!-- Fixed top navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand" href="#">YOUC1000</a>-->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav-top">
            <li><a href="index.php"><img src="img/logo.png" /></a></li>
            <li><a href="product.php">Product</a></li>
            <li class="active"><a href="vitamin.php">Vitamin C and You</a></li>
            <li><a href="buy.php">Where You Buy</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> <!-- End of navbar fixed top -->

    <div class="container">
       <div class="middle-content-product">
          <div id="ChildVerticalTab_1">
                            <ul class="resp-tabs-list ver_1">
                                <li>What does YOUC100 do for you</li>
                                <li>Recommendation on intake</li>
                                <li>Safety</li>
                            </ul>
                            <div class="resp-tabs-container ver_1">
                                <div>
                                    <p> You. C1000 Vitamin Lemon, Vitamin Orange Vitamin Apple, Lemon Water And Orange Water help to:</p>
                                    <p> + Strengthen the immune system and increase Stamina </p>
                                    <p> + Prevent flu and promotes faster recovery </p>
                                    <p> + Contribute to radiant loon kin skin </p>
                                    <p> + Fight bad cholesterol </p>
                                    <p> + ower risk of  hearth attack </p>
                                    <p> + Lower effect of smoking and air pollution </p>
                                    <p> + Boost calcium absorption for stronger bones and teeth </p>
                                </div>
                                <div>
                                    <p>Lorem ipsum dolor sit amet, lerisque commodo. Nam porta cursus lectusconsectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales sce. Proin nunc erat, gravida a facilisis quis, ornare id lectus</p>
                                </div>
                                <div>
                                    <p>Suspendisse blandit velit Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravid urna gravid eget erat suscipit in malesuada odio venenatis.</p>
                                </div>
                            </div>
                        </div>
      </div>
    </div> <!-- /container -->


    <!-- Fixed bottom navbar -->
    <nav class="navbar navbar-default navbar-fixed-bottom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand" href="#">Project name</a>-->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav-btm">
            <li><a href="#">About</a></li>
            <li><a href="#about">FAQ</a></li>
            <li><a href="#contact">Media</a></li>
            <li><a href="#contact">Events</a></li>
            <li><a href="#contact">Careers</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> <!-- End of navbar fixed bottom


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/easyResponsiveTabs.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    

     <!--Plug-in Initialisation-->
  <script type="text/javascript">
      $(document).ready(function() {

          // Child Tab
          $('#ChildVerticalTab_1').easyResponsiveTabs({
              type: 'vertical',
              width: 'auto',
              fit: true,
              tabidentify: 'ver_1', // The tab groups identifier
              activetab_bg: '#fff', // background color for active tabs in this group
              inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
              active_border_color: '#c1c1c1', // border color for active tabs heads in this group
              active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
          });

          //Vertical Tab
          $('#parentVerticalTab').easyResponsiveTabs({
              type: 'vertical', //Types: default, vertical, accordion
              width: 'auto', //auto or any width like 600px
              fit: true, // 100% fit in a container
              closed: 'accordion', // Start closed if in accordion view
              tabidentify: 'hor_1', // The tab groups identifier
              activate: function(event) { // Callback function if tab is switched
                  var $tab = $(this);
                  var $info = $('#nested-tabInfo2');
                  var $name = $('span', $info);
                  $name.text($tab.text());
                  $info.show();
              }
          });
      });
  </script>

  </body>
</html>
