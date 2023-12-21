@extends('admin.layouts.master')

@section('title')
    dashboard
@endsection

@section('content')
    <section class="w-full h-full align-top">
        <div class="flex justify-between items-center mb-[1rem] border-b-[1px] pb-[0.5rem]">
            <div class="font-bold">
                <h1>تنظیمات</h1>
            </div>

            <div>

            </div>
        </div>

        <div dir="rtl" class="relative overflow-x-auto">
            <form class="form-style" method="post" action="{{ route('admin.setting.store') }}">
                @csrf
                @method('post')

                <div class="w-full">
                    <label for="content">محتوای صفحه اصلی</label>

                    <textarea rows="5" id="content" name="content" type="text" value="{{ $setting }}"
                        class="form-control cke_rtl w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">{{ $setting }}</textarea>
                </div>

                <div class="flex">
                    <button
                        class="text-white mt-[2rem] pyx-[2rem] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="submit">ویرایش تنظیمات </button>
                </div>
            </form>
        </div>
    </section>
@endsection
