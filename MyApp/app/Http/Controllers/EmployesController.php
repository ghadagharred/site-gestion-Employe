<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employe;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes= Employe::all();
        return view ('employes.index')->with(['employes'=>$employes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view ('employes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,['registration_number'=>'required|numeric|unique:employes,registration_number',
        'full_name'=>'required|unique:employes,full_name',
        'departs'=>'required',
        'hire_date'=>'required', 
        'phone'=>'required',
        'address'=>'required',
        'city'=>'required',
    ]);
    Employe::create($request->except('_token'));
    return redirect()->route('employes.index')->with(['success' => 'Employe added successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employe=Employe::where('registration_number',$id)->first();
        return view ('employes.show')->with(['employe'=>$employe]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $employe=Employe::where('registration_number',$id)->first();
       return view ('employes.edit')->with(['employe'=>$employe]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employe=Employe::where('registration_number',$id)->first();
        $this->validate($request,['registration_number'=>'required|numeric|unique:employes,id,'.$employe->registration_number,
        'full_name'=>'required|unique:employes,id,'.$employe->full_name,   
        'departs'=>'required',
        'hire_date'=>'required',
        'phone'=>'required',
        'address'=>'required',
        'city'=>'required',
    ]);
    $employe-> update($request->except('_token','_method'));
    return redirect()->route('employes.index')->with(['success' => 'Employe updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employe=Employe::where('registration_number',$id)->first();
        $employe-> delete();
        return redirect()->route('employes.index')->with(['success' => 'Employe deleted successfully']);

    }  
    public function vacationRequest($id){
        $employe=Employe::where('registration_number',$id)->first();
        return view('employes.vacation-request')->with(['employe'=>$employe]);
    }
    public function certificateRequest($id){
        $employe=Employe::where('registration_number',$id)->first();
        return view('employes.certificate-request')->with(['employe'=>$employe]);
    }

    }

