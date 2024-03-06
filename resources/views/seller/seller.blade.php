@extends('layouts.head')
@section('content')

    <div id="body" class="bg-slate-50 h-screen flex">
        <nav class="bg-white w-80  flex flex-col gap-10 border-r border-slate-100">
            <div class="logo text-2xl font-bold text-center h-16 flex items-center justify-center">DREAM-HOUSE</div>
            <div class="user flex items-center justify-center flex-col gap-4 border-b border-emerald-slate-50 py-4">
                <img class="w-24 rounded-full shadow-xl"
                    src="https://w7.pngwing.com/pngs/340/946/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes-thumbnail.png">
                <div class="flex flex-col items-center">
                    <span class="font-semibold text-lg text-emerald-700">{{ auth()->user()->fname }}</span>
                    <span class="text-slate-400 text-sm">{{ auth()->user()->role }} </span>
                </div>

            </div>

            <ul class="px-6 space-y-2">
                <li>
                    <a class="block
                        px-4 py-2.5 text-slate-800 font-semibold bg-emerald-700 text-white hover:bg-emerald-700 hover:text-white rounded-lg"
                        href="#">Offers</a>
                </li>
                <li>
                    <a class="block
                        px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-700 hover:text-white rounded-lg"
                        href="#">Reserve</a>
                </li>


                <li>
                    <a href=""
                        class="text-red-600 hover:text-red-900 block px-4 py-2.5 text-slate-800 font-semibold hover:bg-red-500 hover:text-white rounded-lg">logout</a>

                </li>

            </ul>
        </nav>


        <form action="/reservation" method="post">
            @csrf
            <div id="cardContainer" class="flex flex-wrap w-full ml-36 mt-24 gap-4">
                @foreach ($annonce as $uneAnnonce)
                    <div class="flex-shrink-0">
                        <div
                            class="bg-white shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)] border p-2 w-96 h-66 max-w-sm rounded-lg font-[sans-serif] overflow-hidden mx-auto mt-4">
                            <h3 class="text-lg font-semibold">{{ $uneAnnonce->titre }}</h3>
                            <p class="mt-2 mb-3 text-sm text-gray-400">{{ $uneAnnonce->description }}</p>
                            <p class="mt-2 mb-2 text-sm text-black">For({{ $uneAnnonce->type_annances }})</p>
                            <p class="mt-2 mb-2 text-sm text-black">{{ $uneAnnonce->prix }}</p>

                            <input type="hidden" name="annonceId" value="{{ $uneAnnonce->id }}" />
                            <button type="submit"
                                class="reserveBtn px-6 py-2 w-full mt-4 rounded-lg text-white text-sm tracking-wider font-semibold border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600">Reserve</button>
        </form>


    </div>
    </div>
    @endforeach
    </div>
