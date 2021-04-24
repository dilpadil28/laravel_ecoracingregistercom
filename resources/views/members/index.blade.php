@extends('layouts.app')

@section('title', 'Members')

@section('content')
<div class="content">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="col-md-12">
                    <h2>Members

                        <button type="button" id="createNewMember" class="btn btn-success btn-pill float-right btn-add">
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
                            <th>Full Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Link Whatsapp</th>
                            <th>ID Member</th>
                            <th>Type Paket</th>
                            <th>Status</th>
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
            <form id="MemberForm" name="MemberForm" class="form-horizontal">
                <div class="modal-body">
                    <input type="hidden" name="Member_id" id="Member_id">
                    <div class="row">
                        <div class="col-md-5">

                        </div>
                        <div class="col-md-7">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">First Name</label>
                                <input type="text" class="form-control input-sm" id="first_name" name="first_name"
                                    placeholder="Enter First Name" maxlength="50" required="">
                                <small class="text-danger" id="first_name-error"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Last Name</label>
                                <input type="text" class="form-control input-sm" id="last_name" name="last_name"
                                    placeholder="Enter Last Name" maxlength="50" required="">
                                <small class="text-danger" id="last_name-error"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender" class="control-label">Gender</label>
                                <select name="gender" id="gender" class="form-control input-sm">
                                    <option value="">--SELECT--</option>
                                    <option value="pria">Pria</option>
                                    <option value="wanita">Wanita</option>
                                </select>
                                <small class="text-danger" id="gender-error"></small>
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
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Phone</label>
                                <input type="text" class="form-control input-sm" id="phone" name="phone"
                                    placeholder="Enter Phone" maxlength="50" required="">
                                <small class="text-danger" id="phone-error"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Link Whatsapp</label>
                                <input type="url" class="form-control input-sm" id="link_whatsapp" name="link_whatsapp"
                                    placeholder="Enter Link Whatsapp" maxlength="50" required="">
                                <small class="text-danger" id="link_whatsapp-error"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="id_member" class="control-label">Id Member</label>
                                <input type="text" class="form-control input-sm" placeholder="Enter Id Member"
                                    id="id_member" name="id_member">
                                <small class="text-danger" id="id_member-error"></small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="type_paket" class="control-label">Type Paket</label>
                                <select name="type_paket" id="type_paket" class="form-control input-sm">
                                    <option value="">--SELECT--</option>
                                    <option value="Basic">Basic (Rp.2,1 juta)</option>
                                    <option value="Reguler">Reguler (Rp.6,1 juta)</option>
                                    <option value="Business">Business (Rp.14,1 juta)</option>
                                    <option value="Executive">Executive (Rp.30,1 juta)</option>
                                    <option value="Priority">Priority (Rp.62,1 juta)</option>
                                </select>
                                <small class="text-danger" id="type_paket-error"></small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="status" class="control-label">Status</label>
                                <select name="status" id="status" class="form-control input-sm">
                                    <option value="">--SELECT--</option>
                                    <option value="0">Tidak Aktif</option>
                                    <option value="1">Aktif</option>
                                </select>
                                <small class="text-danger" id="status-error"></small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Address</label>
                        <textarea name="address" id="address" class="form-control input-sm" placeholder="Enter Address"
                            required></textarea>
                        <small class="text-danger" id="address-error"></small>
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
            ajax: "{{ route('members.index') }}",
            columns: [{
                    data: 'DT_RowIndex',
                },
                {
                    data: 'fullname',
                },
                {
                    data: 'gender',
                },
                {
                    data: 'phone',
                },
                {
                    data: 'link_whatsapp',
                },
                {
                    data: 'id_member',
                },
                {
                    data: 'type_paket',
                },
                {
                    data: 'status',
                },
                {
                    data: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        $('#createNewMember').click(function () {
            $('#saveBtn').val("create-Member");
            $('#Member_id').val('');
            $('#photoThumb').attr('src',"");
            $('#MemberForm').trigger("reset");
            $('#modelHeading').html("Create New Member");
            $('#ajaxModel').modal('show');
        });

        $('body').on('click', '.editMember', function () {
            var Member_id = $(this).data('id');
            $('#first_name-error').html("");
            $('#last_name-error').html("");
            $('#gender-error').html("");
            $('#birth-error').html("");
            $('#address-error').html("");
            $('#phone-error').html("");
            $('#link_whatsapp-error').html("");
            $('#id_member-error').html("");
            $('#type_paket-error').html("");
            $('#photo-error').html("");
            $('#status-error').html("");
            $.get("{{ route('members.index') }}" + '/' + Member_id + '/edit', function (data) {
                $('#modelHeading').html("Edit Member");
                $('#saveBtn').val("edit-member");
                $('#ajaxModel').modal('show');
                $('#Member_id').val(data.id);
                $('#first_name').val(data.first_name);
                $('#last_name').val(data.last_name);
                $('#gender').val(data.gender);
                $('#birth').val(data.birth);
                $('#address').val(data.address);
                $('#phone').val(data.phone);
                $('#link_whatsapp').val(data.link_whatsapp);
                $('#id_member').val(data.id_member);
                $('#type_paket').val(data.type_paket);
                $('#photo').val(data.photo);
                $('#status').val(data.status);
                if (data.photo) {
                    $('#photoThumb').attr('src',"{{url('public/image/photo')}}/"+data.photo);
                }
            })
        });

        $('#saveBtn').click(function (e) {
            e.preventDefault();
            $('#first_name-error').html("");
            $('#last_name-error').html("");
            $('#gender-error').html("");
            $('#birth-error').html("");
            $('#address-error').html("");
            $('#phone-error').html("");
            $('#link_whatsapp-error').html("");
            $('#id_member-error').html("");
            $('#type_paket-error').html("");
            $('#photo-error').html("");
            $('#status-error').html("");
            var form_data = new FormData($('#MemberForm')[0])
            $.ajax({
                data: form_data,
                url: "{{ route('members.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    if (data.errors) {
                        if (data.errors.first_name) {
                            $('#first_name-error').html(data.errors.first_name[0]);
                        }
                        if (data.errors.last_name) {
                            $('#last_name-error').html(data.errors.last_name[0]);
                        }
                        if (data.errors.gender) {
                            $('#gender-error').html(data.errors.gender[0]);
                        }
                        if (data.errors.birth) {
                            $('#birth-error').html(data.errors.birth[0]);
                        }
                        if (data.errors.address) {
                            $('#address-error').html(data.errors.address[0]);
                        }
                        if (data.errors.id_member) {
                            $('#id_member-error').html(data.errors.id_member[0]);
                        }
                        if (data.errors.phone) {
                            $('#phone-error').html(data.errors.phone[0]);
                        }
                        if (data.errors.link_whatsapp) {
                            $('#link_whatsapp-error').html(data.errors.link_whatsapp[0]);
                        }
                        if (data.errors.type_paket) {
                            $('#type_paket-error').html(data.errors.type_paket[0]);
                        }
                        if (data.errors.status) {
                            $('#status-error').html(data.errors.status[0]);
                        }
                        if (data.errors.photo) {
                            $('#photo-error').html(data.errors.photo[0]);
                        }
                        if (data.errors.address) {
                            $('#address-error').html(data.errors.address[0]);
                        }

                    }

                    if (data.success) {
                        toastr.success(data.success)
                        $('#MemberForm').trigger("reset");
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

        $('body').on('click', '.deleteMember', function () {

            var Member_id = $(this).data("id");

            if (confirm("Are You sure want to delete !")) {
                $.ajax({
                    type: "DELETE",
                    url: '/members/' + Member_id,
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