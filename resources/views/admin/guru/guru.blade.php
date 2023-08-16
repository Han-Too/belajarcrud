@extends('admin.index')

@section('title', 'Admin | Guru')


@section('content')
    <div class="card bg-light shadow-lg">
        <div class="card-body">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="fs-2 fw-bolder">
                        Daftar Data Guru
                    </div>
                    <form action="{{ route('tambahguru') }}" method="get">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-primary table-hover align-middle">
                        <thead class="table-primary">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">NIG</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @forelse ($guru as $index => $guru)
                            <tr class="table-light">
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td class="text-center">{{ $guru->nama }}</td>
                                <td class="text-center">{{ $guru->nig }}</td>
                                <td class="text-center">{{ $guru->alamat }}</td>
                                <td class="text-center">
                                    @if ($guru->status == '1')
                                    <span class="badge bg-primary">Aktif</span>
                                    @else
                                    <span class="badge bg-danger">Non-Aktif</span>
                                    @endif
                                </td>
                                <td class="text-center" style="width:30%">
                                    <div class="d-flex align-items-center justify-content-evenly">
                                        <div class="p-2">
                                            <a href="/ubahguru/{{ $guru->id }}" class="btn btn-success">Ubah</a>
                                        </div>
                                        <div class="p-2">
                                            <a href="/hapusguru/{{ $guru->id }}" class="btn btn-danger">Hapus</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                <tr class="table-light">
                                    <td colspan="6" class="text-center">
                                        Data Kosong
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
