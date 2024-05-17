<?php
    $p1 = 8;
    $p2 = 7;
    $media = ($p1 + $p2) / 2;
    echo "Media: ". $media;
    if($media >= 6 && $media < 10) {
        Echo "<br> Aluno Aprovado !";
    }
    elseif ($media == 0) {
        Echo "<br> Nota Invalida";
    }
    elseif ($media == 10) {
        Echo "<br> Nota Maxia";
    }
    else {
        Echo "<br> Aluno Reprovado";
    }


