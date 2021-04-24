@extends('layouts.app')

@section('title', 'Frontends')

@section('content')
<div class="content">
  <div class="col-12">
    <div class="card card-default">
      <form action="{{route('frontends.update', auth()->user()->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-header card-header-border-bottom">
          <h2>Frontends</h2>
        </div>

        <div class="card-body">
          <ul class="nav nav-tabs nav-style-border pl-0 justify-content-between justify-content-xl-start" id="myTab"
            role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="hero-tab" data-toggle="tab" href="#hero" role="tab" aria-controls="hero"
                aria-selected="true">Hero</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="reward-tab" data-toggle="tab" href="#reward" role="tab" aria-controls="reward"
                aria-selected="false">Reward</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="peluang-tab" data-toggle="tab" href="#peluang" role="tab" aria-controls="peluang"
                aria-selected="false">Peluang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="penghasilan-tab" data-toggle="tab" href="#penghasilan" role="tab"
                aria-controls="penghasilan" aria-selected="false">Penghasilan</a>
            </li>
          </ul>

          <div class="tab-content" id="myTabContent3">
            <div class="tab-pane pt-3 fade show active" id="hero" role="tabpanel" aria-labelledby="hero-tab">
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="hero_title">Judul Hero</label>
                    <input type="text" class="form-control @error('hero_title') is-invalid @enderror" autofocus
                      id="hero_title" name="hero_title" value="{{ $frontend->hero_title }}">

                    @error('hero_title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="hero_description">Judul Deskripsi</label>
                    <textarea name="hero_description" rows="5"
                      class="form-control @error('hero_description') is-invalid @enderror"
                      id="hero_description">{{ $frontend->hero_description }}</textarea>
                    @error('hero_description')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="hero_image">Hero Image</label>
                    <div class="custom-file mb-1">
                      <input type="file" class="custom-file-input @error('hero_image') is-invalid @enderror"
                        id="hero_image" name="hero_image">
                      <label class="custom-file-label" for="hero_image">Choose
                        file...</label>
                    </div>
                  </div>
                  @error('hero_image')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>
                <div class="col-lg-8">
                  <div class="form-group">
                    <img src="{{ url('public/image/'.$frontend->hero_image )}}" class="img img-fluid img-thumbnail"
                      style="max-width: 80%; height:370px" alt="">
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane pt-3 fade" id="reward" role="tabpanel" aria-labelledby="reward-tab">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="reward_motcash">Reward Motor Cash</label>
                    <input type="number" class="form-control @error('reward_motcash') is-invalid @enderror" autofocus
                      id="reward_motcash" name="reward_motcash" value="{{ $frontend->reward_motcash }}">

                    @error('reward_motcash')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="reward_mobcash">Reward Mobil Cash</label>
                    <input type="number" class="form-control @error('reward_mobcash') is-invalid @enderror" autofocus
                      id="reward_mobcash" name="reward_mobcash" value="{{ $frontend->reward_mobcash }}">

                    @error('reward_mobcash')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="reward_bigmocash">Reward Big Mobil Cash</label>
                    <input type="number" class="form-control @error('reward_bigmocash') is-invalid @enderror" autofocus
                      id="reward_bigmocash" name="reward_bigmocash" value="{{ $frontend->reward_bigmocash }}">

                    @error('reward_bigmocash')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="reward_rumahcash">Reward Rumah</label>
                    <input type="number" class="form-control @error('reward_rumahcash') is-invalid @enderror" autofocus
                      id="reward_rumahcash" name="reward_rumahcash" value="{{ $frontend->reward_rumahcash }}">

                    @error('reward_rumahcash')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane pt-3 fade" id="peluang" role="tabpanel" aria-labelledby="peluang-tab">
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="peluang_title">Judul Peluang</label>
                    <input type="text" class="form-control @error('peluang_title') is-invalid @enderror" autofocus
                      id="peluang_title" name="peluang_title" value="{{ $frontend->peluang_title }}">

                    @error('peluang_title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="peluang_description">Peluang Deskripsi</label>
                    <textarea name="peluang_description" rows="5"
                      class="form-control @error('peluang_description') is-invalid @enderror"
                      id="peluang_description">{{ $frontend->peluang_description }}</textarea>
                    @error('peluang_description')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="peluang_image">Peluang Image</label>
                    <div class="custom-file mb-1">
                      <input type="file" class="custom-file-input @error('peluang_image') is-invalid @enderror"
                        id="peluang_image" name="peluang_image">
                      <label class="custom-file-label" for="peluang_image">Choose
                        file...</label>
                    </div>
                  </div>
                  @error('peluang_image')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>
                <div class="col-lg-8">
                  <div class="form-group">
                    <img src="{{ url('public/image/'.$frontend->peluang_image )}}" class="img img-fluid img-thumbnail"
                      style="max-width: 80%; height:370px" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane pt-3 fade" id="penghasilan" role="tabpanel" aria-labelledby="penghasilan-tab">
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="penghasilan_title">Judul Penghasilan</label>
                    <input type="text" class="form-control @error('penghasilan_title') is-invalid @enderror" autofocus
                      id="penghasilan_title" name="penghasilan_title" value="{{ $frontend->penghasilan_title }}">

                    @error('penghasilan_title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="penghasilan_image">Penghasilan Image</label>
                    <div class="custom-file mb-1">
                      <input type="file" class="custom-file-input @error('penghasilan_image') is-invalid @enderror"
                        id="penghasilan_image" name="penghasilan_image">
                      <label class="custom-file-label" for="penghasilan_image">Choose
                        file...</label>
                    </div>
                  </div>
                  @error('penghasilan_image')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>
                <div class="col-lg-8">
                  <div class="form-group">
                    <img src="{{ url('public/image/'.$frontend->penghasilan_image )}}"
                      class="img img-fluid img-thumbnail" style="max-width: 80%; height:370px" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary mb-2 btn-pill">Update</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@push('custom-scripts')
@if(session()->has('success'))
<script>
  toastr.success('Frontends has been updated')

</script>
@endif
@endpush