@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card shadow-sm">
        <div class="card-body">
        <h4 class="card-title">Tambah Produk</h4>
            <form action="{{route('products.update', $product->id )}}" method="POST">
            
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" name="kode" class="form-control" value="{{$product->kode}}" placeholder="Kode Product">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{$product->nama}}"  placeholder="Nama Product">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea  name="deskripsi" class="form-control" placeholder="Deskripsi Product">{{$product->deskripsi}}</textarea>
                </div>
            
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="number" name="stok" class="form-control" value="{{$product->stok}}" placeholder="Stok Product">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control" value="{{$product->harga}}" placeholder="Harga Product">
                </div>
                <div class="form-group">
                    <label for="berat">Berat</label>
                    <div class="form-inline">
                    <input type="number" name="berat" class="form-control w-25" value="{{$product->berat}}" placeholder="Berat Product">
                    <label for="berat" class="m-1">gram</label>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection