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
                    <p>
                      Ne jamais contraindre les mouvements de la victime durant toute la crise.
                    </p>
                    <h4>Chez l'adulte ou l'enfant</h4>
                    <p>
                      Au début de la crise :
                      <ul>
                        <li>éviter que la victime ne se blesse ; </li>
                        <li>allonger la victime au sol, si elle n'est pas déjà dans cete position ; </li>
                        <li>écarter les personnes qui sont autour. </li>
                      </ul>
                    </p>
                    <p>
                      Pendant la crise :
                      <ul>
                        <li> glisser si possible un vêtement ou une couverture sous et autour de sa tête, sans recouvrir les voies aériennes, pour la protéger ; </li>
                        <li> écarter tout objet qui pourrait être traumatisant. </li>
                      </ul>
                    </p>
                    <p>
                      Au décours de la crise :
                      <ul>
                        <li>débuter la procédure face à une victime en arrêt cardiaque, si elle ne respire plus ; </li>
                        <li>
                          la placer en PLS, si elle est a perdu connaissance et respire puis : 
                          <ul>
                            <li>rechercher d'éventuels signes de traumatisme ; </li>
                            <li>noter l'heure de survenue et la durée de la crise.</li>
                          </ul>
                        </li>
                      </ul>
                    </p>
                    <p>
                      Lorsque la victime redevient consciente :
                      <ul>
                        <li>la garder au calme ; </li>
                        <li>poursuivre le bilan ; </li>
                        <li>la rassurer ;</li>
                        <li>la surveiller jusqu'à ce qu'elle retrouve un état normal de conscience ; </li>
                        <li>
                          transmettre sans délai un bilan si :
                          <ul>
                            <li>la convulsion généralisée dure plus de cinq minutes ou se répète ;</li>
                            <li>le retour rapide de la conscience n'a pas 
                            lieu ; </li>
                            <li>la victime est diabétique ou traumatisée ; </li>
                            <li>de signes pouvant faire évoquer un AVC 
                            sont présents ; </li>
                            <li>la victime est une temme enceinte en ﬁn de 
                            grossesse (dernier trimestre) ; </li>
                            <li>la victime présente une crise convulsive 
                            pour la première fois ; </li>
                            <li>une détresse vitale est présente ; </li>
                            <li>la victime est connue pour faire des crises 
                            convulsives mais que la crise qui est 
                            survenue est différente des crises 
                            habituelles ou si elles surviennent plus 
                            fréquemment. </li>
                          </ul>
                        </li>
                      </ul>
                    </p>
                    <p>Dans tous les autres cas : conseiller à la victime de prendre contact avec son médecin.</p>

                    <h4>Chez le nourrisson</h4>
                    <p>
                      La prise en charge est identique à celle de l'adulte mais il faut en plus :
                      <ul>
                        <li>prendre la température de l'enfant ; </li>
                        <li>découvrir l'enfant, placer des linges humides sur son front et sa nuque ; </li>
                        <li>aérer et ventiler la pièce ; </li>
                        <li>transmefre un bilan, systématiquement. </li>
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