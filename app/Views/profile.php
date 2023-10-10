    <?= $this->extend('layouts/app_profile') ?>

    <?= $this->section('content') ?>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #0e171d">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="<?= base_url('img/aflogo.png'); ?>" alt="" width="30" height="24" class="d-inline-block align-text-top"> F Production</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galery.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Jumbotron Start -->
    <section class="jumbotron text-center">
        <img class="rounded-circle img-thumbnail" src="<?= base_url('img/Pprofile.jpg'); ?>" alt="Auvar Mahsa Fahlevi" width="200">
        <h1 class="display-4"><?= $nama ?></h1>
        <p class="lead">Editor || Front-End || Photographer</p>
    </section>
    <!-- Jumbotron End -->

    <!-- About Start -->
    <section class="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5">
                <div class="col">
                    <p>Nama saya <?= $nama ?> dengan NPM <?= $npm ?> dari kelas <?= $kelas ?> yang merupakan seorang web developer front end dan masih dalam tahap belajar agar dapat membuat tampilan web yang baik dari segi tampilan dan juga fungsinya.</p>
                </div>
            </div>
        </div>
        </div>
    </section><br><br><br>
    <!-- About End -->

    <!-- Footer Start -->
    <footer class="text-white text-center pb-5 pt-5" style="background-color: #000000">
        <p>Created by <a href="https://www.instagram.com/auvar_mf/" class="text-white fw-bold">&copy;Auvar MF</a> 2023</p><br>
        <P>Follow Me</P>
        <div class="social-icons">
            <a href="https://github.com/Auvarmf" target="_blank"><img src="<?= base_url('img/githublogo.png'); ?>" alt="GitHub" height="50"></a>
            <a href="https://www.instagram.com/auvar_mf/" target="_blank"><img src="<?= base_url('img/iglogo.png'); ?>" alt="Instagram" height="30"></a>
            <a href="https://www.youtube.com/channel/UCDBdzARUuqHoJ01RDIdXJog" target="_blank"><img src="<?= base_url('img/youtubelogo.png'); ?>" alt="YouTube" height="30"></a>
        </div>
    </footer>
    <!-- Footer End -->
    <?= $this->endSection('content') ?>