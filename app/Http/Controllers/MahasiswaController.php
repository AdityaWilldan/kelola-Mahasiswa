<?php

namespace App\Http\Controllers;
use App\Helpers\SweetAlertHelper;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
   // metod read
   public function index(){
    $mahasiswa = Mahasiswa::all();
    return view('mahasiswa.index', compact(['mahasiswa']));
   }

   //metode create
   public function create(){
      return view('mahasiswa.create');
   }

   //metode create
   public function store(Request $request){
      Mahasiswa::create($request->except(['_token','submit']));
      return redirect('/Mahasiswa');
   }
   
   // metode update
   public function edit($id){
      $mahasiswa = Mahasiswa::find($id);
      return view('mahasiswa.edit', compact(['mahasiswa']));
   }

   // metode update
   public function update($id, Request $request){
      $mahasiswa = Mahasiswa::find($id);
      
      $data = $request->except(['_token','submit','_method']);

      if($request->hasFile('gambar')){
         $gambar = $request->file('gambar');
         $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
         $gambar->move(public_path('images'), $gambarName);

         $data['gambar'] = $gambarName;
      }


      $mahasiswa->update($data);
      return redirect('/Mahasiswa');
   }

   public function destroy($id){
      $mahasiswa = Mahasiswa::find($id);
      $mahasiswa->delete();
      return redirect('/Mahasiswa');
   }

}
