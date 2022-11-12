<!DOCTYPE html>
<html lang="en"><head>
    <title>Document</title>
</head><body>
    <table>
        <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Kasus Baru</th>
            <th>Meninggal</th>
        </tr>
        <?php $no = 1; 
        foreach($covid as $cvd) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $cvd->tanggal ?></td>
                <td><?= $cvd->kasus_baru ?></td>
                <td><?= $cvd->meninggal ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body></html>