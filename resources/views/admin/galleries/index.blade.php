@extends('layouts.admin')

@section('title', 'Manajemen Gallery')
@section('page-title', 'Manajemen Gallery')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Gallery</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary btn-sm" id="btn-tambah-gallery">
                            <i class="fas fa-plus"></i> Tambah Gallery
                        </button>
                    </div>
                </div>
                <div class="card-body">

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <div class="row">
                        @forelse ($galleries as $gallery)
                            <div class="col-md-3 col-sm-6">
                                <div class="card">
                                    <img src="{{ asset('storage/' . $gallery->image) }}" class="card-img-top"
                                        alt="{{ $gallery->title }}" style="height: 200px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ Str::limit($gallery->title, 30) }}</h5>
                                        <p class="card-text">
                                            <small class="text-muted">
                                                <i class="fas fa-tag"></i> {{ $gallery->category }}
                                            </small>
                                        </p>
                                        <p class="card-text">{{ Str::limit($gallery->desc, 50) }}</p>
                                        <div>
                                            <button type="button" class="btn btn-warning btn-edit mr-2"
                                                data-id="{{ $gallery->id }}"
                                                data-url="{{ route('galleries.edit', $gallery->id) }}">
                                                <i class="fas fa-edit"></i> Edit
                                            </button> 
                                            <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST"
                                                class="d-inline form-hapus">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fas fa-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="alert alert-info text-center">Belum ada data gallery.</div>
                            </div>
                        @endforelse
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $galleries->links() }}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galleryModalLabel">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="galleryForm" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="gallery_id" id="gallery_id">
                        <input type="hidden" name="_method" id="form_method">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Judul <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                    <small id="title-error" class="text-danger"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category">Kategori <span class="text-danger">*</span></label>
                                    <select class="form-control" id="category" name="category" required>
                                        <option value="">-- Pilih Kategori --</option>
                                        <option value="Mobil">Mobil</option>
                                        <option value="Gedung">Gedung</option>
                                    </select>
                                    <small id="category-error" class="text-danger"></small>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="desc">Deskripsi</label>
                            <input class="form-control" id="desc" name="desc" rows="3"></input>
                            <small id="desc-error" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label for="image">Gambar <span class="text-danger" id="image-required">*</span></label>
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
                $('#galleryForm')[0].reset();
                $('#gallery_id').val('');
                $('#form_method').val('');
                $('.form-control').removeClass('is-invalid');
                $('.text-danger').empty();
                $('#image-preview-container').hide();
                $('#image-preview').attr('src', '');
                $('#image').prop('required', true);
                $('#image-required').show();
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

            // 1. Tampilkan Modal untuk TAMBAH Gallery
            $('#btn-tambah-gallery').click(function() {
                clearForm();
                $('#galleryModalLabel').text('Tambah Gallery Baru');
                $('#form_method').val('POST');
                $('#galleryForm').attr('action', "{{ route('galleries.store') }}");
                $('#image').prop('required', true);
                $('#image-required').show();
                $('#galleryModal').modal('show');
            });

            // 2. Tampilkan Modal untuk EDIT Gallery
            $('body').on('click', '.btn-edit', function() {
                clearForm();
                var galleryId = $(this).data('id');
                var url = $(this).data('url');

                $('#galleryModalLabel').text('Edit Gallery');
                $('#form_method').val('PUT');
                $('#galleryForm').attr('action', '/admin/galleries/' + galleryId);
                $('#image').prop('required', false);
                $('#image-required').hide();

                // Ambil data gallery via AJAX
                $.get(url, function(data) {
                    $('#gallery_id').val(data.id);
                    $('#title').val(data.title);
                    $('#category').val(data.category);
                    $('#desc').val(data.desc);

                    // Show existing image if available
                    if (data.image) {
                        $('#image-preview').attr('src', '/storage/' + data.image);
                        $('#image-preview-container').show();
                        $('#current-image-name').text('Gambar saat ini (Opsional upload baru)');
                    }

                    $('#galleryModal').modal('show');
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
            $('#galleryForm').submit(function(e) {
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
                        $('#galleryModal').modal('hide');

                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: response.success,
                            timer: 1500,
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
