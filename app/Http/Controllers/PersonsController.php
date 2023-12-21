<?php

namespace App\Http\Controllers;

use App\Models\Persons;
use App\Http\Requests\StorePersonsRequest;
use App\Http\Requests\UpdatePersonsRequest;

class PersonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorePersonsRequest $request)
    {
        $inputs = $request->all();
        $PersonInstagram = Persons::where('id_instagram', $request->id_instagram)->get();
        $PersonPhone = Persons::where('phone', $request->phone)->get();
        if ($PersonInstagram->isEmpty($PersonInstagram) && $PersonPhone->isEmpty($PersonPhone)) {
            $person = Persons::create($inputs);
            return to_route('home')->with('swal-success', $person->full_name . "عزیز ثبت نام شما با موفقیت انجام شد 😍 کد قرعه کشی شما : " . $person->id);
            exit();
        }
        // dd("hh");
        return to_route('home')->with('swal-error', 'اطلاعات وارد قبلا شرکت کرده و موجود میباشد . 🙄در صورت هرگونه مشکل با آی دی haMed_008 در تلگرام در ارتباط باشید 😍 .');
        exit();
    }

    /**
     * Display the specified resource.
     */
    public function show(Persons $persons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persons $persons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonsRequest $request, Persons $persons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persons $persons)
    {
        //
    }
}
