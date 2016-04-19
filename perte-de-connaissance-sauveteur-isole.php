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
                  <h4>Seul et en l'absence de matériel</h4>
                  <ul>
                    <li>Identifier la perte de connaissance ; </li> 
                    <li>appeler « à l'aide » aﬁn d'obtenir une aide de la 
                    part d'un témoin qui pourra demander un 
                    renfort ; </li> 
                    <li>assurer la liberté des voies aériennes1 ; </li> 
                    Si la victime est allongée sur le ventre, la 
                    retourner sur le dos2 ; </li> 
                    <li>rechercher la présence de la respiration ; </li> 
                    <li>placer la victime en position latérale de 
                    sécurité à un sauveteur ; </li> 
                    <li>alerter ou faire alerter les secours médicalisés ; </li> 
                    <li>compléter le bilan ; </li> 
                    <li>surveiller la victime ; </li> 
                    <li>protéger la victime contre le froid, la chaleur 
                    ou les intempéries.</li>
                  </ul>
                  <br><br>
                  <p>
                    1. La libération des voies aériennes par simple élévation du menton et sans bascule de la tête en arrière est préférable chez une victime suspectée d'un traumatisme de la nuque car la bascule de la tête en arrière entraîne une extension du cou préjudiciable.
                  </p>
                  <p>
                    2. Le retournement de la victime sur le dos permet de s'assurer avec certitude de la présence de la respiration et de la faciliter.
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