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
            <div id="basic-form" class="section">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card-panel">
                            <!-- <h4 class="header2">Basic Form</h4> -->
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" value="<?= $pasien[0]->pd_nama ?>"
                                        readonly>
                                    <label for="pd_nama">Nama</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" value="<?= $pasien[0]->pd_tanggal_lahir ?>"
                                        readonly>
                                    <label for="pd_tanggal_lahir">Tanggal Lahir</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" value="<?= $pasien[0]->pd_tempat_lahir ?>"
                                        readonly>
                                    <label for="pd_tempat_lahir">Tempat Lahir</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" value="<?= $pasien[0]->pd_jenis_kelamin ?>"
                                        readonly>
                                    <label for="pd_jenis_kelamin">Jenis Kelamin</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" value="<?= $pasien[0]->pd_alamat ?>"
                                        readonly>
                                    <label for="pd_alamat">Alamat</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" value="<?= $pasien[0]->pd_nomor_darurat ?>"
                                        readonly>
                                    <label for="pd_nomor_darurat">Nomor Darurat</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" value="<?= $pasien[0]->pd_nomor_narahubung ?>"
                                        readonly>
                                    <label for="pd_nomor_narahubung">Nomor Narahubung</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" value="<?= $pasien[0]->pd_relasi_nomor_narahubung ?>"
                                        readonly>
                                    <label for="pd_relasi_nomor_narahubung">Relasi Narahubung</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" value="<?= $pasien[0]->pd_faskes_utama ?>"
                                        readonly>
                                    <label for="pd_faskes_utama">Faskes Utama</label>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="divider"></div>
                        <br>

                        <div class="row">
                            <div class="input-field col s12">
                                <a class="btn waves-effect waves-light right" href="<?= base_url('admin/edit_pasien/' . $patient_id) ?>">Edit
                                    <i class="material-icons right">edit</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
