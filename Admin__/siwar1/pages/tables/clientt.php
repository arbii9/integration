<?php include 'config.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Simple Tables</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="style_.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <a href="../../index2.html" class="logo"><b>Admin</b>LTE</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>

                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!--   <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/> -->
                  <span class="hidden-xs">Siwar Hassen</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <!-- <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" /> -->
                    <p>
                      Siwar Hassen - Web Developer
                      <small>Member since Nov. 2019</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
           <!--    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" /> -->
            </div>
            <div class="pull-left info">
              <p>Siwar Hassen</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- ********************************************************************************************************************************************************* -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview"> <!-- class="active treeview"  -->
              <a href="#">
                <i class="fa fa-shopping-cart"></i> <span>Produit</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../../arbi1/pages/tables/produits.html"><i class="fa fa-circle-o"></i> Produits</a></li>
                <li><a href="../../../arbi1/pages/tables/produitsensolde.html"><i class="fa fa-circle-o"></i> Produits en soolde</a></li>
              </ul>
            </li>
            <li class="active treeview">
              <a href="">
                <i class="fa fa-user"></i>
                <span>Client</span>
                <span class="label label-primary pull-right"></span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Table</a></li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-file-text"></i> <span>Employe</span> <small class="label pull-right bg-green"></small><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../../PHP/View/ReadEmployeAdmin.php"><i class="fa fa-circle-o"></i> Table Employe</a></li>
                <li><a href="../../../PHP/View/ReadTypeAdmin.php"><i class="fa fa-circle-o"></i> Table Type</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-paste"></i>
                <span>Commande</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               <!-- <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li> -->
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-truck"></i>
                <span>Livraison</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               <li><a href="../../../hediane1/pages/forms/advanced.php"><i class="fa fa-circle-o"></i> Livraisons</a></li>
                <li><a href="../../../hediane1/pages/forms/editors.php"><i class="fa fa-circle-o"></i> Livreurs</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-comments"></i> <span>SAV</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../../sabrine1/Views/tablecommande.php"><i class="fa fa-circle-o"></i> Table et Statistique</a></li>
              </ul>
            </li>
            <li>
              <a href="pages/calendar.html">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
                <small class="label pull-right bg-red"></small>
              </a>
            </li>
          </ul>
          <!-- *********************************************************************************************************************************************************** -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <h1 style="margin-left: 590px">gestion des clients</h1>
        <section class="content-header">
    
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Simple</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-6">
              <div class="box">
               <!--  <div class="box-header"> -->
                <!--   <h3 class="box-title">chercher selon la categorie </h3>
                </div> /.box-header -->
             <!--    <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">categorie</th>
                      <th>nom</th>
                      <th>prenom</th>
                      <th style="width: 100px">email</th>
                      <th>cin</th>
                      <th>telephone</th>
                    
                    </tr> --> 
                   
                    
                   
            <!--        
                  </table> -->
              <!--   </div> --> <!-- /.box-body
               <div class="box-footer clearfix">
               
                </div> -->
              <!-- </div> --><!-- /.box -->
                 <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                       <h1>les comptes clients</h1>
          
                  <div class="box-tools">
                    <div class="input-group" >
                      <form method="post" action="" ">
                      <input type="text" name="toto" class="form-control input-sm pull-right" style="width: 150px; margin-left: 10px;margin-top: 90px;font-size: 20px ;height: 40px" placeholder="Search"/>
                      <div class="input-group-btn">
                        <input type="submit" name="affiche" class="btn btn-sm btn-default" value="Afficher" style="margin-top: -40px; background-color:transparent; cursor:pointer; width:150px;font-size: 20px" ><i class="fa fa-search"></i></input>
                      
                        <input type="submit" class="btn btn-sm btn-default"name="tri" value="tri nom" style="margin-top: -40px; background-color:transparent; cursor:pointer;width:150px;font-size: 20px ">
                          <input type="submit" class="btn btn-sm btn-default"name="titi" value="recherche" style="margin-top: -40px; background-color:transparent; cursor:pointer;width:130px;font-size: 20px ">
                        </form>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                  <table class="table table-hover" border="1">
                        <?PHP
include "clientC.php";
$c=new clientC();
$listeClient=$c->afficherclients();


?>
                <div class="box-body no-padding">
          
<table class="responstable" style="margin-top: 60px">
  
  <tr>
    
    <th><span>nom</span></th>
    <th>prenom</th>
    <th>email</th>
    <th>cin</th>
     <th>ville</th>
      <th>adresse</th>
       <th>telephone</th>
  </tr>
  
 
<tr>
  
 <?php
