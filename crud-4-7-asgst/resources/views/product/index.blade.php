@extends('template.template')

@section('content')
    <div class="card p-4">
        <div class="card-title d-flex justify-content-between mb-4">

            <h5>Data Produk</h5>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCategory">
                Tambah Produk
            </button>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Pilihan</th>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="createCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mt-4">
                            <label for="">Nama Produk</label>
                            <input type="text" name="product_name" required class="form-control">
                        </div>
                        <div class="form-group mt-4">
                            <label for="">Jumlah</label>
                            <input type="number" name="qty" required class="form-control">
                        </div>
                        <div class="form-group mt-4">
                            <label for="">Harga</label>
                            <input type="number" name="price" required class="form-control">
                        </div>
                        <div class="form-group mt-4">
                            <label for="">Gambar Produk</label>
                            <input type="file" name="image" accept="image/*" required class="form-control">
                        </div>
                        <div class="form-group mt-4">
                            <label for="">Deskripsi</label>
                            <textarea name="desc" required class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
