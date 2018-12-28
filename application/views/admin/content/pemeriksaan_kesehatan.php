<section id="content">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 black-text">
                    <?php
                    $link = '';
                    foreach ($breadcrumbs as $crumbs) {
                        $link = $link . '/' . $crumbs; ?>
                    <a href="<?= base_url($link) ?>" id="breadcrumb"><?= ucwords(str_replace('_', ' ', $crumbs)) ?></a>
                    /
                    <?php
                    } ?>
                </div>
            </div>
            <p class="caption">Data Pasien</p>
            <div class="divider"></div>
            <div class="row">
                <div class="col s12">
                    <div class="card-panel">
                        <table id="pasien" class="display centered hover responsive-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No. Kontak</th>
                                    <th>Form Pemeriksaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pasien as $data): ?>

                                <tr>
                                    <td><?= $data->pd_id ?>
                                    </td>
                                    <td><?= $data->pd_nama ?>
                                    </td>
                                    <td><?= $data->pd_tanggal_lahir ?>
                                    </td>
                                    <td><?= $data->pd_jenis_kelamin ?>
                                    </td>
                                    <td><?= $data->pd_nomor_narahubung ?>
                                    </td>
                                    <td><a class="waves-effect waves-light btn-floating" href="http://localhost/Klinik/admin/pemeriksaan_kesehatan_pasien/<?= $data->pd_id ?>"><i
                                                class="material-icons left">local_hospital</i>
                                            Edit</a>
                                    </td>
                                </tr>

                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No. Kontak</th>
                                    <th>Form Pemeriksaan</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
