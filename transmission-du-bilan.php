<?php
include './header.php';

$titre = 'Bilan complémentaire suite à un malaise ou l’aggravation d’une maladie';
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
                    <p>
                      La transmission du bilan s'eftectue à l'aide des moyens et selon les procédures en vigueur entre l'autorité employant les intervenants et l'autorité médicale à laquelle le bilan est transmis. Cete transmission doit être concise, complète, structurée, logique et présentée de façon chrono-logique.
                    </p>
                    <h4>La situation nécessite immédiatement des moyens en renfort</h4>
                    <p>
                      <ul>
                        <li>Transmettre le bilan circonstanciel ; <br>Ce bilan précise la nature de l'intervention et doit être particulièrement descriptif de la situation lorsque des moyens de secours particuliers sont demandés. </li>
                        <li>demander les moyens supplémentaires nécessaires ; </li>
                        <li>corriger éventuellement les informations de départ erronées.</li>
                      </ul>
                    </p>

                    <h4>La victime présente une urgence vitale, la médicalisation ne fait pas de doute</h4>
                    <p>
                      <ul>
                        <li>Transmettre sans délai une demande de moyen médical en renfort, mo7vée par la constatation d'une ou plusieurs détresses vitales.</li>
                      </ul>
                    </p>
                    En particulier préciser :
                    <p>
                      <ul>
                        <li>la nature de l'intervention ; </li>
                        <li>le motif de la demande du renfort médical ; </li>
                        <li>le sexe et l'âge de la victime ; </li>
                        <li>corriger éventuellement les informations de départ erronées. </li>
                      </ul>
                    </p>
                    Ultérieurement, dans les meilleurs délais, compléter par la transmission d'un bilan complet.
                    <h4>La victime ne présente pas de détresse évidente</h4>
                    <p>
                      Après la réalisation du bilan complémentaire, transmettre la totalité du bilan de façon concise et ordonnée. Pour cela, il convient d'indiquer :
                      <ul>
                        <li>le motif réel de l'intervention ; </li>
                        <li>le sexe et l'âge de la victime ; </li>
                        <li>la plainte principale ; </li>
                        <li>le résultat du bilan d'urgence vitale ; </li>
                        <li>le résultat du bilan complémentaire ; </li>
                        <li>les gestes de secours entrepris. </li>
                      </ul>
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