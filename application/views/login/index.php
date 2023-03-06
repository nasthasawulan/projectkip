<br>
<br>
<style>
    body {
        background-color: #D8D8D8;
        background-image: url();
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
</style>

<div class="container col-xl-9 col-xxl-8 px-3 py-4">
    <div class="row p-1 mt-5 mx-auto col-lg-7 pb-0 pe-lg-0 pt-lg-5 align-items-center bg-light rounded-3 border shadow">
        <div class="col p-3 p-lg-5 pt-lg-1">

            <center>
                <h2><b>Kartu Indonesia Pintar Kuliah</b></h2>
                <h2>Login</h2>
            </center>
            <br>
            <?= $this->session->flashdata('pesan'); ?>
            <?php echo $this->session->flashdata('msg'); ?>
            <form class="user" method="post" action="<?= base_url('Akun_Controller') ?>">
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <span class="pl-5 required align-self-end text-red font-weight-medium font-size-lg" title="required">*</span>
                    <input type="text" class="form-control" name="username" id="username" class="form-control" value="<?= set_value('username'); ?>" placeholder="username" required>
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group mt-4">
                    <label for="password" class="form-label">Password</label>
                    <span class="pl-5 required align-self-end text-red font-weight-medium font-size-lg" title="required">*</span>
                    <input type="password" class="form-control" name="password" id="password" class="form-control" id="password" placeholder="********" required>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <br>
                <div class="d-grid mt-3 gap-2 mb-2">
                    <button class="btn btn-outline-primary" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

