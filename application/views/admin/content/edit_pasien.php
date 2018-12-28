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
            <p class="caption">Registrasi Pasien Baru</p>
            <div class="divider"></div>
            <div id="basic-form" class="section">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card-panel">
                            <!-- <h4 class="header2">Basic Form</h4> -->
                            <div class="row">
                                <form class="col s12" action="../edit_pasien_data/<?= $patient_id ?>"
                                    method="POST">

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="pd_nama" name="pd_nama" type="text" value="<?= $pasien[0]->pd_nama ?>"
                                                required>
                                            <label for="pd_nama">Nama Pasien</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <label for="pd_tanggal_lahir">Tanggal Lahir</label>
                                            <input placeholder="YYYY-MM-DD" id="pd_tanggal_lahir" name="pd_tanggal_lahir"
                                                type="text" class="datepicker" value="<?= $pasien[0]->pd_tanggal_lahir ?>"
                                                required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="pd_tempat_lahir" name="pd_tempat_lahir" type="text" value="<?= $pasien[0]->pd_tempat_lahir ?>"
                                                required>
                                            <label for="pd_tempat_lahir">Tempat Lahir</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s6 m4 l3">
                                            <p>Jenis Kelamin
                                            </p>
                                            <?php if ($pasien[0]->pd_jenis_kelamin == 'Pria'): ?>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="pd_jenis_kelamin" type="radio" value="Pria"
                                                        required checked />
                                                    <span>Pria</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="pd_jenis_kelamin" type="radio" value="Wanita"
                                                        required />
                                                    <span>Wanita</span>
                                                </label>
                                            </p>

                                            <?php elseif ($pasien[0]->pd_jenis_kelamin == 'Wanita'): ?>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="pd_jenis_kelamin" type="radio" value="Pria"
                                                        required />
                                                    <span>Pria</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="pd_jenis_kelamin" type="radio" value="Wanita"
                                                        required checked />
                                                    <span>Wanita</span>
                                                </label>
                                            </p>

                                            <?php else: ?>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="pd_jenis_kelamin" type="radio" value="Pria"
                                                        required />
                                                    <span>Pria</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="pd_jenis_kelamin" type="radio" value="Wanita"
                                                        required />
                                                    <span>Wanita</span>
                                                </label>
                                            </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="pd_alamat" name="pd_alamat" type="text" value="<?= $pasien[0]->pd_alamat ?>"
                                                required>
                                            <label for="pd_alamat">Alamat</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="pd_nomor_darurat" name="pd_nomor_darurat" type="text" value="<?= $pasien[0]->pd_nomor_darurat ?>"
                                                required>
                                            <label for="pd_nomor_darurat">Nomor Darurat</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="pd_nomor_narahubung" name="pd_nomor_narahubung" type="number"
                                                value="<?= $pasien[0]->pd_nomor_narahubung ?>"
                                                required>
                                            <label for="pd_nomor_narahubung">Nomor Narahubung</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="pd_relasi_nomor_narahubung" name="pd_relasi_nomor_narahubung"
                                                type="text" value="<?= $pasien[0]->pd_relasi_nomor_narahubung ?>"
                                                required>
                                            <label for="pd_relasi_nomor_narahubung">Relasi Nomor Narahubung</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="pd_faskes_utama" name="pd_faskes_utama" type="text" value="<?= $pasien[0]->pd_faskes_utama ?>"
                                                required>
                                            <label for="pd_faskes_utama">Faskes Utama</label>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="divider"></div>
                                    <br>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light right" type="submit" name="action">Simpan
                                                Perubahan
                                                <i class="material-icons right">save</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
