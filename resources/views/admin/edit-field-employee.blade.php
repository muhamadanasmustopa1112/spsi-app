@extends('layouts.admin')

@section('content')

<div class="pc-container">
  <div class="pc-content">
    <div class="row">
      <div class="col-sm-12">

        <div class="card">
          <div class="card-header">
            <h5>Edit Karyawan Lapangan: {{ $item->name }}</h5>
          </div>

          <div class="card-body">
            <form action="{{ route('field-employee-update', $item->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name"
                  class="form-control @error('name') is-invalid @enderror"
                  value="{{ old('name', $item->name) }}">
                @error('name')
                  <div style="color:red">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">NIK</label>
                <input type="text" name="nik"
                  class="form-control @error('nik') is-invalid @enderror"
                  value="{{ old('nik', $item->nik) }}">
                @error('nik')
                  <div style="color:red">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">Nama Perusahaan</label>
                <input type="text" name="company"
                  class="form-control @error('company') is-invalid @enderror"
                  value="{{ old('company', $item->company) }}">
                @error('company')
                  <div style="color:red">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">Jabatan</label>
                <input type="text" name="position"
                  class="form-control @error('position') is-invalid @enderror"
                  value="{{ old('position', $item->position) }}">
              </div>

              <div class="mb-3">
                <label class="form-label">No HP</label>
                <input type="text" name="phone"
                  class="form-control @error('phone') is-invalid @enderror"
                  placeholder="+628xxxxxxxxx"
                  value="{{ old('phone', $item->phone) }}">
              </div>

              <div class="mb-3">
                <label class="form-label">Email (Opsional)</label>
                <input type="email" name="email"
                  class="form-control"
                  value="{{ old('email', $item->email) }}">
              </div>

              <div class="mb-3">
                <label class="form-label">Alamat (Opsional)</label>
                <textarea name="address" class="form-control">{{ old('address', $item->address) }}</textarea>
              </div>

              <div class="mb-3">
                <label class="form-label">Foto Baru (Opsional)</label>
                <input type="file" name="photo" class="form-control">
                @if($item->photo)
                  <div class="mt-2">
                    <p>Foto Saat Ini:</p>
                    <img src="{{ Storage::url($item->photo) }}" alt="photo" width="100">
                  </div>
                @endif
              </div>

              <div class="mt-4">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('field-employee') }}" class="btn btn-secondary">Batal</a>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection
