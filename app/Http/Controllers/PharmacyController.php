<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pharmacy;

class PharmacyController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth:admin');
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin/pharmacy/' . 'create');
    }

    public function index()
    {
        $pharmacy = Pharmacy::orderBy('id' , 'desc')->get();

        return view('admin.pharmacy.index')->with('pharmacy' , $pharmacy);
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'name'=> 'required',
            'address' => 'required',
            'description' => 'required',
            'email' => 'required',
            'website' => 'nullable',
        ]);


        Pharmacy::create($data);

        Session()->flash('success' , 'Pharmacy Added Successfully !!!');
        return redirect()->route('contact');
    }

    public function destroy($id)
    {
        $pharmacy = Pharmacy::find($id);

        if (!is_null($pharmacy)) {
            $pharmacy -> delete();
        }

        Session()->flash('success' , 'Pharmacy Deleted Successfully !!!');
        return back();
    }

    public function edit($id) {
        $pharmacy = Pharmacy::find($id);

        return view('admin.pharmacy.update')->with('pharmacy' , $pharmacy);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name'=> 'required',
            'address' => 'required',
            'description' => 'required',
            'email' => 'required',
            'website' => 'nullable',
        ]);

        Pharmacy::find($id)->update($data);

        Session()->flash('success' , 'Pharmacy Updated Successfully !!!');
        return redirect()->route('admin.pharmacy.index');
    }
}
