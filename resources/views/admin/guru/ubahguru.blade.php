@extends('admin.index')

@section('title', 'Admin | Ubah Guru')


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
                @foreach ($guru as $guru)
                    <form action="/updateguru" method="post">
                        @method('put')
                        @csrf
                        <div class="form-outline mb-2">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{ $guru->nama }}"
                                class="form-control">
                            <input type="hidden" name="id" id="id" value="{{ $guru->id }}"
                                class="form-control">
                        </div>
                        <div class="form-outline mb-2">
                            <label for="nig" class="form-label">Nomor Induk Guru</label>
                            <input type="text" name="nig" id="nig" value="{{ $guru->nig }}"
                                class="form-control">
                        </div>
                        <div class="form-outline mb-2">
                            <label for="Alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" id="Alamat" value="{{ $guru->alamat }}"
                                class="form-control">
                        </div>
                        <div class="form-outline mb-4">
                            <label for="Status" class="form-label">Status</label>
                            <select name="status" class="form-control" id="Status">
                                <option {{ $guru->status == '1' ? 'selected' : '' }} value="1">Aktif</option>
                                <option {{ $guru->status == '0' ? 'selected' : '' }} value="0">Non-aktif</option>
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
