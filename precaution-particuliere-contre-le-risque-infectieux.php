<?php
include './header.php';

$titre = 'Précaution particulière contre le risque infectieux';
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
                      Les précautions particulières sont complémentaires aux précautions standards. Elles sont mises en œuvre en ttonction du niveau de risque ou sur consignes des autorités d'emploi.
                    </p>
                    Ces précautions particulières peuvent imposer de :
                    <ul>
                      <li>porter des gants à usage unique non stériles dès l'entrée dans la pièce ou le véhicule dans lequel se situe la victime ; </li>
                      <li>se laver les mains avant de sortir de la pièce ou du véhicule dans lequel se situe la victime ;</li>
                    </ul>
                    <p>
                      Il convient alors de ne plus toucher l'environnement de la victime après avoir ôté les gants et s'être lavé les mains.
                    </p>
                    <ul>
                      <li>
                        de porter :
                        <ul>
                          <li>
                            pour les intervenants :
                            <ul>
                              <li>un masque de protection classé FFP2, avant d'entrer dans la pièce où se situe la victime ;</li>
                              <li>une surblouse et une protection des cheveux (charlote), en cas de contact avec la victime ou avec des surfaces ou matériels pouvant être contaminés ;</li>
                            </ul>
                          </li>
                          <li>
                            pour la victime:
                            <ul>
                              <li>un masque de type chirurgical ou un masque de protection respiratoire (sans soupape d'expiration)<sup>1</sup> ;</li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li>utiliser au maximum du matériel à usage unique.</li>
                      <li>limiter les déplacements de la victime ; </li>
                      <li>isoler la victime, dans une pièce particulière, lors de sa prise en charge ;</li>
                      <li>envelopper la victime dans un drap à usage unique ;</li>
                      <li>nettoyer et désintecter le véhicule et le matériel dès la ﬁn du transport ;</li>
                      <li>transporter individuellement chaque victime. </li>
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