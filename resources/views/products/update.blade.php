@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-body">
        <h4 class="card-title">Tambah Produk</h4>
            <form action="{{route('products.update')}}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" name="kode" class="form-control" placeholder="Kode Product">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Product">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea  name="deskripsi" class="form-control" placeholder="Deskripsi Product"></textarea>
                </div>
            
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="number" name="stok" class="form-control" placeholder="Stok Product">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control" placeholder="Harga Product">
                </div>
                <div class="form-group">
                    <label for="berat">Berat</label>
                    <input type="number" name="berat" class="form-control w-25" placeholder="Berat Product">
                    <label for="berat">gram</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection