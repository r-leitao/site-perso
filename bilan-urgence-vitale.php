<?php
include './header.php';

$titre = 'Bilan urgences vitales';
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
                    <p>
                      Le  bilan  d’urgence  vitale permet d’iden7fier  une  détresse  menaçant  à très  court terme  le  pronos7c  de  la  vic7me  et de réaliser sans délai  les  gestes de secours  appropriés, avant de  poursuivre  toute prise en  charge.  Il  se déroule  en trois  phases,  permeFant  successi-­‐vement  :
                    </p> 
                    <ul>
                      <li>d’identifier  une détresse  immédiatement vitale  ; </li>
                      <li>d’iden7fier une  perte  de connaissance ou la plainte principale;</li>
                      <li>de  rechercher les  signes moins  évidents d’une  détresse vitale.</li>
                    </ul>
                    <p>
                      Au  cours  de ce bilan  et dès  qu’une détresse 
                      neurologique, respiratoire  ou  circulatoire  est iden7fiée,  
                      il  faut réaliser les  gestes de secours  immédiatement  
                      nécessaires pour luFer  contre celle-­‐ci et demander sans 
                      délai un  avis  médical.  
  
                    </p>
                    <h4>Identifier une détresse immédiatement vitale</h4>
                    <p>
                      L’approche  de  la  vic7me  et  son observa7on  permeFent de  noter rapidement  : 
                    </p>

                    <ul>
                      <li>sa  posi7on (allongée,  inerte, assise, debout...)  ; </li>
                      <li>le  sexe de la vic7me et son  âge  approxima7f (personne âgée, adulte, enfant, nourrisson) ;</li>
                      <li>son apparence et  son environnement immédiat  ; Ces  éléments  permeFent   de  déterminer  s’il s’agit   d’une   personne  vic7me  d’un  malaise   ou de  l’aggrava7on  d’une maladie ou  si  elle  a été vic7me  d’un  trauma7sme. Si   un  trauma7sme  du  rachis  est   suspecté,  demander  à la  vic7me  de  ne  pas bouger  la  tête  et  en  réaliser  immédiatement le  main7en.</li>
                      <li>l’existence  d’une   détresse  vitale  évidente. Ce peut  être  : 
                        <ul>
                          <li>
                            une  obstruc7on  brutale   et  totale  des   voies  aériennes ; Il  convient, sans  délai,  de  meFre en  œuvre les manœuvres de  désobstruc7on des voies aériennes adaptées  à l’âge de  la  vic7me. <br>
                            Ce   n’est   qu’une  fois  la  désobstruc7on  obtenue  que   l’on  poursuit  le  bilan  d’urgence vitale. 
                          </li>
                          <li>
                            une hémorragie  externe ; Une  technique   d’arrêt   du  saignement,  u7lisant   des   moyens  adaptés,  doit  être réalisée  sans  délais. Après  avoir   obtenu  l’arrêt   de  l’hémorragie,  il   convient  de  reprendre   le  bilan   d’urgence  vitale.                        
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <h4>Identifier une perte de connaissance ou la plainte principale</h4>
                    <p>
                      Une  perte   de  connaissance  est   recherchée  au  cours   de l’examen   ini7al  de  la  vic7me  en  quelques  secondes quelle   que   soit  sa  posi7on.Elle  est   caractérisée  lorsque  la   vic7me  ne  répond  pas   et  n’obéit   pas   aux   ordres simples.Il   convient  alors   de  rechercher  la  présence  ou non d’une respira7on. Pour  cela  : 
                      <ul>
                        <li>
                          la  retourner sur le  dos,  si  elle  est allongée  sur le  ventre  ;   En   cas   de  suspicion   de  trauma7sme  du  rachis ou   dans  le  doute,  le  retournement  de  la vic7me   est   effectué,   dans  la  mesure  du possible, par deux  secouristes.  
                        </li>
                        <li>libérer les voies aériennes ; </li>
                        <li>
                          rechercher la  présence  de  la  respira7on. Si   la  respira7on  est   présente,   adopter   la procédure face  à une perte de  connaissance. Si   la  respira7on  est   absente   ou  anormale (gasps),   adopter   la  procédure   face  à   une  vic7me  en  arrêt cardiaque.
                        </li>
                      </ul>
                   </p>
                   <p>
                     L’iden7fica7on  de  la  plainte   principale,   s’effectue  en présence   d’une   vic7me  consciente,   qui   a   souvent  tendance  à l’exprimer  spontanément.   S’il  convient  de  la  prendre en  compte, car elle  oriente le  bilan complémentaire, il  ne  faut  pas que son analyse se  subs7tue   à   la  recherche   d’une   détresse  vitale  moins  évidente  qu’elle pourrait  masquer.  
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