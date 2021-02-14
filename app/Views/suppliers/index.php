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
      Suppliers
    </h1>
    <a class="mt-2 btn btn-sm btn-secondary" href="/">
      Back
    </a>
    <a class="mt-2 text-white btn btn-sm btn-info" href="/suppliers/add">
      Add new
    </a>
  </div>
  <div class="mt-4 table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Name</th>
          <th scope="col">City</th>
          <th scope="col" class="d-none d-lg-block">Phone Number</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($suppliers as $i => $supplier) : ?>
          <tr>
            <th scope="row"><?= $i + 1 ?></th>
            <td><?= $supplier->name ?></td>
            <td><?= $supplier->city ?></td>
            <td class="d-none d-lg-block"><?= $supplier->phone_number ?></td>
            <td>
              <a class="text-white btn btn-sm btn-success" href="<?= '/suppliers/show/' . $supplier->id ?>">
                Show
              </a>
              <a class="text-white btn btn-sm btn-info" href="<?= '/suppliers/edit/' . $supplier->id ?>">
                Edit
              </a>
              <a class="btn btn-sm btn-danger" href="<?= '/suppliers/delete/' . $supplier->id ?>">
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
