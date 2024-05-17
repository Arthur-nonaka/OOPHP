<html>
<head>
    
    <style>
        body {
            margin: 0px;
            padding: 0px;
        }
        .container {
            display: flex;
            flex-direction: row; 
            margin: 5px;
        }
        .column{
            margin-left: 4px;
            border: 1px solid black;
            padding: 2px;
        }
    </style>
    </head>
    <body>
    <div class="container">
        <?php
        for($num = 5; $num <= 10; $num++) {
            Echo "<div class='column'> <h7>". $num . " </h7>";
            for($tabuada = 1; $tabuada <= 10; $tabuada++) {
                Echo "<br>".$num." x " . $tabuada . " = " . ($tabuada * $num);
            }
            Echo "</div>";
        }
        ?>
    </div>
    </body>
</html>