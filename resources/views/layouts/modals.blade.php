<!-- Small Modal -->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalSmallTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <form id="formDelete" class="d-inline" method="post">
                @csrf
                @method('delete')
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalSmallTitle">Modal Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    Are you sure ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger btn-pill" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-primary btn-pill">Yes, Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalSmallTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalSmallTitle">Add Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('roles.store')}}" method="post" id="form-add">
                @csrf
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-pill btn-store">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalSmallTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalSmallTitle">Edit Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('roles.store')}}" method="post" id="form-edit">
                @csrf
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-pill btn-update">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
