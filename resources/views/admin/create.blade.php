<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<section class="bg-white dark:bg-gray-900">





    <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">


        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Jurusan</h2>
        <form action="{{ route('jurusan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- @csrf memastikan bahwa permintaan yang dikirimkan ke server berasal dari formulir yang sah. --}}
            <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                <div class="sm:col-span-2">



                </div>
                <div class="w-full">
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Jurusan</label>
                    <input type="text" name="nama_jurusan" id="nama_jurusan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        value="" placeholder="Product brand" required="">
                </div>


                <div class="sm:col-span-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail
                        Jurusan</label>
                    <textarea id="detail" rows="8" name="detail"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Write a product description here..."></textarea>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <button type="submit"
                    class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Add product
                </button>


        </form>

    </div>
    </div>
</section>
