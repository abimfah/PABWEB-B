<html>
<head>
    <title>Mahasiswa</title>
</head>
<body>
    <h1>Metode Result</h1>
    <table border="2">
        <thread>
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
            </tr>
        </thread>
        <tbody>
            <?php
            $no = 1;
            foreach ($result as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->NIM ?></td>
                    <td><?php echo $row->nama_mhs ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>