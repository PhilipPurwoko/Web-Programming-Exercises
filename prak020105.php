<html>
    <head>Headings</head>
    <body>
    <?php
        $i = 1;
        
        do {
            $contraints = NULL;
            if ($i % 2 == 0){
                $contraints = "style='color:red'";
            }
            echo "<h".$i." $contraints>Heading ".$i."</h".$i.">";
            $i++;
        }
        while ($i <= 6);
    ?>
    </body>
</html>