<?php
    //Functions without parameters
    function Plus() {
        $n1 = 5;
        $n2 = 10;

        $result = $n2 + $n1;
        echo "The result is: " . $result;
    }
    Plus();

    //Functions with parameters
    function PlusP($n1,$n2) {
        $result = $n2 + $n1;
        echo "<br>The result is: " . $result;
    }
    PlusP(10,20);

    //WITH RETURN

    //Functions without parameters
    function PlusR() {
        $n1 = 5;
        $n2 = 10;

        $result = $n2 + $n1;
        return $result;
    }
    Echo "<br>The result is: " . PlusR();
