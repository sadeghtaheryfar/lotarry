<aside>
    <div class="menu">
        <div class="show-menu">
            <div>
                <ul>
                    <li class="text-white">
                        <a href="{{ route('admin.home') }}" class="mx-[1rem] flex item-center my-[1rem]">
                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.02 2.84004L3.63 7.04004C2.73 7.74004 2 9.23004 2 10.36V17.77C2 20.09 3.89 21.99 6.21 21.99H17.79C20.11 21.99 22 20.09 22 17.78V10.5C22 9.29004 21.19 7.74004 20.2 7.05004L14.02 2.72004C12.62 1.74004 10.37 1.79004 9.02 2.84004Z"
                                    stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M12 17.99V14.99" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>



                            <span class="mr-[0.5rem] mt-[0.15rem]">داشبورد</span>
                        </a>
                    </li>

                    <li class="text-white">
                        <a href="" class="mx-[1rem] flex item-center my-[1rem]">
                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.39999 6.32003L15.89 3.49003C19.7 2.22003 21.77 4.30003 20.51 8.11003L17.68 16.6C15.78 22.31 12.66 22.31 10.76 16.6L9.91999 14.08L7.39999 13.24C1.68999 11.34 1.68999 8.23003 7.39999 6.32003Z"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.11 13.6501L13.69 10.0601" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>



                            <span class="mr-[0.5rem] mt-[0.15rem]">درخواست ها</span>
                        </a>
                    </li>

                    <li class="text-white">
                        <form method="POST" action="{{ route('auth.customer.destroy') }}">
                            @csrf
                            <button type="submit" class="mx-[1rem] flex item-center my-[1rem]">
                                <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.90002 7.55999C9.21002 3.95999 11.06 2.48999 15.11 2.48999H15.24C19.71 2.48999 21.5 4.27999 21.5 8.74999V15.27C21.5 19.74 19.71 21.53 15.24 21.53H15.11C11.09 21.53 9.24002 20.08 8.91002 16.54"
                                        stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M2 12H14.88" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M12.65 8.6499L16 11.9999L12.65 15.3499" stroke="#ffffff" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <span class="mr-[0.5rem]">خروج</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <div class="close-menu hidden btn-menu"></div>
    </div>
</aside>
