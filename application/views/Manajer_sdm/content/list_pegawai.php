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
                                <th>Tingkatan User</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pasien as $data): ?>

                            <tr>
                                <td><?= $data->du_id ?>
                                </td>
                                <td><?= $data->du_nama ?>
                                </td>
                                <td><?= $data->du_tanggal_lahir ?>
                                </td>
                                <td><?= $data->du_jenis_kelamin ?>
                                </td>
                                <td><?= ucwords(str_replace('_', ' ', $data->du_role)) ?>
                                </td>
                            </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>
