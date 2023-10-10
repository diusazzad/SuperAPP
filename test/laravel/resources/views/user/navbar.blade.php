@extends('layouts.app')

@section('content')
    <div class="rounded-r bg-gray-900 xl:hidden flex justify-between w-full p-6 items-center ">
        <x-user.nav.title />

        <x-user.nav.navtoggler />

    </div>

    <x-user.nav.sidemenu />



    <script>
        // Get the DOM elements
        const icon1 = document.getElementById("icon1");
        const menu1 = document.getElementById("menu1");
        const icon2 = document.getElementById("icon2");
        const icon3 = document.getElementById("icon3");
        const Main = document.getElementById("Main");
        const open = document.getElementById("open");
        const close = document.getElementById("close");

        // Define the showMenu functions
        const showMenu1 = (flag) => {
            if (flag) {
                icon1.classList.toggle("rotate-180");
                menu1.classList.toggle("hidden");
            }
        };

        const showMenu2 = (flag) => {
            if (flag) {
                icon2.classList.toggle("rotate-180");
            }
        };

        const showMenu3 = (flag) => {
            if (flag) {
                icon3.classList.toggle("rotate-180");
            }
        };

        const showNav = (flag) => {
            if (flag) {
                Main.classList.toggle("-translate-x-full");
                Main.classList.toggle("translate-x-0");
                open.classList.toggle("hidden");
                close.classList.toggle("hidden");
            }
        };
    </script>
@endsection
