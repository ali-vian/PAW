<!DOCTYPE html>
<html>
<head>
    <title>Tabel Perkalian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <?php
            $agk = 20;
            for($i=0;$i<=$agk;$i++){
                echo "<tr>";
                if($i===0){
                    echo "<td></td>";
                }else{
                    echo "<td class='green'>$i</td>";
                }
                for($j=1;$j<=$agk;$j++){
                    if($i===0){
                        echo "<td class='brown'>$j</td>";
                    }
                    elseif($i===$j){
                        echo "<td class='red'>".$i*$j."</td>";
                    }
                    else{
                        echo "<td>".$i*$j."</td>";
                    };
                };
                echo "</tr>";
            };
        ?>
    </table>  
</body>
</html>