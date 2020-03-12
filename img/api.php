<?php
// $path='F:/xxxx';
$dirAra=scandir(__DIR__);
// echo __DIR__;
for($d=0;$d<count($dirAra);$d++)
{ 
    $allPath=$dirAra[$d];
    if(is_file($allPath))
    {
        $dirJson[$d]=array(
            'id'=> $d,
            'file name'=> $dirAra[$d],
            'extenstion'=> pathinfo($allPath,PATHINFO_EXTENSION),
            'size'=> filesize($allPath).' bytes',
            'path'=> __DIR__,
        );
        
    }
}
print_r(json_encode($dirJson)) ;
?>