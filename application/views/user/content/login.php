<div class="container">
    <div id="basic-form" class="section">
        <div class="row">
            <div class="col s12 m2 l3"></div>
            <div class="col s12 m8 l6">
                <p class="caption">Form Login</p>
                <div class="divider"></div>
                <div class="card-panel">
                    <!-- <h4 class="header2">Basic Form</h4> -->
                    <div class="row">
                        <form class="col s12" action="login/proses_login" method="POST">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="ed_nip" name="ed_nip" type="text" required>
                                    <label for="ed_nip">NIP</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="ed_password" name="ed_password" type="password" required>
                                    <label for="ed_password">Password</label>
                                </div>
                            </div>

                            <br>
                            <div class="divider"></div>
                            <br>

                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn waves-effect waves-light right" type="submit" name="action">Login
                                        <i class="material-icons right">near_me</i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col s12 m2 l3"></div>
        </div>
    </div>
</div>
