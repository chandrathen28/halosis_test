<div>
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Our Shop</h3>
                    <span class="breadcrumb"><a href="#">Home</a> > Our Shop</span>
                </div>
            </div>
        </div>
    </div>

    <div class="section trending">
        <div class="container">
            <ul class="trending-filter">
                <li>
                    <a class="is_active" href="#!" data-filter="*">Show All</a>
                </li>

                @foreach($data['categories'] as $category)
                    <li>
                        <a href="#!" data-filter=".{{ $category->name }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="row trending-box">

                @foreach($data['products'] as $product)
                    <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 {{$product->category->name}}">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{ url('/products/detail/'.$product->id) }}"><img src="{{asset('storage/product/'.$product->image)}}" alt=""></a>
                                <span class="price">Rp. {{ number_format($product->price) }}</span>
                            </div>
                            <div class="down-content">
                                <span class="category">{{$product->category->name}}</span>
                                <h4>{{ $product->name }}</h4>
                                <a href="{{ url('/products/detail/'.$product->id) }}"><i class="fa fa-shopping-bag"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
</div>
