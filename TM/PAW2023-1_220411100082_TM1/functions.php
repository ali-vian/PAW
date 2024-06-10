
<?php 
function tdColor($warna,$filed){?>
    <td style='background-color:<?=$warna?>'><?= $filed ?></td>
<?php }

function td($filed){?>
    <td><?= $filed ?></td>
<?php }

function th($filed=""){?>
    <th><?= $filed ?></th>
<?php }



function filterSilang($i,$j,$warna,&$temp){
    $temp+=1;
    if($temp%2==0){
        tdColor($warna,$j+$i);
    }else{
        td($j+$i);
    }
}

function tabelPenjumlahan($n,$warna,$type=""){
    if($n%2==1){
        $n+=1;
    }?>
    <table>
    <?php for($i=0;$i<=$n;$i++):
        $x=1;?>
        <tr>
        <?php for($j=0;$j<=$n;$j++){
            if($n ==0){
                th();
            }elseif($n==2||$n==1){
                if($i%2==0 ){
                    if($j%2==0){
                        tdColor($warna,$j,$i);
                    }else{
                        td($j+$i);
                    }
                }else{
                    if($j%2==1){
                        tdColor($warna,$j,$i);
                    }else{
                        td($j+$i);
                    }
                }
            }elseif($n>2){
                if($j==$i){
                    td($j+$i);
                }elseif($j+$i==$n){
                    td($j+$i);

                }else{
                    tdColor($warna,$j,$i); 
                }
            }
            else{
                td($j+$i);
            }
        }
        ?>

        </tr>
    <?php endfor; ?>
    </table>
<?php } ?>