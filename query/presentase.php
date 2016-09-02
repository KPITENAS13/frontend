<?php
$periode = $_POST['periode'];
$praktikum = $_POST['praktikum'];
$connect = mysqli_connect("localhost", "root", "", "inventaris");
$output = '';
$sql = "SELECT * FROM presentase_nilai WHERE periode='".$periode."' AND praktikum='".$praktikum."'";
$result = mysqli_query($connect, $sql);
$output .= ''
        . '<div class="table-responsive">'
        . '     <table class="table table-bordered table-striped" style="width:100%;" id="tabel3">'
        . '         <tr align="center">'
        . '             <th>Nilai Harian (%)</th>'
        . '             <th>Nilai Absensi (%)</th>'
        . '             <th>Nilai UTS (%)</th>'
        . '             <th>Nilai UAS (%)</th>'
        . '             <th>Nilai Project (%)</th>'
        . '         </tr>';
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
        $output .= '<tr align="center">'
                . ' <td class="nh" data-id1="'.$row["id"].'" >'.$row["nilai_harian"].'</td>'
                . ' <td class="abs" data-id2="'.$row["id"].'" >'.$row["absensi"].'</td>'
                . ' <td class="uts" data-id3="'.$row["id"].'" >'.$row["uts"].'</td>'
                . ' <td class="uas" data-id4="'.$row["id"].'" >'.$row["uas"].'</td>'
                . ' <td class="pro" data-id5="'.$row["id"].'" >'.$row["project"].'</td>'
                . '</tr>';
    }
}else{
    $output .= '<tr align="center">'
            . '     <td id="nh" ></td>'
            . '     <td id="abs" ></td>'
            . '     <td id="uts" ></td>'
            . '     <td id="uas" ></td>'
            . '     <td id="pro" ></td>'
            . ' </tr>';
}
$output .= '</table>'
        . '</div>';
echo $output;
?>