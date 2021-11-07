<x-master>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Bawang Eceran</h2>
        </div>
        <!-- Basic Example -->
        <div class="row clearfix">
            @foreach ($bawangPetanis as $bawangPetani)
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header bg-red">
                        @php
                        $discount = number_format((($bawangPetani->price * $bawangPetani->discount) / 100))
                        @endphp
                        <h2>
                            <a target="_blank" href="{{ route('bawang-eceran.show', $bawangPetani->slug) }}">{{ $bawangPetani->name }}</a>
                            <small>Rp.{{ $harga = number_format($bawangPetani->price - $discount) }}</small>
                            <small>Diskon: {{ $bawangPetani->discount }} %</small>
                            <small>Pemilik: {{ $bawangPetani->user->name }}</small>
                            @if ($bawangPetani->discount != 0 || $bawangPetani->discount != null)
                                <small >Harga awal: Rp. {{ number_format($bawangPetani->price, 2) }}</small>
                            @endif
                        </h2>
                    </div>
                    <div class="body">
                        <img class="img-responsive thumbnail" src="{{ $bawangPetani->take_img($bawangPetani->img_1) }}">
                        <p>{{ Str::limit($bawangPetani->description, 20) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div>
            {{ $bawangPetanis->links('pagination::bootstrap-4') }}
        </div>
    </div>
</x-master>
