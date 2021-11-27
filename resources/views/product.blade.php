<x-home-layout>
    <!--Page Header Start-->
		<section class="page-header clearfix"
        style="background-image: url({{ asset('Frontend/assets/images/backgrounds/page-header-bg.jpg'); }});">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li><a href="/products">Products</a></li>
                </ul>
                <h2>Product Details</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <section class="product-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-details__image product-slider">
                        @foreach ($product->images as $image)
                            <img src="{{ asset('uploads/'.$image->image); }}" alt="" width="auto" height="auto">
                        @endforeach
                    </div><!-- /.product-details__image -->
                    <div class="product-nav" style="margin-top: 40px; margin-bottom:40px">
                        @foreach ($product->images as $image)
                        <img src="{{ asset('uploads/'.$image->image); }}" alt="" width="auto" height="auto">
                        @endforeach
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="product-details__content">
                        <div class="product-details__content__top">
                            <h3 class="product-details__content__name">{{ $product->name }}</h3>
                            <!-- /.product-details__content__name -->
                            <div class="product-details__content__price">Rs {{ $product->price }}</div>
                            <!-- /.product-details__content__price -->
                        </div><!-- /.product-details__content__top -->
                        <div class="product-details__content__rating">
                            <div class="product-details__content__rating__star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-details__content__rating__star -->
                            <div class="product-details__content__rating__count">2 Customer Reviews</div>
                            <!-- /.product-details__content__rating__count -->
                        </div><!-- /.product-details__content__rating -->
                        <div class="product-details__content__text">
                            <p>Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des mauris commodo
                                venenatis ligula commodo leez sed blandit convallis dignissim onec vel pellentesque
                                neque.</p>
                            <p>REF. 4231/406 <br>Available in store</p>
                        </div><!-- /.product-details__content__text -->
                        <div class="product-details__content__quantity">
                            <div class="product-details__content__quantity__text">Choose Quantity</div>
                            <!-- /.product-details__content__quantity__text -->
                            <div class="quantity-box">
                                <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                <input type="number" id="product-1" value="1" />
                                <button type="button" class="add"><i class="fa fa-plus"></i></button>
                            </div>
                        </div><!-- /.product-details__content__quantity -->

                        <div class="product-details__content__buttons">
                            <a href="cart.html" class="thm-btn cart-btn">Add to cart</a><!-- /.thm-btn -->
                            <a href="#" class="thm-btn wishlist-btn">add to wishlist</a>
                            <!-- /.thm-btn wishlist-btn -->
                        </div><!-- /.product-details__content__buttons -->
                        <div class="product-details__content__social">
                            <div class="product-details__content__social__text">Share with friends</div>
                            <!-- /.product-details__content__social__text -->
                            <a href="#" class="fab fa-facebook"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-pinterest-p"></a>
                        </div><!-- /.product-details__content__social -->
                    </div><!-- /.product-details__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.product-details -->

    <section class="product-content">
        <div class="container">
            <h2 class="product-content__title">Description</h2>
            <p>{!! $product->description !!}</p>
        </div><!-- /.container -->
    </section><!-- /.product-content -->

</x-home-layout>