<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>konsep pewarisan</h1>
        <div class="">
            <?php
            include "orangbiasa.php";
            include "oranginggris.php";
            include "mahasiswa.php";

            $james = new orangbiasa('james'); //memanggil construct
            $james->ucapsalam(); //memanggil menthod
            echo "<br>";

            $parto = new oranginggris('parto');
            $parto->ucapsalam(); //override
            echo "<br>";    

            $emely = new mahasiswa("emely");
            $emely->ucapsalam();
            echo "<br>";
            $emely->setNim("701230039");
            $emely->setProdi("sistem informasi");

            $nilaiemely = new nilai();
            $nilaiemely->setTugas(90);
            $nilaiemely->setUts(76);
            $nilaiemely->setUas(78);

            $emely->setNilai($nilaiemely);
            $emely->tampilkandata();
            ?>
        </div>
</body>
</html>