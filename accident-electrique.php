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
                      <li>S'assurer que la victime n'est pas en contact 
                      direct ou indirect (eau) avec un conducteur 
                      endommagé (ﬁl électrique, appareil ménager 
                      sous tension) ou un câble électrique de haute 
                      tension au sol ; </li>
                      Dans le cas contraire : 
                      <ul>
                        <li>ne pas s'approcher ou toucher la victime 
                        avant d'être certain que l'alimentation est 
                        coupée (pour le courant haute tension, 
                        avoir été aver7 par les autorités 
                        responsables) ; </li>
                        <li>faire écarter immédiatement les personnes 
                        présentes et leur interdire de toucher la 
                        victime ; </li>
                      </ul>
                      <li>couper le courant (débrancher l'appareil en 
                      cause) ou le faire couper par une personne 
                      qualiﬁée (EDF, SNCF...), si possible ;</li>
                      <li>
                        adapter les gestes de secours à l'état de la victime :
                        <ul>
                          <li>appliquer la conduite à tenir devant une 
                          victime en arrêt cardiaque, si elle ne respire 
                          pas ou plus ou si elle présente une 
                          respiration anormale (gasps). </li>

                          <li>appliquer la conduite à tenir devant une 
                          victime qui a perdu connaissance, même si 
                          elle respire difficilement ;</li> 
                          <li>appliquer la conduite à tenir adaptée, si elle 
                          présente une détresse de l'une des 
                          fonctions vitale ; </li>
                          <li>appliquer la conduite à tenir adaptée face à 
                          une brûlure thermique et électrique<sup>1</sup> ;</li>
                        </ul>
                      </li>
                      <li>compléter le bilan ; </li>
                      <li>demander un avis médical et appliquer les consignes reçues ;</li>
                    </ul>
                    <p>
                      Si la victime est une temme enceinte, le préciser lors de la transmission du bilan car il existe un risque pour le foetus.
                    </p>
                    <h4>Véhicule en contact accidentel avec une ligne électrique</h4>
                    <ul>
                        <li>Ne pas s'approcher du véhicule ; </li>
                        <li>ordonner aux occupants qui sont à l'intérieur 
                        du véhicule de rester dedans, tant que le 
                        service compétent n'a pas donné l'assurance 
                        que la ligne est hors tension<sup>2</sup>.</li>
                    </ul>

                    <br><br>
                    <p>
                      1. Lors d'une électrisation, l'arc électrique ou le flash provoque une brûlure thermique au niveau du point de contact avec la victime.
                      La traversée de l'organisme par le courant provoque en revanche des lésions internes. C'est pourquoi, il convient de prendre en
                      charge la victime simultanément selon le protocole lié à la brûlure thermique comme à celui de la brûlure électrique.
                    </p>
                    <p>
                      2. Les occupants d'un véhicule ne courent pas de risque tant qu'ils restent à l'intérieur de leur véhicule. En eftet, celui-ci est isolé de
                      la terre grâce à ses pneumatiques.
                    </p>
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