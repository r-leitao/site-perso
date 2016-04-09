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
                    Pour faire face à ce risque <sup>1</sup>, il convient de :
                    <ul>
                      <li>
                        éviter un départ de teu et limiter son extension, pour cela :
                        <ul>
                          <li>alerter immédiatement les sapeurs-pompiers ;</li>
                          <li>
                            faire évacuer toutes les personnes exposées. A cet eftet :
                            <ul>
                              <li>actionner l'alarme, si elle est présente ; En l'absence, donner l'alerte à la voix.</li>
                              <li>guider les occupants vers les issues de secours ;</li>
                              <li>faciliter l'évacuation des animaux, si possible ;</li>
                            </ul>
                          </li>
                          <li>termer chaque porte derrière soi au cours de son déplacement ;</li>
                          <li>ne jamais utiliser les ascenseurs ou monte-charges ;</li>
                        </ul>
                      </li>
                      <li>
                        se protéger lors de l'évacuation et d'un l'incendie. Pour cela :
                        <ul>
                          <li>utiliser ses vêtements pour se couvrir le visage et les mains ;</li>
                          <li>ne pas pénétrer dans un local en teu, en l'absence de matériel de protection adapté.</li>
                        </ul>
                      </li>
                    </ul>
                    <h4>En présence d'une victime dans un local enfumé et non ventilé</h4>
                    <ul>
                      <li>
                        Procéder à son dégagement en urgence :
                        <ul>
                          <li>si elle est visible ;</li>
                          <li>si la durée envisagée de la manoeuvre n'excède pas trente secondes <sup>2</sup></li>
                          <li>en retenant sa respiration, uniquement.</li>
                        </ul>
                        Dans le cas contraire en informer immédia-tement les sapeurs-pompiers.
                      </li>
                    </ul>

                    <h4>En cas de fuite de gaz, avérée ou suspectée, dans un local</h4>
                    <ul>
                      <li>Ne pas pénétrer dans le local ;</li>
                      <li>rester à distance;</li>
                      <li>empêcher l'accès;</li>
                      <li>ne pas provoquer d'é7ncelles (interrupteurs, sonnerie, lampe de poche).</li>
                    </ul>
                    <br>

                    En présence d'une victime dont les vêtements sont en feu :
                    <ul>
                      <li>immobiliser la victime qui panique ou qui s'agite ;</li>
                      <li>allonger la victime sur le sol ;</li>
                      <li>étoufter les ﬂammes en la roulant au sol avec une couverture, un manteau, ou un tapis<sup>3</sup> que l'on re7re dès que les ﬂammes sont éteintes. </li>
                    </ul>

                    <br>
                    <br>
                    1. Un incendie crée une atmosphère dangereuse du fait de la chaleur, du manque d'oxygène et de la présence de fumées toxiques. Il peut être générateur de brûlures et d'intoxications graves. <br> Pour être allumé et entretenu, un teu a besoin d'un combustible (essence, bois, tissus…), d'une source de chaleur (étincelle,flamme) et d'oxygène (air).
                    <br>
                    <br>
                    2. En l'absence d'équipement adéquat, le sauveteur est contraint de réaliser son sauvetage en apnée. Il est fort probable qu'il soit contraint de reprendre sa respiration dans la trentaine de secondes suivant. Il mettrait alors sa vie en péril s'il était encore dans les fumées.
                    <br>
                    <br>
                    3. En milieu protessionnel, il est possible d'utiliser un extincteur approprié (de couleur verte).
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