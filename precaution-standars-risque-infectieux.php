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
                    De façon générale, il convient de :
                    <ul>
                      <li>se laver quotidiennement le corps ;</li>
                      <li>avoir les ongles coupés courts ;</li>
                      <li>se laver et se désintecter régulièrement les mains dans la vie courante.</li>
                    </ul>
                    Au cours de l'intervention :
                    <ul>
                      <li>porter une tenue adaptée, conttortable et lavable ; <br>
                      Cete tenue doit être changée dès qu'elle est souillée. </li>
                      <li>se nettoyer régulièrement les mains et les désintecter ;</li>
                      <li>porter des gants à usage unique et les changer régulièrement ; </li>
                      <li>
                        porter un masque à usage unique :
                        <ul>
                          <li>lors de certains gestes de secours (brûlés) ;</li>
                          <li>associé à des lunetes ou à une visière de protection, s'il existe un risque de projections (aspirations, risques de vomis-sements, toux) ;</li>
                        </ul>
                      </li>
                      <li>
                        respecter les procédures :
                        <ul>
                          <li>de gestion des déchets d'activités de soins à risques intectieux et du matériel souillé par des liquides biologiques ;</li>
                          <li>en cas d'accident d'exposition à un risque viral ;</li>
                        </ul>
                      </li>
                      <li>recouvrir toute plaie par un pansement ;</li>
                      <li>utiliser, sur le brancard, des draps à usage unique ou lavés après chaque transport ;</li>
                      <li>utiliser, si possible, une couverture bactério-statique pour couvrir la victime ; <br> Cete couverture doit être nettoyée ou changée si elle a été souillée.</li>
                      <li>assurer l'entretien des surfaces et du matériel après chaque intervention.</li>
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