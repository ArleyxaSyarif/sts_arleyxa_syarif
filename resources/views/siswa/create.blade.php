<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<section class="bg-white dark:bg-gray-900">





    <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">


        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Data Siswa</h2>
        <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- @csrf memastikan bahwa permintaan yang dikirimkan ke server berasal dari formulir yang sah. --}}
            <div class="w-full">
                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                    Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    value="" placeholder="" required="">
            </div>
            <div class="w-full">
                <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat
                    Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    value="" placeholder="" required="">
            </div>
            <div class="w-full">
                <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                    Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    value="" placeholder="" required="">
            </div>
            <div class="w-full">
                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                </label>
                <input type="text" name="alamat" id="alamat"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    value="" placeholder="" required="">
            </div>
            <div class="w-full">
                <label for="asal_sekolah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asal
                    Sekolah
                </label>
                <input type="text" name="asal_sekolah" id="asal_sekolah"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    value="" placeholder="" required="">
            </div>
            <div class="w-full">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                </label>
                <input type="email" name="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    value="" placeholder="" required="">
            </div>
            <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                <div class="sm:col-span-2">


                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="file_input">Foto</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="foto" type="file" name="foto">

                </div>
                <div class="sm:col-span-2">


                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Scan
                        Kartu Keluarga</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="scan_kk" type="file" name="scan_kk">

                </div>




            </div>
            <div class="flex items-center space-x-4">
                <button type="submit"
                    class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Add product
                </button>

                <a href="{{ route('jurusan.index') }}" type="button"
                    class="flex items-center justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">

                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Back
                </a>

        </form>

    </div>
    </div>
</section>
