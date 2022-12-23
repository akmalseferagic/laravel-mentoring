@extends('layout.master')

@section('heading')
Kelola
@endsection

@section('content')
<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Mentor</h6>
                <a href="/data-mentor/form" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="bi bi-plus text-white-50"></i> TAMBAH
                </a>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                {{-- Table Mentor --}}
                <table class="table table-striped mt-4">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">MENTOR</th>
                        <th scope="col">JENIS KELAMIN</th>
                        <th scope="col">AKTIVITAS</th>
                        <th scope="col">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>90%</td>
                        <td>
                            <a href="/data-mentor/detail" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="bi bi-eye text-white"></i> 
                            </a>
                            <a href="/presensi-kelompok" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="bi bi-pencil-square text-white"></i> 
                            </a>
                            <a href="/presensi-kelompok" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                <i class="bi bi-trash text-white"></i> 
                            </a>
                        </td>                    
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>90%</td>
                        <td>
                            <a href="/presensi-kelompok" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="bi bi-eye text-white"></i> 
                            </a>
                            <a href="/presensi-kelompok" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="bi bi-pencil-square text-white"></i> 
                            </a>
                            <a href="/presensi-kelompok" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                <i class="bi bi-trash text-white"></i> 
                            </a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>90%</td>
                        <td>
                            <a href="/presensi-kelompok" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="bi bi-eye text-white"></i> 
                            </a>
                            <a href="/presensi-kelompok" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="bi bi-pencil-square text-white"></i> 
                            </a>
                            <a href="/presensi-kelompok" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                <i class="bi bi-trash text-white"></i> 
                            </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>    
@endsection