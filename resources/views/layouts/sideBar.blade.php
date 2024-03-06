@extends('layouts.head')
@section('content')

    <div id="body" class="bg-slate-50 h-screen flex">
        <nav class="bg-white w-80  flex flex-col gap-10 border-r border-slate-100">
            <div class="logo text-2xl font-bold text-center h-16 flex items-center justify-center">MY-TAXI</div>
            <div class="user flex items-center justify-center flex-col gap-4 border-b border-emerald-slate-50 py-4">
                <img class="w-24 rounded-full shadow-xl"
                    src="https://w7.pngwing.com/pngs/340/946/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes-thumbnail.png">
                <div class="flex flex-col items-center">
                    <span class="font-semibold text-lg text-emerald-700">{{ auth()->user()->name }}</span>
                    <span class="text-slate-400 text-sm">{{ auth()->user()->role }} </span>
                </div>

            </div>

            <ul class="px-6 space-y-2">
                <li>
                    <a class="block px-4 py-2.5 text-slate-800 font-semibold  hover:bg-emerald-950 hover:text-white rounded-lg"
                        href="#">Vihecule</a>
                </li>
                <li>
                    <a class="block px-4 py-2.5 text-slate-800 font-semibold  hover:bg-emerald-950 hover:text-white rounded-lg"
                        href="#">Trajet</a>
                </li>

                <li>
                    <a class="block px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg"
                        href="#">Navigation</a>
                </li>

                <li>
                    <a class="block px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg"
                        href="#">Historique</a>
                </li>
                <li>
                    <a href=""
                        class="text-red-600 hover:text-red-900 block px-4 py-2.5 text-slate-800 font-semibold hover:bg-red-500 hover:text-white rounded-lg">logout</a>

                </li>

            </ul>
        </nav>
        