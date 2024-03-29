<?php echo $this->extend('master');
echo $this->section('content');
?>
<section id="contact" class="contact mb-5">
    <div class="container">
        <span class="text text-success fs-3"><?= session()->get('user_created') ?? '' ?></span>
        <span class="text text-danger fs-3"><?= session()->get('user_not_created') ?? '' ?></span>
        <?php if (!session()->has('auth')) { ?>
            <h2>Register</h2>


            <form method="post" action="<?= url_to('register.store') ?>">
                <?= csrf_field(); ?>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <span class="text text-bg-danger" style="font-size: 20px;"><?= session()->get('errors')['firstName'] ?? '' ?></span>
                            <input type="text" id="form3Example1" name="firstName" class="form-control" placeholder="Yout first name" value="<?= old('firstName') ?>" />
                            <label class="form-label" for="form3Example1">First name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <span class="text text-bg-danger" style="font-size: 20px;"><?= session()->get('errors')['lastName'] ?? '' ?></span>
                            <input type="text" id="form3Example2" name="lastName" class="form-control" placeholder="Your last name" value="<?= old('lastName') ?>" />
                            <label class="form-label" for="form3Example2">Last name</label>
                        </div>
                    </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <span class="text text-bg-danger" style="font-size: 20px;"><?= session()->get('errors')['email'] ?? '' ?></span>
                    <input type="email" id="form3Example3" name="email" class="form-control" placeholder="Your email" value="<?= old('email') ?>" />
                    <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <span class="text text-bg-danger" style="font-size: 20px;"><?= session()->get('errors')['password'] ?? '' ?></span>
                    <input type="password" id="form3Example4" name="password" class="form-control" placeholder="Your password" value="<?= old('password') ?>" />
                    <label class="form-label" for="form3Example4">Password</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
            <?php } else { ?>
                <div class="text text-bg-info fs-2 text-center p-2">Your are already Logged In | <a href="<?= url_to('logout') ?>">Logout</a></div>
            <?php } ?>
    </div>
    </form>
    </div>

</section>


<?= $this->endSection(); ?>