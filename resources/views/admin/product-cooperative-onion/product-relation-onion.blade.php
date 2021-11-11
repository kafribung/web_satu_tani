<x-master>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Bawang Koperasi</h2>
        </div>
        <!-- Basic Example -->
        <div class="row clearfix">
            @foreach ($bawangKoperasis as $bawangKoperasi)
            <div class="col-lg-4 col-md-3 col-sm-8 col-xs-12">
                <div class="card">
                    <div class="header bg-red">
                        @php
                        $discount = number_format((($bawangKoperasi->price * $bawangKoperasi->discount) / 100))
                        @endphp
                        <h2>
                            <a target="_blank" href="{{ route('bawang-koperasi.show', $bawangKoperasi->slug) }}">{{ $bawangKoperasi->name }}</a>
                            <small>Rp.{{ $harga = number_format($bawangKoperasi->price - $discount) }}</small>
                            <small>Diskon: {{ $bawangKoperasi->discount }} %</small>
                            <small>Pemilik: {{ $bawangKoperasi->user->name }}</small>
                            @if ($bawangKoperasi->discount != 0 || $bawangKoperasi->discount != null)
                                <small >Harga awal: Rp. {{ number_format($bawangKoperasi->price, 2) }}</small>
                            @endif
                        </h2>
                    </div>
                    <div class="body">
                        <img class="img-responsive thumbnail" src="{{ $bawangKoperasi->take_img($bawangKoperasi->img_1) }}">
                        <p>{{ Str::limit($bawangKoperasi->description, 20) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div>
            {{ $bawangKoperasis->links('pagination::bootstrap-4') }}
        </div>
    </div>
</x-master>
