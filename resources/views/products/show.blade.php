@extends('layouts.app')
@section('content')

<div class="container"> 
    <a href="{{route('products.create')}}" class="btn btn-primary m-3">Tambah</a>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Daftar Produk</h4>
            <table class="table">
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
                        <button class="btn btn-warning">Ubah</button>
                        <button class="btn btn-danger" onclick="deleteProduct({{$product->id}})">Hapus</button> 
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    function deleteProduct(id){
        console.log(id);
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type:'DELETE',
            url: "{{route('products.destroy', "id")}}",
            data: {
                "id": id,
                "_token": token
            }
        });
    }
</script>
@endsection