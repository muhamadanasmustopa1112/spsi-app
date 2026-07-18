# Tambah Field Nama Perusahaan pada Field Employee

## Context
Halaman admin `/field-employee` (tambah & edit karyawan lapangan) dan kartu nama publik
`/card/{slug}` saat ini menampilkan nama perusahaan secara hardcode: **"PT SARANA PRIMA
SOLUSI INDONESIA"** (lihat `resources/views/employee/card.blade.php:193`).

User ingin:
1. Menambahkan field input **Nama Perusahaan** pada form tambah & edit karyawan.
2. Menampilkan nilai field tersebut (bukan teks hardcode) pada kartu nama.

Data saat ini disimpan di tabel `field_employees`. Kolom baru `company` perlu ditambahkan.

## Perubahan

### 1. Migration (baru)
Buat `database/migrations/2026_07_18_000000_add_company_to_field_employees_table.php`
mengikuti pola migrasi `add_*_to_field_employees_table` yang sudah ada
(e.g. `2026_01_23_025057_add_address_to_field_employees_table.php`):
- `up()`: `Schema::table('field_employees', fn($t) => $t->string('company')->nullable());`
- `down()`: `Schema::table('field_employees', fn($t) => $t->dropColumn('company'));`

### 2. Model — `app/Models/FieldEmployee.php`
Tambahkan `'company'` ke dalam array `$fillable` (baris 12-21).

### 3. View form tambah — `resources/views/admin/field-employee.blade.php`
- Tambahkan input `name="company"` (label "Nama Perusahaan") di antara field Jabatan/NIK
  dan No HP, dengan `value="{{ old('company') }}"` dan error handling `@error`.
- Tambahkan kolom header & `<td>{{ $item->company ?? '-' }}</td>` pada tabel data
  (perbaiki `colspan="7"` → `colspan="8"` di baris 149).

### 4. View form edit — `resources/views/admin/edit-field-employee.blade.php`
Tambahkan input `name="company"` dengan `value="{{ old('company', $item->company) }}"`.

### 5. View kartu — `resources/views/employee/card.blade.php`
Ganti baris 193:
```blade
<div class="company">{{ $employee->company ?? 'PT SARANA PRIMA SOLUSI INDONESIA' }}</div>
```
Menggunakan fallback ke teks lama agar data karyawan eksisting (yang belum punya `company`)
tetap menampilkan nama perusahaan default.

## Catatan / Risiko
- Kolom `company` dibuat `nullable` agar data lama tidak error. Fallback di kartu menjamin
  tampilan tetap konsisten untuk record eksisting.
- Controller `FieldEmployeeController` (`store`/`update`) menggunakan `$request->all()` +
  `$fillable`, jadi tidak perlu diubah selama `company` ada di `$fillable`.
- Jalankan `php artisan migrate` setelah migration dibuat.

## Validasi
1. `php artisan migrate` berjalan tanpa error.
2. Tambah karyawan baru → isi Nama Perusahaan → simpan → tampil di tabel & kartu.
3. Edit karyawan eksisting → field Nama Perusahaan terisi (jika ada) → update berhasil.
4. Buka `/card/{slug}` → menampilkan nama perusahaan dari field, atau fallback default
   untuk record lama.
