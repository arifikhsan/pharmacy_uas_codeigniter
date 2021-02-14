<?= $this->extend('layouts/blank') ?>

<?= $this->section('content') ?>
<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-10 col-lg-12 col-md-9">

    <div class="my-5 border-0 shadow-lg card o-hidden">
      <div class="p-0 card-body">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
          <div class="col-lg-6">
            <div class="" style="padding: 10rem 3rem 10rem 3rem">
              <div class="text-center">
                <h1 class="mb-4 text-gray-900 h4">Login</h1>
              </div>
              <form action="/auth/create" class="user" method="post">
                <div class="form-group">
                  <input value="<?= old('username') ?>" name="username" type="text" class="form-control form-control-user <?= $validation->hasError('username') ? 'is-invalid' : '' ?>" aria-describedby="usernameHelp" placeholder="Enter username..." autofocus/>
                  <?php if ($validation->hasError('username')) : ?>
                    <div class="invalid-feedback">
                      <?= $validation->getError('username') ?>
                    </div>
                  <?php endif ?>
                </div>
                <div class="form-group">
                  <input value="<?= old('password') ?>" name="password" type="password" class="form-control form-control-user <?= $validation->hasError('password') ? 'is-invalid' : '' ?>" placeholder="Password">
                  <?php if ($validation->hasError('password')) : ?>
                    <div class="invalid-feedback">
                      <?= $validation->getError('password') ?>
                    </div>
                  <?php endif ?>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Login
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
<?= $this->endSection() ?>
