@extends('admin.layouts.master')

@section('title')
    dashboard
@endsection

@section('content')
    <section class="w-full h-full align-top">
        <div class="flex justify-between items-center mb-[1rem] border-b-[1px] pb-[0.5rem]">
            <div class="font-bold">
                <h1>درخواست #{{ $request->id }}</h1>
            </div>

            <div>
                
            </div>
        </div>

        <div dir="rtl" class="relative overflow-x-auto">
            <form class="form-style" method="post" action="{{ route("admin.requests.update",$request) }}">
                @csrf
                @method("PUT")

                <div>
                    <label for="full_name">نام و نام خانوادگی *</label>

                    <input id="full_name" name="full_name"  type="text" value="{{ $request->full_name }}" placeholder="عنوان ورودی را وارد کنید" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div>
                    <label for="id_instagram">آیدی اینستاگرام *</label>

                    <input id="id_instagram" name="id_instagram"  type="text" value="{{ $request->id_instagram }}" placeholder="عنوان ورودی را وارد کنید" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div>
                    <label for="phone">شماره تماس *</label>

                    <input id="phone" name="phone"  type="text" value="{{ $request->phone }}" placeholder="عنوان ورودی را وارد کنید" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div class="flex">
                    <button class="text-white mt-[2rem] pyx-[2rem] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">ویرایش درخواست </button>
                </div>
            </form>
        </div>
    </section>
@endsection