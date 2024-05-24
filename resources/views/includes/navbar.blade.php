<div class="sticky top-0 z-50 border-b">
    <div>
        <div class="sticky-nonauth w-full bg-blue-500 h-16 px-10 flex justify-between ">
            <div class="w-full lg:w-30/6 xl:w-full  h-full flex items-center px-4 ">
                <a href="/">
                    <img class="rounded-lg w-32" src="{{ asset('logo.png') }}" alt="efarm logo" />
                </a>
            </div>
            <div class="w-full flex justify-center items-center">
                <a href="#">
                    <div class="px-5">
                        <p class="font-semibold text-textbase">Home</p>
                    </div>
                </a>
                <a href="#">
                    <div class="px-5">
                        <p class="font-semibold text-textbase">Belanja</p>
                    </div>
                </a>
                <a href="{{ route('pages.membership') }}">
                    <div class="px-5">
                        <p class="font-semibold text-textbase">Membership</p>
                    </div>
                </a>
                <a href="#">
                    <div class="px-5">
                        <p class="font-semibold text-textbase">About</p>
                    </div>
                </a>
            </div>
            <div class="w-full  h-full flex justify-end items-center">
                <div class="flex">
                    <a href="{{ route('customer.login') }}" class="cursor-pointer">
                        <button
                            class="middle none center mr-4 rounded-lg border border-primarybase py-2 px-9 text-white font-sans text-md font-bold bg-primarybase transition-all hover:bg-white hover:text-primarybase focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            style="outline: none;" data-ripple-light="true">
                            Masuk
                        </button>
                    </a>
                    <a href="{{ route('register') }}" class="cursor-pointer">
                        <button
                            class="middle none center mr-4 rounded-lg border border-primarybase py-2 px-9 text-primarybase font-sans text-md font-bold primarybase-white transition-all hover:bg-primarybase hover:text-white focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            style="outline: none;" data-ripple-light="true">
                            Daftar
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
