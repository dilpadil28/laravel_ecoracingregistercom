<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Name"
        name="name" value="{{ old('name')}}">
    <span id="name_error"></span>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" id="description"
        placeholder="Enter Description">{{old('description')}}</textarea>
    <span id="description_error"></span>
</div>
