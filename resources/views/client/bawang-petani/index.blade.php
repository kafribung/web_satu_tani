<x-main>
    <!--====== Section 1 ======-->
    <div class="u-s-p-t-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 u-s-m-b-30">
                    <div class="section__text-wrap">
                        <h1 class="section__heading u-c-secondary u-s-m-b-12">Bawang Eceran</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-p">
                        <div class="shop-p__collection">
                            <div class="row is-grid-active">
                                @foreach ($bawangPetanis as $bawangPetani)
                                <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="bp-mini__stat">
                                            <span class="bp-mini__preposition">Oleh</span>
                                            <span class="bp-mini__author">
                                                <a href="">{{ $bawangPetani->user->name }}</a>
                                            </span>
                                        </div>

                                        <div class="product-o__wrap">
                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                href="{{ route('bawang-eceran.show', $bawangPetani->slug) }}">
                                                <img class="aspect__img" src="{{ $bawangPetani->take_img($bawangPetani->img_1) }}" alt="">
                                            </a>
                                        </div>

                                        <span class="product-o__category">
                                            <a href="{{ route('bawang-eceran.show', $bawangPetani->slug) }}">Stok: {{ $bawangPetani->stock }} Kg</a><br>
                                            <a href="{{ route('bawang-eceran.show', $bawangPetani->slug) }}">Panen: {{  date('d-m-Y', strtotime($bawangPetani->harvest_time))  }}</a>
                                        </span>

                                        <span class="product-o__name">
                                            <a href="{{ route('bawang-eceran.show', $bawangPetani->slug) }}" style="font-size: 16px;">{{ $bawangPetani->name }}</a>
                                        </span>
                                        @php
                                        $discount = number_format((($bawangPetani->price * $bawangPetani->discount) / 100))
                                        @endphp
                                        <span class="product-o__price">
                                            <span style="color: #999; font-size: 12px;">Rp. {{ number_format($bawangPetani->price - $discount, 2) }} / Kg</span>
                                            @if ($bawangPetani->discount != 0 || $bawangPetani->discount != null)
                                            <span class="product-o__discount">{{ number_format($bawangPetani->price, 2) }}</span>
                                            @endif
                                        </span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="u-s-p-y-60">
                            <!--====== Pagination ======-->
                            {{ $bawangPetanis->links('pagination::simple-tailwind') }}
                            <!--====== End - Pagination ======-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section 1 ======-->
</x-main>
