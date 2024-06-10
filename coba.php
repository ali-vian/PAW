<table border="1" align="center" cellpadding="6">
    <tr>
        <th>No</th>
        <th>Nama Komputer</th>
        <th>Ram</th>
        <th>Os</th>
        <th>Procesor</th>   
        <th>Storage</th>   
        <th>Kondisi</th>  
    </tr> 
    <?php 
    for($j=1;$j<=10;$j++){
        echo "<tr>";
        for($i=1;$i<=7;$i++){
            if($i==1){  
                echo "<td>".($j)."</td>";
            }
            elseif($i==2){  
                echo "<td> Client ".($j*2)."</td>";
            }elseif($i==3){
                if($j==5){
                    echo "<td>4GB</td>";
                }else{
                    echo "<td>8GB</td>";
                }
            }elseif($i==4){
                if($j==5){
                    echo "<td>Windows 10 Home Basic 64 bit ISO</td>";
                }else{
                echo "<td>Windows 10 Home Single Languange</td>";
                }
            }elseif($i==5){
                if($j==5){
                    echo "<td>Core 2 duo</td>";
                }else{
                echo "<td>8th Generation Intel core i5</td>";
                }
            }elseif($i==6){
                if($j==5){
                    echo "<td>HDD 256 GB</td>";
                }elseif($j==4 or $j==2){
                    echo "<td>Failure</td>";
                }else{
                echo "<td>HDD 1TB</td>";
                }
            }elseif($i==7){
                if($j==5){
                    echo "<td>Tidak Layak</td>";
                }elseif($j==4 or $j==2){
                    echo "<td>Tidak Aktif</td>";
                }else{
                echo "<td>Aktif</td>";
                }
            }
        }
        echo "</tr>";
    }
    ?>
</table>