@extends('customerpage.partials.content')

    @section('content')
    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Dina Zalfa Fashion</h6>
                        <h3>Fashion is one of the most desirable industries in the world.</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                            <li><a href="{{ url('customer/produk/ld') }}" class="{{ ($active == 'ld') ? 'produk-aktif' : '' }}"><img src="{{ asset('frontend/asset/images/male.png') }}" >Man</a></a></li>
                                            <li><a href="{{ url('customer/produk/la') }}" class="{{ ($active == 'la') ? 'produk-aktif' : '' }}"><img src="{{ asset('frontend/asset/images/boy.png') }}" >Boy</a></a></li>
                                            <li><a href="{{ url('customer/produk/pd') }}" class="{{ ($active == 'pd') ? 'produk-aktif' : ''  }}"><img src="{{ asset('frontend/asset/images/female.png')}}" >Woman</a></li>
                                            <li><a href="{{ url('customer/produk/pa') }}" class="{{ ($active == 'pa') ? 'produk-aktif' : ''  }}"><img src="{{ asset('frontend/asset/images/girl.png')}}" >Girl</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id="produks">
                                    <div class="row">
                                        <?php $newCol = True; $innerLoop = 1; $isLeft = True;?>
                                        @foreach ($all_produk as $produk)
                                        
                                        @if ($newCol==True)
                                            <?php $innerLoop = 1; ?>

                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="{{ (($isLeft==True) ? 'left-list' : 'right-list') }}">
                                                        @if ($isLeft==True)
                                                            <?php $isLeft = False; ?>
                                                        @else
                                                            <?php $isLeft = True; ?>
                                                        @endif
                                        @endif

                                        @if ($innerLoop < 3)
                                        <?php $newCol = False; ?>
                                        @else
                                        <?php $newCol = True; ?>
                                        @endif

                                        <div class="col-lg-12">
                                            <div class="tab-item">
                                                <a href="#">
                                                    <img src="/storage/{{ $produk->foto_produk }}" width="100px" height="150px">
                                                <h4>{{ $produk->nama_produk }}</h4>
                                                </a>  
                                                <p>{{ substr($produk->deskripsi, 0, 80) }}...</p>
                                                <div class="price">
                                                    @if ($produk->diskon > 0)
                                                    <span class="reducedfrom">Rp. {{ $produk->harga }}</span>
                                                    <span class="actual">Rp. {{ ($produk->harga -= ($produk->harga * $produk->diskon)) }}</span><br>
                                                    @else 
                                                        <span class="actual">Rp. {{ $produk->harga }}</span><br>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                                
                                        @if ($newCol==True)
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        
                                        <?php $innerLoop++; ?>

                                        @endforeach   
                                            
                                    </div>                                       
                                </article>                                 
                            </section>
                        </div>                        
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $all_produk->withQueryString()->links() }}
            </div>  

        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->
@endsection 