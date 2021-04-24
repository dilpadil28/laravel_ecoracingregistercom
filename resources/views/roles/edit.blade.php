<div class="form-group">
    <input type="hidden" value="{{$role->id}}" id="role_id" name="role_id">
    <label for="name">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Name"
        name="name" value="{{ old('name') ?? $role->name}}">
    <span id="name_error"></span>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" id="description"
        placeholder="Enter Description">{{old('description') ??$role->description}}</textarea>
    <span id="description_error"></span>
</div>
