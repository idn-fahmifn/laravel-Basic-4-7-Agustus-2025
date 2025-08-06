@extends('template.template')

@section('content')
    <div class="card p-4">
        <div class="card-title d-flex justify-content-between mb-4">

            <h5>Kategori Produk</h5>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCategory">
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

    <!-- Modal -->
    <div class="modal fade" id="createCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
