@extends('layouts.app')

@section('content')

            <!-- ====== Table Section Start -->
            <section class="bg-white py-20 lg:py-[120px]">
                <div class="form">
                <form action="{{ url('editting/'.$wedding->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="space-y-12">

                            <div class="border-b border-gray-900/10 pb-12 justify-center">
                                <h2 class="text-center font-semibold leading-7 text-gray-900">Create Wedding item</h2>

                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-1"></div>
                                    <div class="sm:col-span-2">
                                        <label for="first-name"
                                            class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                        <div class="mt-2">
                                            <input type="text" name="name" id="first-name" autocomplete="given-name"
                                                value="{{ $wedding->name }}"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="last-name"
                                            class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                                        <div class="mt-2">
                                            <input type="text" name="price" id="last-name" autocomplete="family-name"
                                                value="{{ $wedding->price }}"
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
                            @if (session('success'))
                            <div>
                                {{ session('success') }}
                            </div>
                            @endif
                            @if (session('error'))
                            <div>
                                {{ session('error') }}
                            </div>
                            @endif
                    </form>



                </div>
                <!-- <form action="{{ url('editting/'.$wedding->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="" id="name" name="name" value="{{ $wedding->name }}">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="" id="price" name="price" value="{{ $wedding->price }}">
                    </div>
                    <button type="submit" class="btn btn-info">Update</button>
                </form> -->
            </section>
            <!-- ====== Table Section End -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>
@endsection