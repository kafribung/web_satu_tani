<x-master>
    <div class="container-fluid">
        <!-- Hover Rows -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 style="margin-bottom: 10px">
                            Barang yang telah dikirim
                        </h2>

                        @if (session('message'))
                        <div class="alert alert-success" style="margin-top: 10px">
                            <strong>Well done!</strong> {{ session('message') }} .
                        </div>
                        @endif
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>PEMBELI</th>
                                    <th>HARGA PRODUK</th>
                                    <th>BIAYA PENGIRIMAN</th>
                                    <th>TOTAL</th>
                                    <th>PRODUK</th>
                                    <th>METODE PEMBAYARAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($checkouts as $checkout)
                                <tr>
                                    <th scope="row">{{ (($checkouts->currentPage() - 1 ) * $checkouts->perPage() ) + $loop->iteration }}</th>
                                    <td>{{ $checkout->user->name }}</td>
                                    <td>{{ number_format($checkout->product_price) }}</td>
                                    <td>{{ number_format($checkout->shipping_cost) }}</td>
                                    <td>{{ number_format($checkout->total) }}</td>
                                    <td>
                                        <div class="list-group">
                                            @foreach (json_decode($checkout->carts) as $cart)
                                            @php
                                                $discount = number_format((($checkout->product($cart->product_id)->price * $checkout->product($cart->product_id)->discount) / 100));
                                                $harga    = $checkout->product($cart->product_id)->price - $discount;
                                            @endphp
                                            <button type="button" class="list-group-item">{{ $checkout->product($cart->product_id)->name ?? '' }} - Rp.{{ number_format($harga) }} <span class="badge bg-teal">Jumlah: {{ $cart->stock }}</span></button>
                                            @endforeach
                                        </div>
                                    </td>
                                    <td>{{ $checkout->payment_method == 'transfer'? 'Transfer' : 'COD'}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <th class="justify-content-center text-center" colspan="12">Belum ada data yang ditambahkan</th>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <p class="footer">
                            {{ $checkouts->links() }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Hover Rows -->
    </div>

    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
</x-master>
