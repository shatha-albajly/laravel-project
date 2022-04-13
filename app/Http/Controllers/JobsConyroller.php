<?php

namespace App\Http\Controllers;

use App\Models\jobs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JobsConyroller extends Controller
{
    //create a job
    public function create()
    {
        return view('templates.jobs.create');
    }

    public function store(Request $request)
    {
        Validator::validate($request->all(), [
            'name_ar' => ['required', 'min:5', 'max:20'],
            'name_en' => ['required', 'min:5', 'max:20']


        ], [
            'name_ar.required' => 'this field is required',
            'name_ar.min' => 'can not be less than 5 letters',
            'name_ar.max' => 'can not be greater than 20 letters',
            'name_en.required' => 'this field is required',
            'name_en.min' => 'can not be less than 5 letters',
            'name_en.max' => 'can not be greater than 20 letters',


        ]);

        $new_cat = new jobs();
        $new_cat->name_ar = $request->name_ar;
        $new_cat->name_en = $request->name_en;
        $new_cat->is_active = $request->is_active;
        $new_cat->image = $request->hasFile('image') ? $this->uploadFile($request->file('image')) : "default_category.png";
        if ($new_cat->save())
            return redirect()->route('list_categories')->with(['success' => 'data inserted successful']);
        return redirect()->back()->with(['error' => 'can not add data ']);
    }
}