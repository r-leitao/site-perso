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
                      <li>Se protéger les mains par des gants à usage unique ;</li>
                      <li>
                        arrêter immédiatement l'hémorragie. Pour cela :
                        <ul>
                          <li>écarter les vêtements si nécessaires ;</li>
                          <li>réaliser une compression manuelle, quelle que soit la localisation de la plaie ;</li>
                          <li>mettre en place un pansement compressif, si la compression manuelle continue est efficace ;</li>
                          <li>compléter par un pansement compressif supplémentaire<sup>1</sup>, si le saignement persiste (suintement de sang au travers du pansement) ;</li>
                          <li>reprendre la compression manuelle par dessus les deux pansements compressifs, si le saignement persiste ;</li>
                        </ul>
                        Si la compression directe au niveau d'un 
                        membre est inefficace ou impossible (victime 
                        qui présente de nombreuses lésions, plusieurs 
                        victimes, accès à la plaie impossible) ou dans 
                        certaines situations (catastrophes, théâtres 
                        d'opérations militaires ou situations appa-
                        rentées, situation d'isolement) mettre en place 
                        un garrot. Dans ce cas, noter l'heure de mise 
                        en place du garrot pour la communiquer à 
                        l'équipe qui assurera le relais de la prise en 
                        charge de la victime.
                      </li>
                      <li>compléter le bilan d'urgence vitale ; Si la victime présente des signes de détresse circulatoire, appliquer la procédure adaptée.</li>
                      <li>transmettre le bilan d'urgence vitale, pour avis médical et appliquer les consignes reçues ;</li>
                      <li>réaliser un bilan complémentaire à la recherche d'autres signes ou lésions et pratiquer les gestes de secours nécessaires ;</li>
                      <li>protéger la victime contre le froid ou les intempéries ;</li>
                      <li>rassurer la victime ;</li>
                      <li>
                        surveiller la victime. En particulier :
                        <ul>
                          <li>vériﬁer l'arrêt de l'hémorragie sans relâcher la compression ;</li>
                          <li>rechercher des signes d'aggravation circulatoire.</li>
                        </ul>
                      </li>
                    </ul>

                    <h4>Cas particulier : fracture ouverte et corps étranger</h4>
                    <ul>
                      Si la victime présente une fracture ouverte, avec un morceau d'os visible ou si la plaie qui saigne contient un corps étranger visible : 
                      <ul>
                        <li>ne toucher ni au morceau d'os ni au corps 
                        étranger car leur présence peut limiter le 
                        saignement et leur mobilisation pourrait 
                        aggraver la lésion ; </li>
                        <li>Si le saignement reste important et massif, 
                        réaliser la pose d'un garrot. </li>
                      </ul>
                    </ul>

                    <br>
                    <br>
                    <p>1. L'ajout d'un pansement compressif supplémentaire permet d'augmenter la compression.</p>
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