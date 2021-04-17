<html>
    <head>Headings</head>
    <body>
    <?php
        for($i=1; $i <= 6; $i++){
            $contraints = NULL;
            if ($i % 2 == 0){
                $contraints = "style='color:red'";
            }
            echo "<h".$i." $contraints>Heading ".$i."</h".$i.">";
        }
    ?>
    </body>
</html>