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
                    <h4>La victime a perdu connaissance et ne respire pas ou de façon anormale</h4>
                    <p>
                      Appliquer la procédure relative à l'arrêt cardiaque.
                    </p>

                    <h4>La victime a perdu connaissance et respire</h4>
                    <p>
                      Appliquer la procédure relative à la perte de connaissance.
                    </p>

                    <h4>La victime est consciente</h4>
                    <p>
                      Si elle présente une obstruction totale des voies 
                      aériennes, appliquer la procédure adaptée. 
                    </p>
                    Dans le cas contraire : 
                    <ul>
                      <li>ne jamais allonger la victime ; </li>
                      <li>installer la victime dans une position 
                      conttortable pour lui permettre de mieux 
                      respirer, lui proposer la position demi-assise ou 
                      assise<sup>1</sup> ; </li>
                      <li>desserrer tous les vêtements qui peuvent 
                      gêner la respiration ; </li>
                      <li>administrer de l'oxygène en inhalation si 
                      nécessaire ; 
                      En l'absence de saturomètre, administrer de 
                      l'oxygène en inhalation et adapter cete 
                      administration après avis du médecin ; </li>
                      <li>compléter le bilan d'urgence vitale, si 
                      nécessaire ; </li>
                      <li>réaliser un bilan complémentaire à la 
                      recherche d'autres signes ou lésions et réaliser 
                      les gestes de secours nécessaires ; </li>
                      <li>demander un avis médical en transmeFant le 
                      bilan ; </li>
                      <li>surveiller la victime, particulièrement sa 
                      respiration. </li>
                    </ul>

                    <br>
                    <br>
                    <p>
                      1. La position assise ou demi-assise libère les mouvements du diaphragme et améliore la respiration.
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