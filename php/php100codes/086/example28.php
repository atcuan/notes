<?php // content="text/plain; charset=utf-8"
require_once ('Examples/jpgraph/jpgraph.php');
require_once ('Examples/jpgraph/jpgraph_pie.php');

$data = array(120,140,500);

$graph = new PieGraph(300,300);
$graph->SetShadow();

$graph->Set3DPerspective(SKEW3D_UP,500,600,true); 

//��б3DЧ��
//   1. 'SKEW3D_UP'
//   2. 'SKEW3D_DOWN'
//   3. 'SKEW3D_LEFT'
//   4. 'SKEW3D_RIGHT' 

//$graph->SetColor('red'); //���ñ���
$graph->SetBackgroundImage("742088da5a71fd1b33fa1ccf.jpg",1); //���ñ���
$graph->img->SetMargin(0,0,0,0); // �����ĽǱ߾ࣨ�������£�



$graph->title->Set("PHP100��Ƶ�̳�");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD,24);

$graph->title->SetColor('blue');
$graph->SetColor('yellow');

//$graph->title->SetFont(FF_SIMSUN,FS_BOLD); //�������壬���ͣ���С

//$graph->title->SetColor('red'); //����������ɫ

//$graph->title->SetFont(FF_SIMSUN,FS_BOLD); // ���ñ����������� 
//$graph->legend->SetFont(FF_SIMSUN,FS_BOLD); //��������ָʾ����
//$graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);//����Y������ָʾ����
//$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);//����X������ָʾ����




$p1 = new PiePlot($data);
$p1->SetTheme("sand");
$p1->SetCenter(0.5,0.55);
$p1->value->Show(true);
$graph->Add($p1);
$graph->Stroke();

?>


