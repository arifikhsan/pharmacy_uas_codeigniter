<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container">
  <div>
    <h1>
      Edit Drug
    </h1>
  </div>
  <div class="my-4 col-md-6">
    <form enctype="multipart/form-data" action="<?= '/drugs/update/' . $drug->id ?>" method="post">
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
        <input value="<?= $drug->name ?>" type="text" name="name" class="form-control <?= $validation->hasError('name') ? 'is-invalid' : '' ?>">
        <?php if ($validation->hasError('name')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('name') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="form-group">
        <label class="form-label">Producer</label>
        <input value="<?= $drug->producer ?>" type="text" name="producer" class="form-control <?= $validation->hasError('producer') ? 'is-invalid' : '' ?>">
        <?php if ($validation->hasError('producer')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('producer') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Price</label>
        <input value="<?= $drug->price ?>" type="number" name="price" class="form-control <?= $validation->hasError('price') ? 'is-invalid' : '' ?>">
        <?php if ($validation->hasError('price')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('price') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Quantity</label>
        <input value="<?= $drug->quantity ?>" type="number" name="quantity" class="form-control <?= $validation->hasError('quantity') ? 'is-invalid' : '' ?>">
        <?php if ($validation->hasError('quantity')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('quantity') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="mt-3 form-group">
        <p>Image</p>
        <?php if ($drug->image) : ?>
          <img class="" style="width: 200px; object-fit: contain;" src="<?= base_url() ?>/uploads/<?= $drug->image ?>" alt="<?= $drug->image ?>">
        <?php endif; ?>
        <div class="mt-3 custom-file">
          <input name="image" type="file" class="custom-file-input <?= $validation->hasError('image') ? 'is-invalid' : '' ?>" id="image">
          <label class="custom-file-label" for="image">Choose drug image...</label>
          <?php if ($validation->hasError('image')) : ?>
            <div class="invalid-feedback">
              <?= $validation->getError('image') ?>
            </div>
          <?php endif ?>
        </div>
      </div>
      <a href="/drugs" class="mt-4 btn btn-secondary">Back</a>
      <button type="submit" class="mt-4 btn btn-primary">Update</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>
