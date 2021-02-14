<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="container">
  <div>
    <h1>
      Add New Drug
    </h1>
  </div>
  <hr><br>
  <div class="col-md-6 offset-md-3">
    <form action="/drugs/insert" method="post">
      <?= csrf_field() ?>
      <div class="form-group">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>
      <div class="form-group mt-3">
        <label class="form-label">Price</label>
        <input type="number" name="price" class="form-control" required>
      </div>
      <a href="/drugs" class="btn mt-4 btn-secondary">Back</a>
      <button type="submit" class="btn mt-4 btn-primary">Submit</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>
