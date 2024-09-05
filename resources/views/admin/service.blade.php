@extends('layouts.admin')

@section('content')
    
  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- Recent Orders start -->
      <div class="row">
        <div class="col-sm-12">
          @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
          @endif
          <div class="card table-card">
            <div class="card-header">
              <h3>Service</h3>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive p-3">
                <a href="{{route('service-store')}}" class="btn btn-primary rounded-3">
                  Add Service
                </a>
                <br>
                <br>
                @php
                  $no = 0;
                @endphp
                <table class="table">
                  <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Deskripsi</th>
                    <th>Images</th>
                    <th>Action</th>
                  </tr>
                  @forelse ($items as $item)
                    @php
                      $no++;
                    @endphp
                    <tr>
                      <td>{{$no}}</td>
                      <td>{{$item->title}}</td>
                      <td>{{$item->description}}</td>
                      <td><img src="{{asset('storage/' . $item->images) }}" alt="prod img" style="max-width: 100px; height:auto;"></td>
                      <td>
                        <a href="{{route('edit-service', $item->id)}}" class="btn btn-primary rounded-3" style="margin-bottom: 5px">
                          Edit
                        </a>
                        <form action="{{ route('services-destroy', $item->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger rounded-3">Delete</button>
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
    <!-- Recent Orders end -->
  </div>
  <!-- [ Main Content ] end -->
  
  @endsection