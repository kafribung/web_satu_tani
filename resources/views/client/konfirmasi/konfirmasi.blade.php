<x-main>
    <!--====== Section 1 ======-->
    <div class="u-s-p-y-60">
        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="">
                <div class="breadcrumb">
                    <div class="breadcrumb__wrap">
                        <ul class="breadcrumb__list">
                            <center>
                                <li>
                                    <h1 class="section__heading u-c-secondary">KONFIRMASI</h1>
                                </li>
                            </center>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section 1 ======-->

    <!--====== Section 2 ======-->
    <div class="u-s-p-b-60">
        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="has-separator">
                            <a href="{{ route('home.index') }}" class="fas fa-arrow-left" style="font-size: 18px;"></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        @if (session('message'))
                        <div class="col-lg-12">
                            <span class="pd-detail__left mb-5">{{ session('message') }}</span>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="checkout-f">
                    <div class="o-summary__section u-s-m-b-30">
                        <div class="o-summary__box">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <table class="o-summary__table" rules=rows>

                                            <tbody>
                                                <tr>
                                                </tr>
                                                <tr>
                                                    <td class="nama">Nama Penerima</td>
                                                    <td>{{ auth()->user()->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="nama">Alamat</td>
                                                    <td>{{ auth()->user()->address }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="nama">No. Hp </td>
                                                    <td>{{ auth()->user()->no_hp }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="nama">Email </td>
                                                    <td>{{ auth()->user()->email }}</td>
                                                </tr>
                                                <tr>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-md-5">
                                        <table class="o-summary__table1">
                                            <tbody>
                                                <tr>
                                                    <td class="nama1">Metode Pembayaran</td>
                                                    <td class="nama2">{{ $checkout->payment_method  == 'transfer'? 'Transfer BRI(Adly 12345678)' : 'COD' }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="nama1">Harga Bawang</td>
                                                    <td class="nama2">Rp. {{ number_format($checkout->product_price) }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="nama1">Ongkos Kirim</td>
                                                    <td class="nama2">Rp. {{ number_format($checkout->shipping_cost) }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="nama3"
                                                        style="color: rgb(0, 172, 0); font-size: 18px; font-family: Poppins, bold; text-align: left;">
                                                        Total
                                                    </td>
                                                    <td class="nama4"
                                                        style="color: rgb(0, 168, 0); font-size: 18px; font-family: Poppins;">
                                                        Rp. {{ number_format($checkout->total) }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <form action="{{ route('konfirmasi.update', $checkout) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="mini-link btn--e-brand-b-2" style="font-size: 12px; margin-top: 30px;">KONFIRMASI</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Order Summary ======-->
            </div>
        </div>
    </div>
    <!--====== End - Section 2 ======-->
</x-main>
