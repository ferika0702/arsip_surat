<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use DB;
use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadFile(Request $request,$isi)
    {
            $result ='';
            $file = $request->file($isi);
            $name = $file->getClientOriginalName();
            // $tmp_name = $file['tmp_name'];
            $fixname = str_replace('.pdf','_',$name);
            $extension = explode('.',$name);
            $extension = strtolower(end($extension));

            $key = $fixname.'_'.rand();
            $tmp_file_name = "{$key}.{$extension}";
            $tmp_file_path = "surat";
            $file->move($tmp_file_path,$tmp_file_name);
            $result = ' ';
            //if(move_uploaded_file($tmp_name, $tmp_file_path)){
                $result = $tmp_file_name;
            //}
        return url('surat').'/'.$result;
    }
     public function index()
    {
        $data = Arsip::orderBy("id",'desc')->paginate(10);
        return view('arsip.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPage()
    {
        return view('arsip.create');
    }
    public function editPage($id)
    {
        $data = DB::table('arsip_surat')->where('id',$id)->first();
        return view('arsip.edit',compact('data'));
    }
    public function detailPage($id)
    {
        $data = DB::table('arsip_surat')->where('id',$id)->first();
        return view('arsip.detail',compact('data'));
    }
    public function about()
    {
        return view('arsip.about');
    }
    public function create(Request $request)
    {
        DB::table('arsip_surat')->insert(
            [
                'judul'=>$request->judul,
                'kategori'=>$request->kategori,
                'nomor'=>$request->nomor,
                'file'=>$this->uploadFile($request,'file'),
                'created_at'=>Carbon::now()->format('Y-m-d')
            ]);
        return redirect('admin/surat')->with('success','Data berhasil disimpan');
    }
    public function update(Request $request,$id)
    {
        if($request->file('file') != null)
        {
            $fixGambar = $this->uploadFile($request,'file');
        }else
        {
            $fixGambar = $request->old_file;
        }
        DB::table('arsip_surat')->where('id',$id)->update(
            [
                'judul'=>$request->judul,
                'kategori'=>$request->kategori,
                'nomor'=>$request->nomor,
                'file'=>$fixGambar,
                'created_at'=>Carbon::now()->format('Y-m-d')
            ]);
        return redirect('admin/surat')->with('success','Data berhasil diubah');
    }
    public function download_pdf($id)
    {
        $data = DB::table('arsip_surat')->where('id',$id)->select('file','judul')->first();
        $headers = array('Content-Type: application/pdf');
        $fixname = explode('/', $data->file);
        $fixfile= end($fixname);
        $file = public_path().'/surat/'.$fixfile;
        return response()->download($file, ''.$data->judul.'.pdf', $headers);              
        
    }
    


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('arsip_surat')->where('id',$id)->delete();
        return redirect('admin/surat')->with('success','Data berhasil dihapus');
    }
}
