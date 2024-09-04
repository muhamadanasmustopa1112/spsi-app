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
              <h5>Edit Contact</h5>
            </div>
            <div class="card-body m-4">
                <form action="{{ route('contacts.update', $item_id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Telepon</label>
                        <input type="text" name="telepon" value="{{ old('telepon') }}" class="form-control @error('telepon') is-invalid @enderror"   placeholder="Masukan Telepon">
                        @error('telepon')
                          <div class="text-muted">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"   placeholder="Masukan Email">
                        @error('email')
                          <div class="text-muted">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Adress</label>
                        <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="exampleFormControlTextarea1" placeholder="Masukan address" rows="4"></textarea>
                        @error('address')
                        <div class="text-muted">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Url</label>
                      <input type="text" name="url" value="{{ old('url') }}" class="form-control @error('url') is-invalid @enderror"   placeholder="<iframe src />">
                      @error('url')
                        <div class="text-muted">{{$message}}</div>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="card table-card">
            <div class="card-header">
              <h5>Contact</h5>
            </div>
            <div class="card-body p-4">
              @foreach ($items as $item)
              <div class="row">
                  <div class="col-xl-6">
                    <table>
                      <tr>
                        <td style="padding-right: 10px">Telepon</td>
                        <td style="padding-right: 10px">:</td>
                        <td>{{$item->telepon}}</td>
                      </tr>
                      <tr>
                        <td style="padding-right: 10px">Email</td>
                        <td style="padding-right: 10px">:</td>
                        <td>{{$item->email}}</td>
                      </tr>
                      <tr>
                        <td style="padding-right: 10px">address</td>
                        <td style="padding-right: 10px">:</td>
                        <td>{{$item->address}}</td>
                      </tr>
                    </table>
                  </div>
              </div>
              <br>
              <div class="row">
                <div class="col-xl-6">
                  <div class="rounded h-100">
                    {!!$item->url!!}
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <!-- [ Main Content ] end -->
  </div>
  <!-- [ Main Content ] end -->

  @endsection