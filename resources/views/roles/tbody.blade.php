@forelse ($roles as $role)
<tr>
    <td scope="row">{{$loop->iteration}}</td>
    <td>{{$role->name}}</td>
    <td>{{$role->description}}</td>
    <td class="text-center">
        <a href="javascript:void(0)" data-id="{{$role->id}}" id="btn-edit"
            class="btn btn-sm btn-outline-primary btn-edit m-1">
            <i class="fas fa-pencil-alt"></i>
        </a>
        <a href="{{route('roles.destroy', $role->id)}}" data-toggle="modal" data-target="#modalDelete"
            class="btn btn-sm btn-outline-danger m-1 btn-delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
    </td>
</tr>
@empty
<tr>
    <td colspan="5" class="text-center">Data not found!</td>
</tr>
@endforelse
