@section('app', 'Page Book | Create')

<x-app>
    <div class="p-5 bg-white rounded-lg mt-14">
        <div class="flex border-b-2 pb-4">
            <div class="bg-gray-800 flex rounded-full">
                <a href="{{ route('product.index') }}" class="text-white">
                    <span class="material-icons m-1">arrow_back</span>
                </a>
            </div>
            <h3 class="ml-2 font-bold text-center mt-1">Create Book</h3>
        </div>

        <div class="mt-6" x-data="{ imageUrl: '/storage/noimage.png' }">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col md:flex-row gap-6">
                    {{-- KIRI: Gambar --}}
                    <div class="w-full md:w-1/2">
                        <div
                            class="border-2 border-dashed border-gray-300 rounded-lg bg-gray-50 flex items-center justify-center overflow-hidden min-h-[300px]">
                            <img :src="imageUrl" alt="Preview" class="object-cover w-full h-full rounded-lg" />
                        </div>
                    </div>

                    {{-- KANAN: Form --}}
                    <div class="w-full md:w-1/2 flex flex-col justify-between">
                        <div class="space-y-4">
                            <div>
                                <label class="block mb-1 text-sm font-medium text-gray-900">Title Products</label>
                                <input type="text" name="nama_product" value="{{ old('nama_product') }}"
                                    class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    required>
                            </div>

                            <div>
                                <label class="block mb-1 text-sm font-medium text-gray-900">Category</label>
                                <select name="kategori_id"
                                    class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    required>
                                    <option value="{{ old('kategori_id') }}">Select Category</option>
                                    @foreach ($kategori as $k)
                                        <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label class="block mb-1 text-sm font-medium text-gray-900">Price</label>
                                <input type="number" step="0.01" name="harga"
                                    value="{{ old('harga', isset($product) ? number_format($product->harga, 2, '.', '') : '') }}"
                                    class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="125000.00" required>
                            </div>

                            <div>
                                <label class="block mb-1 text-sm font-medium text-gray-900">Stock</label>
                                <input type="number" name="stok" value="{{ old('stok') }}"
                                    class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="20" required>
                            </div>

                            <div>
                                <label class="block mb-1 text-sm font-medium text-gray-900">Deskripsi</label>
                                <textarea name="deskripsi" rows="4"
                                    class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    required>{{ old('deskripsi') }}</textarea>
                            </div>

                            <div>
                                <label class="block mb-1 text-sm font-medium text-gray-900">Upload Image</label>
                                <input accept="image/*" name="image" type="file" required
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none"
                                    @change="imageUrl = URL.createObjectURL($event.target.files[0])">
                            </div>
                        </div>

                        {{-- Tombol --}}
                        <div class="flex gap-2 mt-4">
                            <button type="submit" name="submit_action" value="return"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 w-full font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 cursor-pointer">
                                Submit & Return
                            </button>

                            <button type="submit" name="submit_action" value="stay"
                                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium w-full rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800 cursor-pointer">
                                Submit & Stay
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app>
