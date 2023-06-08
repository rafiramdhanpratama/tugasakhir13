@extends('layout.layout-admin')

@section('content')
    <div class="wrapper">
        <!-- navbar -->
        @include('component.navbar-admin')
        <!-- /.navbar -->

        <!-- sidebar -->
        @include('component.sidebar')
        <!-- /.sidebar -->

        <div class="content-wrapper" style="min-height: 2171.31px;">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Transaksi</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Supplier</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-outline card-info">
                                <div class="card-body">
                                    <form action="{{ url('dashboard-produk', $produk->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <div class="form-group">
                                            <label>Id Produk</label>
                                            <input type="text" class="form-control" placeholder="ID produk" name="id_produk"
                                                value="{{$produk->id_produk}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Id Pelanggan</label>
                                            <input type="text" class="form-control" placeholder="disable" name="id_pelanggan" disabled
                                                value="{{$transaksi->id_pelanggan}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Id Karyawan</label>
                                            <input type="text" class="form-control" placeholder="disable" name="id_karyawan" disabled
                                                value="{{$transaksi->id_karyawan}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="date" class="form-control" placeholder="Tanggal" name="tanggal"
                                                value="{{$transaksi->tanggal}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Total</label>
                                            <input type="text" class="form-control" placeholder="Total" name="total"
                                                value="{{$transaksi->total}}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- footer -->
        @include('component.footer')

 @endsection