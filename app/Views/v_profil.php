<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<main>  

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="<?= base_url() ?>NiceAdmin/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2><?= session()->get('username'); ?></h2>
              <h3><?= session()->get('role'); ?></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title text-center">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Username</div>
                    <div class="col-lg-9 col-md-8"><?= session()->get('username'); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Role</div>
                    <div class="col-lg-9 col-md-8"><?= session()->get('role'); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?= session()->get('email'); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Waktu Login</div>
                    <div class="col-lg-9 col-md-8"><?= session()->get('waktuLogin'); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status Login</div>
                    <div class="col-lg-9 col-md-8">
                    <?php
                        if (!session()->getFlashData('failed')) {
                        ?>
                            Sudah Login
                        <?php
                        }
                        ?>
                    </div>
                  </div>
                </div>
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
<?= $this->endSection() ?>