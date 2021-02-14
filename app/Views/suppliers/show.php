<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container my-4">
  <div>
    <h1>
      Show Supplier
    </h1>
  </div>
  <hr><br>
  <div class="">
    <div>
      <div>
        <label class="font-weight-bold">Id</label>
        <p><?= $supplier->id ?></p>
      </div>
      <div>
        <label class="font-weight-bold">Name</label>
        <p><?= $supplier->name ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Address</label>
        <p><?= $supplier->address ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Phone Number</label>
        <p><?= $supplier->phone_number ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Created At</label>
        <p><?= date("l, M d, Y | H:i:s", strtotime($supplier->created_at)) ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Updated At</label>
        <p><?= date("l, M d, Y | H:i:s", strtotime($supplier->updated_at)) ?></p>
      </div>
      <a href="/suppliers" class="mt-4 btn btn-secondary">Back</a>
      <a href="/suppliers/edit/<?= $supplier->id ?>" class="mt-4 btn btn-info">Edit</a>
      <a href="/suppliers/delete/<?= $supplier->id ?>" class="mt-4 btn btn-danger">Delete</a>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
