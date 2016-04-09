<?php
include './header.php';

$titre = 'Accident exposition risque viral';
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
                    <p>
                      Dès constatation d'un accident d'exposition à un risque viral :
                      <ul>
                        <li>interrompre l'action de secours en cours, si possible ;</li>
                        <li>se faire relayer.</li>
                      </ul>

                      S'il s'agit d'une plaie :
                      <ul>
                        <li>ne pas faire saigner ;</li>
                        <li>nettoyer immédiatement, à l'eau courant et au savon, puis rincer ;</li>
                        <li>
                          réaliser l'asepsie, en assurant un temps de contact d'au moins cinq minutes, à l'aide :
                          <ul>
                            <li>d'un dérivé chloré stable (soluté de Dakin) ;</li>
                            <li>d'un dérivé chloré ttraichement préparé (solution d'eau de Javel à 9° chlorométrique diluée au 1/5ème) ;</li>
                            <li>à défaut, d'un antiseptique à large spectre (produits iodés, par exemple).En revanche, il convient de ne pas utiliser les produits pour traitement hygiénique des mains par ttriction.</li>
                          </ul>
                        </li>
                      </ul>
                      En cas de projection sur les muqueuses, en particulier au niveau de la conjonctive :
                      <ul>
                        <li>
                          rincer abondamment, durant au moins cinq minutes avec :
                          <ul>
                            <li>de préférence avec un soluté isotonique (sérum physiologique) ;</li>
                            <li>à défaut de l'eau.</li>
                          </ul>
                        </li>
                      </ul>

                      Après la réalisation de ces soins immédiats rendre compte sans délai à son autorité d'emploi aﬁn de :
                      <ul>
                        <li>poursuivre la procédure de soins ;</li>
                        <li>réaliser les ttormalités administratives obliga-toires.</li>
                      </ul>
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