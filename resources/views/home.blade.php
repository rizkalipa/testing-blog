@extends('template.master')

@section('title', 'Blog | Home')

@section('content')

<div class="w-9/12 mx-auto h-full">
    <div class="border-l-2">
        <h4 class="mt-5 ml-5 text-2xl text-white">Hola, <b>{{ auth()->user()->name }}</b></h4>
        <p class="text-blue-100 mt-2 ml-5">Do you feeling good today ?</p>
    </div>

    <div class="mt-10 flex lg:flex-row sm:flex-col flex-col">
        <div class="w-full">
            <h2 class="text-white font-bold text-3xl">Write your idea</h2>

            <div class="mt-5 bg-gray-800 rounded p-5">
                <form action="">
                    <input type="text" class="w-full bg-gray-800 border-l-2 pl-3 focus:outline-none focus:border-blue-600 transition duration-300 ease-in-out" placeholder="Content title...">
                    <hr class="my-5 bg-gray-500">
                    <textarea class="focus:outline-none bg-gray-800 w-full border-l-2 pl-3 focus:outline-none focus:border-blue-600 transition duration-300 ease-in-out"
                              cols="30" rows="3" placeholder="Your idea right here..."></textarea>
                    <hr class="my-5 bg-gray-500">
                    <input type="text" class="w-full bg-gray-800 border-l-2 pl-3 focus:outline-none focus:border-blue-600 transition duration-300 ease-in-out" placeholder="Add your category...">
                    <small class="text-gray-500 text-xsm mt-5"><em>Category divided by comma ( , )</em></small>

                    <div class="mt-8">
                        <button type="submit" class="text-white bg-green-500 rounded-full py-2 px-6 hover:bg-green-600 focus:outline-none transition duration-300 ease-in-out">
                            <span><i class="fas fa-cloud-upload-alt mr-2"></i></span> Publish</button>
                        <a href="#" class="text-white py-2 px-4">Draft</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="lg:w-6/12 lg:mt-0 lg:ml-5 md:w-full mt-10">
            <p class="text-white font-bold text-2xl">Your latest content</p>
            <div class="mt-5 rounded text-gray-500">
                <p><em>No content</em></p>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <h2 class="text-white font-bold text-3xl">Most choice from forum site</h2>
        <p class="text-blue-100 mt-5">Here is top content from our devs</p>

        <div class="grid md:grid-cols-2 sm:grid-cols-1 gap-3">

            <div class="w-full rounded shadow-lg mt-5 bg-gray-800">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-gray-300">The Coldest Sunset</div>
                    <p class="text-gray-300 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
                </div>
            </div>
            <div class="w-full rounded shadow-lg mt-5 bg-gray-800">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-gray-300">The Coldest Sunset</div>
                        <p class="text-gray-300 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                    <div class="px-6 py-4">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
                    </div>
                </div>

        </div>

        </div>
    </div>

</div>

@endsection
