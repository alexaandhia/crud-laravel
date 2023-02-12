<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Cache\RedisTaggedCache;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ambil semua data
        $data = Student::where([
        ])->get();
        
        // ['umur', '>=', '15'],
        // ['JK', '=', 'perempuan']
        //memanggil view (yang extensionnya .blade.php)
        //yang di compact samain kaya variabel, fungsi compact buat kirim data
        return view('home.index', compact('data'));
    }

    public function dashboard(){
        return view('dashboard');
    }

    //class login LOGIN SM AUTH SEPAKET YH GAISS
    public function login(){
        return view('login');
    }

    //class auth
    public function auth(Request $request){
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        //ambil input bagian email dan password
        $user = $request->only('email', 'password');
        if (Auth::attempt ($user)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->with('error', 'gagal login');  
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|min:8',
            'nama' => 'required|min:3',
            'JK' => 'required',
            'umur' => 'required|numeric',
            'foto' => 'required|image|mimes:jpg,jpeg,png,svg,jfif',
        ]);

        //upload gambar ke public
        $image = $request->file('foto');
        //ubah nama file jadi random.ekstensi
        $imgName = rand() . '.' . $image->extension();
        //panggil folder tempat simpen data
        $path = public_path('assets/image/');
        //pindahin gambar yangd diupload dan di-rename ke folder tadi
        $image->move($path, $imgName);

        Student::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'JK' => $request->JK,
            'umur' => $request->umur,
            'foto' => $imgName,
        ]);

        return redirect('/')->with('successAdd', 'Create Succeed!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //{{$item->id}} kirim id ke path dinamis (id) terus dikirim ke resources edit dan diambil di patameter ($id)
        //dipakai utk filter/pilih data mana yang akan diambil untuk diubah nantinya
        //firstorfail mengambil satu data paling sesuai datanya dikirim ke blade lewat compact
        $data = Student::where('id', '=', $id)->firstOrFail();
        return view('home.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student, $id)
    {
        $request->validate([
            'nis' => 'required|min:8',
            'nama' => 'required|min:3',
            'JK' => '',
            'umur' => 'required|numeric',
        ]);

        //untuk ngecek juka input foto kosong, data imgName akan berisi data sebelumnya
        //kalo ga kosong, foto yang di upload akan diambil, rename terus dipindah ke public

        if(is_null($request->file('foto'))){
            $imgName = Student::where('id', '=', $id)->value('foto');
        }else{
        $image = $request->file('foto');
        $imgName = rand() . '.' . $image->extension();
        $path = public_path('assets/image/');
        $image->move($path, $imgName);
        }

        Student::where('id', '=', $id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'JK' => $request->JK,
            'umur' => $request->umur,
            'foto' => $imgName,
        ]);
        return redirect()->route('home')->with('successUpdate', 'Edit Succeed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::where('id', '=', $id)->delete();

        return redirect()->back()
                        ->with('successDelete','Delete Success!');
    }

    public function logout(Request $request){
    Auth::logout(); 
    return redirect('/');
    }
}
