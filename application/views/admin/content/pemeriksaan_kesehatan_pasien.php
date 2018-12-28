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
            <p class="caption">Form Pemeriksaan Kesehatan</p>
            <div class="divider"></div>
            <div id="basic-form" class="section">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card-panel">
                            <!-- <h4 class="header2">Basic Form</h4> -->
                            <div class="row">
                                <form class="col s12" action="../insert_pemeriksaan_kesehatan/<?= $patient_id ?>"
                                    method="POST">

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="pd_name" name="pd_name" type="text" value="<?= $pd_name ?>"
                                                disabled>
                                            <label for="pd_name">Nama Pasien</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <label for="pd_dob">Tanggal Lahir</label>
                                            <input placeholder="YYYY-MM-DD" id="pd_dob" name="pd_dob" type="text" class="datepicker"
                                                value="<?= $pd_dob ?>"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select id="pn_type" name="pn_type">
                                                <option value="" disabled selected>Tipe Pemeriksaan Kesehatan</option>
                                                <option value="Baru">Baru</option>
                                                <option value="Lanjutan">Lanjutan</option>
                                                <option value="Berkala">Berkala</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <label for="pn_date">Tanggal Pemeriksaan</label>
                                            <input placeholder="YYYY-MM-DD" id="pn_date" name="pn_date" type="text"
                                                class="datepicker">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="pn_time_counseling" name="pn_time_counseling" type="number">
                                            <label for="pn_time_counseling">Lama Pemeriksaan (dalam menit)</label>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="divider"></div>
                                    <br>

                                    <div class="row">
                                        <p>Pengecekan Penyakit</p>
                                        <?php foreach ($column_ros as $data): ?>

                                        <?php if (($data->Field != 'pn_id') && ($data->Field != 'ros_comments')): ?>
                                        <div class="col s6 m4 l3">
                                            <p><?php echo ucwords(str_replace('_', ' ', str_replace('_or_', '_/_', substr($data->Field, 3)))); ?>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="<?= $data->Field ?>"
                                                        type="radio" value="1" required />
                                                    <span>Ada</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="<?= $data->Field ?>"
                                                        type="radio" value="0" required />
                                                    <span>Tidak Ada</span>
                                                </label>
                                            </p>
                                        </div>

                                        <?php elseif ($data->Field == 'ros_comments'): ?>
                                        <div class="input-field col s12">
                                            <input id="pd_name" name="<?= $data->Field ?>"
                                                type="text" required>
                                            <label for="pd_name"><?= ucwords(substr($data->Field, 4)) ?></label>
                                        </div>

                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>

                                    <br>
                                    <div class="divider"></div>
                                    <br>

                                    <div class="row">
                                        <p>Tanda-Tanda Vital</p>
                                        <?php foreach ($column_vs as $data): ?>

                                        <?php if ($data->Field != 'pn_id'): ?>
                                        <div class="input-field col s6 m4 l3">
                                            <input id="pd_name" name="<?= $data->Field ?>"
                                                type="text" required>
                                            <label for="pd_name"><?= ucwords(str_replace('_', ' ', str_replace('_or_', '_/_', substr($data->Field, 6)))) ?></label>
                                        </div>

                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>

                                    <br>
                                    <div class="divider"></div>
                                    <br>

                                    <div class="row">
                                        <p>Pemeriksaan Fisik</p>
                                        <?php foreach ($column_pe as $data): ?>

                                        <?php if (($data->Field != 'pn_id') && ($data->Field != 'pn_pe_comments') && ($data->Field != 'pn_pe_assessment_and_plan') && $data->Field != 'pn_pe_medical_decision_making'): ?>
                                        <div class="col s6 m4 l3">
                                            <p><?php echo ucwords(str_replace('_', ' ', str_replace('_or_', '_/_', substr($data->Field, 6)))); ?>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="<?= $data->Field ?>"
                                                        type="radio" value="1" required />
                                                    <span>Normal</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="<?= $data->Field ?>"
                                                        type="radio" value="0" required />
                                                    <span>Abnormal</span>
                                                </label>
                                            </p>
                                        </div>

                                        <?php elseif (($data->Field == 'pn_pe_comments') || ($data->Field == 'pn_pe_assessment_and_plan')): ?>
                                        <div class="input-field col s12">
                                            <input id="pd_name" name="<?= $data->Field ?>"
                                                type="text" required>
                                            <label for="pd_name"><?= ucwords(str_replace('_', ' ', str_replace('_or_', '_/_', substr($data->Field, 6)))) ?></label>
                                        </div>

                                        <?php elseif ($data->Field == 'pn_pe_medical_decision_making'): ?>
                                        <div class="input-field col s12">
                                            <select id="<?= $data->Field ?>"
                                                name="<?= $data->Field ?>"
                                                required>
                                                <option value="" disabled selected><?= ucwords(str_replace('_', ' ', str_replace('_or_', '_/_', substr($data->Field, 6)))) ?>
                                                </option>
                                                <option value="SF">SF</option>
                                                <option value="L">L</option>
                                                <option value="M">M</option>
                                                <option value="H">H</option>
                                                <option value="See Continuation Sheet">See Continuation Sheet</option>
                                            </select>
                                        </div>

                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                                                <i class="material-icons right">send</i>
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
