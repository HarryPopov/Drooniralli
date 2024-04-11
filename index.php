<?php include("config.php"); ?>

<!doctype html>
<html lang="en">
<head>
    <title>Drooniralli</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
</head>

<body>
    <div class="container">

<div class="container text-center">
    <h1>Drooniralli</h1><br>
    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4"/>
</svg>10 Piiratud tulemust<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4"/>
</svg></p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NIMI</th>
                <th scope="col">ASUKOHT</th>
                <th scope="col">MUDEL</th>
                <th scope="col">AEG</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // päring mille saadan andmebaasi
            $paring = "SELECT id, nimi, asukoht, mudel, aeg  FROM drooniralli ORDER BY id ASC LIMIT 10";
            $valjund = mysqli_query($yhendus, $paring);
            // sikutame andmebaasi vastuse
            while($rida = mysqli_fetch_assoc($valjund)){
                print_r('<div class="col">
                    <tr>
                        <td scope="col">'.$rida['id'].'</td>
                        <td scope="col">'.$rida['nimi'].'</td>
                        <td scope="col">'.$rida['asukoht'].'</td>
                        <td scope="col">'.$rida['mudel'].'</td>
                        <td scope="col">'.$rida['aeg'].'</td>
                    </tr>
                </div>');
            }
            ?>
        </tbody>
    </table><br>

    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4"/>
</svg> Mudeliga 500 järjestatud võistlejad Haapsalust<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4"/>
</svg></p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NIMI</th>
                <th scope="col">ASUKOHT</th>
                <th scope="col">MUDEL</th>
                <th scope="col">AEG</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // päring mille saadan andmebaasi
            $paring = "SELECT id, nimi, asukoht, mudel, aeg  FROM drooniralli WHERE asukoht='Haapsalu' AND mudel='Model 500' ORDER BY aeg";
            $valjund = mysqli_query($yhendus, $paring);
            // sikutame andmebaasi vastuse
            while($rida = mysqli_fetch_assoc($valjund)){
                print_r('<div class="col">
                    <tr>
                        <td scope="col">'.$rida['id'].'</td>
                        <td scope="col">'.$rida['nimi'].'</td>
                        <td scope="col">'.$rida['asukoht'].'</td>
                        <td scope="col">'.$rida['mudel'].'</td>
                        <td scope="col">'.$rida['aeg'].'</td>
                    </tr>
                </div>');
            }
            ?>
        </tbody>
    </table><br>

    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4"/>
</svg> Võistluste hulk iga mudeli kohta<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4"/>
</svg></p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">MUDEL</th>
                <th scope="col">VÕISTLUSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // päring mille saadan andmebaasi
            $paring = "SELECT id, nimi, asukoht, mudel, aeg, COUNT(*) AS hulk FROM drooniralli GROUP BY mudel";
            $valjund = mysqli_query($yhendus, $paring);
            // sikutame andmebaasi vastuse
            while($rida = mysqli_fetch_assoc($valjund)){
                print_r('<div class="col">
                    <tr>
                        <td scope="col">'.$rida['mudel'].'</td>
                        <td scope="col">'.$rida['hulk'].'</td>
                    </tr>
                </div>');
            }
            ?>
        </tbody>
    </table><br>

    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4"/>
</svg>Loosiõnnelikud võistlejad<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4"/>
</svg></p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">NIMI</th>
                <th scope="col">ASUKOHT</th>
                <th scope="col">MUDEL</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // päring mille saadan andmebaasi
            $paring = "SELECT id, nimi, asukoht, mudel, aeg FROM drooniralli ORDER BY RAND() LIMIT 3";
            $valjund = mysqli_query($yhendus, $paring);
            // sikutame andmebaasi vastuse
            while($rida = mysqli_fetch_assoc($valjund)){
                print_r('<div class="col">
                    <tr>
                        <td scope="col">'.$rida['nimi'].'</td>
                        <td scope="col">'.$rida['asukoht'].'</td>
                        <td scope="col">'.$rida['mudel'].'</td>
                    </tr>
                </div>');
            }
            ?>
        </tbody>
    </table>


</div>
</div>

</body>
</html>