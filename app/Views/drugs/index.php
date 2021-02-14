<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
  <?php if (session()->getFlashdata('message')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= session()->getFlashdata('message'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
  <?php endif; ?>
  <div>
    <h1>
      Drugs
    </h1>
    <a class="mt-2 btn btn-sm btn-secondary" href="/admin">
      Back
    </a>
    <a class="mt-2 text-white btn btn-sm btn-info" href="/drugs/add">
      Add new
    </a>
  </div>
  <div class="mt-4 table-responsive">
    <table class="table mt-4 table-striped">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Producer</th>
          <th scope="col">Supplier</th>
          <th scope="col">Quantity</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($drugs as $i => $drug) : ?>
          <tr>
            <th scope="row"><?= $i + 1 ?></th>
            <td><?= $drug->drug_name ?></td>
            <td><?= number_format($drug->drug_price) ?></td>
            <td><?= $drug->drug_producer ?></td>
            <td><?= $drug->supplier_name ?></td>
            <td><?= number_format($drug->drug_quantity) ?></td>
            <td>
              <a class="text-white btn btn-sm btn-success" href="<?= '/drugs/show/' . $drug->id ?>">
                Show
              </a>
              <a class="text-white btn btn-sm btn-info" href="<?= '/drugs/edit/' . $drug->id ?>">
                Edit
              </a>
              <a class="btn btn-sm btn-danger" href="<?= '/drugs/delete/' . $drug->id ?>">
                Delete
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</div>
<?= $this->endSection() ?>
