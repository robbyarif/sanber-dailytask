<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function get_register () {
        return view('register');
    }

    public function post_register (Request $request) {
        // dd($request->all());
        $nama_depan = $request->first_name;
        $nama_belakang = $request->last_name;
        $gender_male = $request->gender_male;
        $gender_female = $request->gender_female;
        $gender_other = $request->gender_other;
        $nationality = $request->nationality;
        $lang_indonesian = $request->lang_indonesian;
        $lang_english = $request->lang_english;
        $lang_other = $request->lang_other;
        $bio = $request->bio;

        return redirect()->route('welcome', [
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'gender_male' => $gender_male,
            'gender_female' => $gender_female,
            'gender_other' => $gender_other,
            'nationality' => $nationality,
            'lang_indonesian' => $lang_indonesian,
            'lang_english' => $lang_english,
            'lang_other' => $lang_other,
            'bio' => $bio
            ]);
    }

    public function get_welcome (Request $request) {
        // dd($request->all());

        $nama_depan = $request->nama_depan;
        $nama_belakang = $request->nama_belakang;
        $gender_male = $request->gender_male;
        $gender_female = $request->gender_female;
        $gender_other = $request->gender_other;
        $nationality = $request->nationality;
        $lang_indonesian = $request->lang_indonesian;
        $lang_english = $request->lang_english;
        $lang_other = $request->lang_other;
        $bio = $request->bio;

        return view('welcome', compact(
            'nama_depan',
            'nama_belakang',
            'gender_male',
            'gender_female',
            'gender_other',
            'nationality',
            'lang_indonesian',
            'lang_english',
            'lang_other',
            'bio'
        ));
    }
}
