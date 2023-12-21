<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Persons;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query();
        if($search && $search['search'] != null)
        {
            $search = $search['search'];

            $persons = Persons::where('id',$search)->get();

            if(!$persons->isEmpty($persons))
            {
                return view('admin.request.index',compact('persons'));
                exit();
            }

            $persons = Persons::where('id_instagram',$search)->get();

            if(!$persons->isEmpty($persons))
            {
                return view('admin.request.index',compact('persons'));
                exit();
            }

            $persons = Persons::where('phone',$search)->get();

            if(!$persons->isEmpty($persons))
            {
                return view('admin.request.index',compact('persons'));
                exit();
            }
        }
        $persons = Persons::get();
        return view('admin.request.index',compact('persons'));
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
        //
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
    public function edit(Persons $request)
    {
        return view('admin.request.edit',compact('request'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $requests,Persons $request)
    {
        $inputs = $requests->all();
        $request->update($inputs);
        return to_route('admin.requests.index')->with('swal-success', 'درخواست با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persons $request)
    {
        $request->delete();
        return back()->with('swal-success', 'درخواست با موفقیت حذف شد');
    }
}
