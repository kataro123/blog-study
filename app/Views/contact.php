<?php

echo $this->extend('master');
echo $this->section('content');

?>

<section id="contact" class="contact mb-5">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-12 text-center mb-2">
                <h1 class="page-title">Contact us</h1>
            </div>
        </div>

        <?= session()->getFlashdata('contact_sent') ? "<div class='text text-bg-success text-center p-2 fs-3'>" . session()->getFlashdata('contact_sent') . "</div>" : '' ?>
        <?= session()->getFlashdata('contact_not_sent') ? "<div class='text text-bg-danger text-center p-2 fs-3'>" . session()->getFlashdata('contact_not_sent') . "</div>" : '' ?>

        <!-- <div class="row gy-4">

            <div class="col-md-4">
                <div class="info-item">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Address</h3>
                    <address>A108 Adam Street, NY 535022, USA</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-item info-item-borders">
                    <i class="bi bi-phone"></i>
                    <h3>Phone Number</h3>
                    <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-item">
                    <i class="bi bi-envelope"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:info@example.com">info@example.com</a></p>
                </div>
            </div>

        </div> -->

        <div class="form mt-5">
            <form action="<?= url_to('contact.store') ?>" method="post" role="form" class="php-email-form">
                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="<?= old('name') ?>">
                        <span class="text text-danger"><?= session()->get('errors')['name'] ?? '' ?></span>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" value="<?= old('email') ?>">
                        <span class="text text-danger"><?= session()->get('errors')['email'] ?? '' ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="<?= old('subject') ?>">
                    <span class="text text-danger"><?= session()->get('errors')['subject'] ?? '' ?></span>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message"><?= old('message') ?></textarea>
                    <span class="text text-danger"><?= session()->get('errors')['message'] ?? '' ?></span>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
        </div><!-- End Contact Form -->

    </div>
</section>

<?= $this->endSection(); ?>