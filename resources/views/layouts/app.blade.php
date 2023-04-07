<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
@include('layouts.navigation')
    <body>
        <main class="px-10">
            <div class="flex flex-no-wrap">
                @include('layouts.sidebar')
                <div class="lg:pl-72 sm:pl-10 lg:flex pb-10 mt-20 h-64 md:w-full sm:w-1/8 w-11/12 px-6">
                    @yield('content')
                </div>
                <div class="pb-10 mt-20 h-64 lg:flex hidden md:w-1/3 w-1/5 px-6 ">
                    <div class="w-full h-full rounded border-dashed border-2 border-gray-300">
                       RIGHBAR
                    </div>
                </div>
            </div>
        </main>
        @include('layouts.script')  
    </body>
</html>

