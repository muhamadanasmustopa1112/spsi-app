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
                    <label class="form-label">NIK</label>
                    <input type="text" name="nik"
                      class="form-control @error('nik') is-invalid @enderror"
                      value="{{ old('nik') }}">
                    @error('nik')
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
                      <th>NIK</th>
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
                      <td>{{ $item->nik ?? '-' }}</td>
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
                        <div class="d-flex gap-1">
                          <a href="{{ route('field-employee-edit', $item->id) }}" class="btn btn-warning btn-sm">
                            Edit
                          </a>
                          <form action="{{ route('field-employee-destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                              Delete
                            </button>
                          </form>
                        </div>
                      </td>
                    </tr>

                    @empty
                    <tr>
                      <td colspan="7" class="text-center p-5">
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
