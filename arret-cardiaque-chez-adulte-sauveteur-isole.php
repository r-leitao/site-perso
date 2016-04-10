<?php
include './header.php';

$titre = 'Arrêt cardiaque chez l\'adulte';
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
                    <h4>En l'absence de tiers</h4>
                    <ul>
                      <li>alerter les secours<sup>1</sup>:</li>
                      <li>
                        en l'absence d'un DAE à proximité immédiate, 
                        pratiquer une RCP en répétant des cycles de 
                        trente compressions thoraciques suivies de 
                        deux insufflations ; <br>
                        En présence d'un corps étranger pénétrant 
                        dans le thorax et empêchant la RCP, le retirer 
                        au préalable. 
                      </li>
                      <li>
                        si un DAE est à proximité, le mettre en œuvre le plus tôt possible et suivre ses indications ;
                      </li>
                      <li>
                        poursuivre la réanimation entreprise jusqu'au relais par les services de secours ou à la reprise d'une respiration normale.
                      </li>
                    </ul>
                    Si la victime commence à se réveiller (bouge, ouvre les yeux et respire normalement) :
                    <ul>
                      <li>cesser les manœuvres de réanimation ; </li>
                      <li>adopter la conduite à tenir adaptée à une victime présentant une perte de connaissance.</li>
                    </ul>
                    Si les insufflations ne peuvent pas être eftectuées (répulsion du sauveteur, vomissements...) ou si elles semblent inefficaces, le sauveteur doit immédiatement reprendre les compressions thoraciques.

                    <h4>Un tiers est présent</h4>
                    <ul>
                      <li>faire alerter les secours et réclamer un DAE ; <li>
                      <li>
                        pratiquer une RCP en répétant des cycles de trente compressions thoraciques suivies de deux insufflations ; <br>
                        En présence d'un corps étranger pénétrant dans le thorax et empêchant la RCP, le retirer au préalable.
                        <li>
                        <li>
                          faire mettre en oeuvre ou mettre en oeuvre le DAE le plus tôt possible et suivre ses indications ; 
                        </li>
                        <li>
                          poursuivre la réanimation entreprise jusqu'au relais par les services de secours ou à la reprise d'une respiration normale.
                        </li>
                    </ul>
                    Si la victime commence à se réveiller (bouge, ouvre les yeux et respire normalement) :
                    <ul>
                      <li>cesser les manœuvres de réanimation ; </li>
                      <li>adopter la conduite à tenir adaptée à une victime présentant une perte de connaissance.</li>
                    </ul>
                    Si les insufflations ne peuvent pas être eftectuées (répulsion du sauveteur, vomissements...) ou si elles semblent inefficaces, le sauveteur doit immédiatement reprendre les compressions thoraciques.
                    <br><br>
                    1. A l'époque des téléphones portables, la transmission de l'alerte ne pose plus guère de problème. Dans le cas contraire, un sauveteur seul face à une personne en arrêt cardiaque est en grande difficulté. Il doit appeler très tôt pour donner un maximum de chance de survie à la victime. Il peut poursuivre la manoeuvre de réanimation en utilisant la ttonction main libre de son téléphone portable.
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