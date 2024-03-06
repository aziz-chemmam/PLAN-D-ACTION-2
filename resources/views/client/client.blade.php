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
                        px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-700 hover:text-white rounded-lg"
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

        <div class="w-80 ml-12 flex flex-col w-full gap-10">
            <div class="flex mt-5 flex-col w-48 ml-[1500px] sm:w-48 ">
                <button id="btn" class="border-2 px-2 py-2  rounded-2xl font-semibold text-white bg-emerald-700 ">
                    Add Offer
                </button>
            </div>

            <div id="cardContainer" class="flex flex-wrap w-full  gap-4">
                @if($annonce)
                @foreach ($annonce as $uneAnnonce)
                @if(is_object($uneAnnonce))
                    <div class="flex-shrink-0">
                        <div
                            class="bg-white shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)] border p-2 w-96 h-66 max-w-sm rounded-lg font-[sans-serif] overflow-hidden mx-auto mt-4">
                            <h3 class="text-lg font-semibold">{{ $uneAnnonce->titre }}</h3>
                            <p class="mt-2 mb-3 text-sm text-gray-400">{{ $uneAnnonce->description }}</p>
                            <p class="mt-2 mb-2 text-sm text-black">For({{ $uneAnnonce->type_annances }})</p>
                            <p class="mt-2 mb-2 text-sm text-black">Price:{{ $uneAnnonce->prix }}</p>


                            <div class="flex ml-10">
                                <a href="{{ route('edit', $uneAnnonce->id) }}"
                                    class="h-9 py-2 px-14 mt-4 w-36 rounded-lg text-white text-sm tracking-wider font-semibold border-none outline-none bg-green-900 hover:bg-green-700">Edit</a>
                                <form method="post" action="/delete/{{ $uneAnnonce->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-6 py-2 w-36 mt-4 rounded-lg text-white text-sm tracking-wider font-semibold border-none outline-none bg-red-700 hover:bg-red-600">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
                @endif
            </div>


            <div id="form"
                class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center bg-gray-500 scale-0 duration-300">
                <form action="/seller" method="POST" class="absolout mt-28  w-[700px] mx-auto bg-emerald-950  ">
                    @csrf

                    <div class="flex mr-9 mb-9 mt-5 justify-end">
                        <svg id="closeForm" class="w-6 h-6 text-white dark:text-white cursor-pointer" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>

                    <div class="flex justify-center">
                        <h1 class="text-white font-bold text-2xl">HELLO </h1>
                    </div>

                    <div class="relative z-0 w-full ml-44 mt-5 mb-5 group">
                        <input type="text" name="titre" id="titre"
                            class="block py-2.5 px-0 w-96  text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            descriptionholder=" " required />
                        <label for="titre"
                            class="peer-focus:font-medium absolute ml-[20%] text-sm text-white duration-300 transform -translate-y-2 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white font-bold peer-focus:dark:text-white peer-descriptionholder-shown:scale-100 peer-descriptionholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">TITLE</label>
                    </div>

                    <div class="relative z-0 w-full mb-5 ml-44 group">
                        <input type="text" name="type_biens" id="type_biens"
                            class="block py-2.5 px-0 w-96  text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer"
                            descriptionholder=" " required />
                        <label for="type_biens"
                            class="peer-focus:font-medium absolute ml-[18%]  text-sm text-white duration-300 transform -translate-y-2 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white font-bold peer-focus:dark:text-white peer-descriptionholder-shown:scale-100 peer-descriptionholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">property
                            type</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 ml-44 group">
                        <input type="text" name="prix" id="prix"
                            class="block py-2.5 px-0 w-96  text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer"
                            descriptionholder=" " required />
                        <label for="type_biens"
                            class="peer-focus:font-medium absolute ml-[18%]  text-sm text-white duration-300 transform -translate-y-2 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white font-bold peer-focus:dark:text-white peer-descriptionholder-shown:scale-100 peer-descriptionholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">price
                        </label>
                    </div>


                    <div class="relative z-0 w-full ml-44 mb-5 group">

                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrption</label>
                        <textarea name="description" id="message" rows="4"
                            class=" p-2.5 w-96 text-sm text-gray-900 bg-emerald-950 rounded-lg border border-white focus:ring-blue-500 focus:border-blue-500 dark:bg-emerald-950 dark:border-white dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write your thoughts here..."></textarea>
                    </div>

                    <div class="grid md:grid-cols-2 ml-[37%] md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="type_annances" class="block mb-2 ml-[20%]  text-sm font-bold text-white"> annonces
                                type
                            </label>
                            <select id="type_annances" name="type_annances"
                                class="bg-emerald-950 border-0 border-b-2 border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-blue-500 block w-full p-2.5 dark:border-white dark:descriptionholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <option value="rent">RENT</option>
                                <option value="seel">SELL</option>
                            </select>
                        </div>

                    </div>

                    <div class="flex justify-center">
                        <button type="submit"
                            class="text-black bg-gray-200 hover:bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                        <a href=""></a>
                    </div>
                </form>
            </div>

            <script>
                const btn = document.getElementById('btn');
                const form = document.getElementById('form');
                const closeForm = document.getElementById('closeForm');

                btn.addEventListener('click', () => {
                    form.classList.add("scale-100");
                    form.classList.remove("scale-0");
                });
                closeForm.addEventListener('click', () => {
                    form.classList.remove("scale-100");
                    form.classList.add("scale-0");
                });
            </script>
