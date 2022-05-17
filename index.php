<?php 
function ucgen($sayi){
    $html ='';
    for ($i=1; $i <= $sayi; $i++) {
        $x = $i;
        do{
            $html .='0';
            $x--;
        }
        while($x>0);
        $html .=' <br> ';
    }
    return $html;
}

echo ucgen(15);
?>