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
                                <h1 class="section__heading u-c-secondary">CHECKOUT</h1>
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
                        <h1 class="checkout-f__h1">PILIH ONGKOS KIRIM</h1>
                        <!--====== Check Box ======-->
                        <div class="u-s-m-b-10">
                            <!--====== Radio Box ======-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="ongkir">
                                        <div class="radio-box" style="margin-top: 20px; margin-left: 20px;">
                                            <input type="radio" id="cash-on-delivery" name="payment">
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
                                            <input type="radio" id="cash-on-delivery" name="payment">
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
                                        <a class="o-card__del far fa-trash-alt"></a>
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
                                    <span class="ship-b__text">Ship to:</span>
                                    <div class="ship-b__box u-s-m-b-10">
                                        <p class="ship-b__p">4247 Ashford Drive Virginia VA-20006 USA (+0)
                                            900901904</p>

                                        <a class="ship-b__edit btn--e-transparent-platinum-b-2"
                                            data-modal="modal" data-modal-id="#edit-ship-address">Edit</a>
                                    </div>
                                    <div class="ship-b__box">

                                        <span class="ship-b__text">Bill to default billing address</span>

                                        <a class="ship-b__edit btn--e-transparent-platinum-b-2"
                                            data-modal="modal" data-modal-id="#edit-ship-address">Edit</a>
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
                                            <td>Rp. 400.000.00</td>
                                        </tr>
                                        <tr>
                                            <td>PPN (10%)</td>
                                            <td>Rp. 20.000.00</td>
                                        </tr>
                                        <tr>
                                            <td>Ongkos Kirim</td>
                                            <td>Rp. 75.000.00</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Diskon/Voucher</td>
                                        </tr>
                                        <tr>
                                            <td>

                                                <input class="input-text input-text--primary-style"
                                                    type="text" id="address-fname"
                                                    placeholder="Kode Diskon"></td>
                                            <td>
                                                <a class="ship-b__edit btn--e-transparent-platinum-b-2"
                                                    data-modal="modal" href="#">Gunakan</a></td>
                                        </tr>
                                        <tr>
                                            <td>Total </td>
                                            <td>Rp. 379.000.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="o-summary__section u-s-m-b-30">
                            <div class="o-summary__box">
                                <h1 class="checkout-f__h1"> INFORMASI PEMBAYARAN</h1>
                                <form class="checkout-f__payment">
                                    <div class="u-s-m-b-10">

                                        <!--====== Radio Box ======-->
                                        <div class="radio-box">

                                            <input type="radio" id="cash-on-delivery" name="payment">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="cash-on-delivery">Bayar
                                                    Di tempat</label></div>
                                        </div>
                                        <!--====== End - Radio Box ======-->

                                        <span class="gl-text u-s-m-t-6">Pay Upon Cash on delivery. (This
                                            service is only available for some countries)</span>
                                    </div>
                                    <div class="u-s-m-b-10">

                                        <!--====== Radio Box ======-->
                                        <div class="radio-box">

                                            <input type="radio" id="direct-bank-transfer" name="payment">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label"
                                                    for="direct-bank-transfer">Transfer Bank </label></div>
                                        </div>
                                        <!--====== End - Radio Box ======-->

                                        <span class="gl-text u-s-m-t-6">Make your payment directly into our
                                            bank account. Please use your Order ID as the payment reference.
                                            Your order will not be shipped until the funds have cleared in
                                            our account.</span>
                                    </div>

                                    <div class="u-s-m-b-10">

                                        <!--====== Radio Box ======-->
                                        <div class="radio-box">

                                            <input type="radio" id="pay-with-card" name="payment">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="pay-with-card">Bayar
                                                    Dengan Kartu Kredit / Debit</label></div>
                                        </div>
                                        <!--====== End - Radio Box ======-->

                                        <span class="gl-text u-s-m-t-6">International Credit Cards must be
                                            eligible for use within the United States.</span>
                                    </div>

                                    <div class="u-s-m-b-15">

                                        <!--====== Check Box ======-->
                                        <!-- <div class="check-box">

                                                <input type="checkbox" id="term-and-condition">
                                                <div class="check-box__state check-box__state--primary">

                                                    <label class="check-box__label" for="term-and-condition">I consent to the</label></div>
                                            </div> -->
                                        <!--====== End - Check Box ======-->

                                        <!-- <a class="gl-link">Terms of Service.</a> -->
                                    </div>
                                    <div>

                                        <a href="checkout-konfirm.html" class="mini-link btn--e-brand-b-2"
                                            style="font-size: 12px">LANJUT</a>
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
</x-main>