<x-app-layout>
    <main class="py-6 bg-slate-100">
        <div class="max-w-7xl mx-auto hp:px-3 lg:px-8">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between border-gray-200 pt-2 hp:flex-col">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 hp:text-2xl pb-6">Pesanan Paket Trivili
                    </h1>
                </div>
                <div class="py-2 align-middle sm:px-4 lg:px-4">
                    <div class="overflow-scroll shadow border-b border-gray-200 sm:rounded-lg">
                        <table id="checkout" class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama Paket
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Harga
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jumlah Tiket
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Subtotal
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 text-center">
                                @php $total = 0 @endphp
                                @if (session('checkout'))
                                    @foreach (session('checkout') as $package_id => $details)
                                        @php $total += $details['package_price'] * $details['quantity'] @endphp
                                        <tr data-id="{{ $package_id }}">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center"><input type="checkbox" name=""
                                                        id="">
                                                    <div class="flex-shrink-0 h-10 w-10 ml-5">
                                                        <img class="h-10 w-10 rounded-full"
                                                            src="{{ asset('storage/'.$details['feature_img']) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm text-gray-900">
                                                            {{ $details['package_name'] }}
                                                        </div>
                                                        <div class="text-sm text-gray-500">
                                                            {{-- {{ $details['location_name'] }} --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">Rp. {{ $details['package_price'] }}
                                                </div>
                                            </td>
                                            <td data-th="Quantity">
                                                <input type="number" value="{{ $details['quantity'] }}"
                                                    class="form-control quantity cart_update w-20 border-none" min="1" />
                                            </td>
                                            <td data-th="Subtotal" class="text-center">Rp.
                                                {{ $details['package_price'] * $details['quantity'] }}
                                            </td>
                                            <td>
                                                <button class="btn btn-danger btn-sm cart_remove font-semibold text-red-600 hover:text-red-300 transition-all 300ms ease-in-out">Del</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right">
                        <div class="mt-4">
                            <h1 class="text-xl"><strong>Total Rp. {{ $total }}</strong></h1>
                        </div>
                        <div class="mt-4 flex flex-row justify-end items-center">
                            <div class="font-semibold mr-3 border rounded-lg border-primary p-2 text-primary justify-center items-center hover:bg-secondary hover:border-secondary hover:opacity-80 hover:text-white transition-all 300ms ease-in-out">
                                <a href="{{ url('/package') }}" class="btn btn-danger">Kembali</a>
                            </div>
                            <div class="font-semibold border rounded-lg border-primary bg-primary p-2 text-white justify-center items-center hover:opacity-50 transition-all 300ms ease-in-out">
                                @auth
                                    <a href="payment" target="_blank" class="btn btn-success">Checkout</a>
                                @else
                                    <a href="login" class="btn btn-success">Checkout</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript">
        $(".cart_update").change(function(e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update_cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".cart_remove").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Anda yakin menghapus paket ini?")) {
                $.ajax({
                    url: '{{ route('remove_from_cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
</x-app-layout>
