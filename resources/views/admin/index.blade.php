@extends('layouts.admin')

@section('content')
    
  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- Recent Orders start -->
      <div class="row">
        <div class="col-sm-12">
          <div class="card table-card">
            <div class="card-header">
              <h5>Banner</h5>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Deskripsi</th>
                    <th>Images</th>
                    <th>Action</th>
                  </tr>
                  @forelse ($items as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->title}}</td>
                      <td>{{$item->description}}</td>
                      <td><img src="{{asset('storage/' . $item->images) }}" alt="prod img" style="max-width: 100px; height:auto;"></td>
                      <td>
                        <a href="{{route('edit-banner', $item->id)}}" class="btn btn-primary rounded-3">
                          Edit
                        </a>
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