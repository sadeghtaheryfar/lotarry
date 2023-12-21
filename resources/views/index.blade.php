<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/connect.png') }}">
    <link rel="icon" href="{{ asset('images/connect.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.css') }}">
    <title>مسابقه کانکت</title>
</head>

<body dir="rtl">
    <main class="flex flex-col p-[2rem] justify-center items-center border-[1px] border-[#0000ff] m-[1rem] rounded-lg">
        <div class="mb-[1rem]">
            <img class="w-[12rem]" src="{{ asset('images/connect-type.png') }}" alt="">
        </div>

        <div class="my-[2rem] esponsers hide-mobile">
            <div class="box">
                <div class="item">
                    <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg"
                        alt="">
                </div>
            </div>

            <div class="box">
                <div class="item">
                    <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg"
                        alt="">
                </div>
            </div>

            <div class="box">
                <div class="item">
                    <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg"
                        alt="">
                </div>
            </div>

            <div class="box">
                <div style="border-color: #ffa800" class="item">
                    <img class="w-full" src="{{ asset('images/connect.png') }}" alt="">
                </div>

                <div class="flex justify-center text-[#ffa800]">
                    <span>connect</span>
                </div>
            </div>

            <div class="box">
                <div class="item">
                    <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg"
                        alt="">
                </div>
            </div>

            <div class="box">
                <div class="item">
                    <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg"
                        alt="">
                </div>
            </div>

            <div class="box">
                <div class="item">
                    <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg"
                        alt="">
                </div>
            </div>
        </div>

        <div class="my-[2rem] esponsers hide-pc">
            <div>
                <div class="item">
                    <img class="w-full" src="{{ asset('images/connect.png') }}" alt="">
                </div>
            </div>

            <div>
                <div class="item">
                    <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg"
                        alt="">
                </div>

                <div class="item">
                    <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg"
                        alt="">
                </div>
            </div>

            <div>
                <div class="item">
                    <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg"
                        alt="">
                </div>

                <div class="item">
                    <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg"
                        alt="">
                </div>
            </div>

            <div>
                <div class="item">
                    <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg"
                        alt="">
                </div>

                <div class="item">
                    <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg"
                        alt="">
                </div>
            </div>
        </div>

        <div class="my-[2rem] w-full">
            {!! $setting->content !!}
        </div>

        {{-- <div class="flex flex-col color-red justify-right w-full">
            @if ($errors->any())
                <div class="alert-danger flex flex-col color-red justify-right">
                    @foreach ($errors->all() as $error)
                        <small class="text-red-500 my-[0.5rem] font-[1rem]"> {{ $error }}</small>
                    @endforeach

                </div>
            @endif
        </div> --}}


        <form class="form-style w-full" method="post" action="{{ route('person.store') }}">
            @csrf

            <div>
                <label for="full_name">نام و نام خانوادگی *</label>

                @if ($errors->has('full_name'))
                    <small class="text-red-500 my-[0.5rem] font-[1rem]"> {{ $errors->first('full_name') }}</small>
                @endif

                <input id="full_name" name="full_name" type="text" value="{{ old('full_name') }}"
                    placeholder="اسم و فامیلتو وارد کن" class="bg-gray-50  block w-full">
            </div>

            <div>
                <label for="id_instagram">آیدی ایسنتاگرام *</label>

                @if ($errors->has('id_instagram'))
                    <small class="text-red-500 my-[0.5rem] font-[1rem]"> {{ $errors->first('id_instagram') }}</small>
                @endif

                <input id="id_instagram" name="id_instagram" type="text" value="{{ old('id_instagram') }}"
                    placeholder="آیدی اینستا تو وارد کن" class="bg-gray-50  block w-full">
            </div>

            <div>
                <label for="phone">شماره تماس *</label>

                @if ($errors->has('phone'))
                    <small class="text-red-500 my-[0.5rem] font-[1rem]"> {{ $errors->first('phone') }}</small>
                @endif

                <input id="phone" name="phone" type="number" value="{{ old('phone') }}"
                    placeholder="شمارت رو وارد کن" class="bg-gray-50  block w-full">
            </div>

            <div class="checkbox">
                <input id="page" name="page" type="checkbox" value="page" class="bg-gray-50">

                <label for="page">تمامی پیج ها رو فالو کردم</label>

                @if ($errors->has('page'))
                    <small class="text-red-500 my-[0.5rem] font-[1rem]"> {{ $errors->first('page') }}</small>
                @endif
            </div>

            <div class="checkbox">
                <input id="post" name="post" type="checkbox" value="post" class="bg-gray-50">

                <label for="post">پست مسابقه رو اد استوری کردم</label>

                @if ($errors->has('post'))
                    <small class="text-red-500 my-[0.5rem] font-[1rem]"> {{ $errors->first('post') }}</small>
                @endif
            </div>

            <div class="checkbox">
                <input id="mention" name="mention" type="checkbox" value="mention" class="bg-gray-50">

                <label for="mention">5 تا از دوستامو زیر پست مسابقه تگ کردم</label>

                @if ($errors->has('mention'))
                    <small class="text-red-500 my-[0.5rem] font-[1rem]"> {{ $errors->first('mention') }}</small>
                @endif
            </div>

            <div class="flex justify-center">
                <button
                    class="text-white mt-[1rem] pyx-[2rem] bg-[#0000ff] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                    type="submit">ثبت نام</button>
            </div>
        </form>
    </main>
</body>
<script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
@include('alerts.success')
@include('alerts.error')

</html>
