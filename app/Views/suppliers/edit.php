<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container">
  <div>
    <h1>
      Edit Supplier
    </h1>
  </div>
  <div class="my-4 col-md-6">
    <form action="<?= '/suppliers/update/' . $supplier->id ?>" method="post">
      <?= csrf_field() ?>
      <div class="form-group">
        <label class="form-label">Name</label>
        <input value="<?= $supplier->name ?>" type="text" name="name" class="form-control <?= $validation->hasError('name') ? 'is-invalid' : '' ?>" required />
        <?php if ($validation->hasError('name')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('name') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">City</label>
        <input value="<?= $supplier->city ?>" name="city" class="form-control <?= $validation->hasError('city') ? 'is-invalid' : '' ?>" required />
        <?php if ($validation->hasError('city')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('city') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Address</label>
        <textarea name="address" class="form-control <?= $validation->hasError('address') ? 'is-invalid' : '' ?>"><?= $supplier->address ?></textarea>
        <?php if ($validation->hasError('address')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('address') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Phone Number</label>
        <input value="<?= $supplier->phone_number ?>" name="phone_number" class="form-control <?= $validation->hasError('phone_number') ? 'is-invalid' : '' ?>" required />
        <?php if ($validation->hasError('phone_number')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('phone_number') ?>
          </div>
        <?php endif ?>
      </div>
      <a href="/suppliers" class="mt-4 btn btn-secondary">Back</a>
      <button type="submit" class="mt-4 btn btn-primary">Update</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>
