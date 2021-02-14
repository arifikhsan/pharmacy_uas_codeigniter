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
        <input value="<?= $supplier->name ?>" type="text" name="name" class="form-control" required />
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">City</label>
        <input value="<?= $supplier->city ?>" name="city" class="form-control" required />
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Address</label>
        <textarea name="address" class="form-control" required><?= $supplier->address ?></textarea>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Phone Number</label>
        <input value="<?= $supplier->phone_number ?>" name="phone_number" class="form-control" required />
      </div>
      <a href="/suppliers" class="mt-4 btn btn-secondary">Back</a>
      <button type="submit" class="mt-4 btn btn-primary">Update</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>
