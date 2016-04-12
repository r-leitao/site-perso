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
                    <ul>
                      <li>Demander sans délai, en urgence absolue, un renttort médical ;</li>
                      <li>retirer délicatement tout corps étranger visible et facilement accessible dans la bouche ;</li>
                      <li>
                        réaliser immédiatement cinq insufflations, de 
                        préférence à l'aide d'un insufflateur manuel de 
                        taille adaptée ; <br>
                        Pendant la réalisation des insufflations initiales, 
                        rester atentif à tout mouvement, à tout efttort 
                        de toux ou à toute reprise d'une respiration 
                        normale qui pourraient survenir. 
                      </li>
                      <li>
                        débuter immédiatement une RCP en répétant 
                        des cycles de quinze compressions thoraciques 
                        suivies de deux insufflations ; <br>
                        En présence d'un corps étranger pénétrant 
                        dans le thorax et empêchant la RCP, le retirer 
                        au préalable.
                      </li>
                      <li>
                        mettre en oeuvre, le plus tôt possible, le DAE et 
                        suivre les indications de l'appareil. 
                        A deux secouristes, si l'un est occupé à 
                        demander les moyens de renttort, l'autre met 
                        immédiatement en oeuvre le DAE, si l'appareil 
                        est disponible. <br>
                        En l'absence de DAE, il poursuit la RCP jusqu'à 
                        ce que le second secouriste le rejoigne avec le 
                        DAE et le mette en oeuvre. 
                        Au-delà de deux secouristes, les trois actions 
                        sont réalisées simultanément. <br>
                        La mise en place des électrodes du DAE sur la 
                        victime doit se faire en limitant au minimum 
                        les interruptions des manoeuvres de RCP.
                      </li>
                      <li>
                        poursuivre la RCP jusqu'à ce que le DAE demande son interruption ;
                      </li>
                      <li>
                        reprendre la RCP :
                        <ul>
                          <li>
                            immédiatement après la délivrance d'un choc électrique par le DAE ;
                          </li>
                          <li>
                            lorsque le DAE le demande et si la victime est toujours en arrêt cardiaque ;
                          </li>
                        </ul>
                      </li>
                      <li>
                        administrer de l'oxygène par insufflation ; <br>
                        L'apport d'oxygène à la victime sous ventilation 
                        artificielle doit être réalisé dès que possible, 
                        sans retarder la mise en oeuvre des gestes de 
                        réanimation.
                      </li>
                      <li>
                        réaliser une aspiration des sécrétions, si nécessaire ; <br>
                        Lorsque l'aspiration de sécrétions est réalisée, 
                        elle ne doit pas retarder les manoeuvres de RCP 
                        ou de délivrance d'un choc électrique.
                      </li>
                      <li>
                        mettre en place une canule oro-pharyngée, si nécessaire ; <br>
                        Une canule oro-pharyngée est mise en place 
                        en cas de ventilation artificielle inefficace par 
                        difficulté de maintien des voies aériennes de la 
                        victime libres.
                      </li>
                      <li>
                        poursuivre la réanimation entreprise jusqu'à 
                        l'arrivée des renttorts médicalisés ou à la reprise 
                        d'une respiration normale.
                      </li>
                    </ul>
                    <p>
                      Pour assurer une RCP efficace, les secouristes doivent se 
                      relayer toutes les deux minutes. Ce changement sera 
                      eftectué lors de l'analyse du rythme cardiaque par le 
                      DAE, si celui-ci est en place. 
                    </p>
                    Si la victime commence à se réveiller (bouge, ouvre les yeux et respire normalement) :
                    <ul>
                      <li>cesser les manoeuvres de réanimation ;</li>
                      <li>
                        adopter la conduite à tenir adaptée à une victime présentant une perte de connaissance.
                      </li>
                    </ul>
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