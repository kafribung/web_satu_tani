<x-main>
    @slot('cssTambahan')
    <link rel="stylesheet" href="{{ asset('assets/css/bantupengguna.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pesanan.css') }}">
    @endslot
    <!--====== Section 2 ======-->
    <div class="u-s-p-b-60">
        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="dash">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            @if (session('message'))
                            <div class="col-lg-12">
                                <span class="pd-detail__left mb-5">{{ session('message') }}</span>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        @include('client.dashboard._sidebar-dashboard')
                        <div class="col-lg-9 col-md-12">
                            @include('client.dashboard._sidebar-orderan')
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div
                                        class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                        <div class="dash__pad-2">
                                            <h1 class="dash__h1 u-s-m-b-14">Pesanan Saya</h1>
                                            <span class="dash__text u-s-m-b-30">Semua pesanan yang menunggu pembayaran, silahkan transfer ke nomor dengna biaya: Rp.{{ number_format($checkouts->sum('total') ?? '')  }}.</span>
                                            @if ($checkouts->count() != 0)
                                            <a href="https://api.whatsapp.com/send?phone=6281354987953&text=Halo%20{{ auth()->user()->name }}%0ASilahkan%20kirim%20bukti%20pembayaran%20anda%20disini!%0ANo.Rekening%20Satu%20Tani:%20BRI/Adly 123 3443 5454."><img src="{{ asset('assets/images/button-wa/button-wa.png') }}" alt=""></a>
                                            <p style="font-weight: bold" class="dash__h2 u-s-m-b-14">Transfer ke BRI(Adly 123 3443 5454).</p>
                                            @endif
                                            <div class="m-order__list">
                                                @forelse ($checkouts as $checkout)
                                                <p class="dash__h2 u-s-m-b-14">Metode Pembayaran: {{ $checkout->payment_method }}</p>
                                                <p class="dash__h2 u-s-m-b-14">Ongkir: Rp.{{ number_format($checkout->shipping_cost) }}</p>
                                                <p style="font-weight: bold" class="dash__h2 u-s-m-b-14">Total: Rp.{{ number_format($checkout->total) }}</p>
                                                <form action="{{ route('pesanan.destroy', $checkout) }}"  method="POST" class="dash__link">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" onclick="return confirm('Klik ok, untuk membatalkan pesanan')" style="color: #bb2124">Batalkan Pesanan</button>
                                                </form>
                                                    @foreach (json_decode($checkout->carts) as $cart)
                                                    <div class="m-order__get">
                                                        <div class="manage-o__header u-s-m-b-30">
                                                            <div class="dash-l-r">
                                                                <div>
                                                                    <div class="manage-o__text-2 u-c-secondary"> Order #{{ $checkout->id }}</div>
                                                                    <div class="manage-o__text u-c-silver">Dipesan pada {{ $checkout->created_at->format('d-m-Y : H:i:s') }}</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="manage-o__description">
                                                            <a href="{{ route('bawang-eceran.show', $checkout->product($cart->product_id)->slug ?? '-') }}" class="description__container">
                                                                <div class="description__img-wrap">
                                                                    <img class="u-img-fluid" src="{{ $checkout->take_img($checkout->product($cart->product_id)->img_1 ?? '') }}" alt="">
                                                                </div>
                                                                <div class="description-title">{{ $checkout->product($cart->product_id)->name ?? '' }}</div>
                                                            </a>
                                                            <div class="description__info-wrap">
                                                                <div>
                                                                    <span class="manage-o__text-2 u-c-silver">Jumlah:
                                                                        <span class="manage-o__text-2 u-c-brand">{{ $cart->stock }} Kg</span>
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    @php
                                                                        $discount = number_format((($checkout->product($cart->product_id)->price * $checkout->product($cart->product_id)->discount) / 100));
                                                                        $harga    = $checkout->product($cart->product_id)->price - $discount;
                                                                    @endphp
                                                                    <span class="manage-o__text-2 u-c-silver">Harga:
                                                                    <span class="manage-o__text-2 u-c-brand"> Rp.{{ number_format($harga) }}</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                @empty
                                                <p>Produk belum ditambahkan</p>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 2 ======-->
</x-main>
