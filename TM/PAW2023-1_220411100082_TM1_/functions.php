
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

function filterGanjil($i,$j,$warna){
    if($i%2==1){
        tdColor($warna,$j+$i);
    }else{
        td($j+$i);
    }} 

function filterPangkat($i,$j,$warna,$pangkat,&$x){
    if($j**(1/$pangkat)==$x){
        tdColor($warna,$j+$i);
        $x+=1;
    }else{
        td($j+$i);
    } }

function filterSegitiga($i,$j,$warna,$no,){
    if($i>=$j){
        tdColor($warna,$j+$i);
    }else{
        td($no);
    } }

function tabelPenjumlahan($n,$warna,$type=""){?>
    <table>
    <?php for($i=0;$i<=$n;$i++):
        $x=1;?>
        <tr>
        <?php for($j=0;$j<=$n;$j++){
            if($j+$i===0){
                th();
            }elseif($j==0 || $i==0){
                th($j+$i);
            }elseif($type=="ganjil"){
                filterGanjil($i,$j,$warna);
            }elseif($type=="pangkat3"){
                filterPangkat($i,$j,$warna,3,$x);
            }elseif($type=="segitigaBawah"){
                filterSegitiga($i,$j,$warna,2);
            }else{
                td($j+$i);
            }} ?>
        </tr>
    <?php endfor; ?>
    </table>
<?php } ?>