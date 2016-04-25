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
                    <ul>
                    <li>
                      Mettre au repos : 
                      <ul>
                        <li>en position assise ou demi-assise, en cas de 
                        gêne respiratoire<sup>1</sup> ; </li>
                        <li>en position allongée (sur un lit, un brancard 
                        ou à même le sol)<sup>2</sup>, le plus souvent ; </li>
                        <li>dans le position ou la victime se sent le 
                        mieux, en cas de refus d'adopter les 
                        positions pré-citées. </li>
                      </ul>
                    </li>
                    
                    <li>
                      aider la victime à : 
                      <ul>
                        <li>dégrater ses vêtements, en cas de gêne ; </li>
                        <li>prendre son médicament ou du sucre si c'est nécessaire ; </li>
                      </ul>
                    </li>
                    <li>rassurer la victime ; </li>
                    <li>protéger la victime contre le froid, la chaleur ou les intempéries ; <br>
                    Si nécessaire, l'installer à l'abri et la soustraire 
                    des autres nuisances : bruit, foule... </li>
                    <li>transmefre les informations recueillies pour 
                    avoir un avis médical et appliquer les consignes ; </li>
                    <li>surveiller la victime.</li>
                    </ul>
                    <p>
                      1. La position assise ou demi-assise facilite la respiration et soulage la victime.
                    </p>
                    <p>
                      2. La position allongée est importante car un malaise bénin cède spontanément une fois la victime dans cette position.
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