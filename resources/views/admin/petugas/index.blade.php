@extends('layouts.admin.master')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fa fa-table"></i> Data Petugas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <div>
                    <a href="?page=add-pengguna" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Tambah Data</a>
                    <a href="?page=add-pengguna" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Edit Data</a>
                    <a href="?page=add-pengguna" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Hapus Data</a>
                  </div>
                  <br>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Id Petugas</th>
                        <th>Nama Petugas</th>
                        <th>Username</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>Alamat</th>
                        <th>Jabatan</th>
                      </tr>
                    </thead>
                    <tbody>
            
                      {{-- <?php
                          $no = 1;
                          $sql = $koneksi->query("select * from pengguna");
                          while ($data= $sql->fetch_assoc()) {
                        ?>
            
                      <tr>
                        <td>
                          <?php echo $no++; ?>
                        </td>
                        <td>
                          <?php echo $data['nama_pengguna']; ?>
                        </td>
                        <td>
                          <?php echo $data['username']; ?>
                        </td>
                        <td>
                          <?php echo $data['level']; ?>
                        </td>
                        <td>
                          <a href="?page=edit-pengguna&kode=<?php echo $data['id_pengguna']; ?>" title="Ubah"
                           class="btn btn-success btn-sm">
                            <i class="fa fa-edit"></i>
                          </a>
                          <a href="?page=del-pengguna&kode=<?php echo $data['id_pengguna']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
                           title="Hapus" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                            </>
                        </td>
                      </tr>
            
                      <?php
                          }
                        ?> --}}
                    </tbody>
                    </tfoot>
                  </table>
                </div>
              </div>
              <!-- /.card-body -->
          </div>
 @endsection