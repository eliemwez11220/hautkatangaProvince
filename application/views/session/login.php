<main role="main" class="mt-5 pt-5">
    <div class="login-box">

        <?php
        if (isset($page_error)) { ?>
            <div class="container">
                <h6 class="text-danger alert alert-light font-weight-bold text-center">
                    <?= $page_error; ?>
                </h6>
            </div>
        <?php } ?>
        <div class="col-sm-6 col-lg-4 offset-lg-4 offset-sm-0">
        <div class="card">
            <div class="card-header text-center bg-light text-dark font-weight-bold">
                <h2>Authentification</h2>
            </div>
            <!--Card content-->
            <div class="card-body">
                <form action="<?= base_url() . 'main/login' ?>" method="post" class="login-form">
                    <!-- Username -->
                    <div class="md-form">
                        <input type="text" id="asset_username" name="asset_username"
                               class="form-control-lg border-dark font-weight-bold" autofocus
                               value="<?= set_value('asset_username'); ?>">
                        <label for="asset_username" class="font-weight-bold"> Saisissez votre nom utilisateur </label>
                    </div>
                    <!-- Password -->
                    <div class="md-form">
                        <input type="password" id="asset_password" name="asset_password"
                               class="form-control-lg border-dark font-weight-bold"
                               value="<?= set_value('asset_password'); ?>">
                        <label for="asset_password" class="font-weight-bold"> Saisissez votre mot de passe</label>
                    </div>
                    <!-- Message notification if error detect -->
                    <?= form_error('asset_username', '<em class="text-danger">', '</em>') ?><br/>
                    <?= form_error('asset_password', '<em class="text-danger">', '</em>') ?>
                    <div class="card-footer white">
                        <button class="btn btn-block btn-light text-dark font-weight-bold" type="submit"
                                value="Se connecter">Ouvrir session
                        </button>
                    </div>
                </form>

                <?php
                echo "<b class='text text-red'>" . $this->session->error_login . "</b>"; ?>
                <?= form_close() ?>
                <!-- Form -->
            </div>
            </div>
        </div>
    </div>

</main>

