@extends('layouts.admin')

@section('title', 'Manajemen Outlet')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Outlet</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary btn-sm" id="btn-tambah-outlet">
                            <i class="fas fa-plus"></i> Tambah Outlet
                        </button>
                    </div>
                </div>
                <div class="card-body table-responsive">

                    @if (session('success'))
                        <div class="alert alert-success m-3">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger m-3">{{ session('error') }}</div>
                    @endif

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Jam Operasional</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($outlets as $outlet)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($outlet->image)
                                            <img src="{{ asset('storage/' . $outlet->image) }}" alt="{{ $outlet->name }}"
                                                width="60" height="60" class="img-thumbnail">
                                        @else
                                            <span class="badge badge-secondary">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $outlet->name }}</td>
                                    <td>{{ Str::limit($outlet->address, 40) }}</td>
                                    <td>{{ $outlet->telp }}</td>
                                    <td>{{ $outlet->operation_hours ?? '-' }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm btn-edit"
                                            data-id="{{ $outlet->id }}"
                                            data-url="{{ route('outlets.edit', $outlet->id) }}">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>

                                        <form action="{{ route('outlets.destroy', $outlet->id) }}" method="POST"
                                            class="d-inline form-hapus">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Belum ada data outlet.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {{ $outlets->links() }}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="outletModal" tabindex="-1" role="dialog" aria-labelledby="outletModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="outletModalLabel">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="outletForm" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="outlet_id" id="outlet_id">
                        <input type="hidden" name="_method" id="form_method">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nama Outlet <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                    <small id="name-error" class="text-danger"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telp">Nomor Telepon <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="telp" name="telp" required>
                                    <small id="telp-error" class="text-danger"></small>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">Alamat <span class="text-danger">*</span></label>
                            <input class="form-control" id="address" name="address" rows="3" required></input>
                            <small id="address-error" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label for="operation_hours">Jam Operasional</label>
                            <input type="text" class="form-control" id="operation_hours" name="operation_hours"
                                placeholder="Contoh: Senin - Jumat, 08:00 - 17:00">
                            <small id="operation_hours-error" class="text-danger"></small>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="link1">Link Embed Google Maps</label>
                                    <input type="text" class="form-control" id="link1" name="link1"
                                        placeholder="ttps://www.google.com/maps/embed?">
                                    <small id="link1-error" class="text-danger"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="link2">Link Koordinat Google Maps</label>
                                    <input type="text" class="form-control" id="link2" name="link2"
                                        placeholder="https://maps.app.goo.gl/">
                                    <small id="link2-error" class="text-danger"></small>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image">Gambar Outlet</label>
                            <input type="file" class="form-control-file" id="image" name="image"
                                accept="image/jpeg,image/png,image/jpg,image/gif">
                            <small class="form-text text-muted">Format: JPG, PNG, GIF. Max: 2MB</small>
                            <small id="image-error" class="text-danger"></small>

                            <!-- Preview Image -->
                            <div id="image-preview-container" class="mt-2" style="display: none;">
                                <img id="image-preview" src="" alt="Preview" class="img-thumbnail"
                                    width="200">
                                <p><small id="current-image-name" class="text-muted"></small></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" id="btn-simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Fungsi untuk membersihkan form dan error
            function clearForm() {
                $('#outletForm')[0].reset();
                $('#outlet_id').val('');
                $('#form_method').val('');
                $('.form-control').removeClass('is-invalid');
                $('.text-danger').empty();
                $('#image-preview-container').hide();
                $('#image-preview').attr('src', '');
            }

            // Preview image saat file dipilih
            $('#image').change(function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview').attr('src', e.target.result);
                        $('#image-preview-container').show();
                        $('#current-image-name').text('File baru: ' + file.name);
                    }
                    reader.readAsDataURL(file);
                }
            });

            // 1. Tampilkan Modal untuk TAMBAH Outlet
            $('#btn-tambah-outlet').click(function() {
                clearForm();
                $('#outletModalLabel').text('Tambah Outlet Baru');
                $('#form_method').val('POST');
                $('#outletForm').attr('action', "{{ route('outlets.store') }}");
                $('#outletModal').modal('show');
            });

            // 2. Tampilkan Modal untuk EDIT Outlet
            $('body').on('click', '.btn-edit', function() {
                clearForm();
                var outletId = $(this).data('id');
                var url = $(this).data('url');

                $('#outletModalLabel').text('Edit Outlet');
                $('#form_method').val('PUT');
                $('#outletForm').attr('action', '/admin/outlets/' + outletId);

                // Ambil data outlet via AJAX
                $.get(url, function(data) {
                    $('#outlet_id').val(data.id);
                    $('#name').val(data.name);
                    $('#address').val(data.address);
                    $('#telp').val(data.telp);
                    $('#link1').val(data.link1);
                    $('#link2').val(data.link2);
                    $('#operation_hours').val(data.operation_hours);

                    // Show existing image if available
                    if (data.image) {
                        $('#image-preview').attr('src', '/storage/' + data.image);
                        $('#image-preview-container').show();
                        $('#current-image-name').text('Gambar saat ini');
                    }

                    $('#outletModal').modal('show');
                }).fail(function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal Mengambil Data',
                        text: (xhr.responseJSON && xhr.responseJSON.error) ? xhr
                            .responseJSON.error : 'Terjadi kesalahan server.'
                    });
                });
            });

            // 3. Proses SIMPAN (Store & Update) via AJAX
            $('#outletForm').submit(function(e) {
                e.preventDefault();

                $('.form-control').removeClass('is-invalid');
                $('.text-danger').empty();

                var formData = new FormData(this);
                var url = $(this).attr('action');
                var method = $('#form_method').val();

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#outletModal').modal('hide');

                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: response.success,
                            timer: 2000,
                            showConfirmButton: false
                        });
                        location.reload();
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            // Tangani error validasi
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('#' + key).addClass('is-invalid');
                                $('#' + key + '-error').text(value[0]);
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops... Terjadi Kesalahan',
                                text: 'Gagal menyimpan data. Silakan coba lagi.'
                            });
                        }
                    }
                });
            });

            // 4. Proses HAPUS via AJAX
            $('body').on('submit', '.form-hapus', function(e) {
                e.preventDefault();

                var form = $(this);
                var url = form.attr('action');
                var token = form.find('input[name="_token"]').val();
                var tableRow = form.closest('tr');

                Swal.fire({
                    title: 'Anda Yakin?',
                    text: "Data yang sudah dihapus tidak bisa dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus Saja!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: url,
                            type: 'POST',
                            data: {
                                '_method': 'DELETE',
                                '_token': token
                            },
                            success: function(response) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Terhapus!',
                                    text: response.success,
                                    timer: 1500,
                                    showConfirmButton: false
                                });
                                location.reload();
                            },
                            error: function(xhr) {
                                var errorMsg = (xhr.responseJSON && xhr.responseJSON
                                        .error) ?
                                    xhr.responseJSON.error : 'Gagal menghapus data.';
                                Swal.fire(
                                    'Gagal!',
                                    errorMsg,
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
