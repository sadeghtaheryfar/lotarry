<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://www.farsgamer.com/admin/media/logos/favicon.ico">
    <link rel="icon" href="https://www.farsgamer.com/site/images/logo-icon.png">
    <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.css') }}">
    <title>استخدام در فارس گیمر</title>
</head>

<body dir="rtl">
    <main class="flex flex-col p-[2rem] justify-center items-center border-[1px] border-[#0000ff] m-[1rem] rounded-lg">
        <div class="mb-[1rem]">
            <img class="w-[12rem]"
                src="https://ci6.googleusercontent.com/proxy/iazuZx2B58MeRJgS2PDDGcBAmFFdW3OHjta0Oi_D-NwAE9kvpaDGoA28asPqYE-mcBTmF_XTnce8CDYxz-Igfj0=s0-d-e1-ft#https://www.farsgamer.com/site/images/logo.png"
                alt="">
        </div>

        <div class="my-[2rem] esponsers hide-mobile">
            <div class="item">
                <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg" alt="">
            </div>

            <div class="item">
                <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg" alt="">
            </div>

            <div class="item">
                <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg" alt="">
            </div>

            <div class="item">
                <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg" alt="">
            </div>

            <div class="item">
                <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg" alt="">
            </div>

            <div class="item">
                <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg" alt="">
            </div>

            <div class="item">
                <img class="w-full" src="https://farsgamer.com/media/FarsGamerTeam/61ec5f91e0ec7.jpg" alt="">
            </div>
        </div>

        <div class="my-[2rem] esponsers hide-pc">
            <div>
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

        <div class="my-[2rem]">
            <h1 class="text-center text-2xl mb-[1rem]">توضیحات و قوانین : </h1>

            <p class="text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای
                طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید
                داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
                حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
            </p>
        </div>

        <div class="flex flex-col color-red justify-right w-full">
            @if ($errors->any())
                <div class="alert-danger flex flex-col color-red justify-right">
                    @foreach ($errors->all() as $error)
                        <small class="text-red-500 my-[0.5rem] font-[1rem]"> {{ $error }}</small>
                    @endforeach

                </div>
            @endif
        </div>


        <form class="form-style w-full" method="post" action="{{ route('person.store') }}">
            @csrf
            <div>
                <label for="full_name">نام و نام خانوادگی *</label>

                <input id="full_name" name="full_name" type="text" value="{{ old('full_name') }}"
                    placeholder="نام و نام خانوادگی" class="bg-gray-50  block w-full">
            </div>

            <div>
                <label for="id_instagram">آیدی ایسنتاگرام *</label>

                <input id="id_instagram" name="id_instagram" type="text" value="{{ old('id_instagram') }}"
                    placeholder="id_instagram" class="bg-gray-50  block w-full">
            </div>

            <div>
                <label for="phone">شماره تماس *</label>

                <input id="phone" name="phone" type="number" value="{{ old('phone') }}" placeholder="phone"
                    class="bg-gray-50  block w-full">
            </div>

            <div class="checkbox">
                <input id="page" name="page" type="checkbox" value="page" class="bg-gray-50">

                <label for="page">تمامی پیج ها رو فالو کردم</label>
            </div>

            <div class="checkbox">
                <input id="post" name="post" type="checkbox"  value="post" class="bg-gray-50">

                <label for="post">پست مسابقه رو اد استوری کردم</label>
            </div>

            <div class="checkbox">
                <input id="mention" name="mention" type="checkbox" value="mention" class="bg-gray-50">

                <label for="mention">5 تا از دوستامو زیر پست مسابقه تگ کردم</label>
            </div>

            <div class="flex justify-end">
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
