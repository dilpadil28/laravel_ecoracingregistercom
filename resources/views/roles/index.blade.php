@extends('layouts.app')

@section('title', 'Roles')

@section('content')
<div class="content">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <h2>Roles</h2>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody-roles">

                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-success btn-pill float-right btn-add">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add
                </button>
            </div>
        </div>
    </div>
</div>

@include('layouts.modals')

@endsection

@push('custom-scripts')
<script>
    tbodyRoles();

    function tbodyRoles() {
        $.ajax({
            type: "get",
            url: "roles/tbody",
            success: function (data) {
                $('#tbody-roles').html(data);
            }
        });
    }

    $(document).ready(function () {
        $('.btn-add').on('click', function () {
            $.ajax({
                type: "get",
                url: `/roles/create`,
                success: function (data) {
                    $('#modal-add').find('.modal-body').html(data);
                    $('#modal-add').on('shown.bs.modal', function () {
                        $('#name').trigger('focus')
                    })
                    $('#modal-add').modal('show');
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });
        $('.btn-store').on('click', function () {
            let formData = $('#form-add').serialize()

            $.ajax({
                type: "post",
                url: `/roles`,
                data: formData,
                success: function (data) {
                    $('#modal-add').modal('hide');
                    tbodyRoles();
                    toastr.success('Data has been created')
                },
                error: function (error) {
                    if (error.status === 422) {
                        var errors = $.parseJSON(error.responseText);
                        $.each(errors, function (key, val) {
                            if (val.name) {
                                $("#name_error").text(val.name);
                            } else {
                                $("#name_error").text('');

                            }
                        });
                        $.each(errors, function (key, val) {
                            if (val.description) {
                                $("#description_error").text(val.description);
                            } else {
                                $("#description_error").text('');

                            }
                        });
                    }
                }
            });
        });
        $('#tbody-roles').on('click', '.btn-edit', function () {
            let id = $(this).data('id');
            $('#modal-edit').modal('show');
            $.ajax({
                type: "get",
                url: `/roles/${id}/edit`,
                success: function (data) {
                    $('#modal-edit').find('.modal-body').html(data);
                    $('#modal-edit').on('shown.bs.modal', function () {
                        $('#name').trigger('focus')
                    })
                    $('#modal-edit').modal('show');
                }
            });
        });
        $('.btn-update').on('click', function () {
            let id = $('#form-edit').find('#role_id').val();
            let formData = $('#form-edit').serialize()

            $.ajax({
                type: "patch",
                url: `/roles/${id}`,
                data: formData,
                success: function (data) {
                    $('#modal-edit').modal('hide');
                    tbodyRoles();
                    toastr.success('Data has been updated')
                },
                error: function (error) {
                    let err_log = error.responseJSON.errors;
                    if (error.status === 422) {
                        var errors = $.parseJSON(error.responseText);
                        $.each(errors, function (key, val) {
                            if (val.name) {
                                $("#name_error").text(val.name);
                            } else {
                                $("#name_error").text('');
                            }
                        });
                        $.each(errors, function (key, val) {
                            if (val.description) {
                                $("#description_error").text(val.description);
                            } else {
                                $("#description_error").text('');

                            }
                        });
                    }
                }
            });
        });
        $('#tbody-roles').on('click', '.btn-delete', function (e) {
            e.preventDefault()
            href = $(this).attr('href');
            $('#modalDelete').modal('show');
            $('#formDelete').attr("action", href);
        });
    });

</script>
@endpush
