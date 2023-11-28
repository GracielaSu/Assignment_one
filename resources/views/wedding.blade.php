
@extends('layouts.app')

@section('content')
    <!-- ====== Table Section Start -->
    <section class="bg-white py-20 lg:py-[120px]">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="max-w-full overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead>
                                <tr class="bg-primary text-center">
                                    <th class="
                           
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           border-l border-transparent
                           ">
                                        Name
                                    </th>
                                    <th class="
                           
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           ">
                                        Price
                                    </th>
                                    <th colspan="2" class="
                            w-1/6
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           ">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($weddings as $wedding)

                                <tr>
                                    <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
                           ">
                                        {{$wedding->name}}
                                    </td>

                                    <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-[#E8E8E8]
                           ">
                                        ${{$wedding->price}}
                                    </td>

                                    <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-[#E8E8E8]
                           ">
                                        <div class="flex justify-center text">
                                            <a href="{{ url('editting/' . $wedding->id . '/edit') }}" title="Edit Item">
                                                <div
                                                    class="inline-flex items-center mx-3 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Edit
                                                </div>
                                            </a>
                                            <form action="{{ url('editting/' . $wedding->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-flex items-center mx-3 px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                                            </form>
                                        </div>
                                    </td>


                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="form">
            <form action="wedding/create" method="POST">
                @csrf
                <div class="space-y-12">

                    <div class="border-b border-gray-900/10 pb-12 justify-center">
                        @if (session('success'))
                        <div class="text-center">
                            {{ session('success') }}
                        </div>
                        @endif
                        @if (session('error'))
                        <div class="text-center text-red-900">
                            {{ session('error') }}
                        </div>
                        @endif
                        <h2 class="text-center font-semibold leading-7 text-gray-900">Create Wedding item</h2>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-1"></div>
                            <div class="sm:col-span-2">
                                <label for="first-name"
                                    class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                <div class="mt-2">
                                    <input type="text" name="name" id="first-name" autocomplete="given-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="last-name"
                                    class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                                <div class="mt-2">
                                    <input type="text" name="price" id="last-name" autocomplete="family-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-1"></div>

                        </div>
                    </div>


                    <div class="mt-6 flex items-center justify-center gap-x-6">
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
                    </div>
            </form>



        </div>
        <div class="" id="edit_box">
            <div class="relative isolate px-6 pt-14 lg:px-8">
                <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                    <div class="text-center bg-black bg-opacity-80 p-10 rounded-xl">
                        <form action="/" method="POST">
                            @csrf
                            <input type="text" name="name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <input type="text" name="name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <button
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection