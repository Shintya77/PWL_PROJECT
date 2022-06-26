@extends('layouts.admin.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card corona-gradient-card">
            <div class="card-body py-0 px-0 px-sm-3">
              <div class="row align-items-center">
                <div class="col-4 col-sm-3 col-xl-2">
                  <img src="{{asset('admin/template')}}/assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                </div>
                <div class="col-5 col-sm-7 col-xl-8 p-0">
                  <h4 class="mb-1 mb-sm-0">Selamat Datang Admin</h4>
                  <p class="mb-0 font-weight-normal d-none d-sm-block">Cek Data Pegadaian dengan Mudah</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{ $jumlah_nasabah }}</h3>
                    {{-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> --}}
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Nasabah Baru</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{$jumlah_barang}}</h3>
                    {{-- <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> --}}
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Barang Baru</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{$jumlah_pinjaman}}</h3>
                    {{-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p> --}}
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Pinjaman Baru</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{$jumlah_pembayaran}}</h3>
                    {{-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> --}}
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Pembayaran Baru</h6>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Transaction History</h4>
              <canvas id="transaction-history" class="transaction-chart"></canvas>
              <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                <div class="text-md-center text-xl-left">
                  <h6 class="mb-1">Transfer to Paypal</h6>
                  <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                </div>
                <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                  <h6 class="font-weight-bold mb-0">$236</h6>
                </div>
              </div>
              <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                <div class="text-md-center text-xl-left">
                  <h6 class="mb-1">Tranfer to Stripe</h6>
                  <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                </div>
                <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                  <h6 class="font-weight-bold mb-0">$593</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-row justify-content-between">
                <h4 class="card-title mb-1">Open Projects</h4>
                <p class="text-muted mb-1">Your data status</p>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="preview-list">
                    <div class="preview-item border-bottom">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-primary">
                          <i class="mdi mdi-file-document"></i>
                        </div>
                      </div>
                      <div class="preview-item-content d-sm-flex flex-grow">
                        <div class="flex-grow">
                          <h6 class="preview-subject">Admin dashboard design</h6>
                          <p class="text-muted mb-0">Broadcast web app mockup</p>
                        </div>
                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                          <p class="text-muted">15 minutes ago</p>
                          <p class="text-muted mb-0">30 tasks, 5 issues </p>
                        </div>
                      </div>
                    </div>
                    <div class="preview-item border-bottom">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-success">
                          <i class="mdi mdi-cloud-download"></i>
                        </div>
                      </div>
                      <div class="preview-item-content d-sm-flex flex-grow">
                        <div class="flex-grow">
                          <h6 class="preview-subject">Wordpress Development</h6>
                          <p class="text-muted mb-0">Upload new design</p>
                        </div>
                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                          <p class="text-muted">1 hour ago</p>
                          <p class="text-muted mb-0">23 tasks, 5 issues </p>
                        </div>
                      </div>
                    </div>
                    <div class="preview-item border-bottom">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-info">
                          <i class="mdi mdi-clock"></i>
                        </div>
                      </div>
                      <div class="preview-item-content d-sm-flex flex-grow">
                        <div class="flex-grow">
                          <h6 class="preview-subject">Project meeting</h6>
                          <p class="text-muted mb-0">New project discussion</p>
                        </div>
                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                          <p class="text-muted">35 minutes ago</p>
                          <p class="text-muted mb-0">15 tasks, 2 issues</p>
                        </div>
                      </div>
                    </div>
                    <div class="preview-item border-bottom">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-danger">
                          <i class="mdi mdi-email-open"></i>
                        </div>
                      </div>
                      <div class="preview-item-content d-sm-flex flex-grow">
                        <div class="flex-grow">
                          <h6 class="preview-subject">Broadcast Mail</h6>
                          <p class="text-muted mb-0">Sent release details to team</p>
                        </div>
                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                          <p class="text-muted">55 minutes ago</p>
                          <p class="text-muted mb-0">35 tasks, 7 issues </p>
                        </div>
                      </div>
                    </div>
                    <div class="preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-warning">
                          <i class="mdi mdi-chart-pie"></i>
                        </div>
                      </div>
                      <div class="preview-item-content d-sm-flex flex-grow">
                        <div class="flex-grow">
                          <h6 class="preview-subject">UI Design</h6>
                          <p class="text-muted mb-0">New application planning</p>
                        </div>
                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                          <p class="text-muted">50 minutes ago</p>
                          <p class="text-muted mb-0">27 tasks, 4 issues </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <div class="row">
        <div class="col-sm-4 grid-margin">
          <div class="card">
            <div class="card-body">
              <h5>Nasabah</h5>
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    <h2 class="mb-0">{{$jumlah_nasabah}}</h2>
                    {{-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> --}}
                  </div>
                  <h6 class="text-muted font-weight-normal">Jumlah Data Nasabah Saat Ini</h6>
                </div>
                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                  <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 grid-margin">
          <div class="card">
            <div class="card-body">
              <h5>Barang</h5>
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    <h2 class="mb-0">{{$jumlah_barang}}</h2>
                    {{-- <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p> --}}
                  </div>
                  <h6 class="text-muted font-weight-normal">Jumlah Data Barang Saat Ini</h6>
                </div>
                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                  <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 grid-margin">
          <div class="card">
            <div class="card-body">
              <h5>Pinjaman</h5>
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    <h2 class="mb-0">{{$jumlah_pinjaman}}</h2>
                    {{-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p> --}}
                  </div>
                  <h6 class="text-muted font-weight-normal">Jumlah Data Pinjaman Saat Ini</h6>
                </div>
                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                  <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection