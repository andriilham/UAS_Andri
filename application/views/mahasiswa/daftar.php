<body id="purple">
    <div class="section"></div>
    <main>
        <center>

            <div class="section"></div>

            <h5 class="white-text">Daftar Mahasiswa</h5>
            <div class="section"></div>
            <div class="container">
                <div class="z-depth-1 grey lighten-4 form-fo">

                    <form class="col m12" method="post" action="<?= site_url("loginmhs/submitDaftar"); ?>">
                        <?php echo $this->session->flashdata('pesan_salahmhs'); ?>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='number' name='npm' id='npm' />
                                <label for='npm'>Masukkan NPM anda</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name='password1' id='password1' />
                                <label for='password1'>Masukkan kata sandi</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name='password2' id='password2' />
                                <label for='password2'>Masukkan ulang kata sandi</label>
                            </div>
                        </div>

                        <br />
                        <center>
                            <div class='row'>
                                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Daftar</button>
                            </div>
                            <div class="row">
                                <a href="<?= site_url(); ?>" class="col s12 btn btn-large waves-effect indigo lighten-5 indigo-text">Batal</a>
                            </div>
                            <div class="row">
                                <a href="<?= site_url("loginmhs"); ?>" class="">Sudah memiliki akun? login disini</a>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </center>

        <div class="section"></div>
        <div class="section"></div>
    </main>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>