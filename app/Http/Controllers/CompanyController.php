<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('companies.index', [
            'companies' => Company::all(),
        ]);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

   public function create()
   {
       return view('companies.create');
   }

   public function store(Request $request)
   {
       $validated = $request->validate([
           'name'     => ['required'],
           'cnpj'     => ['nullable', 'digits:14', 'unique:companies,cnpj'],
       ]);

       $validated=$request->all();
       $company = Company::create($validated);


       return redirect()->route('companies.show', $company);
   }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function show(Company $company)
    {
        return view('companies.show', ['company'=> $company]);
    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit',['company'=> $company]);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        return redirect('companies');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        return redirect('companies');
    }


 

}
