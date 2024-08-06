<?php

namespace App\Http\Controllers;

use App\Models\Asisten;
use Illuminate\Http\Request;

class AsistenController extends Controller
{
    public function index()
    {
        $asistens = Asisten::latest();

        if (request('search')) {
            $asistens->where('name', 'like', '%' . request('search'));
        }

        return view('master.masterasisten', [
            'asistens' => $asistens->paginate(8)
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'sex' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'study_program' => 'required',
            'image' => 'required',
            'join_date' => 'required'
        ]);

        $data = [
            'nim' => $request->input('nim'),
            'name' => $request->input('name'),
            'sex' => $request->input('sex'),
            'address' => $request->input('address'),
            'phone_number' => $request->input('phone_number'),
            'study_program' => $request->input('study_program'),
            'image'=> $request->input('image'),
            'join_date' => $request->input('join_date')
        ];
    }
}
