<?php
include './header.php';

$titre = 'Bilan complémentaire suite à un traumatisme';
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
                      Devant une personne victime d’un traumatisme, il 
                      convient : 
                      <ul>
                        <li>d’interroger la victime aﬁn de pouvoir :</li>
                        <li>rechercher le mécanisme de l’accident ;</li>
                        <li>analyser les plaintes exprimées ;</li>
                        <li>rechercher ses antécédents.</li>
                        <li>d’examiner la victime pour identifier des signes visibles de traumatisme.</li>
                      </ul>
                    </p>

                    <h4>Interrogatoire de la victime</h4>
                    <p>
                      La plainte principale a été identifiée au cours du bilan 
                      d’urgence vitale. Elle a été exprimée spontanément ou à 
                      la demande du secouriste, par la victime.
                      <ul>
                        <li>
                          Rechercher le mécanisme de l’accident. 
                          Les informations recueillies,lors de l’interrogatoire de la victime et des témoins, permetent de compléter celles relevées lors du bilan circonstanciel et facilitent l’examen ou la recherche d’une lésion et apportent des renseignements essentiels à la prise en charge médicale de la victime. Un choc, une décélération brutale, une chute, un faux mouvement, le contact avec un objet tranchant ou contondant, le contact avec un liquide chaud sont les principales causes des lésions traumatiques. La violence du choc générateur des lésions est appréciée et doit faire rechercher et suspecter des lésions sérieuses comme une ateinte de la colonne vertébrale ou des organes internes. En particulier :
                          <ul>
                            <li>lors d’une chute d’une hauteur supérieure à la taille de la victime ;</li>
                            <li>lors d’une explosion ;</li>
                            <li>lors d’une collision entre véhicules ;</li>
                            <li>lorsqu’une victime a été éjectée d’un véhicule ou renversé par celui-ci ;</li>
                            <li>en présence d’autre(s) blessé(s) grave(s) ou décédé(s) </li>
                            <li>chez une victime qui présente une détresse vitale</li>
                          </ul>
                          Le risque d’une ateinte traumatique grave, comme d’une ateinte de la colonne vertébrale, est majoré chez l’enfant de moins de trois ans ou l’adulte de plus de 65 ans ainsi que chez les personnes potentiellement sous l’emprise d’alcool ou de substances toxiques. Le mécanisme de l’accident permet de rechercher ou de suspecter des lésions. Ces informations doivent être retranscrites. Ainsi, suite à un accident de la circulation, il convient de préciser si le choc était frontal, latéral ou arrière, si la victime était porteuse d’une ceinture de sécurité ou d’un casque et si l’airbag s’est déclenché. Lors d’une chute, il faut préciser sa hauteur et sur quoi la victime est tombée.
                        </li>
                        <li>
                          Analyser les plaintes exprimées. <br>
                          Les plaintes et la douleur exprimées par la victime doivent faire l’objet d’une analyse. Elles donnent des informations essentielles qui doivent être communiquées lors de la transmission du bilan et lors de la prise en charge de la victime par une équipe médicale. Ainsi, l’impossibilité de bouger un ou plusieurs membres et la présence de sensations particulières comme des fourmillements ou des décharges électriques dans les membres, font suspecter une ateinte des nerfs ou de la moelle épinière.
                        </li>
                        <li>
                          Rechercher les antécédents et les traitements médicaux en cours.<br>
                          Demander à la victime ou à son entourage quels sont ses antécédents et si elle prend habituellement des médicaments (si possible, récupérer une ordonnance en cours de validité). La connaissance des antécédents peut aider le personnel médical à la prise en charge du blessé et éviter certaines mesures qui pourraient meFre en danger la victime. 
                        </li>
                      </ul>
                    </p>

                    <h4>Examen de la victime</h4>
                    <p>
                      L'examen de la victime permet de rechercher des signes de traumatismes. 
                      Une palpation de la victime « de la tête aux pieds » 
                      permet de relever les points douloureux, parfois non 
                      exprimés. 
                      Si le traumatisme a été violent ou si la victime 
                      traumatisée présente un trouble de la conscience, le 
                      maintien tête ainsi que la pose d'un collier cervical 
                      doivent être réalisés, si possible, avant de rechercher les 
                      lésions. <br>
                      A l'issue du bilan complémentaire :
                      <ul>
                        <li>réaliser les gestes de secours nécessaires (position d'atente, pansements, immobi-lisation…) dans l'atente d'un renfort ou d'une mise en condition de transport de la victime (immobilisation, relevage, installation sur un brancard…) ; </li>
                        <li>transmettre le bilan pour obtenir un avis médical ; </li>
                        <li>surveiller la victime. </li>
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