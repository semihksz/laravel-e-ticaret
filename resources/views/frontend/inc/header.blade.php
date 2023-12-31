<header class="site-navbar" role="banner">
    <div class="site-navbar-top">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                    <form action="" class="site-block-top-search">
                        <span class="icon icon-search2"></span>
                        <input type="text" class="form-control border-0" placeholder="Search">
                    </form>
                </div>

                <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                    <div class="site-logo">
                        <a href="{{ route('index') }}" class="js-logo-clone">{{ config('app.name') }}</a>
                    </div>
                </div>

                <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                    <div class="site-top-icons">
                        <ul>
                            <li><a href="#"><span class="icon icon-person"></span></a></li>
                            <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                            <li>
                                <a href="{{ route('shoppingcart') }}" class="site-cart">
                                    <span class="icon icon-shopping_cart"></span>
                                    <span class="count">2</span>
                                </a>
                            </li>
                            <li class="d-inline-block d-md-none ml-md-0"><a href="#"
                                    class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
            <ul class="site-menu js-clone-nav d-none d-md-block">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="has-children">
                    <a href=" # ">Category</a>
                    <ul class="dropdown">
                        @if (!empty($category) && count($category) > 0)
                            @foreach ($category as $categoryId => $categoryItem)
                                <li class="has-children">
                                    <a href={{ $categoryItem['slug'] }}>{{ $categoryItem['name'] }}</a>
                                    <ul class="dropdown">
                                        @foreach ($category as $altCategoryId => $altCategoryItem)
                                            @if ($altCategoryItem['cat_ust'] === $categoryId)
                                                <li><a
                                                        href={{ $altCategoryItem['slug'] }}>{{ $altCategoryItem['name'] }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        @endif





                    </ul>
                </li>
                <li><a href="{{ route('aboutus') }}">About</a></li>
                <li><a href="{{ route('product') }}">Product</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
