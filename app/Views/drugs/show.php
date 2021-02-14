<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container my-4">
  <div>
    <h1>
      Show Drug
    </h1>
  </div>
  <hr><br>
  <div class="">
    <div>
      <div>
        <label class="font-weight-bold">Id</label>
        <p><?= $drug->id ?></p>
      </div>
      <div>
        <label class="font-weight-bold">Supplier Name</label>
        <p><?= $drug->supplier_name ?></p>
      </div>
      <div>
        <label class="font-weight-bold">Name</label>
        <p><?= $drug->drug_name ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Producer</label>
        <p><?= $drug->drug_producer ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Price</label>
        <p><?= $drug->drug_price ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Quantity</label>
        <p><?= $drug->drug_quantity ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Created At</label>
        <p><?= date("l, M d, Y | H:i:s", strtotime($drug->drug_created_at)) ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Updated At</label>
        <p><?= date("l, M d, Y | H:i:s", strtotime($drug->drug_updated_at)) ?></p>
      </div>
      <a href="/drugs" class="mt-4 btn btn-secondary">Back</a>
      <a href="/drugs/edit/<?= $drug->id ?>" class="mt-4 btn btn-info">Edit</a>
      <a href="/drugs/delete/<?= $drug->id ?>" class="mt-4 btn btn-danger">Delete</a>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
