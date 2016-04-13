<?php
include './header.php';

$titre = 'Bilan circonstanciel';
?>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><span>Recommandations PS</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Bienvenue,</span>
              <h2>John Doe</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <?php include './menuPompier.php'; ?>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3><?php echo $titre; ?></h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?php echo $titre; ?></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 bdy">
                    <h4>Saignement spontané ou consécutif à un choc minime</h4>
                    <ul>
                      <li>Placer la victime en position assise, tête penchée en avant, pour éviter qu'elle n'avale son sang ; </li>
                      <li>
                        demander à la victime de :
                        <ul>
                          <li>se moucher fortement<sup>1</sup> puis ;</li>
                          <li>se comprimer immédiatement les narines<sup>2</sup> avec le pouce et l'index durant dix minutes ;</li>
                          <li>respirer par la bouche, sans parler.</li>
                        </ul>
                      </li>
                    </ul>
                    <p>Si le saignement ne s'arrête pas au bout de dix minutes, demander un avis médical.</p>

                    <br>
                    <h4>Consécutif à une chute</h4>
                    <ul>
                      <li>Examiner la victime et réaliser les gestes qui s'imposent ; </li>
                      <li>transmefre le bilan pour obtenir un avis médical ; </li>
                      <li>surveiller la victime.</li>
                    </ul>

                    <br>
                    <br>
                    <p>
                      1. Le fait de se moucher avec vigueur est important dans l'efficacité du geste, afin de permettre l'évacuation des caillots de sang.
                    </p>
                    <p>
                      2. La compression du nez doit intervenir rapidement pour éviter qu'un caillot ne se reforme.
                    </p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">Created by raphael leitao</a>
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

      </div>
      <!-- /page content -->
    </div>

  </div>
<?php
include './footer.php';
?>