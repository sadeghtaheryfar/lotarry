<?php

namespace App\Http\Controllers;

use App\Models\InputsFrom;
use App\Models\Recruitments;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $inputs = json_encode($request->all());
        // $data['data_form'] = $inputs;
        // Recruitments::create($data);
        // return to_route('home')->with('swal-success', "درخواست استخدام با موفقیت ارسال شد ما با شما ارتباط بر قرار میکنیم .");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
