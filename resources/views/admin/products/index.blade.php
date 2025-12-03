@extends('layouts.admin')

@section('title', 'Kelola Produk')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Produk</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#productModal"
                            onclick="resetForm()">
                            <i class="fas fa-plus"></i> Tambah Produk
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Icon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $index => $product)
                                    <tr>
                                        <td class="text-center">{{ $products->firstItem() + $index }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price ?? '-' }}</td>
                                        <td>
                                            @if ($product->icon)
                                                <img src="{{ asset('storage/' . $product->icon) }}" alt="Icon"
                                                    style="max-width: 50px; max-height: 50px;">
                                            @else
                                                <span class="text-muted">Tidak ada ikon</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-sm"
                                                onclick="editProduct({{ $product->id }})">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm"
                                                onclick="deleteProduct({{ $product->id }})">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Tidak ada data tersedia</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Tambah Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="productForm" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" id="product_id" name="product_id">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nama Produk <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukkan nama produk">
                                    <span class="text-danger error-text name_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">Harga</label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        placeholder="Masukkan harga">
                                    <span class="text-danger error-text price_error"></span>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <h6>Spesifikasi</h6>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="vlt">VLT</label>
                                    <input type="text" class="form-control" id="vlt" name="vlt"
                                        placeholder="Masukkan VLT">
                                    <span class="text-danger error-text vlt_error"></span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="uvr">UVR</label>
                                    <input type="text" class="form-control" id="uvr" name="uvr"
                                        placeholder="Masukkan UVR">
                                    <span class="text-danger error-text uvr_error"></span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="irr">IRR</label>
                                    <input type="text" class="form-control" id="irr" name="irr"
                                        placeholder="Masukkan IRR">
                                    <span class="text-danger error-text irr_error"></span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="tser">TSER</label>
                                    <input type="text" class="form-control" id="tser" name="tser"
                                        placeholder="Masukkan TSER">
                                    <span class="text-danger error-text tser_error"></span>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <h6>Deskripsi</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="short_desc">Deskripsi Singkat</label>
                                    <textarea class="form-control" id="short_desc" name="short_desc" rows="3"
                                        placeholder="Masukkan deskripsi singkat"></textarea>
                                    <span class="text-danger error-text short_desc_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="term_desc">Deskripsi Ketentuan</label>
                                    <textarea class="form-control" id="term_desc" name="term_desc" rows="3"
                                        placeholder="Masukkan deskripsi ketentuan"></textarea>
                                    <span class="text-danger error-text term_desc_error"></span>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="item_desc">Deskripsi Item</label>
                                    <textarea class="summernote form-control" id="item_desc" name="item_desc" rows="3"
                                        placeholder="Masukkan deskripsi item"></textarea>
                                    <span class="text-danger error-text item_desc_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price_desc">Deskripsi Harga</label>
                                    <textarea class="summernote form-control" id="price_desc" name="price_desc" rows="3"
                                        placeholder="Masukkan deskripsi harga"></textarea>
                                    <span class="text-danger error-text price_desc_error"></span>
                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="full_desc">Deskripsi Lengkap</label>
                                    <textarea class="summernote form-control" id="full_desc" name="full_desc" rows="3"
                                        placeholder="Masukkan deskripsi lengkap"></textarea>
                                    <span class="text-danger error-text full_desc_error"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="spec_desc">Deskripsi Spesifikasi</label>
                                    <textarea class="summernote form-control" id="spec_desc" name="spec_desc" rows="3"
                                        placeholder="Masukkan deskripsi spesifikasi"></textarea>
                                    <span class="text-danger error-text spec_desc_error"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="maintenance_desc">Deskripsi Pemeliharaan</label>
                                    <textarea class="summernote form-control" id="maintenance_desc" name="maintenance_desc" rows="3"
                                        placeholder="Masukkan deskripsi pemeliharaan"></textarea>
                                    <span class="text-danger error-text maintenance_desc_error"></span>
                                </div>
                            </div>

                        </div>

                        <hr>
                        <h6>Gambar</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="icon">Ikon</label>
                                    <input type="file" class="form-control-file" id="icon" name="icon"
                                        accept="image/*">
                                    <small class="form-text text-muted">Max 2MB</small>
                                    <span class="text-danger error-text icon_error"></span>
                                    <div id="icon_preview" class="mt-2"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="img1">Gambar 1</label>
                                    <input type="file" class="form-control-file" id="img1" name="img1"
                                        accept="image/*">
                                    <small class="form-text text-muted">Max 2MB</small>
                                    <span class="text-danger error-text img1_error"></span>
                                    <div id="img1_preview" class="mt-2"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="img2">Gambar 2</label>
                                    <input type="file" class="form-control-file" id="img2" name="img2"
                                        accept="image/*">
                                    <small class="form-text text-muted">Max 2MB</small>
                                    <span class="text-danger error-text img2_error"></span>
                                    <div id="img2_preview" class="mt-2"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="img3">Gambar 3</label>
                                    <input type="file" class="form-control-file" id="img3" name="img3"
                                        accept="image/*">
                                    <small class="form-text text-muted">Max 2MB</small>
                                    <span class="text-danger error-text img3_error"></span>
                                    <div id="img3_preview" class="mt-2"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="img4">Gambar 4</label>
                                    <input type="file" class="form-control-file" id="img4" name="img4"
                                        accept="image/*">
                                    <small class="form-text text-muted">Max 2MB</small>
                                    <span class="text-danger error-text img4_error"></span>
                                    <div id="img4_preview" class="mt-2"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="img5">Gambar 5</label>
                                    <input type="file" class="form-control-file" id="img5" name="img5"
                                        accept="image/*">
                                    <small class="form-text text-muted">Max 2MB</small>
                                    <span class="text-danger error-text img5_error"></span>
                                    <div id="img5_preview" class="mt-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
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
            // Initialize Summernote
            $('#item_desc').summernote({
                height: 150
            });
            $('#price_desc').summernote({
                height: 150
            });
            $('#full_desc').summernote({
                height: 150
            });
            $('#spec_desc').summernote({
                height: 150
            });
            $('#maintenance_desc').summernote({
                height: 150
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Image preview handlers
            $('#icon').on('change', function() {
                previewImage(this, '#icon_preview');
            });
            $('#img1').on('change', function() {
                previewImage(this, '#img1_preview');
            });
            $('#img2').on('change', function() {
                previewImage(this, '#img2_preview');
            });
            $('#img3').on('change', function() {
                previewImage(this, '#img3_preview');
            });
            $('#img4').on('change', function() {
                previewImage(this, '#img4_preview');
            });
            $('#img5').on('change', function() {
                previewImage(this, '#img5_preview');
            });

            $('#productForm').on('submit', function(e) {
                e.preventDefault();

                let productId = $('#product_id').val();
                let url = productId ? `/admin/products/${productId}` : '/admin/products';
                let formData = new FormData(this);

                if (productId) {
                    formData.append('_method', 'PUT');
                }

                $('.error-text').text('');

                $.ajax({
                    url: url,
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#productModal').modal('hide');
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

        function previewImage(input, previewId) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $(previewId).html('<img src="' + e.target.result +
                        '" style="max-width: 150px; max-height: 150px;">');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function resetForm() {
            $('#productForm')[0].reset();
            $('#product_id').val('');
            $('#modalTitle').text('Tambah Produk');
            $('.error-text').text('');
            $('#icon_preview, #img1_preview, #img2_preview, #img3_preview, #img4_preview, #img5_preview').html('');
            $('#item_desc').summernote('code', '');
            $('#price_desc').summernote('code', '');
            $('#full_desc').summernote('code', '');
            $('#spec_desc').summernote('code', '');
            $('#maintenance_desc').summernote('code', '');
        }

        function editProduct(id) {
            resetForm();
            $('#modalTitle').text('Edit Produk');

            $.ajax({
                url: `/admin/products/${id}/edit`,
                method: 'GET',
                success: function(data) {
                    $('#product_id').val(data.id);
                    $('#name').val(data.name);
                    $('#vlt').val(data.vlt);
                    $('#uvr').val(data.uvr);
                    $('#irr').val(data.irr);
                    $('#tser').val(data.tser);
                    // $('#short_desc').summernote('code', data.short_desc || '');
                    $('#short_desc').val(data.short_desc);
                    $('#item_desc').summernote('code', data.item_desc || '');
                    $('#price_desc').summernote('code', data.price_desc || '');
                    $('#price').val(data.price);
                    $('#full_desc').summernote('code', data.full_desc || '');
                    $('#spec_desc').summernote('code', data.spec_desc || '');
                    $('#maintenance_desc').summernote('code', data.maintenance_desc || '');
                    $('#term_desc').val(data.term_desc);

                    if (data.icon) {
                        $('#icon_preview').html('<img src="/storage/' + data.icon +
                            '" style="max-width: 150px; max-height: 150px;">');
                    }
                    if (data.img1) {
                        $('#img1_preview').html('<img src="/storage/' + data.img1 +
                            '" style="max-width: 150px; max-height: 150px;">');
                    }
                    if (data.img2) {
                        $('#img2_preview').html('<img src="/storage/' + data.img2 +
                            '" style="max-width: 150px; max-height: 150px;">');
                    }
                    if (data.img3) {
                        $('#img3_preview').html('<img src="/storage/' + data.img3 +
                            '" style="max-width: 150px; max-height: 150px;">');
                    }
                    if (data.img4) {
                        $('#img4_preview').html('<img src="/storage/' + data.img4 +
                            '" style="max-width: 150px; max-height: 150px;">');
                    }
                    if (data.img5) {
                        $('#img5_preview').html('<img src="/storage/' + data.img5 +
                            '" style="max-width: 150px; max-height: 150px;">');
                    }

                    $('#productModal').modal('show');
                }
            });
        }

        function deleteProduct(id) {
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
                        url: `/admin/products/${id}`,
                        method: 'DELETE',
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
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
