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
            <div class="col s2"></div>
            <div class="col s8">
                <?php if ($this->session->flashdata('validation_errors') == 'true'): ?>
                <div class="card-panel red">
                    <?php echo $this->session->userdata('validation_errors_msg'); ?>
                </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('error_message') != ''): ?>
                <div class="card-panel red">
                    <span class="white-text"><?= $this->session->flashdata('error_message') ?></span>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col s2"></div>
        <div id="card-stats">
            <div class="row">
                <div class="col s2"></div>
                <form class="col s8" action="<?php echo base_url('manajer_sdm/tambah_pegawai_proses') ?>"
                    method="POST">
                    <div class="card-panel white">
                        <br>
                        <div class="row">
                            <center>
                                <h3>Tambah Pegawai</h3>
                            </center>
                            <div class="input-field col s12">
                                <input name="du_nama" type="text" class="" required>
                                <label for="du_nama">Nama Lengkap</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6 m4 l3">
                                <p>Jenis Kelamin
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="du_jenis_kelamin" type="radio" value="Pria"
                                            required />
                                        <span>Pria</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="du_jenis_kelamin" type="radio" value="Wanita"
                                            required />
                                        <span>Wanita</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="du_tempat_lahir" type="text" class="" required>
                                <label for="du_tempat_lahir">Tempat Lahir</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <label for="du_tanggal_lahir">Tanggal Lahir</label>
                                <input placeholder="YYYY-MM-DD" name="du_tanggal_lahir" type="text" class="datepicker"
                                    required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="du_alamat" type="text" class="" required>
                                <label for="du_alamat">Alamat</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="du_nomor_telepon" type="number" class="" required>
                                <label for="du_nomor_telepon">Nomor Telepon</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <label>Tingkatan User</label>
                                <select name="du_role" class="browser-default">
                                    <option value="" disabled selected>Pilih Salah Satu</option>
                                    <option value="resepsionis">Resepsionis</option>
                                    <option value="kasir">Kasir</option>
                                    <option value="staff_kesehatan">Staff Kesehatan</option>
                                    <option value="manajer_sdm">Manajer SDM</option>
                                    <option value="staff_aset">Staff Aset</option>
                                    <option value="staff_keuangan">Staff Keuangan</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col s8"></div>
                            <div class="col s4">
                                <button class="btn waves-effect blue" type="submit" name="tambah" value="tambah">tambah
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                </form>
                <div class="col s2"></div>
            </div>
            <!--end container-->
</section>
