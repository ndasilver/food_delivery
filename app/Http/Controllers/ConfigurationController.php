<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;
use App\Currency;

class ConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Configuration::findOrFail(1);
        $currencies = Currency::all();
        return view('Admin.settings.index')
                ->with('settings', $settings)
                ->with('currencies', $currencies);

    }

    public function editName(Request $request, $id){
        $config = Configuration::findOrFail($id);
        $config->restaurant_name = $request['name'];
        $config->save();

        return redirect()->back()
            ->with('success', 'Restaurant name has been updated successfully!');
    }

    public function editTerms(Request $request, $id){
        $config = Configuration::findOrFail($id);
        $config->terms_conditions = $request['terms'];
        $config->save();

        return redirect()->back()
            ->with('success', 'Terms & Conditions has been updated successfully!');
    }

    public function editSms(Request $request, $id){
        $config = Configuration::findOrFail($id);
        $config->sms_number = $request['sms'];
        $config->save();

        return redirect()->back()
            ->with('success', 'Sms Number has been updated successfully!');
    }

    public function editEmail(Request $request, $id){
        $config = Configuration::findOrFail($id);
        $config->email = $request['email'];
        $config->save();

        return redirect()->back()
            ->with('success', 'Email has been updated successfully!');
    }

    public function editCurrency(Request $request, $id){
        $config = Configuration::findOrFail($id);
        $config->currency_id = $request['currencySeeder'];
        $config->save();

        return redirect()->back()
            ->with('success', 'Currency has been updated successfully!');
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
        //
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
        //
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
