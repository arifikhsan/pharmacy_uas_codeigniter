<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="mb-4 d-sm-flex align-items-center justify-content-between">
    <h1 class="mb-0 text-gray-800 h3">Dashboard</h1>
  </div>

  <?php if (session()->getFlashdata('message')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= session()->getFlashdata('message'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
  <?php endif; ?>

  <div class="row">
    <a href="/drugs" class="mb-4 col-xl-3 col-md-6">
      <div class="py-2 shadow card border-left-primary h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="mr-2 col">
              <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">Drugs</div>
              <div class="mb-0 text-gray-800 h5 font-weight-bold"><?= $drugCount ?></div>
            </div>
            <div class="col-auto">
              <i class="text-gray-300 fas fa-capsules fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </a>

    <a href="/suppliers" class="mb-4 col-xl-3 col-md-6">
      <div class="py-2 shadow card border-left-success h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="mr-2 col">
              <div class="mb-1 text-xs font-weight-bold text-success text-uppercase">Suppliers</div>
              <div class="mb-0 text-gray-800 h5 font-weight-bold"><?= $supplierCount ?></div>
            </div>
            <div class="col-auto">
              <i class="text-gray-300 fas fa-truck fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </a>

    <a href="/transactions" class="mb-4 col-xl-3 col-md-6">
      <div class="py-2 shadow card border-left-info h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="mr-2 col">
              <div class="mb-1 text-xs font-weight-bold text-info text-uppercase">Transaction</div>
              <div class="mb-0 text-gray-800 h5 font-weight-bold"><?= $transactionCount ?></div>
            </div>
            <div class="col-auto">
              <i class="text-gray-300 fas fa-file-invoice-dollar fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </a>

    <a href="/transactiondetails" class="mb-4 col-xl-3 col-md-6">
      <div class="py-2 shadow card border-left-warning h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="mr-2 col">
              <div class="mb-1 text-xs font-weight-bold text-warning text-uppercase">Transaction Detail</div>
              <div class="mb-0 text-gray-800 h5 font-weight-bold"><?= $transactionDetailCount ?></div>
            </div>
            <div class="col-auto">
              <i class="text-gray-300 fas fa-file-invoice fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>

  <div class="row">
    <a href="/users" class="mb-4 col-xl-3 col-md-6">
      <div class="py-2 shadow card border-left-primary h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="mr-2 col">
              <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">Users</div>
              <div class="mb-0 text-gray-800 h5 font-weight-bold"><?= $userCount ?></div>
            </div>
            <div class="col-auto">
              <i class="text-gray-300 fas fa-user-astronaut fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>
