@extends('template.template')

@section('content')
    <div class="card p-4">
        <div class="card-title d-flex justify-content-between">

            <h3>Kategori Produk</h3>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Kategori
            </button>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <th>Nama Kategori</th>
                    <th>Jumlah Produk</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>lorem</td>
                        <td>test</td>
                        <td>test</td>
                    </tr>
                    <tr>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
