<?php 

$career = [1 => "Software",2=> "Redes",3=> "Multimedia",4=> "Mecatronica",5=> "Seguridad Informatica"];

function getLastElement($list){
    $countlist = count($list);
    $lastElement = $list[$countlist - 1];

    return $lastElement;
}

function getCareerName($careerId){

     return $GLOBALS['career'][$careerId];



}

function searchProperty($list,$property,$value){

        $filter = [];
        foreach($list as $item){
         if($item[$property] == $value){
               array_push($filter, $item);

         }   
        }

        return $filter;

}


function getIndexElement($list,$property,$value){

    $index = 0;
    foreach($list as $key => $item){
     if($item[$property] == $value){
           $index = $key;
         }   
    }

    return $index;

}



?>