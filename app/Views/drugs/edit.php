<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="container">
  <div>
    <h1>
      Edit Drug
    </h1>
  </div>
  <hr><br>
  <div class="col-md-6 offset-md-3">
    <form action="<?= '/drugs/update/' . $drug->id ?>" method="post">
      <?= csrf_field() ?>
      <div class="form-group">
        <label class="form-label">Name</label>
        <input value="<?= $drug->name ?>" type="text" name="name" class="form-control" placeholder="name" required />
      </div>
      <div class="form-group mt-3">
        <label class="form-label">Price</label>
        <input value="<?= $drug->price ?>" type="number" name="price" class="form-control" placeholder="price" required>
      </div>
      <a href="/drugs" class="btn mt-4 btn-secondary">Back</a>
      <button type="submit" class="btn mt-4 btn-primary">Update</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>
