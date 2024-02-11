<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>ZenBlog</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="<?= base_url() ?>">Blog</a></li>
                <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <?= view_cell('App\Cells\CategoryMenu::render', ['view' => 'categoryMenu']); ?>
                </li>
                <li><a href="<?= url_to('contact') ?>">Contact</a></li>
                <?php if (session()->has('auth')) { ?>
                    <li><a href="<?= url_to('profile') ?>">Profile</a></li>
                    <li><a href="<?= url_to('logout') ?>">Logout</a></li>
                    <li><a href="#">
                            <img src="<?= session()->get('user')->avatar; ?>" style="margin-right: 5px;" width="40" height="40" class="rounded-circle">
                            Bem vindo, <?= session()->get('user')->fullName ?></a></li>

                <?php } else { ?>
                    <li><a href="<?= url_to('login') ?>">Login</a></li>
                    <li><a href="<?= url_to('register') ?>">Registrar-se</a></li>

                <?php } ?>
            </ul>
        </nav><!-- .navbar -->

        <div class="position-relative">
            <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
            <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
            <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

            <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
            <i class="bi bi-list mobile-nav-toggle"></i>

            <!-- ======= Search Form ======= -->
            <div class="search-form-wrap js-search-form-wrap">
                <form action="<?= url_to('search') ?>" method="get" class="search-form">
                    <span class="icon bi-search"></span>
                    <input type="submit" value="" style="display: none;">
                    <input type="text" name="s" placeholder="Search" class="form-control">
                    <button class="btn js-search-close"><span class="bi-x"></span></button>
                </form>
            </div><!-- End Search Form -->

        </div>

    </div>

</header><!-- End Header -->