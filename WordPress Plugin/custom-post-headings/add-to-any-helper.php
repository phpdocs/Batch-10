<?php

function ReturnAddtoAny(){
    $AddtoAny="";
    $AddtoAny.='<!-- AddToAny BEGIN -->';
    $AddtoAny.='<div class="a2a_kit a2a_kit_size_32 a2a_default_style">';
    $AddtoAny.='<a class="a2a_dd" href="https://www.addtoany.com/share"></a>';
    $AddtoAny.='<a class="a2a_button_facebook"></a>';
    $AddtoAny.='<a class="a2a_button_twitter"></a>';
    $AddtoAny.='<a class="a2a_button_email"></a>';
    $AddtoAny.='</div>';
    $AddtoAny.='<script async src="https://static.addtoany.com/menu/page.js"></script>';
    $AddtoAny.='<!-- AddToAny END -->';

    return $AddtoAny;
}

?>