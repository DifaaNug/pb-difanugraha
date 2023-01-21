<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
   <table>
        <?php 
        
        $namapegawai = $_POST["namapegawai"];
        $golongan = $_POST["golongan"];
        $jumlahanak = $_POST["jumlahanak"];
        $makan = $_POST["makan"];
        $transport = $_POST["transport"];
        $kesehatan = $_POST["kesehatan"];
        
        // $makan = 30000;
        // $transport = 70000;
        // $kesehatan = 50000;

        if($golongan == "A"){
            $gapok = "5000000";
        }elseif($golongan == "B"){
            $gapok = "6000000";
        }else{
            $gapok = "7000000";
        }

        if($jumlahanak == 1){
            $tunjangananak = $gapok * 0.1;
        }elseif($jumlahanak == 2){
            $tunjangananak = $gapok * 0.2;
        }else{
            $tunjangananak = $gapok * 0.3;
        }

        $totalgaji = $gapok + $tunjangananak;

        

        
        echo "<h2>Menghitung Gaji Pegawai</h2>";
        echo "<h3>=======================</h3>";
        echo "<tr><td>Nama Pegawai</td><td>: $namapegawai</td></tr>";
        echo "<tr><td>Golongan</td><td>: $golongan</td></tr>";
        echo "<tr><td>Gaji Pokok</td><td>: $gapok</td></tr>";
        echo "<tr><td>Jumlah Anak</td><td>: $jumlahanak</td></tr>";
        echo "<tr><td>Tunjangan Anak</td><td>: $tunjangananak</td></tr>";
        echo "<tr><td>Tunjangan Gaji</td><td>: $makan $transport $Kesehatan</td></tr>";  
        echo "<tr><td><b>Total Gaji</b></td><td><b>:</b> $totalgaji</td></tr>";
        
        ?>
   </table>
</center>
</body>
</html>



