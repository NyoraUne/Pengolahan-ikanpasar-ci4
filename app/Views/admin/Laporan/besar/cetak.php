<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        b {
            margin-top: -1px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <div style="text-align: center;">
        <h1 style="margin-bottom: -1px;">Dinas Peternakan Dan Perikanan Kab. Tapin</h1>
        <b> Jalan Jend. Sudirman KM. 2,5, Rantau Kiwa, Tapin Utara, Rantau Kiwa,<br> Kec. Tapin Utara, Kabupaten Tapin, Kalimantan Selatan 71114</b>
    </div>
    <hr>
    <h3><?= $title; ?></h3>
    <?= $msg; ?>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ikan</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai </th>
                <th>Lokasi</th>
                <th>Suhu Air</th>
                <th>Jumlah Pakan /Kg</th>
                <th>Kondisi Kesehatan</th>
                <th>keterangan</th>
                <th>Di Data Pada</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($besar as $index => $item) : ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= $item['nama_ikan']; ?></td>
                    <td><?= $item['tgl_mulai']; ?></td>
                    <td><?= $item['tgl_selesai']; ?></td>
                    <td><?= $item['lokasi']; ?></td>
                    <td><?= $item['suhu_air']; ?></td>
                    <td><?= $item['jumlah_pakan']; ?></td>
                    <td><?= $item['kondisi_kesehatan']; ?></td>
                    <td><?= $item['keterangan']; ?></td>
                    <td><?= $item['created_at']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>