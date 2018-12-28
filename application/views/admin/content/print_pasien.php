<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Pasien</title>
    <style>
        body {
            height: 297mm;
            width: 210mm;
        }
    </style>
</head>

<body>
    <table border=3>
        <thead>
            <tr>
                <th rowspan="5"><img src="<?= base_url('assets/images/logo/generic-logog.png') ?>"
                        alt="Logo"></th>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?= $pasien[0]->pd_nama ?>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><?= $pasien[0]->pd_tanggal_lahir ?>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><?= $pasien[0]->pd_tempat_lahir ?>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?= $pasien[0]->pd_jenis_kelamin ?>
                </td>
            </tr>
            <tr>
                <th rowspan="5"></th>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $pasien[0]->pd_alamat ?>
                </td>
            </tr>
            <tr>
                <td>No. Kontak</td>
                <td><?= $pasien[0]->pd_nomor_narahubung ?>
                </td>
            </tr>
            <tr>
                <td>Relasi</td>
                <td><?= $pasien[0]->pd_relasi_nomor_narahubung ?>
                </td>
            </tr>
            <tr>
                <td>No. Darurat</td>
                <td><?= $pasien[0]->pd_nomor_darurat ?>
                </td>
            </tr>
        </thead>
    </table>
</body>

</html>