if(isset($_POST['titi'])){

$lq=$_POST['toto'];

$co= new clientC(); 
  $choisir=$co->recherche_client($lq);
foreach($choisir as $row){
  
    ?>

    <tr>
<td><?PHP echo $row['nom']; ?></td>
<td><?PHP echo $row['prenom']; ?></td>
    <td><?PHP echo $row['email']; ?></td>
    <td><?PHP echo $row['cin']; ?></td>
  <td><?PHP echo $row['ville']; ?></td>
  <td><?PHP echo $row['adresse']; ?></td>
  <td><?PHP echo $row['telephone']; ?></td>
   
    
   
    </tr>

    <?PHP
    }
    }
    
    ?>



 <?php
if(isset($_POST['tri'])){



$tr= new clientC(); 
  $tri=$tr->trieparnom();
foreach($tri as $row){
  
    ?>
  
    <tr>
<td><?PHP echo $row['nom']; ?></td>
<td><?PHP echo $row['prenom']; ?></td>
    <td><?PHP echo $row['email']; ?></td>
    <td><?PHP echo $row['cin']; ?></td>
  <td><?PHP echo $row['ville']; ?></td>
  <td><?PHP echo $row['adresse']; ?></td>
  <td><?PHP echo $row['telephone']; ?></td>
   
    
   
    </tr>

    <?PHP
    }
    }
    
    ?>

                  <?PHP
                  if(isset($_POST['affiche'])){
foreach($listeClient as $row){
  ?>
 
  <tr>
  <td ><?PHP echo $row['nom'];?></td>

  <td><?PHP echo $row['prenom']; ?></td>
  <td><?PHP echo $row['email']; ?></td>
    <td><?PHP echo $row['cin']; ?></td>
  <td><?PHP echo $row['ville']; ?></td>
  <td><?PHP echo $row['adresse']; ?></td>
  <td><?PHP echo $row['telephone']; ?></td>

  </tr>


  <?PHP
}
}
?>


  
</table>











               





                </div><!-- /.box-body -->
              </div><!-- /.box -->

              
                </div><!-- /.box-header -->
                <div class="box-title"style="width: 500px">
                  <table class="table" style="width: 500px" class="box-title">
                 
                    
                
                   
                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <div class="box">
                <div class="box-header">
                
                </div><!-- /.box-header -->
         
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h1>la categorie  des clients </h1><br>
                  <div class="box-tools">
                    <div class="input-group">
                      <form action="clientt.php" method="post">
                      
                      <div class="input-group-btn">
                        <i class="fa fa-search"></i></input>
                      </form>

                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                   
                    <form method="post" action=""> <br> <input style="margin-left: 450px;font-size: 20px"  type="text" name="se" >
                      <input type="submit" name="resultat" value="recherche" style=" background-color:transparent; cursor:pointer; width:150px;font-size: 20px">   <input type="submit" name="afr" value="Afficher" style=" background-color:transparent; cursor:pointer; width:150px;font-size: 20px"> <br><br> <br><br></form>

                  <a href="jpgraph-4.2.6/graphe1.php" style="font-size: 20px">cliquer ici pour voir les statistiques</a> <p style="color:white">bleu:client normal</p>



  <?PHP
include "categorieC.php";
 $catego= new categorieC(); 
 $listeClient=$catego->nombretotal();

$cat=new categorieC();

?>
             
<p style="margin-left: 1100px; margin-top: -120px; font-weight:bold ;color:#0000FF; ">client normal: <?php print_r($cat->nombrecategoriecnor()) ?></p>
<p style="margin-left: 1100px ; font-weight:bold ;color:#0000FF;">hotel : <?php print_r($cat->nombrecategoriehotel()) ?> </p>
<p style="margin-left: 1100px ; font-weight:bold ;color:#0000FF;">societe : <?php print_r($cat->nombrecategorie())?></p>


<table class="responstable" style="margin-top: 50px">
  
  <tr>
    
    <th><span>type</span></th>
    <th>cin</th>
   
    <?php
if(isset($_POST['resultat'])){

$l=$_POST['se'];

$cccc= new categorieC(); 
  $li=$cccc->recherche_categorie($l);
foreach($li as $row){
  
    ?>
    <tr>

    <td><?PHP echo $row['type']; ?></td>
    <td><?PHP echo $row['cin']; ?></td>
   
    
   
    </tr>
    <?PHP
    }
    }
    
    ?>

     <?php
if(isset($_POST['afr'])){



$ccco= new categorieC(); 
  $lo=$ccco->affichercategories();
foreach($lo as $row){
  
    ?>
    <tr>

    <td><?PHP echo $row['type']; ?></td>
    <td><?PHP echo $row['cin']; ?></td>
   
    
   
    </tr>
    <?PHP
    }
    }
    
    ?>
   
  
</table>











<?php
 $c= new categorieC(); 
 $l=$c->nombrecategorie();
print_r($l);
?>

   
     
     </div>
                  
                
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>