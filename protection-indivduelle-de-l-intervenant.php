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
                  <h2><?php echo $titre; ?> Théorie</h2>
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
                    <h4>Equipement de protection individuelle</h4>
                    <p>
                      Simple, léger et efficace, l'équipement de protection individuelle doit participer et favoriser à la sécurité de l'intervenant. En fonction des missions, il comprend :
                      <ul>
                        <li>une paire de gants à usage unique, pour prévenir le risque de transmission par les mains, de germes dangereux ;</li>
                        <li>un masque de poche, pour permettre la réalisation d'une ventilation artificielle en cas d'absence de matériel adéquat ;</li>
                        <li>des bandes réﬂéchissantes sur les vêtements ou sur une chasuble, pour améliorer la visibilité du secouriste, notamment la nuit ; </li>
                        <li>des gants de manutention, pour se protéger du risque de plaies des mains lors de manipulation d'objets tranchants ; </li>
                        <li>un blouson adapté en cas de conditions climatiques difficiles, et éventuellement, un casque de protection si le secouriste intervient au cours d'accident de la circulation, de chantier ; </li>
                        <li>une lampe de poche ou ttrontale pour travailler en sécurité dans l'obscurité.</li>
                      </ul>
                    </p>

                    <h4>Protection contre la contamination</h4>
                    <p>
                      Aﬁn de comprendre comment les mesures de protection peuvent diminuer les risques de contamination, il est nécessaire de connaître les modes de pénétration d'un germe dans l'organisme pour l'envahir. C'est ce que l'on appelle le mécanisme de transmission. 
                      <br>
                      L'objectif des techniques de protection utilisables par les intervenants est d'interrompre ce mécanisme de transmission et de diminuer les risques que le secouriste a d'entrer en contact avec les germes dangereux.
                      <br>
                      Pour être efficace, il est indispensable que ces techniques soient utilisées, chaque fois qu'une victime est prise en charge. En eftet, il est impossible de dire si une personne, même apparemment saine, est porteuse ou non d'une maladie intectieuse.
                      <br>
                      Ces mesures de protection passent par l'application des précautions standards et par(culières pour luter contre les intections.
                    </p>

                    <h4>Protection contre les objets perforants</h4>
                    <p>
                      Il est ttréquent de rencontrer des objets perforants (tranchants ou piquants) sur une intervention : débris de verre, métal tranchant, aiguille non protégée...
                      <br>
                      Les gants à usage unique protègent l'intervenant d'une contamination par du sang mais nullement du risque de plaie par un objet perforant. Il doit déposer les objets tranchants ou piquants dans les boites de recueil des déchets d'ac7vité de soins.
                      <br>
                      Devant des débris de verre ou autres objets perforants, il doit mettre des gants épais de manutention et veiller à ne pas se blesser ou à ne pas blesser accidentellement un tiers.  
                    </p>

                    <h4>Protection lors des manœuvres de réanimation</h4>
                    <p>
                      Même si le risque de transmission par la salive est très faible, il faut éviter d'utiliser une méthode orale directe de ventilation artificielle (bouche-à-bouche, bouche-à-nez) si l'on dispose d'un moyen de ventilation (insuﬄateur manuel, masque de poche ou écran facial).
                    </p>

                    <h4>Vaccination</h4>
                    <p>
                      Même si l'on est contaminé par un agent intectieux, le développement de la maladie n'est pas obligatoire, notamment si l'organisme est immunisé ou résistant à cet agent. Un des moyens d'acquérir cete résistance est la vaccination. 
                      <br>
                      La vaccination consiste à injecter dans l'organisme tout ou partie de l'agent intectieux tué ou aFénué et permettre ainsi à son propre système immunitaire de développer une résistance spéciﬁque. Comme cete résistance peut s'aFénuer avec le temps, il est nécessaire, pour certains vaccins, de renouveler la vaccination à intervalle régulier, c'est le « rappel ».
                      <br>
                      Un certain nombre de vaccinations est recommandé pour le secouriste, en règle général par le service médical de l'autorité d'emploi de l'intervenant. Ce même service peut recommander ou eftectuer d'autres vaccinations qu'il juge nécessaire. 
                      <br>
                      Il n'existe pas de vaccination pour chaque germe existant, c'est pourquoi les méthodes de protection décrites ci-dessus sont indispensables.
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