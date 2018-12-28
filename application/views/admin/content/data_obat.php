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
            <p class="caption">Data Obat</p>
            <div class="divider"></div>
            <div class="row">
                <div class="col s12">
                    <div class="card-panel">
                        <table id="pasien" class="display centered hover responsive-table">
                            <thead>
                                <tr>
                                    <th rowspan="2">ID</th>
                                    <th rowspan="2">Nama</th>
                                    <th rowspan="2">Jenis Obat</th>
                                    <th rowspan="2">Harga Beli</th>
                                    <th rowspan="2">Harga Jual</th>
                                    <th rowspan="2">Kuantitas</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                <tr>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($obat as $data): ?>

                                <tr>
                                    <td><?= $data->ib_id ?>
                                    </td>
                                    <td><?= $data->ib_nama ?>
                                    </td>
                                    <td><?= $data->ib_jenis ?>
                                    </td>
                                    <td><?= $data->ib_harga_beli ?>
                                    </td>
                                    <td><?= $data->ib_harga_jual ?>
                                    </td>
                                    <td><?= $data->ib_kuantitas ?>
                                    </td>
                                    <td><a class="waves-effect waves-light btn-floating" href="http://localhost/Klinik/admin/hapus_obat/<?= $data->ib_id ?>"><i
                                                class="material-icons left">delete</i>
                                            Hapus</a></td>
                                </tr>

                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="2">ID</th>
                                    <th rowspan="2">Nama</th>
                                    <th rowspan="2">Jenis Obat</th>
                                    <th rowspan="2">Harga Beli</th>
                                    <th rowspan="2">Harga Jual</th>
                                    <th rowspan="2">Kuantitas</th>
                                    <th>Hapus</th>
                                </tr>
                                <tr>
                                    <th colspan="2">Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
