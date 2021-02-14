<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container">
  <div>
    <h1>
      Add New User
    </h1>
  </div>
  <div class="my-4 col-md-6">
    <form action="/users/insert" method="post">
      <?= csrf_field() ?>
      <div class="form-group">
        <label class="form-label">Username</label>
        <input name="username" class="form-control <?= $validation->hasError('username') ? 'is-invalid' : '' ?>" required />
        <?php if ($validation->hasError('username')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('username') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Password</label>
        <input name="city" type="password" class="form-control <?= $validation->hasError('password') ? 'is-invalid' : '' ?>" required />
        <span>Kolom ini akan di hash dengan md5 ketika disimpan.</span>
        <?php if ($validation->hasError('password')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('password') ?>
          </div>
        <?php endif ?>
      </div>
      <a href="/users" class="mt-4 btn btn-secondary">Back</a>
      <button type="submit" class="mt-4 btn btn-primary">Submit</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>
