@extends('layouts.head')

<form action="/update/{{ $annonce->id }}" method="POST" class="absolout mt-28 h-[600px] w-[700px] mx-auto bg-emerald-950  ">
    @csrf

    
    <div class="flex mr-9 mb-9  justify-end">
        <a href="/seller"> <svg id="closeForm" class="w-6 h-6 mt-5 text-white dark:text-white cursor-pointer" aria-hidden="true"
        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
    </svg></a>
    </div>

    <div class="flex justify-center">
        <h1 class="text-white font-bold text-2xl">HELLO </h1>
    </div>

    <div class="relative z-0 w-full ml-44 mt-5 mb-5 group">
        <input type="text" name="titre" id="titre"
            class="block py-2.5 px-0 w-96  text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            descriptionholder=" " required value="{{ $annonce->titre}}" />
        <label for="titre"
            class="peer-focus:font-medium absolute ml-[20%] text-sm text-white duration-300 transform -translate-y-2 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white font-bold peer-focus:dark:text-white peer-descriptionholder-shown:scale-100 peer-descriptionholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">TITLE</label>
    </div>

    <div class="relative z-0 w-full mb-5 ml-44 group">
        <input type="text" name="type_biens" id="type_biens"
            class="block py-2.5 px-0 w-96  text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer"
            descriptionholder=" " required value="{{ $annonce->type_biens }}" />
        <label for="type_biens"
            class="peer-focus:font-medium absolute ml-[18%]  text-sm text-white duration-300 transform -translate-y-2 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white font-bold peer-focus:dark:text-white peer-descriptionholder-shown:scale-100 peer-descriptionholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">property
            type</label>
    </div>
    <div class="relative z-0 w-full mb-5 ml-44 group">
        <input type="text" name="prix" id="prix"
            class="block py-2.5 px-0 w-96  text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer"
            descriptionholder=" " required value="{{ $annonce->prix }}" />
        <label for="type_biens"
            class="peer-focus:font-medium absolute ml-[18%]  text-sm text-white duration-300 transform -translate-y-2 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white font-bold peer-focus:dark:text-white peer-descriptionholder-shown:scale-100 peer-descriptionholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">price
        </label>
    </div>


    <div class="relative z-0 w-full ml-44 mb-5 group">

        <label for="message"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrption</label>
        <textarea name="description" id="message" rows="4"
            class=" p-2.5 w-96 text-sm text-gray-900 bg-emerald-950 rounded-lg border border-white focus:ring-blue-500 focus:border-blue-500 dark:bg-emerald-950 dark:border-white dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Write your thoughts here..." >{{ $annonce->description }}</textarea>
    </div>

    <div class="grid md:grid-cols-2 ml-[37%] md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <label for="type_annances" class="block mb-2 ml-[20%]  text-sm font-bold text-white"> annonces type
            </label>
            <select id="type_annances" name="type_annances" value="{{ $annonce->type_annances }}"
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