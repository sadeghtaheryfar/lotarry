@extends('admin.layouts.master')

@section('title')
    dashboard
@endsection

@section('content')
    <section class="w-full h-full align-top">
        <div class="flex justify-between items-center mb-[1rem] border-b-[1px] pb-[0.5rem]">
            <div class="font-bold">
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
                    </tr>
                </thead>
                <tbody>
                    @forelse ($persons as $person)
                        <tr>
                            <td class="px-6 py-4">{{ $person->id }}</td>
                            <td class="px-6 py-4">{{ $person->full_name }}</td>
                            <td class="px-6 py-4">{{ $person->id_instagram }}</td>
                            <td class="px-6 py-4">{{ $person->phone }}</td>
                        </tr>
                    @empty
                        <tr colspan="4" class="px-6 py-4">
                            <td>محتوایی برای نمایش وجود ندارد</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
