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
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <h4>Sécurité sur intervention </h4>
                    <p>
                      Lors du bilan circonstanciel, il convient de reconnaitre les dangers. Pour cela :
                      <ul>
                        <li>eftectuer une approche prudente de la zone de l'accident ; </li>
                        <li>se renseigner, éventuellement auprès des témoins ; </li>
                        <li>
                          regarder autour de la victime, en restant à distance d'elle pour :
                          <ul>
                            <li>évaluer la présence de dangers qui peuvent menacer la victime comme les intervenants ;</li>
                            <li>repérer les personnes qui pourraient être exposées aux dangers identifiés et le nombre de victimes.</li>
                          </ul>
                        </li>
                      </ul>
                    </p>
                    <p>
                      En fonction de cete première analyse de la situation, les intervenants doivent :
                      <ul>
                        <li>supprimer immédiatement et de façon perma-nente, si possible, les dangers environnants pour se protéger et protéger la victime et les autres personnes, notamment du suraccident ;<br>En cas d'impossibilité, réaliser un dégagement d'urgence.</li>
                        <li>délimiter clairement, largement et visiblement la zone de danger et empêcher toute intrusion dans cete zone. </li>
                      </ul>
                    </p>
                    <p>
                      Pour réaliser la protection, ils utilisent tous les moyens matériels dont ils peuvent disposer et s'assurent si besoin du concours de toute autre personne qui pourrait apporter une aide dans la mise en œuvre de cete protection. 
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