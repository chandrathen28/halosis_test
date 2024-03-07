<div>
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>{{ $product->name }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="{{asset('storage/product/'.$product->image)}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <h4>{{ $product->name }}</h4>
                    <span class="price">Rp. {{ number_format($product->price) }}</span>
                    <p>{{ $product->description }}</p>
                </div>
                <div class="col-lg-12">
                    <div class="sep"></div>
                </div>
            </div>
        </div>
    </div>

</div>
