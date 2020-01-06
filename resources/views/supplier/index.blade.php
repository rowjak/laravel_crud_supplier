@extends('template/bootstrap')
@section('title')
    Halaman Menampilkan Supplier
@endsection

@section('content')
<div class="card">
        <div class="card-header">
            Tampil Data Supplier
        </div>
        <div class="card-body">
            <a href="{{route('supplier.create')}}" class="btn btn-info">Tambah</a>
            <hr>
            <table class="table table-bordered datatables">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Supplier</th>
                    <th>Telp Supplier</th>
                    <th>Alamat Supplier</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data_supplier as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$row->nama_supplier}}</td>
                        <td>{{$row->telp_supplier}}</td>
                        <td>{{$row->alamat_supplier}}</td>
                        <td>
                        <form method="post" action="{{ route('supplier.destroy',[$row->kd_supplier]) }}">
                        <a href="{{ route('supplier.edit',[$row->kd_supplier]) }}" class="btn btn-warning">Ubah</a>
                        <a href="{{ route('supplier.show',[$row->kd_supplier]) }}" class="btn btn-primary">Detail</a>
                        @csrf
                        {{ METHOD_FIELD('DELETE') }}
                        <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
