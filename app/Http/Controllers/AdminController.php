<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    
    public function indexsiswa(){
        $siswa = DB::table('siswa')->get();
        return view('admin.siswa.siswa',compact('siswa'));
    }

    public function tambahsiswa(){
        return view('admin.siswa.tambahsiswa');
    }

    public function storesiswa(Request $request){
        $tambah = DB::table('siswa')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'status' => $request->status,
            'kelas' => $request->kelas,
        ]);

        if($tambah){
            Alert::success('Success','Berhasil Menambah Data');
            return redirect('siswa');
        }else{
            Alert::error('Error','Gagal Menambah Data');
            return redirect('siswa');
        }
    }

    public function editsiswa($id){
        $siswa = DB::table('siswa')->where('id',$id)->get();
        return view('admin.siswa.ubahsiswa',compact('siswa'));
    }
    public function updatesiswa(Request $request){
        $ubah = DB::table('siswa')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'status' => $request->status,
            'kelas' => $request->kelas,
        ]);

        if($ubah){
            Alert::success('Success','Berhasil Merubah Data');
            return redirect('siswa');
        }else{
            Alert::error('Error','Gagal Merubah Data');
            return redirect('siswa');
        }
    }

    public function deletesiswa($id){
        $hapus = DB::table('siswa')->where('id', $id)->delete();

        if($hapus){
            Alert::success('Success','Berhasil Menghapus Data');
            return redirect('siswa');
        }else{
            Alert::error('Error','Gagal Menghapus Data');
            return redirect('siswa');
        }
    }

    public function indexguru(){
        $guru = DB::table('guru')->get();
        return view('admin.guru.guru',compact('guru'));
    }

    public function tambahguru(){
        return view('admin.guru.tambahguru');
    }

    public function storeguru(Request $request){
        $tambah = DB::table('guru')->insert([
            'nama' => $request->nama,
            'nig' => $request->nig,
            'alamat' => $request->alamat,
            'status' => $request->status,
        ]);

        if($tambah){
            Alert::success('Success','Berhasil Menambah Data');
            return redirect('guru');
        }else{
            Alert::error('Error','Gagal Menambah Data');
            return redirect('guru');
        }
    }

    public function editguru($id){
        $guru = DB::table('guru')->where('id',$id)->get();

        return view('admin.guru.ubahguru',compact('guru'));
    }

    public function updateguru(Request $request){
        $tambah = DB::table('guru')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'nig' => $request->nig,
            'alamat' => $request->alamat,
            'status' => $request->status,
        ]);

        if($tambah){
            Alert::success('Success','Berhasil Merubah Data');
            return redirect('guru');
        }else{
            Alert::error('Error','Gagal Merubah Data');
            return redirect('guru');
        }
    }
}
