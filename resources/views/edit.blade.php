<!DOCTYPE html> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <head> <meta charset="utf-8"> <meta
    name="viewport" content="width=device-width, initial-scale=1"> <title>Laravel</title> <!-- Fonts --> <link
    rel="preconnect" href="https://fonts.bunny.net">
<link rel="stylesheet" href="{{ asset('css/editbox.css') }}"> <link
    href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> <script
    src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp">
</script> <script src="https://cdn.tailwindcss.com"> </script> <script> tailwind.cofig = { te    end: { colors: {
clifford: '     ', } } } } </script>
<script> // edit box khw tk function function handleEditButtonClick() { console.log("function called")
    document.getElementById("edit_box").style.display="flex"; } </script>
    <style type="text/tailwindcss"> @layer utilities { .co        t-auto { content-visibility: auto; } } </style>   <!-- component -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </head>

        <body class="antialiased">

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
        </body>

        </html>