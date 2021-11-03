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
                                <h1 class="section__heading u-c-secondary">PEMBAYARAN</h1>
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
            <div class="checkout-f">
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
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="checkout-f__h1">PILIH ONGKOS KIRIM</h1>
                        <!--====== Check Box ======-->
                        <div class="u-s-m-b-10">
                            <!--====== Radio Box ======-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="ongkir">
                                        <div class="radio-box" style="margin-top: 20px; margin-left: 20px;">
                                            <input type="radio" id="standar" value="10000" name="pembayaran">
                                            <div class="radio-box__state radio-box__state--primary">
                                                <label class="radio-box__label" style="color: green; font-size: 16px;" for="cash-on-delivery">RP. 10.000.00</label>
                                            </div>
                                        </div>

                                        <div class="gl-text u-s-m-t-6"
                                            style="margin-left: 45px; padding-bottom: 20px;">
                                            <span>Standar (Untuk bawang enceran kurang dari 20kg )</span><br>
                                            <span>Estimasi 3 hari dari waktu pembayaran awal</span>
                                        </div>
                                    </div>

                                    <div class="ongkir">
                                        <div class="radio-box" style="margin-top: 20px; margin-left: 20px;">
                                            <input type="radio" id="reguler" value="30000" name="pembayaran">
                                            <div class="radio-box__state radio-box__state--primary">
                                                <label class="radio-box__label" style="color: green; font-size: 16px;" for="cash-on-delivery">RP. 30.000.00</label>
                                            </div>
                                        </div>

                                        <div class="gl-text u-s-m-t-6"
                                            style="margin-left: 45px; padding-bottom: 20px;">
                                            <span>Reguler(Untuk bawang di atas 20kg)</span><br>
                                            <span>Estimasi 3 hari dari waktu pembayaran awal</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h1 class="checkout-f__h1">RINGKASAN PESANAN</h1>
                        <!--====== Order Summary ======-->
                        <div class="o-summary">
                            <div class="o-summary__section u-s-m-b-30">
                                <div class="o-summary__item-wrap gl-scroll">
                                    @foreach (auth()->user()->carts()->latest()->get() as $index => $cart)
                                    <div class="o-card">
                                        <div class="o-card__flex">
                                            <div class="o-card__img-wrap">
                                                <a href="{{ route('bawang-eceran.show', $cart->product) }}">
                                                    <img class="u-img-fluid" src="{{ $cart->product->take_img($cart->product->img_1) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="o-card__info-wrap">
                                                <span class="mini-product__category">
                                                    <a href="{{ route('bawang-eceran.index') }}">{{ $cart->product->product_group->name == 'Eceran'  ? 'Eceran' : 'Koperasi'}}</a>
                                                </span>
                                                <span class="o-card__name">
                                                    <a href="{{ route('bawang-eceran.show', $cart->product) }}"> {{ $cart->product->name }}</a>
                                                </span>
                                                <span class="o-card__quantity">{{ $cart->stock  }} x</span>
                                                <span class="o-card__price">Rp.{{ $total= number_format($cart->price) }}</span>
                                            </div>
                                        </div>
                                        <a href="{{ route('keranjang.delete', $cart) }}" class="mini-product__delete-link far fa-trash-alt" onclick="event.preventDefault(); document.getElementById('delete_cart{{ $index }}').submit();"></a>
                                        <form id="delete_cart{{ $index }}" action="{{ route('keranjang.delete', $cart) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!--====== End - Check Box ======-->
                    </div>

                    <div class="col-lg-6">
                        <div class="o-summary__section u-s-m-b-30">
                            <div class="o-summary__box">
                                <h1 class="checkout-f__h1">DETAIL ORDERAN</h1>
                                <div class="ship-b">
                                    <span class="ship-b__text">Informasi Pengiriman:</span>
                                    <div class="ship-b__box u-s-m-b-10">
                                        <p class="ship-b__p">{{ auth()->user()->address }}, ({{ auth()->user()->name }},  Hp:{{ auth()->user()->no_hp }})</p>
                                        <a href="{{ route('profil.edit') }}" class="ship-b__edit btn--e-transparent-platinum-b-2">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="o-summary__section u-s-m-b-30">
                            <div class="o-summary__box">
                                <table class="o-summary__table2" style="width: 100%;">
                                    <tbody style="width: 100%;">
                                        <tr>
                                            <td>Sub Total</td>
                                            <td>Rp.{{ $total = number_format(auth()->user()->carts()->sum('price')) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Ongkos Kirim</td>
                                            <td id="shipping-cost">Rp.0</td>
                                        </tr>
                                        <tr>
                                            <td>Total </td>
                                            <td id="total">Rp.{{ $total }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="o-summary__section u-s-m-b-30">
                            <div class="o-summary__box">
                                <h1 class="checkout-f__h1">METODE PEMBAYARAN</h1>
                                <form action="{{ route('pembayaran.create') }}" method="POST" class="checkout-f__payment">
                                    @csrf
                                    <div class="u-s-m-b-10">
                                        <!--====== Radio Box ======-->
                                        <div class="radio-box">
                                            <input type="radio" id="cash-on-delivery" value="cod" name="payment_method">
                                            <div class="radio-box__state radio-box__state--primary">
                                                <label class="radio-box__label" for="cash-on-delivery">Bayar di Tempat</label>
                                            </div>
                                        </div>
                                        <!--====== End - Radio Box ======-->
                                        <span class="gl-text u-s-m-t-6">Bayar Setelah Tunai saat pengiriman. (Layanan ini hanya tersedia untuk beberapa daerah)</span>
                                    </div>
                                    <div class="u-s-m-b-10">
                                        <!--====== Radio Box ======-->
                                        <div class="radio-box">
                                            <input type="radio" id="direct-bank-transfer" value="transfer" name="payment_method">
                                            <div class="radio-box__state radio-box__state--primary">
                                                <label class="radio-box__label" for="direct-bank-transfer">Transfer Bank (Adly, BRI: 123 345 123) </label>
                                            </div>
                                        </div>
                                        <!--====== End - Radio Box ======-->
                                        <span class="gl-text u-s-m-t-6">
                                            Lakukan pembayaran langsung ke rekening bank kami. Silakan gunakan ID Pesanan Anda sebagai referensi pembayaran. Pesanan Anda tidak akan dikirim sampai dana telah masuk ke rekening kami.
                                        </span>
                                    </div>
                                    <div class="u-s-m-b-10">
                                        @error('payment_method')
                                        <p style="color: #bb2124">{{ $message }}</p>
                                        @enderror
                                        @error('shipping_cost')
                                        <p style="color: #bb2124">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    {{--  --}}
                                    <input name="shipping_cost" style="display: none" value="" type="number">
                                    <div>
                                        <button  class="mini-link btn--e-brand-b-2" style="font-size: 12px">Buat Pesanan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Order Summary ======-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== End - Section 2 ======-->
@push('script')
<script>
$(document).ready(function(){
    $("input[type='radio']").click(function(){
        // Get value ongkir
        let ongkir = $("input[name='pembayaran']:checked").val();
        if (ongkir) {
            // Set value ongkos kirim
            $("#shipping-cost").text('Rp.'+numberWithCommas(ongkir));

            // Add  ongkir + harga
            const total = +parseInt(ongkir) + {{ auth()->user()->carts()->sum('price') }}
            $("#total").text('Rp.' + numberWithCommas(total));
            $("input[name=shipping_cost]").val(ongkir);
        }
    });

    // Converter number_format
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
})

</script>
@endpush
</x-main>
