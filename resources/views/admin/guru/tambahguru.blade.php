@extends('admin.index')

@section('title', 'Admin | Tambah Guru')


@section('content')
    <div class="card bg-light shadow-lg">
        <div class="card-body">
            <div class="card-header">
                <div class="d-flex justify-content-between">

                    <div class="fs-2 fw-bolder">
                        Tambah Data Guru
                    </div>
                    <button class="btn mx-2 btn-primary" onclick="history.back()">
                        Kembali
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('storeguru') }}" method="post">
                    @csrf
                    @method('post')
                    <div class="form-outline mb-2">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="form-outline mb-2">
                        <label for="Nig" class="form-label">Nomor Induk Guru</label>
                        <input type="text" name="nig" id="Nig" class="form-control">
                    </div>
                    <div class="form-outline mb-2">
                        <label for="Alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="Alamat" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="Status" class="form-label">Status</label>
                        <select name="status" class="form-control" id="Status">
                            <option value="1">Aktif</option>
                            <option value="0">Non-aktif</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn mx-2 btn-success" type="submit">
                            Tambah
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
