@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="content">
    <div class="bg-white border rounded">
        <div class="row no-gutters">
            <div class="col-lg-5 col-xl-4">
                <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                    <div class="card text-center widget-profile px-0 border-0">
                        <div class="card-img mx-auto rounded-circle">
                            <img src="https://ui-avatars.com/api/?size=100&name={{auth()->user()->name}}&color=7F9CF5&background=EBF4FF"
                                alt="user image">
                        </div>
                        <div class="card-body">
                            <h4 class="py-2 text-dark">{{auth()->user()->name}}</h4>
                            <p>{{auth()->user()->email}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="contact-info">
                        <p class="text-dark font-weight-medium pt-4 mb-2">Gender</p>
                        <p>{{ucfirst($profile->gender)}}</p>
                        <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                        <p>{{$profile->phone}}</p>
                        <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
                        <p>{{strftime("%A %d %B %Y", strtotime($profile->birth))}}</p>
                        <p class="text-dark font-weight-medium pt-4 mb-2">Address</p>
                        <p>{{$profile->address .' '. $profile->id_number}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-8">
                <div class="profile-content-right py-5">
                    <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                                aria-controls="settings" aria-selected="false">Settings</a>
                        </li>
                    </ul>
                    <div class="tab-content px-3 px-xl-5" id="myTabContent">
                        <div class="tab-pane fade show active" id="settings" role="tabpanel"
                            aria-labelledby="settings-tab">
                            <div class="mt-5">
                                <form action="{{route('profiles.update', auth()->user()->id)}}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row mb-2">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror" autofocus
                                                    id="name" name="name" value="{{auth()->user()->name}}">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="newPassword">New password</label>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            id="newPassword" name="password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="conPassword">Confirm password</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            id="conPassword">
                                    </div>

                                    <div class="d-flex justify-content-end mt-5">
                                        <button type="submit" class="btn btn-primary mb-2 btn-pill">Update
                                            Profile</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('custom-scripts')
@if(session()->has('success'))
<script>
    toastr.success('Profile has been updated')

</script>
@endif
@endpush