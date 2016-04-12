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
                    <h4>La victime a perdu connaissance et ne respire pas ou de façon anormale</h4>
                    <p>
                      Appliquer la procédure relative à l'arrêt cardiaque.
                    </p>

                    <h4>La victime a perdu connaissance et respire</h4>
                    <p>
                      Appliquer la procédure relative à la perte de connaissance.
                    </p>

                    <h4>La victime est consciente</h4>
                    <p>
                      Si elle présente une hémorragie externe, appliquer la conduite à tenir adaptée. Dans le cas contraire, ou après avoir arrêté l'hémorragie :
                    </p>
                    <ul>
                      <li>allonger la victime en position horizontale<sup>1</sup> ; </li>
                      <li>administrer de l'oxygène en inhalation si 
                      nécessaire ; <br>
                      En l'absence de saturomètre, administrer de 
                      l'oxygène en inhalation et adapter cete 
                      administration après avis du médecin ; 
                      <li>couvrir la victime pour limiter son rettroidissement ; </li>
                      <li>compléter le bilan d'urgence vitale, si  nécessaire ; </li>
                      <li>réaliser un bilan complémentaire à la 
                      recherche d'autres signes ou lésions et réaliser 
                      les gestes de secours nécessaires ; 
                      <li>demander un avis médical en transmeFant le bilan ; 
                      <li>surveiller la victime, particulièrement la 
                      présence du pouls, la ttréquence cardiaque et 
                      son état de conscience. </li>
                    </ul>
                    <p>
                      Le risque d'aggravation brutale avec arrêt cardiaque est 
                      majeur, notamment lors de toute mobilisation de la 
                      victime (relevage, brancardage). 
                    </p>
                    <br>
                    <br>
                    <p>
                      1. Le fait de placer en position horizontale une personne victime d'une hémorragie facilite la circulation sanguine, notamment au niveau du cerveau. La réalisation des gestes de secours est aussi facilitée et les conséquences de l'hémorragie sur les ttonctions vitales sont retardées.
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