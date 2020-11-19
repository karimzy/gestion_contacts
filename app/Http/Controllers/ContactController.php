<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;

use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=[
            'civilité'=>$request['civilité'],
            'prénom'=>$request['prénom'],
            'nom'=>$request['nom'],
            'fonction'=>$request['fonction'],
            'téléphone'=>$request['téléphone'],
            'date_naissance'=>$request['date_naissance'],
            'email'=>$request['email'],
            'société_id'=>$request['société_id'],
            'ville'=>$request['ville']

        ] ;

        return Contact::create($data);  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return $contact;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $contact = Contact::findOrFail($id);
        $contact->update($input);

        return response()->json([
            'success' => true,
            'message' => 'Contact Updated'
        ]);

        /*
        $contact=Contact::find($id);
        $contact->civilité=$request['civilité'];
        $contact->prénom=$request['prénom'];
        $contact->nom=$request['nom'];
        $contact->fonction=$request['fonction'];
        $contact->téléphone=$request['téléphone'];
        $contact->date_naissance=$request['date_naissance'];
        $contact->email=$request['email'];
        $contact->société_id=$request['société_id'];
        $contact->ville=$request['ville'];
        return $contact;
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Contact Deleted'
        ]);
    }


    public function apiContact()
    {
        $contact = Contact::all();
 
        return Datatables::of($contact)

            ->addColumn('action', function($contact){
                return '<a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> </a> ' .
                       '<a onclick="editForm('. $contact->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> </a> ' .
                       '<a onclick="deleteData('. $contact->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> </a>';
            })->make(true);
    }
}
