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
                      <li>déséquiper la victime et la sortir le plus rapidement possible de l'eau ; </li>
                    </ul>
                    <p>
                      Si la victime présente une détresse vitale :
                    </p>
                    <ul>
                      <li>appliquer la conduite à tenir devant une 
                      victime en arrêt cardiaque, si la victime ne 
                      respire pas ou plus ou si elle présente une 
                      respiration anormale (gasps) ; </li>
                      <li>appliquer la conduite à tenir devant une 
                      victime qui a perdu connaissance, même si elle 
                      respire difficilement ; </li>
                      <li>appliquer la conduite à tenir adaptée, si elle 
                      présente une détresse neurologique, 
                      respiratoire ou circulatoire. </li>
                    </ul>
                    <p>
                      En l'absence de détresse vitale :
                    </p>
                    <ul>
                      <li>installer la victime en position adaptée ou 
                      demi-assise si elle préfère ; </li>
                      <li>administrer de l'oxygène en inhalation à l'aide 
                      d'un masque à haute concentration à un débit 
                      de 15 l.min-1, quelle que soit la saturation en 
                      oxygène ; </li>
                      <li>déshabiller et sécher la victime ; </li>
                      <li>envelopper la victime dans une couverture ; </li>
                      <li>faire boire de l'eau plate (0,5 à 1 l en une 
                      heure), sauf si la victime présente des 
                      vomissements ou refuse de boire ; </li>
                      <li>transmefre le bilan et appliquer les consignes reçues ; </li>
                      <li>surveiller la victime.</li>
                    </ul>
                    <p>
                      Dans tous les cas, avant de transmefre le bilan : 
                    </p>
                    <ul>
                      <li>rechercher auprès de la victime, ou de son entourage, les renseignements suivants : 
                      <ul>
                        <li>le lieu de la plongée ; </li>
                        <li>type de plongée (en apnée ou en 
                        scaphandre autonome) ; </li>
                        <li>le nombre de plongées dans les vingt-quatre 
                        heures précédant l'action de secours ; </li>
                        <li>la profondeur maximale de la plongée et sa 
                        durée ; </li>
                        <li>le nombre, la profondeur et la durée des 
                        paliers ; </li>
                        <li>l'heure de sortie de l'eau ; </li>
                        <li>la table de plongée utilisée ; </li>
                        <li>la survenue d'incidents à la remontée ; </li>
                        <li>la vitesse de remontée : normale (10 à 15 
                        m.min-1) rapide (>17 m.min-1) ou en 
                        panique ; </li>
                        <li>l'heure de survenue des signes observés.</li>
                      </ul>
                      </li>
                    </ul>
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