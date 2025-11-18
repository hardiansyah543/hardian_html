<!DOCTYPE html>
<html>
<head>
    <title>Tugas Perulangan While</title>
    <style>
        table {
            border-collapse: collapse;
            width: 40%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: lightgray;
        }
    </style>
</head>
<body>

<h2>Perkalian 3 Menggunakan While</h2>

<table>
    <thead>
        <tr>
            <th>Operasi</th>
            <th>Hasil</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $angka = 1; // Inisialisasi counter

        // perulangan while sampai 10
        while ($angka <= 10) {
            $hasil = 3 * $angka;

            echo "<tr>";
            echo "<td>3 x " . $angka . "</td>";
            echo "<td>" . $hasil . "</td>";
            echo "</tr>";

            $angka++; // wajib increment
        }
        ?>
    </tbody>
</table>

</body>
</html>
