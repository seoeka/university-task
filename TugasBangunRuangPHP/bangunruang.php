<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            display: flex;
            justify-content: center;
            padding: 100px;
            font-family: Helvetica;
        }
        .container {
            align-items: center;
            padding: 25px;
        }
        table {
            border: 1px solid black;
            border-collapse: collapse;
        }
        table th {
            color: white;
            background-color: orangered;
        }
        th, td {
            border: 1 px solid black;
            padding: 12px;
        }
    </style>
    <title>Bangun Ruang PHP</title>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <th>NAMA BANGUN</th>
                <th>LUAS</th>
                <th>CONTOH</th>
            </tr>
            <tr>
                <td>PERSEGI</td>
                <td>L = s x s</td>
                <td>
                    <?php
                    $s = 5;
                    $L = $s * $s;
                    echo "L = $s x $s = $L";
                    ?>
                </td>
            </tr>
            <tr>
                <td>PERSEGI PANJANG</td>
                <td>L = p x l</td>
                <td><?php
                    $p = 7; $l = 9;
                    $L = $p * $l;
                    echo "L = $p x $l = $L";
                    ?></td>
            </tr>
            <tr>
                <td>JAJAR GENJANG</td>
                <td>L = a x t</td>
                <td>
                    <?php
                    $a = 3; $t = 14;
                    $L = $a * $t;
                    echo "L = $a x $t = $L";
                    ?>
                </td>
            </tr>
            <tr>
                <td>SEGITIGA</td>
                <td>L = 1/2 x a x t</td>
                <td>
                    <?php
                    $a = 8; $t = 11;
                    $L = 0.5 * $a * $t; 
                    echo "L = 1/2 x $a x $t = $L";
                    ?>
                </td>
            </tr>
            <tr>
                <td>BELAH KETUPAT</td>
                <td>L = 1/2 x d<sub>1</sub> x d<sub>2</sub></td>
                <td>
                    <?php
                    $d1 = 7; $d2 = 15;
                    $L = 0.5 * $d1 * $d2;
                    echo "L = 1/2 x $d1 x $d2 = $L";
                    ?>
                </td>
            </tr>
            <tr>
                <td>LAYANG-LAYANG</td>
                <td>L = 1/2 x d<sub>1</sub> x d<sub>2</sub></td>
                <td>
                    <?php
                    $d1 = 4; $d2 = 23;
                    $L = 0.5 * $d1 * $d2;
                    echo "L = 1/2 x $d1 x $d2 = $L";
                    ?>
                </td>
            </tr>
            <tr>
                <td>TRAPESIUM</td>
                <td>L = a + b / 2 x t </td>
                <td>                    
                    <?php
                    $a = 4; $b = 6; $t = 5;
                    $L = ($a + $b)/ 2 * $t;
                    echo "L = $a + $b / 2 x $t = $L";
                    ?>
                    </td>
            </tr>
        </table>
    </div>
</body>
</html>