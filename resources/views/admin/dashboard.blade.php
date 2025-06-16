@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Selamat datang, {{ $user->name }}</h2>

    {{-- Flash Message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Data Produk Parfum</span>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAdd">+ Tambah Produk</button>
        </div>
        <div class="card-body">
            @if($products->isEmpty())
                <p class="text-muted">Belum ada produk.</p>
            @else
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description ?? '-' }}</td>
                                <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                <td>
                                    <button class="btn btn-sm btn-warning btn-edit"
                                        data-id="{{ $product->id }}"
                                        data-name="{{ $product->name }}"
                                        data-description="{{ $product->description }}"
                                        data-price="{{ $product->price }}">
                                        Edit
                                    </button>
                                    <form action="{{ route('admin.product.delete', $product->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modalAdd" tabindex="-1">
  <div class="modal-dialog">
    <form action="{{ route('admin.product.add') }}" method="POST" class="modal-content">
        @csrf
        <div class="modal-header"><h5 class="modal-title">Tambah Produk</h5></div>
        <div class="modal-body">
            <input type="text" name="name" class="form-control mb-2" placeholder="Nama Produk" required>
            <textarea name="description" class="form-control mb-2" placeholder="Deskripsi"></textarea>
            <input type="number" name="price" class="form-control mb-2" placeholder="Harga (Rp)" required>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
  </div>
</div>

<!-- Modal Edit Global -->
<div class="modal fade" id="modalEdit" tabindex="-1">
  <div class="modal-dialog">
    <form method="POST" id="formEdit" class="modal-content">
        @csrf
        @method('PUT')
        <div class="modal-header"><h5 class="modal-title">Edit Produk</h5></div>
        <div class="modal-body">
            <input type="text" name="name" id="editName" class="form-control mb-2" required>
            <textarea name="description" id="editDescription" class="form-control mb-2"></textarea>
            <input type="number" name="price" id="editPrice" class="form-control mb-2" required>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-warning">Simpan</button>
        </div>
    </form>
  </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const modalEdit = new bootstrap.Modal(document.getElementById('modalEdit'));
    console.log(modalEdit)
    const editForm = document.getElementById('formEdit');

    document.querySelectorAll('.btn-edit').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.dataset.id;
            const name = this.dataset.name;
            const description = this.dataset.description;
            const price = this.dataset.price;

            // Set values
            editForm.action = `/admin/product/update/${id}`;
            document.getElementById('editName').value = name;
            document.getElementById('editDescription').value = description;
            document.getElementById('editPrice').value = price;

            modalEdit.show();
        });
    });
});
</script>
@endpush
