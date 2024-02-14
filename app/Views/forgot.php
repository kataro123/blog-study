<?php
echo $this->extend('master');

echo $this->section('content');

?>


<section class="contact mb-5">
    <div class="container">


        <div class="row d-flex justify-content-center">
            <div class="card text-center" style="width: 300px;">
                <div class="card-header h5 text-white bg-primary">Password Reset</div>
                <?= session()->get('error') ? "<span class='text text-bg-danger fs-5 mt-1'> " . session()->get('error') . "</span>" : '' ?>
                <?= session()->get('forgot_not_sent') ? "<span class='text text-bg-danger fs-5 mt-1'> " . session()->get('forgot_not_sent') . "</span>" : '' ?>
                <?= session()->get('not_updated') ? "<span class='text text-bg-danger fs-5 mt-1'> " . session()->get('not_updated') . "</span>" : '' ?>
                <?= session()->get('updated') ? "<span class='text text-bg-success fs-5 mt-1'> " . session()->get('updated') . "</span>" : '' ?>
                <?= session()->get('forgot_sent') ? "<span class='text text-bg-success fs-5 mt-1'> " . session()->get('forgot_sent') . "</span>" : '' ?>
                <?= session()->get('token_not_found') ? "<span class='text text-bg-danger fs-5 mt-1'> " . session()->get('token_not_found') . "</span>" : '' ?>
                <form action="<?= url_to('forgot.store') ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="card-body px-5">
                        <p class="card-text py-2">
                            Digite seu email e enviaremos as instruções de como resetar sua senha.
                        </p>
                        <div class="form-outline">
                            <input type="email" name="email" id="typeEmail" class="form-control my-3" value="filipearrudafaga97@gmail.com">
                            <label for="typeEmail" class="form-label">Email Input</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Reset password</button>
                        <div class="d-flex justify-content-between mt-4">
                            <a href="<?= url_to('login') ?>">Login</a>
                            <a href="<?= url_to('register') ?>">Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</section>


<?= $this->endSection(); ?>