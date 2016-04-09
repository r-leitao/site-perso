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
                      Devant   une   personne  qui   présente  un  malaise   ou  des  signes  d’aggravation  d’une maladie,    il  convient  :
                    </p>
                    <ul>
                      <li>d’interroger  la  victime  afin  de  pouvoir :
                        <ul>
                          <li>analyser  les plaintes exprimées ; </li>
                          <li>rechercher  ses antécédents.  </li>
                        </ul>
                      </li>
                      <li>d’examiner   la  victime  pour  identifier   des   signes visibles  de  malaise ou  de  maladie.  </li>
                    </ul>
                    <h4>Interrogatoire de la victime</h4>
                    <p>
                      La   plainte   principale  a   été   identifiée   au  cours   du  bilan  d’urgence vitale. Elle  a été exprimée  spontanément  par la  victime, ou  à la  demande des secours.
                    <p>
                    <ul>
                      <li>
                        Faire  confirmer   les   plaintes  exprimées   par   la victime. <br> L’expression  de  ceFe  plainte   est   le  plus couramment  :
                        <ul>
                          <li>une  sensation  pénible   avec  angoisse,  souvent  exprimée  par   les   mots  suivants  :  «  je  ne  me  sens  pas   bien,   je  me  sens  très mal,  je  vais  mourir... » ; </li>
                          <li>  une  douleur,  fréquemment   rencontrée  lors d’un  malaise ou  d’une maladie ; </li>
                          <li>  des  troubles  digestifs  comme   des   nausées, des vomissements, une diarrhée  ;</li>
                          <li>  des  troubles  de  la  vue   voire   une   perte   de  la vision  uni ou  bilatérale  ;</li>
                          <li>  un   trouble   de  l’audition   ou  de  l’équilibre (vertiges)  qui   peuvent   avoir   causé   la  chute de   la  victime  et  parfois   créé  des   lésions traumatiques ; </li>
                          <li>  une  faiblesse   extrême,  la  victime  est abaFue, ne  se  déplace pas ; </li>
                          <li>  des  troubles  de  la  motricité   et  de  la sensibilité,   la  victime déclarant   qu’elle   ne peut   réaliser  certains  gestes,   qu’elle ne peut plus  bouger  ou  qu’elle   ne  sent  plus son bras  ou  sa  jambe.</li>
                        </ul>
                        <p>
                          Il   convient  de  prendre   le  temps   d’écouter   la victime   et  ne  pas   chercher  à   interpréter   ce qu’elle dit.  Si  elle  a des difficultés à s’exprimer  (problème  de  langage,  gêne  respiratoire),  le secouriste  peut  demander  à l’entourage ce  qu’il s’est  passé.  Toutefois,  il  est   préférable  de demander   à   la  victime  de  s’exprimer directement.  S’il   s’agit  d’un  sujet   aFeint  d’une   maladie  connue,  il  faut  faire   préciser  à   la  victime  ou  à  son  entourage   quels   sont  les   signes  nouveaux qui  pourraient  traduire  une   aggravation  de  la maladie.  Le  secouriste  doit  noter les plaintes  exprimées par  la  victime  pour  ne  pas   les   oublier   et  pour faciliter  la  transmission.   Il  est   important   que  ces notes reprennent  les mots  de  la  victime  et  de  mentionner si  c’est une autre personne  qui a fourni  les informations.
                        </p>
                      </li>
                      <li>
                        Analyser  les plaintes  exprimées <br>
                        <p>
                          Chaque plainte exprimée, comme la douleur, est analysée  en  faisant préciser  à la  victime  ou  à son entourage : 
                        </p>
                        <ul>
                          <li>les circonstances de  survenue  ou  le  facteur déclenchant ;</li>
                          <li>les caractéristiques du  trouble ressenti ; </li>
                          <li>Sa localisation </li>
                          <li>l’intensité du  trouble et  son évolution  ; </li>
                          <li>la durée </li>
                          <p>
                            L’analyse  de  ces   plaintes  donne   des   informa-­‐tions   essentielles   qui   permet  d’identifier   des  malaises   ou  des   maladies  potentiellement graves.  Elles   doivent   être  communiquées  à   un médecin lors  de  la  transmission  du  bilan ou  lors  de   la  prise   en  charge  de  la  victime  par   une  équipe  médicale. 
                          </p>
                          <li>
                            Rechercher  les  antécédents  et  les  traitements    médicaux    en    cours   Demander  à  la  victime  ou  à  son  entourage    quels  sont  ses  antécédents  et  si  elle  prend    habituellement  des  médicaments  (si  possible,    récupérer  une  ordonnance  en  cours  de   validité),  si  elle  présente  une  allergie  connue   ou    à   fait    l’objet   d’une   hospitalisation.   
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <h4>Examen la victime</h4>
                    <p>
                      L’examen  de  la  victime  se  fait  après la  phase d'interrogatoire  de  celle-­‐ci. Il  permet  de  rechercher  les signes  visibles. 
                    </p>
                    <p>
                      Pour  cela, il  convient  de  regarder  en  premier les parties  du  corps pour  lesquelles  la  victime  se  plaint  de  douleur ou  de  sensations particulières  et  de  retranscrire  toutes  les anomalies constatées. 
                    </p>
                    <p>
                      <br>
                      <br>
                      Certaines de  ces manifestations traduisent  une aFeinte du  cerveau et  doivent être  recherchées systéma-­‐tiquement  car elles ne  s’accompagnent  pas de  douleur ni  de  sensations particulières. On  recherche en  particulier  une asymétrie de  l’expression  faciale,  une anomalie  de  la  mobilité  des membres supérieurs  ou  une anomalie  de  la  parole.
                    </p>
                    <p>
                      Si  le  secouriste  a constaté  lors  du  bilan d’urgence vitale  une  anomalie  de  la  température   de  la  victime  (victime  anormalement  chaude  ou  froide),  il  peut  à ce  moment-­‐là,  mesurer la  température de  la  victime  s’il  est équipé  d’un  thermomètre adapté. 
                    </p>
                    <p>
                      A l’issue du  bilan complémentaire  : 
                      <ul>
                        <li>
                          réaliser  les gestes  de  secours nécessaires   (position  d’aFente, pansement,  immobi-­‐lisation...)  dans  l’aFente  d’un  renfort ou  d’une   mise  en  condition  de  transport de  la  victime    (immobilisation, relevage, installation sur un    brancard...)    ;  
                        </li>
                        <li>
                          transmeFre   le  bilan   pour  obtenir   un  avis médical ; 
                        </li> 
                        <li>surveiller la victime.</li>
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