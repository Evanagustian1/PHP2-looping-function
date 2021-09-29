<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Contoh Looping</h2>
    <?php
    echo "<h3> Contoh Looping 1 </h3>";
    echo "<h4>Contoh Looping Genap 1</h4>";
    for($i = 1; $i <= 21; $i += 2) {
        echo $i . " - Angka Ganjil <br>";
    }
    echo "<h4>contoh looping genap 1</h4>";
    for ($a = 21; $a >= 1; $a -= 2) {
        echo $a . " - Angka Ganjil <br>";
    }
    echo "<h3> contoh looping 2 </h3>";
    $nomor = [4, 5, 2, 3, 9];
    echo "array : ";
    print_r($nomor);
    echo "<br>";
    foreach ($nomor as $nom) {
        $rest[] = $nom * 2;
    }
    print_r($rest);

    echo "<h3> contoh looping 3 </h3>";
    $bio = [
        ["Evan", 17, "Bandung"],   
    ];

    foreach ($bio as $key => $val) {
        $bio = array(
            'nama' => $val[0],
            'umur' => $val[1],
            'kota' => $val[2],
        );
        print_r($bio);
        echo "<br>";
    }
    echo "<h3> contoh looping 4 </h3>";
    for ($j = 1; $j <= 5; $j++) {
        for ($k = $j; $k <= 5; $k++) {
            echo "*";
        }
        echo "<br>";
    }

    ?>   
</body>

</html>