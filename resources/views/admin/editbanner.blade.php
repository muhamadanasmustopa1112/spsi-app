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
              <h5>Edit Banner Carousel</h5>
            </div>
            <div class="card-body m-4">
                <form action="{{ route('banners.update', $item->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" value="{{ old('title') ? old('title') : $item->title }}" class="form-control @error('title') is-invalid @enderror"   placeholder="Masukan title banner">
                        @error('title')
                          <div class="text-muted">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="exampleFormControlTextarea1" placeholder="Masukan deskripsi" rows="3">{{$item->description }}</textarea>
                        @error('description')
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