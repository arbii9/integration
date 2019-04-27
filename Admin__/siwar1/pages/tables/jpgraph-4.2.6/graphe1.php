<?php // content="text/plain; charset=utf-8"
include 'src/jpgraph.php';
include 'src/jpgraph_pie.php';
include 'src/jpgraph_pie3d.php';
include '../config.php';
include 'categorieC.php';


    $c= new categorieC(); 

 $total=$c->nombretotal();

 $hotel=$c->nombrecategoriehotel();
  $client=$c->nombrecategoriecnor();
   $societe=$c->nombrecategorie();

$mp=round(($societe*100)/$total);
$mk=round(($client*100)/$total);
$ml=round(($hotel*100)/$total);


// Some data
$data = array($mp,$mk,$ml);

// Create the Pie Graph. 
$graph = new PieGraph(600,500);

$theme_class= new VividTheme;
$graph->SetTheme($theme_class);

// Set A title for the plot
$graph->title->Set("statistique des clients");
$txt = new Text('jaune:societe');
 
// Position the string at absolute pixels (0,20).
// ( (0,0) is the upper left corner )
$txt->SetPos(0, 20);
 
// Set color and fonr for the text
$txt->SetColor('yellow');
$txt->SetFont(FF_FONT2,FS_BOLD);
 
// ... and add the text to the graph
$graph->AddText($txt); 


$txt2 = new Text('bleu:client normal');
 
// Position the string at absolute pixels (0,20).
// ( (0,0) is the upper left corner )
$txt2->SetPos(1, 40);
 
// Set color and fonr for the text
$txt2->SetColor('blue');
$txt2->SetFont(FF_FONT2,FS_BOLD);
 
// ... and add the text to the graph
$graph->AddText($txt2); 




$txt3 = new Text('vert:hotel');
 
// Position the string at absolute pixels (0,20).
// ( (0,0) is the upper left corner )
$txt3->SetPos(1, 60);
 
// Set color and fonr for the text
$txt3->SetColor('green');
$txt3->SetFont(FF_FONT2,FS_BOLD);
 
// ... and add the text to the graph
$graph->AddText($txt3); 

// Create
$p1 = new PiePlot3D($data);
$graph->Add($p1);

$p1->ShowBorder();
$p1->SetColor('white');
$p1->ExplodeSlice(1);
$graph->Stroke();

?>

