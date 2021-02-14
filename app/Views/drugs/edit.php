<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container">
  <div>
    <h1>
      Edit Drug
    </h1>
  </div>
  <div class="my-4 col-md-6">
    <form action="<?= '/drugs/update/' . $drug->id ?>" method="post">
      <?= csrf_field() ?>
      <div class="form-group">
        <label class="form-label">Supplier</label>
        <select value="<?= $drug->supplier_id ?>" name="supplier_id" class="form-control">
          <?php foreach ($suppliers as $supplier) : ?>
            <option value="<?= $supplier->id; ?>"><?= $supplier->name; ?></option>
          <?php endforeach; ?>
        </select>
        <?php if ($validation->hasError('supplier_id')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('supplier_id') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="form-group">
        <label class="form-label">Name</label>
        <input value="<?= $drug->name ?>" type="text" name="name" class="form-control <?= $validation->hasError('name') ? 'is-invalid' : '' ?>" required>
        <?php if ($validation->hasError('name')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('name') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="form-group">
        <label class="form-label">Producer</label>
        <input value="<?= $drug->producer ?>" type="text" name="producer" class="form-control <?= $validation->hasError('producer') ? 'is-invalid' : '' ?>" required>
        <?php if ($validation->hasError('producer')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('producer') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Price</label>
        <input value="<?= $drug->price ?>" type="number" name="price" class="form-control <?= $validation->hasError('price') ? 'is-invalid' : '' ?>" required>
        <?php if ($validation->hasError('price')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('price') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Quantity</label>
        <input value="<?= $drug->quantity ?>" type="number" name="quantity" class="form-control <?= $validation->hasError('quantity') ? 'is-invalid' : '' ?>" required>
        <?php if ($validation->hasError('quantity')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('quantity') ?>
          </div>
        <?php endif ?>
      </div>
      <a href="/drugs" class="mt-4 btn btn-secondary">Back</a>
      <button type="submit" class="mt-4 btn btn-primary">Update</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>
