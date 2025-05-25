@section('app', 'Page Kategori | Edit')

<x-app>
    <div class="p-5 bg-white rounded-lg mt-14">
        <div class="flex border-b-2 pb-4">
            <div class="bg-gray-800 flex rounded-full">
                <a href="{{ route('kategori.index') }}" class="text-white">
                    <span class="material-icons m-1">
                        arrow_back
                    </span>
                </a>
            </div>
            <h3 class="ml-2 font-bold text-center mt-1">Edit Kategori</h3>
        </div>

        <div class="">
            <form action="{{ route('kategori.update', $kategori -> id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="w-full mt-5">
                    <div class="mb-6">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900">Title Category</label>
                        <input type="text" name="nama_kategori" value="{{ $kategori -> nama_kategori}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="" required>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button type="submit" name="submit_action" value="return"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 w-full font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 cursor-pointer">
                        Submit & Return
                    </button>

                    <button type="submit" name="submit_action" value="stay"
                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium w-full rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800 cursor-pointer">
                        Submit & Stay
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app>
