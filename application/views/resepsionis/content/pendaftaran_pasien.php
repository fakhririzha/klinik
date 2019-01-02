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
        <form class="col s8" action="<?php echo base_url('resepsionis/pendaftaran_pasien_proses') ?>"
          method="POST">
          <div class="card-panel white">
            <br>
            <div class="row">
              <center>
                <h3>Pendaftaran Pasien</h3>
              </center>
              <div class="input-field col s12">
                <input name="dp_nama" type="text" class="" required>
                <label for="dp_nama">Nama Lengkap</label>
              </div>
            </div>
            <div class="row">
              <div class="col s6 m4 l3">
                <p>Jenis Kelamin
                </p>
                <p>
                  <label>
                    <input class="with-gap" name="dp_jenis_kelamin" type="radio" value="Pria" required />
                    <span>Pria</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input class="with-gap" name="dp_jenis_kelamin" type="radio" value="Wanita" required />
                    <span>Wanita</span>
                  </label>
                </p>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="dp_tempat_lahir" type="text" class="" required>
                <label for="dp_tempat_lahir">Tempat Lahir</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <label for="dp_tanggal_lahir">Tanggal Lahir</label>
                <input placeholder="YYYY-MM-DD" name="dp_tanggal_lahir" type="text" class="datepicker" required>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="dp_alamat" type="text" class="" required>
                <label for="dp_alamat">Alamat</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="dp_nik" type="text" class="" required>
                <label for="dp_nik">NIK (Nomor Induk Kependudukan)</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="dp_nomor_telepon" type="number" class="" required>
                <label for="dp_nomor_telepon">Nomor Telepon</label>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col s8"></div>
              <div class="col s4">
                <button class="btn waves-effect blue" type="submit" name="daftar" value="daftar">Daftar
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
