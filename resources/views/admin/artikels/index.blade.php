@extends('layouts.admin')

@section('title', 'Manajemen Artikel')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Artikel</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary btn-sm" id="btn-tambah-artikel">
                            <i class="fas fa-plus"></i> Tambah Artikel
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
                                <th>Cover</th>
                                <th>Judul</th>
                                <th>Author</th>
                                <th>Tags</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($artikels as $artikel)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($artikel->img_cover)
                                            <img src="{{ asset($artikel->img_cover) }}" alt="{{ $artikel->title }}"
                                                style="width: 80px; height: 60px; object-fit: cover;">
                                        @else
                                            <span class="badge badge-secondary">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $artikel->title }}</td>
                                    <td>{{ $artikel->author }}</td>
                                    <td>
                                        @forelse ($artikel->tags as $tag)
                                            <span class="badge badge-info">{{ $tag->name }}</span>
                                        @empty
                                            -
                                        @endforelse
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm btn-edit"
                                            data-id="{{ $artikel->id }}"
                                            data-url="{{ route('artikels.edit', $artikel->id) }}">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>

                                        <form action="{{ route('artikels.destroy', $artikel->id) }}" method="POST"
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
                                    <td colspan="6" class="text-center">Belum ada data artikel.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {{ $artikels->links() }}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="artikelModal" tabindex="-1" role="dialog" aria-labelledby="artikelModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="artikelModalLabel">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="artikelForm" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="artikel_id" id="artikel_id">
                        <input type="hidden" name="_method" id="form_method">

                        <div class="form-group">
                            <label for="title">Judul Artikel</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                            <small id="title-error" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label for="author">Penulis</label>
                            <input type="text" class="form-control" id="author" name="author" required>
                            <small id="author-error" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label for="img_cover">Cover Image</label>
                            <input type="file" class="form-control-file" id="img_cover" name="img_cover"
                                accept="image/*">
                            <small id="img_cover-error" class="text-danger"></small>
                            <div id="preview-image" class="mt-2"></div>
                        </div>

                        <div class="form-group">
                            <label for="content">Konten Artikel</label>
                            <textarea class="form-control" id="content" name="content" rows="10" required></textarea>
                            <small id="content-error" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label for="tags">Tags (pisahkan dengan koma)</label>
                            <input type="text" class="form-control" id="tags" name="tags"
                                placeholder="contoh: teknologi, tutorial, laravel">
                            <small id="tags-error" class="text-danger"></small>
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

@push('styles')
    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush

@push('scripts')
    <!-- Summernote JS -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script>
        $(document).ready(function() {

            // Initialize Summernote
            $('#content').summernote({
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });

            function clearForm() {
                $('#artikelForm')[0].reset();
                $('#artikel_id').val('');
                $('#form_method').val('');
                $('.form-control').removeClass('is-invalid');
                $('.text-danger').empty();
                $('#content').summernote('code', '');
                $('#preview-image').html('');
            }

            $('#btn-tambah-artikel').click(function() {
                clearForm();
                $('#artikelModalLabel').text('Tambah Artikel Baru');
                $('#form_method').val('POST');
                $('#artikelForm').attr('action', "{{ route('artikels.store') }}");
                $('#artikelModal').modal('show');
            });

            // Preview image
            $('#img_cover').change(function() {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview-image').html(
                        '<img src="' + e.target.result +
                        '" style="width: 200px; height: 150px; object-fit: cover;">'
                    );
                }
                reader.readAsDataURL(this.files[0]);
            });

            $('body').on('click', '.btn-edit', function() {
                clearForm();
                var artikelId = $(this).data('id');
                var url = $(this).data('url');

                $('#artikelModalLabel').text('Edit Artikel');
                $('#form_method').val('PUT');
                $('#artikelForm').attr('action', '/admin/artikels/' + artikelId);

                $.get(url, function(data) {
                    $('#artikel_id').val(data.id);
                    $('#title').val(data.title);
                    $('#author').val(data.author);
                    $('#content').summernote('code', data.content);
                    $('#tags').val(data.tags_string);

                    if (data.img_cover) {
                        $('#preview-image').html(
                            '<img src="/' + data.img_cover +
                            '" style="width: 200px; height: 150px; object-fit: cover;">'
                        );
                    }

                    $('#artikelModal').modal('show');
                }).fail(function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal Mengambil Data',
                        text: (xhr.responseJSON && xhr.responseJSON.error) ? xhr
                            .responseJSON.error : 'Terjadi kesalahan server.'
                    });
                });
            });

            $('#artikelForm').submit(function(e) {
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
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        $('#artikelModal').modal('hide');

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
