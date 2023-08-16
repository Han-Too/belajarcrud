@extends('admin.index')

@section('title', 'Admin | Ubah Siswa')


@section('content')
    <div class="card bg-light shadow-lg">
        <div class="card-body">
            <div class="card-header">
                <div class="d-flex justify-content-between">

                    <div class="fs-2 fw-bolder">
                        Tambah Data Siswa
                    </div>
                    <button class="btn mx-2 btn-primary" onclick="history.back()">
                        Kembali
                    </button>
                </div>
            </div>
            <div class="card-body">
                @foreach ($siswa as $siswa)
                    <form action="/updatesiswa" method="post">
                        @method('put')
                        @csrf
                        <div class="form-outline mb-2">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{ $siswa->nama }}"
                                class="form-control">
                            <input type="hidden" name="id" id="id" value="{{ $siswa->id }}"
                                class="form-control">
                        </div>
                        <div class="form-outline mb-2">
                            <label for="Alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" id="Alamat" value="{{ $siswa->alamat }}"
                                class="form-control">
                        </div>
                        <div class="form-outline mb-2">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select name="kelas" class="form-control" id="kelas">
                                <option {{ $siswa->kelas == 'X-1' ? 'selected' : '' }} value="X-1">X-1</option>
                                <option {{ $siswa->kelas == 'X-2' ? 'selected' : '' }} value="X-2">X-2</option>
                                <option {{ $siswa->kelas == 'X-3' ? 'selected' : '' }} value="X-3">X-3</option>
                                <option {{ $siswa->kelas == 'X-4' ? 'selected' : '' }} value="X-4">X-4</option>
                                <option {{ $siswa->kelas == 'X-5' ? 'selected' : '' }} value="X-5">X-5</option>
                            </select>
                        </div>
                        <div class="form-outline mb-4">
                            <label for="Status" class="form-label">Status</label>
                            <select name="status" class="form-control" id="Status">
                                <option {{ $siswa->status == '1' ? 'selected' : '' }} value="1">Aktif</option>
                                <option {{ $siswa->status == '0' ? 'selected' : '' }} value="0">Non-aktif</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn mx-2 btn-success" type="submit">
                                Ubah
                            </button>
                        </div>
                    </form>
                @endforeach

            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
