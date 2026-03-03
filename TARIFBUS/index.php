<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TARIF BUS</title>
</head>
<body>
    <center>
        <h1>PROGRAM TARIF BUS</h1>

        <p>
            <form method="post" action="">
                Nama Bus  <input type="text" name="nama"><br><br>
                Jurusan <select name="jurusan">
                    <option value="Jakarta">Jakarta</option>
                    <option value="medan">Medan</option>
                    </select><br><br>
                <input type="submit" value="PROSES" name="proses">
            </form>
            <?php
                if(@$_POST['proses']){
                    $namabus = @$_POST['nama'];
                    $jurusan = @$_POST['jurusan'];

                    if($jurusan == "Jakarta"){
                        echo "Nama Bus = $namabus <br>";
                        echo "Jurusan = $jurusan <br>";
                        echo "Tarif Bus Rp. 550.000";
                    }elseif($jurusan == "medan"){
                        echo "Nama Bus = $namabus <br>";
                        echo "Jurusan = $jurusan <br>";
                        echo "Tarif Bus 330.000";
                    }else{
                        $tarif = "Jurusan tidak valid";
                    }
                }
                ?>
        </p>
        
    </center>
</body>
</html>