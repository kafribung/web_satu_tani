<!--====== Main Footer ======-->
<footer>
    <div class="outer-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="outer-footer__content u-s-m-b-40">
                        <a href="/">
                            <img src="{{ asset('assets/images/logo/logo st1.png') }}" alt="" style="width: 150px;">
                        </a>
                        <div class="outer-footer__text-wrap">
                            <span>
                                Satutani merupakan sebuah situs website yang akan menjembatani petani dan
                                pembeli bawang secara
                                langsung dan dapar mempermudah petani dalam mempromosikan dan menjual hasil
                                panen secara cepat dengan
                                memanfaatkan internet
                            </span>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="outer-footer__content u-s-m-b-40">
                                <span class="outer-footer__content-title">Layanan</span>
                                <div class="outer-footer__list-wrap">
                                    <ul>
                                        <li>
                                            <a href="{{ route('tanya-jawab') }}">Tanya Jawab</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('panduan') }}">Panduan</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('tentang-kami') }}">Tentang Kami</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('syarat-dan-ketentuan') }}">Syarat dan Ketentuan</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('kebijakan-privasi') }}">Kebijakan Privasi</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="outer-footer__content u-s-m-b-40">
                                <div class="outer-footer__list-wrap">
                                    <span class="outer-footer__content-title">Kantor</span>
                                    <div class="outer-footer__text-wrap">
                                        <span>Jalan Ujung Bori Komp. Kodap Stp 3/13 Kelurahan Bitoa
                                            Kecematan Manggala Kota Makassar, 90234</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="outer-footer__content">
                        <span class="outer-footer__content-title">Kontak Kami</span>
                        <form class="newsletter">
                            <div class="u-s-m-b-15">
                                <div class="radio-box newsletter__radio">
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-4 col-md-2">
                                            <a href=""><img src="{{ asset('assets/images/icon/fb.svg') }}" alt=""> </a>
                                        </div>
                                        <div class="col-lg-4 col-md-2">
                                            <a href=""><img src="{{ asset('assets/images/icon/ig.svg') }}" alt=""> </a>
                                        </div>
                                        <div class="col-lg-4 col-md-2" style="margin-bottom: 10px;">
                                            <a href=""><img src="{{ asset('assets/images/icon/twi.svg') }}" alt=""> </a>
                                        </div>


                                        <div class="col-lg-4 col-md-2">
                                            <a href=""><img src="{{ asset('assets/images/icon/wa.svg') }}" alt=""> </a>
                                        </div>
                                        <div class="col-lg-4 col-md-2">
                                            <a href=""><img src="{{ asset('assets/images/icon/yt.svg') }}" alt=""> </a>
                                        </div>
                                        <div class="col-lg-4 col-md-2">
                                            <a href=""><img src="{{ asset('assets/images/icon/tele.svg') }}" alt=""> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lower-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="lower-footer__content">
                        <div class="lower-footer__copyright">
                            <span>Copyright © {{ date('Y') }}</span>
                            <a href="index.html">{{ config('app.name') }}</a>
                            <span>All Right Reserved</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--====== End Footer ======-->
