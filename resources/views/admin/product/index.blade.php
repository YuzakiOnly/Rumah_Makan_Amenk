@section('app', 'Page Product')

<x-apps>
    <div class="p-5 bg-white rounded-lg mt-14">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <caption
                    class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Our Products
                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
                        Browse a list of available products to manage, edit, or remove from your catalog.
                    </p>
                </caption>
                <thead class="text-xs text-white uppercase bg-gray-600">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No.
                        </th>
                        <th scope="col" class="px-6 text-left py-3">
                            Title Product
                        </th>
                        <th scope="col" class="px-6 text-left py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 text-left py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 text-center py-3">
                            Stock
                        </th>
                        <th scope="col" class="px-6 text-center py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($allproduct as $key => $p)
                        <tr class="bg-white border-b text-gray-900 font-medium border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowra">
                                {{ $allproduct->firstItem() + $key }}.
                            </th>
                            <td class="px-6 text-left py-4">
                                {{ $p->nama_product }}
                            </td>
                            <td class="px-6 text-left py-4">
                                {{ $p->kategori->nama_kategori }}
                            </td>
                            <td class="px-6 text-left py-4">
                                {{ $p->harga }}
                            </td>
                            <td class="px-6 text-center py-4">
                                {{ $p->stok }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <form enctype="multipart/form-data" action="{{ route('product.destroy', $p->id) }}" method="POST">
                                    {{-- <a href="" class="inline-flex text-sm font-medium text-blue-600 hover:underline">
                                    <span class="material-icons text-base mr-0.5 ">
                                        visibility
                                    </span>
                                    View
                                </a> --}}
                                    <a href="{{ route('product.edit', $p->id) }}"
                                        class="inline-flex text-sm font-medium text-yellow-600 hover:underline">
                                        <span class="material-icons text-base mr-0.5">
                                            edit
                                        </span>
                                        Edit
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class="inline-flex text-sm font-medium text-red-600 hover:underline">
                                        <span class="material-icons text-base mr-0.5">
                                            delete
                                        </span>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-gray-600 py-6 italic">
                                Data masih kosong. Tambah untuk menampilkan kategori.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="flex items-center pt-4 pl-2">
            {{ $allproduct->links() }}
        </div>

        @section('add')
            <a href="{{ route('product.create') }}"
                class="bg-blue-600 rounded-full w-18 h-18 flex items-center justify-center text-white text-xl">
                <span class="material-icons">
                    add
                </span>
            </a>
        @endsection
    </div>
</x-apps>
