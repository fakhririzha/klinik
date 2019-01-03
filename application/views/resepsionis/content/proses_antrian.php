</br></br>
<div class="row">
    <div class="col s2">
    </div>
    <div class="col s4">
        <br><br><br>
        <h5>No. antri terakhir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h5>
    </div>
    <div class="col s2">
        <div class="card-panel white">
            <h1>&nbsp;<?= $latest_antrian ?>
            </h1>
        </div>
    </div>
    <div class="col s3">
        <form action="<?= base_url('resepsionis/proses_antrian_proses') ?>"
            method="post">
            <input type="hidden" name="antrian_panggil" value="<?= $latest_antrian ?>">
            <br><br><br><br>
            <button class="btn waves-effect blue" type="submit" name="panggil" value="panggil">Panggil
                <i class="material-icons right">send</i></button>
        </form>
    </div>
    <div class="col s1">
    </div>
