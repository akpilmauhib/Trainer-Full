<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            font-size: 11px;
        }

        th {
            border: 1px solid black;
            border-collapse: collapse;
            font-size: 14px;
        }
    </style>
</head>


<body>

    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Laporan Trainer Coaching.xls");
    $table = '
    <table border="1">
    <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
            <th>Alamat</th>
          
        </tr>';
    $no = 1;
    foreach ($dashboard as $dt) {
        $table .= '
         <tr>
                <td>' . $no++ . '</td>
                <td>' . $dt->nama_lengkap . '</td>
                <td>' . $dt->jenis_kelamin . '</td>
                <td>' . $dt->agama . '</td>
                <td>' . $dt->no_hp . '</td>
                <td>' . $dt->email . '</td>
                <td>' . $dt->alamat . '</td>
                
            </tr>';
    }
    $table .= '</table>';
    echo $table;

    ?>
</body>

</html>