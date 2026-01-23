@extends('layouts.admin')

@section('content')

<div class="pc-container">
  <div class="pc-content">
    <div class="row">
      <div class="col-sm-12">

        @if (session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
        @endif

        <div class="card table-card">
          <div class="card-header">
            <h5>Tambah Karyawan Lapangan</h5>
          </div>

          <div class="card-body m-4">

            {{-- FORM INPUT --}}
            <div class="row">
              <div class="col-sm-12">
                <form action="{{ route('field-employee-store') }}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name"
                      class="form-control @error('name') is-invalid @enderror"
                      value="{{ old('name') }}">
                    @error('name')
                      <div style="color:red">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Jabatan</label>
                    <input type="text" name="position"
                      class="form-control @error('position') is-invalid @enderror"
                      value="{{ old('position') }}">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">No HP</label>
                    <input type="text" name="phone"
                      class="form-control @error('phone') is-invalid @enderror"
                      placeholder="+628xxxxxxxxx"
                      value="{{ old('phone') }}">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Email (Opsional)</label>
                    <input type="email" name="email"
                      class="form-control"
                      value="{{ old('email') }}">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Alamat (Opsional)</label>
                    <textarea name="address" id="" class="form-control">{{ old('address') }}</textarea>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Foto (Opsional)</label>
                    <input type="file" name="photo"
                      class="form-control">
                  </div>

                  <button type="submit" class="btn btn-primary">
                    Save
                  </button>
                </form>
              </div>
            </div>

            {{-- TABLE DATA --}}
            <div class="row mt-5">
              <div class="col-sm-12">
                <h6>Table Karyawan Lapangan</h6>

                <div class="table-responsive p-3">
                  <table class="table">
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Jabatan</th>
                      <th>QR Code</th>
                      <th>Kartu Nama</th>
                      <th>Action</th>
                    </tr>

                    @php $no = 1; @endphp
                    @forelse ($items as $item)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->position }}</td>

                      {{-- QR CODE --}}
                      <td>
                        <img
                          src="https://api.qrserver.com/v1/create-qr-code/?size=120x120&data={{ url('/card/'.$item->slug) }}"
                          alt="qr">
                      </td>

                      {{-- LINK KARTU --}}
                      <td>
                        <a href="{{ url('/card/'.$item->slug) }}"
                           target="_blank"
                           class="btn btn-sm btn-success">
                           View
                        </a>
                      </td>

                      {{-- ACTION --}}
                      <td>
                        <form action="{{ route('field-employee-destroy', $item->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm">
                            Delete
                          </button>
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
  </div>
</div>

@endsection
