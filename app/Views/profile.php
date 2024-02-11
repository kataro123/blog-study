<?php

echo $this->extend('master');
echo $this->section('content'); ?>

<section id="contact" class="contact mb-5">
    <div class="container">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="password-tab" data-bs-toggle="tab" data-bs-target="#password" type="button" role="tab" aria-controls="password" aria-selected="false">Password</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="avatar-tab" data-bs-toggle="tab" data-bs-target="#avatar" type="button" role="tab" aria-controls="avatar" aria-selected="false">Avatar</button>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <!-- Form Profile -->
                <h2 class="mt-3">Profile</h2>
                <span id="message"></span>
                <span id="error"></span>
                <form id="form-update-profile">
                    <input type="hidden" name="id" value="<?= session()->get('user')->id ?>">
                    <?= csrf_field() ?>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="form-label" for="form3Example1">First name</label>
                                <input type="text" id="form3Example1" name="firstName" class="form-control" value="<?= session()->get('user')->firstName ?>" />
                                <span id="error-firstName"></span>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="form-label" for="form3Example2">Last name</label>
                                <input type="text" id="form3Example2" name="lastName" class="form-control" value="<?= session()->get('user')->lastName ?>" />
                                <span id="error-lastName"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="btnUpdate">Email address</label>
                        <input type="text" id="btnUpdate" name="email" class="form-control" value="<?= session()->get('user')->email ?>" />
                        <span id="error-email"></span>
                    </div>

                    <!-- Submit button -->
                    <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4 btn-update">Update</button>
                </form>

                <!-- Form Profile -->

            </div>
            <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                <!-- Form Profile -->
                <h2 class="mt-3">Password</h2>
                <span id="message"></span>
                <span id="error"></span>
                <form id="form-update-password">
                    <input type="hidden" name="id" value="<?= session()->get('user')->id ?>">
                    <?= csrf_field() ?>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="form-label" for="form3Example1">Current Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Your current password" />
                                <span id="error-password"></span>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="form-label" for="form3Example2">New Password</label>
                                <input type="password" id="newPassword" name="newPassword" class="form-control" placeholder="Your new Password" />
                                <span id="error-newPassword"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="btnUpdate">Confirm new Password</label>
                        <input type="password" id="connewpass" name="confirmNewPassword" class="form-control" placeholder="Confirm New Password" />
                        <span id="error-confirmNewPassword"></span>
                    </div>

                    <!-- Submit button -->
                    <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4" id="btn-update-password">Update</button>
                </form>

                <!-- Form Profile -->
            </div>
            <div class="tab-pane fade" id="avatar" role="tabpanel" aria-labelledby="avatar-tab">
                <h2>Avatar</h2>
                <img src="" alt="" id="preview-image">
                <form enctype="multipart/form-data" id="form-update-avatar">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id" value="<?= session()->get('user')->id ?>">
                    <input type="file" id="avatar-image">
                    <button id="btnChangeAvatar" disabled>Change Avatar</button>
                </form>
            </div>
        </div>

    </div>
</section>

<?= $this->section('js'); ?>
<script src="<?= base_url('assets/js/sweetalert2.js') ?>"></script>
<script src="<?= base_url('assets/js/profileUpdate.js') ?>"></script>
<script src="<?= base_url('assets/js/profileUpdatePassword.js') ?>"></script>
<script src="<?= base_url('assets/js/profileUpdateAvatar.js') ?>"></script>

<?= $this->endSection(); ?>


<?= $this->endSection(); ?>