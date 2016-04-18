@extends('master')
@section('content')
    <div id="main-container-home" class="container">
        <div class="row">
            <!-- Sidebar Starts -->
            <div class="col-md-3">
                <!-- Categories Links Starts -->
                <h3 class="side-heading">Categories</h3>
                <div class="list-group categories">
                    <?php $i = 0; ?>
                    @foreach($categories as $category)
                        <a href="/categories/" class="list-group-item">
                            <i class="fa fa-chevron-right"></i>
                            {{trans('categories.categories')[$i++]->name}}
                        </a>
                    @endforeach
                </div>
                <!-- Categories Links Ends -->
                <!-- Special Products Starts -->
                <h3 class="side-heading">Suppliers</h3>
                <ul class="side-products-list">
                    <!-- Special Product #1 Starts -->
                    <li class="clearfix">
                        <img src="images/product-images/spl-product-img1.jpg" alt="Special product" class="img-responsive" />
                        <h5><a href="#">Olympus Digital Camera</a></h5>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                    </li>
                    <!-- Special Product #1 Ends -->
                    <!-- Special Product #2 Starts -->
                    <li class="clearfix">
                        <img src="images/product-images/spl-product-img2.jpg" alt="Special product" class="img-responsive" />
                        <h5><a href="#">Olympus Digital Camera</a></h5>
                        <div class="price">
                            <span class="price-new">$599.50</span>
                        </div>
                    </li>
                    <!-- Special Product #2 Ends -->
                    <!-- Special Product #3 Starts -->
                    <li class="clearfix">
                        <img src="images/product-images/spl-product-img3.jpg" alt="Special product" class="img-responsive" />
                        <h5><a href="#">Olympus Digital Camera</a></h5>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                    </li>
                    <!-- Special Product #3 Ends -->
                    <!-- Special Product #4 Starts -->
                    <li class="clearfix">
                        <img src="images/product-images/spl-product-img1.jpg" alt="Special product" class="img-responsive" />
                        <h5><a href="#">Olympus Digital Camera</a></h5>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                        </div>
                    </li>
                    <!-- Special Product #4 Ends -->
                    <!-- Special Product #5 Starts -->
                    <li class="clearfix">
                        <img src="images/product-images/spl-product-img2.jpg" alt="Special product" class="img-responsive" />
                        <h5><a href="#">Olympus Digital Camera</a></h5>
                        <div class="price">
                            <span class="price-new">$599.50</span>
                        </div>
                    </li>
                    <!-- Special Product #5 Ends -->
                </ul>
                <!-- Special Products Ends -->
            </div>
            <!-- Sidebar Ends -->
            @yield('primary-content')
        </div>
    </div>
@endsection