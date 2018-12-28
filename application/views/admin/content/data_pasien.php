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
                                    <th rowspan="2">ID</th>
                                    <th rowspan="2">Nama</th>
                                    <th rowspan="2">Tanggal Lahir</th>
                                    <th rowspan="2">Tempat Lahir</th>
                                    <th rowspan="2">Jenis Kelamin</th>
                                    <th rowspan="2">No. Kontak</th>
                                    <th rowspan="2">Alamat</th>
                                    <th rowspan="2">Faskes Utama</th>
                                    <th colspan="3">Aksi</th>
                                </tr>
                                <tr>
                                    <th>Print</th>
                                    <th>View</th>
                                    <th>Hapus</th>
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
                                    <td><?= $data->pd_tempat_lahir ?>
                                    </td>
                                    <td><?= $data->pd_jenis_kelamin ?>
                                    </td>
                                    <td><?= $data->pd_nomor_narahubung ?>
                                    </td>
                                    <td><?= $data->pd_alamat ?>
                                    </td>
                                    <td><?= $data->pd_faskes_utama ?>
                                    </td>
                                    <td><a class="waves-effect waves-light btn-floating" href="http://localhost/Klinik/admin/print_pasien/<?= $data->pd_id ?>"><i
                                                class="material-icons left" target="_blank">print</i>
                                            Print</a>
                                    </td>
                                    <td><a class="waves-effect waves-light btn-floating" href="http://localhost/Klinik/admin/view_pasien/<?= $data->pd_id ?>"><i
                                                class="material-icons left">visibility</i>
                                            View</a>
                                    </td>
                                    <td><a class="waves-effect waves-light btn-floating" href="http://localhost/Klinik/admin/hapus_pasien/<?= $data->pd_id ?>"><i
                                                class="material-icons left">delete</i>
                                            Hapus</a></td>
                                </tr>

                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="2">ID</th>
                                    <th rowspan="2">Nama</th>
                                    <th rowspan="2">Tanggal Lahir</th>
                                    <th rowspan="2">Tempat Lahir</th>
                                    <th rowspan="2">Jenis Kelamin</th>
                                    <th rowspan="2">No. Kontak</th>
                                    <th rowspan="2">Alamat</th>
                                    <th rowspan="2">Faskes Utama</th>
                                    <th>Print</th>
                                    <th>View</th>
                                    <th>Hapus</th>
                                </tr>
                                <tr>
                                    <th colspan="3">Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
