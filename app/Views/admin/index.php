<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="mb-4 d-sm-flex align-items-center justify-content-between">
    <h1 class="mb-0 text-gray-800 h3">Dashboard</h1>
    <a href="#" class="shadow-sm d-none d-sm-inline-block btn btn-sm btn-primary"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <a href="/drugs" class="mb-4 col-xl-3 col-md-6">
      <div class="py-2 shadow card border-left-primary h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="mr-2 col">
              <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">Drugs</div>
              <div class="mb-0 text-gray-800 h5 font-weight-bold">1000</div>
            </div>
            <div class="col-auto">
              <i class="text-gray-300 fas fa-calendar fa-2x"></i>
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
              <div class="mb-0 text-gray-800 h5 font-weight-bold">1000</div>
            </div>
            <div class="col-auto">
              <i class="text-gray-300 fas fa-dollar-sign fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </a>

    <div class="mb-4 col-xl-3 col-md-6">
      <div class="py-2 shadow card border-left-info h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="mr-2 col">
              <div class="mb-1 text-xs font-weight-bold text-info text-uppercase">Transaction</div>
              <div class="mb-0 text-gray-800 h5 font-weight-bold">1000</div>
            </div>
            <div class="col-auto">
              <i class="text-gray-300 fas fa-clipboard-list fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="mb-4 col-xl-3 col-md-6">
      <div class="py-2 shadow card border-left-warning h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="mr-2 col">
              <div class="mb-1 text-xs font-weight-bold text-warning text-uppercase">
                Transaction Detail</div>
              <div class="mb-0 text-gray-800 h5 font-weight-bold">1800</div>
            </div>
            <div class="col-auto">
              <i class="text-gray-300 fas fa-comments fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>
