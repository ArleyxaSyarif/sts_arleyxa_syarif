<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

</head>

<body>
    <!--
  This example requires updating your template:

  ```
  <html class="h-full">
  <body class="h-full">
  ```
-->

    <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">

        <div class="text-center">

            <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Pilih Jurusan</h1>


            <div class="overflow-x-auto">

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                        @forelse ($jurusan as $juru)
                            <button type="button" class="btn btn-primary"></button>

                            <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                                <a href="#"
                                    class="flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

                                    </svg>

                                    <span
                                        class="text-sm font-medium text-gray-900 dark:text-white">{{ $juru->nama_jurusan }}
                                        <a href="{{ route('jurusan.show', $juru->id) }}">Lihat</a>

                                    </span>

                                </a>
                            </div>


                        @empty
                        @endforelse
                    </thead>



                </table>
            </div>

        </div>

        <a href="/siswa/create" type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Daftar</a>

        <a href="{{ route('siswa.index') }}" type="button"
            class="flex items-center justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">

            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
            </svg>
            Lihat List Data
        </a>
    </main>



</body>

</html>
