<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta lang="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conversor Romano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <h1 class="text-center">Conversor para números romanos</h1>
        <div class="d-flex justify-content-center pt-3">
            <div class="card text-center" style="width: 50rem;">
                <div class="card-body">
                    <h5 class="card-title">Converter para romanos</h5>
                    <form name="conversorPRomano" method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'] ?>">
                        <div class="mb-3">
                            <input type="number" name="numeroArabe" class="form-control" id="numeroArabe" placeholder="Digite um número arábico de 1 a 3999 Ex: 135">
                        </div>
                        <h6> <?php

                                if (!empty($_POST["numeroArabe"])) {



                                    (int)$numeroArabe = $_POST["numeroArabe"];
                                    $numeroRomano = '';
                                    switch ($numeroArabe) {
                                        case $numeroArabe >= 4000:
                                            echo '<script> alert("Por favor insira números inteiros entre 1 e 3999.")</script>';
                                            break;
                                        case $numeroArabe <= 0:
                                            echo '<script> alert("Por favor insira números inteiros entre 1 e 3999.")</script>';
                                            break;
                                        default:
                                            while ($numeroArabe / 1000 >= 1) {
                                                $numeroRomano .= 'M';
                                                $numeroArabe -= 1000;
                                            }

                                            if (($numeroArabe / 900) >= 1) {
                                                $numeroRomano .= 'CM';
                                                $numeroArabe -= 900;
                                            }
                                            if (($numeroArabe / 500) >= 1) {
                                                $numeroRomano .= 'D';
                                                $numeroArabe -= 500;
                                            }
                                            if (($numeroArabe / 400) >= 1) {
                                                $numeroRomano .= 'CD';
                                                $numeroArabe -= 400;
                                            }


                                            while (($numeroArabe / 100) >= 1) {
                                                $numeroRomano .= 'C';
                                                $numeroArabe -= 100;
                                            }


                                            if (($numeroArabe / 90) >= 1) {
                                                $numeroRomano .= 'XC';
                                                $numeroArabe -= 90;
                                            }
                                            if (($numeroArabe / 50) >= 1) {
                                                $numeroRomano .= 'L';
                                                $numeroArabe -= 50;
                                            }
                                            if (($numeroArabe / 40) >= 1) {
                                                $numeroRomano .= 'XL';
                                                $numeroArabe -= 40;
                                            }



                                            while (($numeroArabe / 10) >= 1) {
                                                $numeroRomano .= 'X';
                                                $numeroArabe -= 10;
                                            }


                                            if (($numeroArabe / 9) >= 1) {
                                                $numeroRomano .= 'IX';
                                                $numeroArabe -= 9;
                                            }
                                            if (($numeroArabe / 5) >= 1) {
                                                $numeroRomano .= 'V';
                                                $numeroArabe -= 5;
                                            }
                                            if (($numeroArabe / 4) >= 1) {
                                                $numeroRomano .= 'IV';
                                                $numeroArabe -= 4;
                                            }



                                            while ($numeroArabe >= 1) {
                                                $numeroRomano .= 'I';
                                                $numeroArabe -= 1;
                                            }
                                            echo $numeroRomano;
                                    }
                                }
                                ?></h6>
                        <input type="submit" class="btn btn-primary" value="Converter">
                    </form>

                </div>

            </div>
        </div>
        <h1 class="text-center pt-3">Conversor para números arábicos</h1>
        <div class="d-flex justify-content-center pt-3">
            <div class="card text-center" style="width: 50rem;">
                <div class="card-body">
                    <h5 class="card-title">Converter para arábicos</h5>
                    <form name="conversorPArabico" method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'] ?>">
                        <div class="mb-3">
                            <input type="text" name="numeroRomano" class="form-control" id="numeroRomano" placeholder="Digite um número romano de I a MMMCMXCIX Ex: CXXXV">
                        </div>
                        <h6> <?php

                                $numeroArabe = 0;
                                $numeroRomanoTotal = "";
                                $numeroRomano = "XV";
                                $numeroRomano = strtoupper($numeroRomano);

                                $i = 0;
                                $iNR = strlen($numeroRomano);

                                while ($i < $iNR) {
                                    $numeroRomanoAtual = substr($numeroRomano, $i, 1);
                                    /* echo $numeroRomanoAtual; */

                                    switch ($numeroRomanoAtual) {
                                        case $numeroRomanoAtual === "M":
                                            $numeroRomanoTotal .= $numeroRomanoAtual;
                                            break;
                                        case $numeroRomanoAtual === "D":
                                            $numeroRomanoTotal .= $numeroRomanoAtual;
                                            break;
                                        case $numeroRomanoAtual === "C":
                                            $numeroRomanoTotal .= $numeroRomanoAtual;
                                            break;
                                        case $numeroRomanoAtual === "L":
                                            $numeroRomanoTotal .= $numeroRomanoAtual;
                                            break;
                                        case $numeroRomanoAtual === "X":
                                            $numeroRomanoTotal .= $numeroRomanoAtual;
                                            break;
                                        case $numeroRomanoAtual === "V":
                                            $numeroRomanoTotal .= $numeroRomanoAtual;
                                            break;
                                        case $numeroRomanoAtual === "I":
                                            $numeroRomanoTotal .= $numeroRomanoAtual;
                                            break;
                                        default:
                                            $numeroRomanoTotal = "";
                                            echo '<script> alert("Por Favor insira um número Romano existente") </script>';
                                            $iNR = 0;
                                            break;
                                    }

                                    switch ($numeroRomanoTotal) {
                                            case substr($numeroRomanoTotal, "M") > 4;
                                            $numeroArabe = "";
                                            echo '<script> alert("Por Favor insira um número Romano existente") </script>';
                                            $iNR = 0;
                                            break;
                                        case substr_count($numeroRomanoTotal, "D") > 4;
                                            $numeroRomanoTotal = "";
                                            echo '<script> alert("Por Favor insira um número Romano existente") </script>';
                                            $iNR = 0;
                                            break;
                                        case substr_count($numeroRomanoTotal, "C") > 4;
                                            $numeroRomanoTotal = "";
                                            echo '<script> alert("Por Favtr insira um número Romano existente") </script>';
                                            $iNR = 0;
                                            break;
                                        case substr_count($numeroRomanoTotal, "L") > 4;
                                            $numeroRomanoTotal = "";
                                            echo '<script> alert("Por Favor insira um número Romano existente") </script>';
                                            $iNR = 0;
                                            break;
                                        case substr_count($numeroRomanoTotal, "X") > 4;
                                            $numeroRomanoTotal = "";
                                            echo '<script> alert("Por Favor insira um número Romano existente") </script>';
                                            $iNR = 0;
                                            break;
                                        case substr_count($numeroRomanoTotal, "V") > 4;
                                            $numeroRomanoTotal = "";
                                            echo '<script> alert("Por Favor insira um número Romano existente") </script>';
                                            $iNR = 0;
                                            break;
                                        case substr_count($numeroRomanoTotal, "I") > 4;
                                            $numeroRomanoTotal = "";
                                            echo '<script> alert("Por Favor insira um número Romano existente") </script>';
                                            $iNR = 0;
                                            break;
                                        default:
                                            if (substr($numeroRomanoTotal, $i, 1) == "M") {
                                                $numeroArabe += 1000;
                                            } elseif (substr($numeroRomanoTotal, $i, 1) == "D") {
                                                $numeroArabe += 500;
                                            } elseif (substr($numeroRomanoTotal, $i, 1) == "C") {
                                                $numeroArabe += 100;
                                            } elseif (substr($numeroRomanoTotal, $i, 1) == "L") {
                                                $numeroArabe += 50;
                                            } elseif (substr($numeroRomanoTotal, $i, 1) == "X") {
                                                $numeroArabe += 10;
                                            } elseif (substr($numeroRomanoTotal, $i, 1) == "V") {
                                                $numeroArabe += 5;
                                            } elseif (substr($numeroRomanoTotal, $i, 1) == "I") {
                                                $numeroArabe += 1;
                                            }
                                    }
                                    $i++;
                                }

                                echo $numeroRomanoTotal . "</br>";
                                echo $numeroArabe;?>
				</h6>
                        <input type="submit" class="btn btn-primary" value="Converter">
                    </form>

                </div>

            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>