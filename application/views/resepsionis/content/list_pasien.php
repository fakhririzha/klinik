<section id="content">
    <!--start container-->
    <div class="container">
        <div class="row">
            <br><br>
            <div class="col s11 black-text">
                <?php
                    $link = '';
                    foreach ($breadcrumbs as $crumbs) {
                        $link = $link . '/' . $crumbs; ?>
                <a href="<?= base_url($link) ?>" id="breadcrumb"><?= ucwords(str_replace('_', ' ', $crumbs)) ?></a>
                /
                <?php
                    } ?>
            </div>
            <div class="col s1"></div>
            <br><br>
        </div>
        <!--card stats start-->
        <div class="row">
            <div class="col s12">
                <div class="card-panel">
                    <table id="tabel" class="display centered hover responsive-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>NIK</th>
                                <th>Cetak Kartu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pasien as $data): ?>

                            <tr>
                                <td><?= $data->dp_id ?>
                                </td>
                                <td><?= $data->dp_nama ?>
                                </td>
                                <td><?= $data->dp_tanggal_lahir ?>
                                </td>
                                <td><?= $data->dp_jenis_kelamin ?>
                                </td>
                                <td><?= $data->dp_nik ?>
                                </td>
                                <td><a class="waves-effect waves-light btn-floating" href="http://localhost/Klinik/resepsionis/cetak_kartu_pasien/<?= $data->dp_nik ?>"><i
                                            class="material-icons left">print</i>
                                        Edit</a>
                                </td>
                            </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>
