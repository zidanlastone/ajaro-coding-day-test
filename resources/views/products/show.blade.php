@extends('layouts.app')
@section('content')

<div class="container"> 
    <a href="{{route('products.create')}}" class="btn btn-primary m-3"> <i class="icon ion-md-add"></i> Tambah</a>
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Daftar Produk</h4>
            <table class="table table-sm" >
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->kode}}</td>
                        <td>{{$product->nama}}</td>
                        <td>{{$product->harga}}</td>
                        <td>
                        
                        <form action="{{route('products.destroy', $product->id)}}" method="POST">
                        <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning"> <i class="icon ion-md-create"></i> Ubah</a>
                        @csrf
                        @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="icon ion-md-trash"></i> Hapus</button> 
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection