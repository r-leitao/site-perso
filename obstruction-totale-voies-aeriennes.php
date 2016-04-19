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
                    <h4>La victime est consciente.</h4>
                    <ul>
                      <li>Laisser la victime dans la position où elle se trouve, généralement debout ou assise ;</li>
                      <li>donner des « claques dans le dos » ; </li>
                      <li>
                        réaliser des compressions en cas d'inefficacité des « claques dans le dos » :
                        <ul>
                          <li>au niveau abdominal s'il s'agit d'un adulte 
                          ou d'un enfant ; </li>
                          <li>au niveau thoracique s'il s'agit d'un 
                          nourrisson, d'un adulte obèse ou d'une 
                          temme enceinte dans les derniers mois de 
                          sa grossesse ;</li>
                        </ul>
                      </li>
                      <li>répéter le cycle "claques dans le dos" et "compressions" ;</li>
                      <li>
                        interrompre les manoeuvres dès :
                        <ul>
                          <li>l'apparition d'une toux, de cris ou de pleurs ;</li>
                          <li>la reprise de la respiration ;</li>
                          <li>le rejet du corps étranger.</li>
                        </ul>
                      </li>
                    </ul>

                    <p>Si les manoeuvres de désobstruction sont efficaces :</p>
                    <ul>
                      <li>l'installer dans la position où elle se sent le 
                      mieux ; </li>
                      <li>la réconforter en lui parlant régulièrement ; </li>
                      <li>desserrer les vêtements ;</li>
                      <li>compléter le bilan ; </li>
                      <li>adapter les gestes de secours en fonction des 
                      résultats du bilan (administrer de l'oxygène par 
                      inhalation, si nécessaire) ; </li>
                      <li>transmettre le bilan, pour avis médical <sup>1</sup>;</li> 
                      <li>surveiller la victime, en particulier sa 
                      respiration. </li>
                    </ul>
                    <p>Si les manoeuvres de désobstruction sont inefficaces ou absentes, la victime perd connaissance. </p>

                    <br><br>
                    <h4>La victime perd connaissance</h4>
                    <ul>
                      <li>l'accompagner au sol ; </li>
                      <li>adopter la conduite à tenir face à une victime en arrêt cardiaque.</li>
                    </ul>

                    <p>Toutefois, il convient de :</p>
                    <ul>
                      <li>débuter par les compressions thoraciques, quel 
                      que soit l'âge de la victime ; </li>
                      <li>vériﬁer la présence du corps étranger dans la 
                      bouche, à la ﬁn de chaque cycle de 
                      compressions thoraciques. Le retirer prudem-
                      ment s'il est accessible.</li>
                    </ul>

                    <br><br>
                    <p>1. Malgré une désobstruction efficace, un avis médical est requis. En eftet, de petits corps peuvent passer dans les voies aériennes et dans les poumons et provoquer des complications secondaires.</p>
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