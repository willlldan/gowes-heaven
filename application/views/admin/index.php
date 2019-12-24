<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <!-- start jumlah pesanan -->
  <div class="row">
    <!-- card pesanan bulan ini -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pesanan bulan ini</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end card bulan ini -->
    <!-- start pesanan pending -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pesanan pending</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end pesanan pending -->
  </div>

  <!-- tambah produk -->
  <div class="row ml-1">
    <a href="#" class="btn btn-primary btn-icon-split">
      <span class="icon text-white-10 mt-1">
        <i class="fas fa-plus-square"></i>
      </span>
      <span class="text">Tambah Produk</span>
    </a>
  </div>
  <!-- end tambah produk -->
  <!-- end jumlah pesanan -->

  <!-- start daftar produk -->
  <div class="card shadow mb-4 mt-1">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Produk</h6>
    </div>
    <div class="card-body">
      <!-- single product -->
      <div class="card mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
          <h6 class="m-0 font-weight-bold text-primary">Double Seat Bike</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse" id="collapseCardExample">
          <div class="card-body">
            This is a collapsable card example using Bootstrap's built in collapse functionality. <strong>Click on the card header</strong> to see the card body collapse and expand!
          </div>
        </div>
        <!-- end single product -->
      </div>
    </div>
  </div>
  <!-- end datar produk -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->