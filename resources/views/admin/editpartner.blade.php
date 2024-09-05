@extends('layouts.admin')

@section('content')
    
  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ Main Content ] start -->
      <div class="row">
        <div class="col-sm-12">
          @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif
          <div class="card table-card">
            <div class="card-header">
              <h5>Edit Partner</h5>
            </div>
            <div class="card-body m-4">
                <form action="{{ route('partner-edit', $item->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" value="{{ old('name') ? old('name') : $item->name }}" class="form-control @error('name') is-invalid @enderror"   placeholder="Masukan name ">
                        @error('name')
                          <div class="text-muted">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Images</label>
                      <input class="form-control  @error('images') is-invalid @enderror" value="{{ old('images') ? old('images') : $item->images }}" name="images" type="file" id="formFile">
                      @if($item->images)
                        <br>
                        <label for="current_image" class="form-label">Current Images : </label>
                        <img src="{{ asset('storage/' . $item->images) }}" alt="Current Image" style="max-width: 100px; height:auto;" id="current_image">
                      @endif
                      @error('images')
                      <div class="text-muted">{{$message}}</div>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
          </div>
        </div>
      </div>
      <!-- [ Main Content ] end -->

  </div>
  <!-- [ Main Content ] end -->

  @endsection