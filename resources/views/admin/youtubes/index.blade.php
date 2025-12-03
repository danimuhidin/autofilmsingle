@extends('layouts.admin')

@section('title', 'Link Youtube')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Link Youtube</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Link Youtube</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#youtubeModal" onclick="resetForm()">
                            <i class="fas fa-plus"></i> Tambah Link Youtube
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Link</th>
                                <th style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($youtubes as $index => $youtube)
                                <tr>
                                    <td class="text-center">{{ $youtubes->firstItem() + $index }}</td>
                                    <td>{{ $youtube->link }}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm"
                                            onclick="editYoutube({{ $youtube->id }})">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm"
                                            onclick="deleteYoutube({{ $youtube->id }})">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">Tidak ada data tersedia</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {{ $youtubes->links() }}
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="youtubeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Tambah Link Youtube</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="youtubeForm">
                    <div class="modal-body">
                        <input type="hidden" id="youtube_id" name="youtube_id">
                        <div class="form-group">
                            <label for="link">Link <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="link" name="link"
                                placeholder="Masukkan link youtube">
                            <small class="form-text text-muted">Contoh: https://www.youtube.com/embed/</small>
                            <span class="text-danger error-text link_error"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" id="saveBtn">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#youtubeForm').on('submit', function(e) {
                e.preventDefault();

                let youtubeId = $('#youtube_id').val();
                let url = youtubeId ? `/admin/youtubes/${youtubeId}` : '/admin/youtubes';
                let method = youtubeId ? 'PUT' : 'POST';

                $('.error-text').text('');

                $.ajax({
                    url: url,
                    method: method,
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#youtubeModal').modal('hide');
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 1500
                        });
                        location.reload();
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('.' + key + '_error').text(value[0]);
                            });
                        }
                    }
                });
            });
        });

        function resetForm() {
            $('#youtubeForm')[0].reset();
            $('#youtube_id').val('');
            $('#modalTitle').text('Tambah Link Youtube');
            $('.error-text').text('');
        }

        function editYoutube(id) {
            resetForm();
            $('#modalTitle').text('Edit Link Youtube');

            $.ajax({
                url: `/admin/youtubes/${id}/edit`,
                method: 'GET',
                success: function(data) {
                    $('#youtube_id').val(data.id);
                    $('#link').val(data.link);
                    $('#youtubeModal').modal('show');
                }
            });
        }

        function deleteYoutube(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/admin/youtubes/${id}`,
                        method: 'DELETE',
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Dihapus!',
                                text: response.message,
                                showConfirmButton: false,
                                timer: 1500
                            });
                            location.reload();
                        }
                    });
                }
            });
        }
    </script>
@endpush
