@extends('layouts.admin')

@section('title', 'General')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header align-items-center">
                    <h3 class="card-title">General</h3>
                    <div class="card-tools">
                        @if ($bios->count() < 1)
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#bioModal"
                                onclick="resetForm()">
                                <i class="fas fa-plus"></i> Add Bio
                            </button>
                        @else
                            <button type="button" class="btn btn-info btn-sm" onclick="editBio({{ $bio->id }})">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    @if ($bios->count() == 1)
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <td><b>Title : </b>{{ $bio->title }}</td>
                                    <td></td>
                                    <td><b>favicon : </b>
                                        @if ($bio->favicon)
                                            <img src="{{ asset('storage/' . $bio->favicon) }}" alt="Favicon"
                                                style="max-width: 50px; max-height: 50px;">
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Brand Image : </b>
                                        @if ($bio->brand_img)
                                            <img src="{{ asset('storage/' . $bio->brand_img) }}" alt="Brand Image"
                                                style="max-width: 100px; max-height: 100px;">
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td></td>
                                    <td><b>Brand Name : </b>{{ $bio->brand_name }}</td>
                                </tr>
                                <tr>
                                    <td><b>Tagline : </b>{{ $bio->tagline ?? '-' }}</td>
                                    <td></td>
                                    <td><b>Email : </b>{{ $bio->email ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td><b>Phone : </b>{{ $bio->telp ?? '-' }}</td>
                                    <td></td>
                                    <td><b>WhatsApp : </b>{{ $bio->whatsapp ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td><b>Operation Time : </b>{{ $bio->operation_time ?? '-' }}</td>
                                    <td></td>
                                    <td><b>Address : </b>{{ $bio->address ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td><b>Instagram : </b>{{ $bio->ig_name ?? '-' }}</td>
                                    <td></td>
                                    <td><b>Facebook : </b>{{ $bio->fb_name ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td><b>YouTube : </b>{{ $bio->youtube_name ?? '-' }}</td>
                                    <td></td>
                                    <td><b>TikTok : </b>{{ $bio->tiktok_name ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td><b>Maps Embed Link : </b>{{ Str::limit($bio->link_maps_embed, 50, '...') ?? '-' }}
                                    </td>
                                    <td></td>
                                    <td><b>Maps Direction Link : </b>{{ $bio->link_maps_direction ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td><b>Greeting Home : </b>{!! Str::limit($bio->greeting_home, 50, '...') !!}</td>
                                    <td></td>
                                    <td><b>Greeting About : </b>{!! Str::limit($bio->greeting_about, 50, '...') !!}</td>
                                </tr>
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="bioModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Bio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="bioForm" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" id="bio_id" name="bio_id">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Enter title">
                                    <span class="text-danger error-text title_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="brand_name">Brand Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="brand_name" name="brand_name"
                                        placeholder="Enter brand name">
                                    <span class="text-danger error-text brand_name_error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tagline">Tagline</label>
                                    <input type="text" class="form-control" id="tagline" name="tagline"
                                        placeholder="Enter tagline">
                                    <span class="text-danger error-text tagline_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter email">
                                    <span class="text-danger error-text email_error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="telp">Phone</label>
                                    <input type="text" class="form-control" id="telp" name="telp"
                                        placeholder="Enter phone">
                                    <span class="text-danger error-text telp_error"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="whatsapp">WhatsApp</label>
                                    <input type="text" class="form-control" id="whatsapp" name="whatsapp"
                                        placeholder="Enter whatsapp">
                                    <span class="text-danger error-text whatsapp_error"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="operation_time">Operation Time</label>
                                    <input type="text" class="form-control" id="operation_time" name="operation_time"
                                        placeholder="e.g., 08:00 - 17:00">
                                    <span class="text-danger error-text operation_time_error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" name="address" rows="2" placeholder="Enter address"></textarea>
                            <span class="text-danger error-text address_error"></span>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="greeting_home">Greeting Home</label>
                                    <textarea class="summernote form-control" id="greeting_home" name="greeting_home" rows="3"
                                        placeholder="Enter greeting for home page"></textarea>
                                    <span class="text-danger error-text greeting_home_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="greeting_about">Greeting About</label>
                                    <textarea class="summernote form-control" id="greeting_about" name="greeting_about" rows="3"
                                        placeholder="Enter greeting for about page"></textarea>
                                    <span class="text-danger error-text greeting_about_error"></span>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <h6>Social Media</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ig_name">Instagram Name</label>
                                    <input type="text" class="form-control" id="ig_name" name="ig_name"
                                        placeholder="Enter instagram name">
                                    <span class="text-danger error-text ig_name_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ig_link">Instagram Link</label>
                                    <input type="text" class="form-control" id="ig_link" name="ig_link"
                                        placeholder="Enter instagram link">
                                    <span class="text-danger error-text ig_link_error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fb_name">Facebook Name</label>
                                    <input type="text" class="form-control" id="fb_name" name="fb_name"
                                        placeholder="Enter facebook name">
                                    <span class="text-danger error-text fb_name_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fb_link">Facebook Link</label>
                                    <input type="text" class="form-control" id="fb_link" name="fb_link"
                                        placeholder="Enter facebook link">
                                    <span class="text-danger error-text fb_link_error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="youtube_name">YouTube Name</label>
                                    <input type="text" class="form-control" id="youtube_name" name="youtube_name"
                                        placeholder="Enter youtube name">
                                    <span class="text-danger error-text youtube_name_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="youtube_link">YouTube Link</label>
                                    <input type="text" class="form-control" id="youtube_link" name="youtube_link"
                                        placeholder="Enter youtube link">
                                    <span class="text-danger error-text youtube_link_error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tiktok_name">TikTok Name</label>
                                    <input type="text" class="form-control" id="tiktok_name" name="tiktok_name"
                                        placeholder="Enter tiktok name">
                                    <span class="text-danger error-text tiktok_name_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tiktok_link">TikTok Link</label>
                                    <input type="text" class="form-control" id="tiktok_link" name="tiktok_link"
                                        placeholder="Enter tiktok link">
                                    <span class="text-danger error-text tiktok_link_error"></span>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <h6>Maps</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="link_maps_embed">Maps Embed Link</label>
                                    <input class="form-control" id="link_maps_embed" name="link_maps_embed"
                                        rows="2" placeholder="Enter google maps embed link"></input>
                                    <span class="text-danger error-text link_maps_embed_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="link_maps_direction">Maps Direction Link</label>
                                    <input class="form-control" id="link_maps_direction" name="link_maps_direction"
                                        rows="2" placeholder="Enter google maps direction link"></input>
                                    <span class="text-danger error-text link_maps_direction_error"></span>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <h6>Images</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="favicon">Favicon</label>
                                    <input type="file" class="form-control-file" id="favicon" name="favicon"
                                        accept="image/*">
                                    <small class="form-text text-muted">Max 2MB (jpeg, png, jpg, gif, ico)</small>
                                    <span class="text-danger error-text favicon_error"></span>
                                    <div id="favicon_preview" class="mt-2"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="brand_img">Brand Image</label>
                                    <input type="file" class="form-control-file" id="brand_img" name="brand_img"
                                        accept="image/*">
                                    <small class="form-text text-muted">Max 2MB</small>
                                    <span class="text-danger error-text brand_img_error"></span>
                                    <div id="brand_img_preview" class="mt-2"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="img_home">Home Image</label>
                                    <input type="file" class="form-control-file" id="img_home" name="img_home"
                                        accept="image/*">
                                    <small class="form-text text-muted">Max 2MB</small>
                                    <span class="text-danger error-text img_home_error"></span>
                                    <div id="img_home_preview" class="mt-2"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="img_about">About Image</label>
                                    <input type="file" class="form-control-file" id="img_about" name="img_about"
                                        accept="image/*">
                                    <small class="form-text text-muted">Max 2MB</small>
                                    <span class="text-danger error-text img_about_error"></span>
                                    <div id="img_about_preview" class="mt-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="saveBtn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

            $('#greeting_home').summernote();
            $('#greeting_about').summernote();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Image preview handlers
            $('#favicon').on('change', function() {
                previewImage(this, '#favicon_preview');
            });
            $('#brand_img').on('change', function() {
                previewImage(this, '#brand_img_preview');
            });
            $('#img_home').on('change', function() {
                previewImage(this, '#img_home_preview');
            });
            $('#img_about').on('change', function() {
                previewImage(this, '#img_about_preview');
            });

            $('#bioForm').on('submit', function(e) {
                e.preventDefault();

                let bioId = $('#bio_id').val();
                let url = bioId ? `/admin/bios/${bioId}` : '/admin/bios';
                let formData = new FormData(this);

                if (bioId) {
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
                        $('#bioModal').modal('hide');
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
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
                        '" style="max-width: 200px; max-height: 200px;">');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function resetForm() {
            $('#bioForm')[0].reset();
            $('#bio_id').val('');
            $('#modalTitle').text('Add Bio');
            $('.error-text').text('');
            $('#favicon_preview, #brand_img_preview, #img_home_preview, #img_about_preview').html('');
            $('#greeting_home').summernote('code', '');
            $('#greeting_about').summernote('code', '');
        }

        function editBio(id) {
            resetForm();
            $('#modalTitle').text('Edit Bio');

            $.ajax({
                url: `/admin/bios/${id}/edit`,
                method: 'GET',
                success: function(data) {
                    $('#bio_id').val(data.id);
                    $('#title').val(data.title);
                    $('#brand_name').val(data.brand_name);
                    $('#tagline').val(data.tagline);
                    $('#greeting_home').summernote('code', data.greeting_home || '');
                    $('#greeting_about').summernote('code', data.greeting_about || '');
                    $('#address').val(data.address);
                    $('#telp').val(data.telp);
                    $('#whatsapp').val(data.whatsapp);
                    $('#ig_name').val(data.ig_name);
                    $('#ig_link').val(data.ig_link);
                    $('#fb_name').val(data.fb_name);
                    $('#fb_link').val(data.fb_link);
                    $('#youtube_name').val(data.youtube_name);
                    $('#youtube_link').val(data.youtube_link);
                    $('#tiktok_name').val(data.tiktok_name);
                    $('#tiktok_link').val(data.tiktok_link);
                    $('#email').val(data.email);
                    $('#operation_time').val(data.operation_time);
                    $('#link_maps_embed').val(data.link_maps_embed);
                    $('#link_maps_direction').val(data.link_maps_direction);

                    if (data.favicon) {
                        $('#favicon_preview').html('<img src="/storage/' + data.favicon +
                            '" style="max-width: 200px; max-height: 200px;">');
                    }
                    if (data.brand_img) {
                        $('#brand_img_preview').html('<img src="/storage/' + data.brand_img +
                            '" style="max-width: 200px; max-height: 200px;">');
                    }
                    if (data.img_home) {
                        $('#img_home_preview').html('<img src="/storage/' + data.img_home +
                            '" style="max-width: 200px; max-height: 200px;">');
                    }
                    if (data.img_about) {
                        $('#img_about_preview').html('<img src="/storage/' + data.img_about +
                            '" style="max-width: 200px; max-height: 200px;">');
                    }

                    $('#bioModal').modal('show');
                }
            });
        }

        function deleteBio(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/admin/bios/${id}`,
                        method: 'DELETE',
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
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
