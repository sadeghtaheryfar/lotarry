@extends('admin.layouts.master')

@section('title')
    dashboard
@endsection

@section('content')
    <section class="w-full h-full align-top">
        <div class="mb-[1rem]">
            <form method="GET" action="{{ route("admin.requests.index") }}">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" name="search" id="default-search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="برای جستجو کد ، شماره یا ایدی اینستاگرام را وارد کنید " required>
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">جستجو</button>
                </div>
            </form>
        </div>

        <div class="flex justify-between items-center mb-[1rem] border-b-[1px] pb-[0.5rem]">
            <div class="font-bold text-xl">
                <h1>درخواست ها</h1>
            </div>

            <div>

            </div>
        </div>

        <div dir="rtl" class="relative overflow-x-auto">
            <table class="w-full text-sm text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase">
                    <tr>
                        <th scope="col" class="px-6 py-3">#</th>

                        <th scope="col" class="px-6 py-3">نام و نام خانوادگی</th>

                        <th scope="col" class="px-6 py-3">آیدی اینستاگرام</th>

                        <th scope="col" class="px-6 py-3">شماره تلفن</th>

                        <th scope="col" class="px-6 py-3">تنظیمات</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($persons as $person)
                        <tr>
                            <td class="px-6 py-4">{{ $person->id }}</td>
                            <td class="px-6 py-4">{{ $person->full_name }}</td>
                            <td class="px-6 py-4">{{ $person->id_instagram }}</td>
                            <td class="px-6 py-4">{{ $person->phone }}</td>
                            <td class="px-6 py-4 flex">
                                <a href="{{ route('admin.requests.edit', $person) }}"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 cursor-pointer">ویرایش</a>
                                <form method="post" action="{{ route('admin.requests.destroy', $person) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 cursor-pointer">حذف</button>
                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center">محتوایی برای نمایش وجود ندارد</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
