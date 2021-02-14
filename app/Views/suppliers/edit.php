<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="container">
  <div>
    <h1>
      Edit Supplier
    </h1>
  </div>
  <hr><br>
  <div class="col-md-6 offset-md-3">
    <form action="<?= '/suppliers/update/' . $supplier->id ?>" method="post">
      <?= csrf_field() ?>
      <div class="form-group">
        <label class="form-label">Name</label>
        <input value="<?= $supplier->name ?>" type="text" name="name" class="form-control" required />
      </div>
      <div class="form-group mt-3">
        <label class="form-label">Address</label>
        <textarea name="address" class="form-control" required><?= $supplier->address ?></textarea>
      </div>
      <a href="/suppliers" class="btn mt-4 btn-secondary">Back</a>
      <button type="submit" class="btn mt-4 btn-primary">Update</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>
