@extends('layouts.app')

@section('title', 'Users')

@section('content')
<div class="content">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="col-md-12">
                    <h2>Users

                        <button type="button" id="createNewUser" class="btn btn-success btn-pill float-right btn-add">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add
                        </button>
                    </h2>
                </div>
            </div>
            <div class="card-body">
                <table class="table dt-responsive nowrap data-table" style="width:100%" style="width:100%">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ajaxModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalSmallTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modelHeading"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="UserForm" name="UserForm" class="form-horizontal">
                <div class="modal-body">
                    <input type="hidden" name="User_id" id="User_id">
                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" class="form-control input-sm" id="name" name="name" placeholder="Enter Name"
                            maxlength="50" required="">
                        <small class="text-danger" id="name-error"></small>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="email" class="form-control input-sm" id="email" name="email"
                            placeholder="Enter Email" maxlength="50" required="">
                        <small class="text-danger" id="email-error"></small>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">ID Number</label>
                                <input type="number" class="form-control input-sm" id="id_number" name="id_number"
                                    placeholder="Enter ID Number" maxlength="50" required="">
                                <small class="text-danger" id="id_number-error"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Phone</label>
                                <input type="text" class="form-control input-sm" id="phone" name="phone"
                                    placeholder="Enter Phone" maxlength="50" required="">
                                <small class="text-danger" id="phone-error"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender" class="control-label">Gender</label>
                                <select name="gender" id="gender" class="form-control input-sm">
                                    <option value="pria">Pria</option>
                                    <option value="wanita">Wanita</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Birth</label>
                                <input type="date" class="form-control input-sm" required name="birth" id="birth"
                                    placeholder="Date">
                                <small class="text-danger" id="birth-error"></small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Address</label>
                        <textarea name="address" id="address" class="form-control input-sm" placeholder="Enter Address"
                            required></textarea>
                        <small class="text-danger" id="address-error"></small>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="newPassword" class="control-label">Password</label>
                                <input type="password" class="form-control input-sm" placeholder="Enter Password"
                                    id="newPassword" name="password">
                                <small class="text-danger" id="password-error"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="conPassword" class="control-label">Confirm password</label>
                                <input type="password" placeholder="Enter Confirm Password" name="password_confirmation"
                                    class="form-control input-sm" id="conPassword">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-pill btn-store" id="saveBtn"
                        value="create">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('custom-scripts')
<script>
    $(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            "aLengthMenu": [
                [20, 30, 50, 75, -1],
                [20, 30, 50, 75, "All"]
            ],
            "pageLength": 20,
            "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
            ajax: "{{ route('users.index') }}",
            columns: [{
                    data: 'DT_RowIndex',
                },
                {
                    data: 'name',
                },
                {
                    data: 'email',
                },
                {
                    data: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        $('#createNewUser').click(function () {
            $('#saveBtn').val("create-User");
            $('#User_id').val('');
            $('#UserForm').trigger("reset");
            $('#modelHeading').html("Create New User");
            $('#ajaxModel').modal('show');
        });

        $('body').on('click', '.editUser', function () {
            var User_id = $(this).data('id');
            $('#name-error').html("");
            $('#email-error').html("");
            $('#password-error').html("");
            $('#id_number-error').html("");
            $('#phone-error').html("");
            $('#birth-error').html("");
            $('#address-error').html("");
            $.get("{{ route('users.index') }}" + '/' + User_id + '/edit', function (data) {
                $('#modelHeading').html("Edit User");
                $('#saveBtn').val("edit-user");
                $('#ajaxModel').modal('show');
                $('#User_id').val(data.id);
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#id_number').val(data.member.id_number);
                $('#phone').val(data.member.phone);
                $('#gender').val(data.member.gender);
                $('#birth').val(data.member.birth);
                $('#address').val(data.member.address);
            })
        });

        $('#saveBtn').click(function (e) {
            e.preventDefault();
            $('#name-error').html("");
            $('#email-error').html("");
            $('#password-error').html("");
            $('#id_number-error').html("");
            $('#phone-error').html("");
            $('#birth-error').html("");
            $('#address-error').html("");
            $.ajax({
                data: $('#UserForm').serialize(),
                url: "{{ route('users.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    if (data.errors) {
                        if (data.errors.name) {
                            $('#name-error').html(data.errors.name[0]);
                        }
                        if (data.errors.email) {
                            $('#email-error').html(data.errors.email[0]);
                        }
                        if (data.errors.password) {
                            $('#password-error').html(data.errors.password[0]);
                        }
                        if (data.errors.id_number) {
                            $('#id_number-error').html(data.errors.id_number[0]);
                        }
                        if (data.errors.phone) {
                            $('#phone-error').html(data.errors.phone[0]);
                        }
                        if (data.errors.birth) {
                            $('#birth-error').html(data.errors.birth[0]);
                        }
                        if (data.errors.address) {
                            $('#address-error').html(data.errors.address[0]);
                        }

                    }

                    if (data.success) {
                        toastr.success(data.success)
                        $('#UserForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        table.draw();
                    }

                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
        });

        $('body').on('click', '.deleteUser', function () {

            var User_id = $(this).data("id");

            if (confirm("Are You sure want to delete !")) {
                $.ajax({
                    type: "DELETE",
                    url: '/users/' + User_id,
                    success: function (data) {
                        toastr.success(data.success)
                        table.draw();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });

            } else {
                return false;
            }
        });

    });

</script>
@endpush