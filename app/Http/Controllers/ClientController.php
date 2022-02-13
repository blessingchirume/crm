<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyUsers;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Company::all();
        return view('admin.client.index', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = Company::create([
            "company_name" => $request->company_name,
            "address" => $request->address,
            "c_card_code" => ""
        ]);
        return redirect('/client');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Company::where('id', $id)->first();
        $companyUserMap = CompanyUsers::where('company_id', $client->id)->get();
        $users = User::all();
        $companyUsers = [];
        foreach ($companyUserMap as $key => $user) {
            array_push($companyUsers, User::where('id', $companyUserMap[0]->user_id)->first());
        }
        return view('admin.client.view', compact('users', 'client', 'companyUsers'));
       
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
        //
    }

    public function users($id, Request $request)
    {

        $companyUser = CompanyUsers::create([
            "user_id" => $request->user_id,
            "company_id" => $id,
            "postion" => $request->position
        ]);

        return redirect('/client/users/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
