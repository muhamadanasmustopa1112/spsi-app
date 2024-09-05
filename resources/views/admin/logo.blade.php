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
              <h5>Tambah Logo</h5>
            </div>
            <div class="card-body m-4">
                <div class="row">
                    <div class="col-sm-12">
                        <form action="{{ route('logo-store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"   placeholder="Masukan Logo">
                                @error('name')
                                <div style="color: red;">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                            <label>Status Aktif</label>
                            <br>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="active" id="inlineRadio1" value="Y">
                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="active" id="inlineRadio2" value="N">
                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                            </div>
                            @error('active')
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
                        <h6>Table Logo</h6>
                        <div class="table-responsive p-3">
                            <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Active</th>
                                <th>Images</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $no = 0;
                            @endphp

                            @forelse ($items as $item)
                                @php
                                    $no++;
                                    $uniqueId = 'flexSwitchCheckChecked' . $no;
                                @endphp
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" data-id="{{ $item->id }}" id="{{$uniqueId}}"  {{ old('active', $item->active) == 'Y' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="{{ $uniqueId }}">
                                                {{ $item->active == 'Y' ? 'Active' : 'Non Active' }}
                                            </label>
                                        </div>
                                    </td>
                                    <td><img src="{{asset('storage/' . $item->images) }}" alt="prod img" style="max-width: 100px; height:auto;"></td>
                                    <td style="display: flex; align-items: center;">
                                        <a href="{{route('edit-logo', $item->id)}}" class="btn btn-primary rounded-3 " style="margin-right: 5px">
                                            Edit
                                        </a>
                                        <form action="{{ route('logo-destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger  rounded-3">Delete</button>
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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
        $(document).ready(function() {
        
            $('[id^="flexSwitchCheckChecked"]').on('change', function() {
                var isActive = $(this).is(':checked') ? 'Y' : 'N';
                var itemId = $(this).data('id');

                $.ajax({
                    url: '/logos/' + itemId + '/update',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        active: isActive
                    },
                    success: function(response) {
                        if (response.success) {
                            alert(response.message);
                            location.reload();
                        } else {
                            alert(response.message);
                            location.reload();
                        } 
                        
                    },
                    error: function(xhr) {
                        alert('An error occurred while updating the status.');
                    }
                });
            });


        });
    </script>
  @endsection