<x-master>
    <div class="container-fluid">
        <!-- Hover Rows -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 style="margin-bottom: 10px">
                            Menunggu Pembayaran
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
                                    <th>AKSI</th>
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
                                            <button type="button" class="list-group-item">{{ $checkout->product($cart->product_id)->name ?? '' }} - Rp.{{ number_format($cart->price) }} <span class="badge bg-teal">Jumlah: {{ $cart->stock }}</span></button>
                                            @endforeach
                                        </div>
                                    </td>
                                    <td>{{ $checkout->payment_method }}</td>
                                    <td>
                                        <form style="display: inline"  action="{{ route('admin.validasi.update', $checkout->user) }}" method="POST">
                                            @csrf
                                            @method('patch')
                                            <button type="submit" class="btn btn-success waves-effect">
                                                <i class="material-icons">check</i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <th colspan="6">Data tidak ditemukan</th>
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
