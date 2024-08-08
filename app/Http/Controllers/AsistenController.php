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
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'join_date' => 'required|date'
        ]);

        $asisten = new Asisten;

        $asisten->nim = $request->nim;
        $asisten->name = $request->name;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->storeAs('public/image/asistens', $imageName);
            $asisten->image = 'storage/images/' . $imageName;
        }
        $asisten->sex = $request->sex;
        $asisten->address = $request->address;
        $asisten->phone_number = $request->phone_number;
        $asisten->study_program = $request->study_program;
        $asisten->join_date = $request->join_date;

        $asisten->save();
    }
}
