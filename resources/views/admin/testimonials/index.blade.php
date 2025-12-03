@extends('layouts.admin')

@section('title', 'Manajemen Testimoni')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Testimoni</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary btn-sm" id="btn-tambah-testimonial">
                            <i class="fas fa-plus"></i> Tambah Testimoni
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
                                <th>Nama</th>
                                <th>Testimoni</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($testimonials as $testimonial)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $testimonial->name }}</td>
                                    <td>{{ Str::limit($testimonial->desc, 100) }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm btn-edit"
                                            data-id="{{ $testimonial->id }}"
                                            data-url="{{ route('testimonials.edit', $testimonial->id) }}">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>

                                        <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST"
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
                                    <td colspan="4" class="text-center">Belum ada data testimoni.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {{ $testimonials->links() }}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="testimonialModal" tabindex="-1" role="dialog" aria-labelledby="testimonialModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="testimonialModalLabel">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="testimonialForm">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="testimonial_id" id="testimonial_id">
                        <input type="hidden" name="_method" id="form_method">

                        <div class="form-group">
                            <label for="name">Nama Customer</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <small id="name-error" class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="desc">Testimoni</label>
                            <textarea class="form-control" id="desc" name="desc" rows="5" required></textarea>
                            <small id="desc-error" class="text-danger"></small>
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

            function clearForm() {
                $('#testimonialForm')[0].reset();
                $('#testimonial_id').val('');
                $('#form_method').val('');
                $('.form-control').removeClass('is-invalid');
                $('.text-danger').empty();
                $('#desc').val('');
            }

            $('#btn-tambah-testimonial').click(function() {
                clearForm();
                $('#testimonialModalLabel').text('Tambah Testimoni Baru');
                $('#form_method').val('POST');
                $('#testimonialForm').attr('action', "{{ route('testimonials.store') }}");
                $('#testimonialModal').modal('show');
            });

            $('body').on('click', '.btn-edit', function() {
                clearForm();
                var testimonialId = $(this).data('id');
                var url = $(this).data('url');

                $('#testimonialModalLabel').text('Edit Testimoni');
                $('#form_method').val('PUT');
                $('#testimonialForm').attr('action', '/admin/testimonials/' + testimonialId);

                $.get(url, function(data) {
                    $('#testimonial_id').val(data.id);
                    $('#name').val(data.name);
                    $('#desc').val(data.desc);
                    $('#testimonialModal').modal('show');
                }).fail(function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal Mengambil Data',
                        text: (xhr.responseJSON && xhr.responseJSON.error) ? xhr
                            .responseJSON.error : 'Terjadi kesalahan server.'
                    });
                });
            });

            $('#testimonialForm').submit(function(e) {
                e.preventDefault();

                $('.form-control').removeClass('is-invalid');
                $('.text-danger').empty();

                var formData = $(this).serialize();
                var url = $(this).attr('action');
                var method = $('#form_method').val();

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#testimonialModal').modal('hide');

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
