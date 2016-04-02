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
              <h3><php echo $titre; ?></h3>
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
                    <h4>Déterminer la nature de l’intervention</h4>
                    <p>
                      Dès l’arrivée sur les lieux,  il  convient  d’analyser  la  scène et  de  rechercher  tous  les éléments  qui peuvent aider à déterminer   la  nature  de  l’interven7on   (accident, maladie,  intoxica7on)  et  les circonstances de  survenue.
                    </p>
                    <p>
                      S’il s’agit d’un accident, l’analyse du mécanisme (en recherchant les impacts, les  points de chocs...) informe sur la nature et la violence du choc. Elle facilite l’examen ultérieur de la victime ainsi que la recherche des lésions corporelles et apporte des renseignements essentiels à la prise en charge médicale de la victime.
                    </p>
                    <p>
                      L’ensemble des éléments recherchés est utile pour assurer, si nécessaire, la sécurité de l’intervention et la prise en charge de la ou des victimes.
                    </p>
                    <p>
                      Cette recherche est complétée en interrogeant la victime si elle est consciente, son entourage oules témoins.
                    </p>
                    <h4>Assurer la sécurité de l’intervention</h4>
                    <p>
                      L’analyse de la situa7on permet d’iden7fier des risques évidents (véhicules  accidentés, structure instable, situa7on violente) ou moins évidents (risque électrique, présence de substances toxiques) pour sécuriser la zone d’interven7on et assurer la sécurité de la ou des vic7mes comme des intervenants.
                   </p>
                    <h4>Déterminer le nombre et le type des victimes</h4>
                    <p>
                      Le nombre, l’âge apparent (nourrisson, enfant, adulte, personne âgée), la nature (malade, trauma7sé) et l’état approxima7f des vic7mes (vic7me qui marche, inerte, 
                      qui bouge, qui  ne bouge  pas) sont déterminés lors de l’évalua7on de la situa7on réalisée en arrivant sur l’interven7on.  Parfois, ce recueil  nécessite  une reconnaissance  approfondie  des  lieux  (vic7me  éjectée, plusieurs vic7mes dans  des lieux différents, etc).
                   </p>
                   <p>Le  bilan  d’urgence  vitale de la ou des  vic7mes  ne commence  qu’à  l’issue de  ceFe  évalua7on.
                    </p>
                    <p>
                      Dans  les  situa7ons  où il y  a  plus de vic7mes, apparemment graves,  que  de secouristes  présents sur  les lieux, il est  nécessaire d’appliquer  les  principes  de prise en  charge  de  nombreuses  vic7mes qui débute  par le  repérage  secouriste. 
                    </p>
                    <h4>Demander des moyens de secours complémentaires</h4>
                    <p>
                      Les secours  complémentaires  doivent  être demandés immédiatement,  pendant  le bilan  circonstanciel si les  moyens  engagés  sont insuffisants (plusieurs vic7mes, présence  d’un  danger  par7culier, etc).
                    </p>
                    <p>
                      Dans  les situa7ons impliquant  de  nombreuses  vic7mes,  la  demande  de moyens complémentaires  doit être effectuée même si le nombre exact  ou l’état des  vic7mes n’est pas encore  connu
                    </p>
                    <h4>Corriger les informations de départ</h4>
                    <p>
                      Le  bilan  circonstanciel permet de compléter  les  informa7ons de départ ou éventuellement de corriger des données  fausses  ou insuffisantes. En règle  générale,  celles-­‐ci se composent  à  minima de l’adresse  de l’événement et  de  la  nature  de  l’interven7on présumée.
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