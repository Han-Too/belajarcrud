@extends('admin.index')

@section('title', 'Admin | Siswa')


@section('content')
    <div class="card bg-light shadow-lg">
        <div class="card-body">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="fs-2 fw-bolder">
                        Daftar Data Siswa
                    </div>
                    <form action="{{ route('tambahsiswa') }}" method="get">
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
                                <th class="text-center">Kelas</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @forelse ($siswa as $index => $data)
                                <tr class="table-light" >
                                    <td class="text-center">{{ $index+1 }}</td>
                                    <td class="text-center">{{ $data->nama }}</td>
                                    <td class="text-center">{{ $data->alamat }}</td>
                                    <td class="text-center">{{ $data->kelas }}</td>
                                    @if ($data->status == '1')
                                    <td class="text-center"><span class="badge text-bg-success">Aktif</span></td>
                                    @else
                                    <td class="text-center"><span class="badge text-bg-danger">Non-Aktif</span></td>
                                    @endif
                                    <td class="text-center" style="width:30%">
                                        <div class="d-flex align-items-center justify-content-evenly">
                                            <div class="p-2">
                                                <a href="/ubahsiswa/{{ $data->id }}" class="btn btn-success">Ubah</a>
                                            </div>
                                            <div class="p-2">
                                                <a href="/hapussiswa/{{ $data->id }}" class="btn btn-danger">Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                    <tr class="table-light">
                                        <td colspan="6">
                                            <div class="text-center">
                                                Data Masih Kosong
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse ()
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
