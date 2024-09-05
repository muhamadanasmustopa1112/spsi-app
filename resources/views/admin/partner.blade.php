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
              <h5>Tambah Partner</h5>
            </div>
            <div class="card-body m-4">
                <div class="row">
                    <div class="col-sm-12">
                        <form action="{{ route('partner-store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"   placeholder="Masukan Logo">
                                @error('name')
                                <div style="color: red;">{{$message}}</div>
                                @enderror
                            </div>
                 
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Images</label>
                                <input class="form-control  @error('images') is-invalid @enderror" value="{{ old('images') }}"  name="images" type="file" id="formFile">
                                @error('images')
                                <div style="color: red;">{{$message}}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-12">
                        <h6>Table Partner</h6>
                        <div class="table-responsive p-3">
                            <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Images</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $no = 0;
                            @endphp
                            @forelse ($items as $item)
                                @php
                                    $no++;
                                @endphp
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$item->name}}</td>
                                    <td><img src="{{asset('storage/' . $item->images) }}" alt="prod img" style="max-width: 100px; height:auto;"></td>
                                    <td>
                                        <a href="{{route('edit-partner', $item->id)}}" class="btn btn-primary" style="margin-bottom: 5px">Edit</a>
                                        <form action="{{ route('partner-destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>                                
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center p-5">
                                        Data tidak tersedia
                                    </td>
                                </tr>
                            @endforelse
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ Main Content ] end -->

  </div>
  <!-- [ Main Content ] end -->

  @endsection