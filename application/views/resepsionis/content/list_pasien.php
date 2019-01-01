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
                                <th>No. Telp</th>
                                <th>Form Pemeriksaan</th>
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
                                <td><?= $data->dp_nomor_telepon ?>
                                </td>
                                <td><a class="waves-effect waves-light btn-floating" href="http://localhost/Klinik/admin/pemeriksaan_kesehatan_pasien/<?= $data->dp_id ?>"><i
                                            class="material-icons left">local_hospital</i>
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
