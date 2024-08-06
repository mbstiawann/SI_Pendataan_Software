<?php

namespace App\Http\Controllers;

use App\Models\Software;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    public function index()
    {
        $softwares = Software::latest();

        if (request('search')) {
            $softwares->where('name_software', 'like', '%' . request('search') . '%');
        }
        return view('master.mastersoftware', [
            'softwares' => $softwares->paginate(8)
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_software' => 'required|min:4',
            'slug' => 'required'
        ], [
            'name_software.required' => 'Software Wajib Di isi',
            'name_software.min' => 'Nama Software Minimal 4 Huruf',
            'slug.required' => 'Slug Software Wajib Di isi'
        ]);

        $data = [
            'name_software' => $request->input('name_software'),
            'slug' => $request->input('slug'),
            'category_software' => $request->input('category_software'),
            'licence' => $request->input('licence')
        ];

        Software::create($data);
        return redirect('/softwares')->with('success', 'Software Baru Berhasil Di Tambahkan');
    }
}
