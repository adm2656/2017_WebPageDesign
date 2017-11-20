<?php
    $data=array(
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)   
    );
    
    echo("<head>");
    echo("<body>");
    echo("<table>");
    echo("<thead><tr><th>Name</th><th>Stock</th><th>Sold</th></thead>");

    //for
    for ($i = 0; $i < sizeof($data); $i++){
        echo("<tr><td>".$data[$i][0]."</td><td>".$data[$i][1]."</td><td>".$data[$i][2]."</td><td>");
    }

    echo("</table><br>");
    echo("<table>");
    echo("<thead><tr><th>Name</th><th>Stock</th><th>Sold</th></thead>");

    //foreach
    foreach ($data as $brand){
        echo("<tr>");
        foreach ($brand as $value){
            echo("<td>".$value."</td>");
        }
        echo("</tr>");
    }

    echo("</table><br>");
    echo("<table>");
    echo("<thead><tr><th>Name</th><th>Stock</th><th>Sold</th></thead>");

    //array_map + join
    function myJoin($arr){
        echo("<tr><td>");
        echo join("</td><td>", $arr);
        echo("</tr>");
    }
    array_map("myJoin", $data);

    echo("</table>");
    echo("</body>");
    echo("</head>");
?>