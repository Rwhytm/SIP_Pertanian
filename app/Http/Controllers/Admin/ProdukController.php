<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UploadImageRequest;
use Illuminate\Support\Str;   
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\ProdukImage;
use DB;
use Session;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }
    public function index(){
        $this->data['produk'] = Produk::orderBy('id', 'ASC')->paginate(10);
        return view('admin.produk.produk', $this->data);
    }
    public function tambah(){
        $kategori = Kategori::orderBy('nama_kategori', 'ASC') -> get();
        $this->data['kategori'] = $kategori->toArray();
        $this->data['produk'] = null;
        $this->data['kategori_id'] = [];
        return view('admin.produk.tambah_produk',['kategori'   =>  $kategori]);
    }
    public function store(Request $request){
        $produk = Produk::create([
            'nama_produk' =>  Str::upper($request->nama),
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'satuan' => Str::upper($request->satuan),
            'deskripsi' => $request->deskripsi,
        ]);
        $produk->kategori()->sync($request['kategori_id']);
        if($produk){
            $request->session()->flash('success', 'produk berhasil ditambahkan');
        }else{
            $request->session()->flash('error', 'produk gagal disimpan');
        }
        return redirect('admin/produk');
    }
    public function edit($id)
    {
        $produk = Produk::find($id);
        $kategori = Kategori::orderBy('nama_kategori', 'ASC') -> get();
        return view('admin.produk.edit', ['produk' => $produk,'kategori'   =>  $kategori]);
    }
    public function update(Request $request, $id){
        $produk = Produk::find($id);
        $produk->update([
            'nama_produk' =>  Str::upper($request->nama),
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'satuan' => Str::upper($request->satuan),
            'deskripsi' => $request->deskripsi,
        ]);
        $produk->kategori()->sync($request['kategori_id']);
        return redirect('admin/produk');
    }
    public function hapus($id){
        $hapus = Produk::find($id)->delete();
        return redirect('admin/produk');
    }


    // manajemen  image
    public function images($id){
        $produk = Produk::find($id);
        $image = $produk->produkImages;

        return  view('admin.produk.images',['produk' => $produk,'image'   =>  $image]);
    }
    public function addImage($id){
        $produk = Produk::find($id);

        return view('admin.produk.image_form',['produk' => $produk]);
    }
    public function upload_image(UploadImageRequest $request, $id){
        $produk = Produk::find($id);
        
        // $rules = array(
        //     'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
        //   );
        // if ($request->file('image')){
        if ($request->hasFile('image')){ 
            $image = $request->file('image');
            
            // $name = Str::slug($produk->name).'_'.time();
            // $name = Str::slug($request->file('image')).'_'.time().$request->file('image')->getClientOriginalName();
            $name = time().$request->file('image')->getClientOriginalName();
            // $filename = $name.'.'.$image->getClientOriginalExtension();

            $folder = 'storage/uploads/images';
            $filePath = 'storage/uploads/images/'. $name; 
            $request->file('image')->move('storage/uploads/images', $name);
            $produkimage = ProdukImage::create(
                [
                    'produk_id' => $produk->id,
                    'path' => $filePath,
                ]
            );

            return redirect(route('produk.image', $produk->id));
        }
    }

    public function remove_image($id)
    {
        $image = ProdukImage::findOrFail($id);
        $produk = Produk::find($id);
        if ($image->delete()) {
            Session::flash('success', 'Image has been deleted');
        }

        return redirect('admin/produk/'.$image->produk->id.'/images');
    }
}
