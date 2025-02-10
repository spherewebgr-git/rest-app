
<!-- FEATUREED DISHES SECTION -->
<section
    class="float-left w-100 position-relative featured-dishes-con padding-top padding-bottom main-box horizonal-listing">
    <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
        <div class="heading-title-con text-center">
            <span class="d-block special-text green-text playfair-font font-weight-light">Resty's Menu</span>
            <h2 class="mb-0">Delicious Dishes</h2>
            <!-- heading title con -->
        </div>
        <div class="tabs-box tabs-options">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <ul class="nav nav-tabs justify-content-center align-items-center d-flex border-bottom-0">
                        <li><a class="active" data-toggle="tab" href="#appetisers">Appetisers</a></li>
                        <li><a data-toggle="tab" href="#lunch">Lunch</a></li>
                        <li><a data-toggle="tab" href="#dinner">Dinner</a></li>
                        <li><a data-toggle="tab" href="#desserts">Desserts</a></li>
                        <li><a data-toggle="tab" href="#fastfood">Fast food</a></li>
                        <li><a data-toggle="tab" href="#drinks">Drinks</a></li>
                        <li><a data-toggle="tab" href="#soups">Soups</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="appetisers" class="tab-pane fade in active show">
                            <div class="row">
                                @foreach($menuitems as $item)
                                    <div class="feature-dish-box position-relative w-100 d-flex align-items-center col-lg-6 col-md-6">
                                        <figure><img src="{{$item->menuItemImage ?? asset('assets/website/images/food-dish-img4.jpg')}}"
                                                    style="width:242px;height:248px" alt="image"></figure>
                                        <div class="dish-content">
                                            <h4>{{$item->menuItemName}} <span
                                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">${{$item->menuItemPrice}}</span>
                                            </h4>
                                            <p>{{$item->menuItemDescription}}</p>
                                            <img src="{{asset('assets/website/images/stars.png')}}" alt="image"
                                                 class="border-radius0">

                                            <!-- dish content -->
                                        </div>

                                        <!-- feature dish box -->
                                    </div>
                                @endforeach

                                    <!-- col -->
                                </div>


                                <!-- row -->
                            </div>
                            <!-- breakfast -->
                        </div>
                        <div id="lunch" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                        <figure><img src="{{asset('assets/website/images/food-dish-img5.jpg')}}"
                                                     alt="image"></figure>
                                        <div class="dish-content">
                                            <h4>Buna Kirchi <span
                                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$40</span>
                                            </h4>
                                            <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                exlicao.</p>
                                            <img src="{{asset('assets/website/images/stars.png')}}" alt="image"
                                                 class="border-radius0">
                                            <!-- dish content -->
                                        </div>

                                        <!-- feature dish box -->
                                    </div>
                                    <!-- col -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                        <figure><img src="{{asset('assets/website/images/food-dish-img9.jpg')}}"
                                                     alt="image"></figure>
                                        <div class="dish-content">
                                            <h4>Chiken Toast <span
                                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$70</span>
                                            </h4>
                                            <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                exlicao.</p>
                                            <img src="{{asset('assets/website/images/stars.png')}}" alt="image"
                                                 class="border-radius0">
                                            <!-- dish content -->
                                        </div>

                                        <!-- feature dish box -->
                                    </div>
                                    <!-- col -->
                                </div>

                                <!-- row -->
                            </div>
                            <!-- lunch -->
                        </div>
                        <div id="dinner" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                        <figure><img src="{{asset('assets/website/images/food-dish-img6.jpg')}}"
                                                     alt="image"></figure>
                                        <div class="dish-content">
                                            <h4>Yummy Noodles <span
                                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$60</span>
                                            </h4>
                                            <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                exlicao.</p>
                                            <img src="{{asset('assets/website/images/stars.png')}}" alt="image"
                                                 class="border-radius0">
                                            <!-- dish content -->
                                        </div>

                                        <!-- feature dish box -->
                                    </div>
                                    <!-- col -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                        <figure><img src="{{asset('assets/website/images/food-dish-img8.jpg')}}"
                                                     alt="image"></figure>
                                        <div class="dish-content">
                                            <h4>Sweet Sandwich <span
                                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$50</span>
                                            </h4>
                                            <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                exlicao.</p>
                                            <img src="{{asset('assets/website/images/stars.png')}}" alt="image"
                                                 class="border-radius0">
                                            <!-- dish content -->
                                        </div>

                                        <!-- feature dish box -->
                                    </div>
                                    <!-- col -->
                                </div>

                                <!-- row -->
                            </div>
                            <!-- dinner -->
                        </div>
                        <div id="desserts" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                        <figure><img src="{{asset('assets/website/images/food-dish-img7.jpg')}}"
                                                     alt="image"></figure>
                                        <div class="dish-content">
                                            <h4>Chochin Cake <span
                                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$30</span>
                                            </h4>
                                            <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                exlicao.</p>
                                            <img src="{{asset('assets/website/images/stars.png')}}" alt="image"
                                                 class="border-radius0">
                                            <!-- dish content -->
                                        </div>

                                        <!-- feature dish box -->
                                    </div>

                                    <!-- col -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                        <figure><img src="{{asset('assets/website/images/food-dish-img8.jpg')}}"
                                                     alt="image"></figure>
                                        <div class="dish-content">
                                            <h4>Sweet Sandwich <span
                                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$50</span>
                                            </h4>
                                            <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                exlicao.</p>
                                            <img src="{{asset('assets/website/images/stars.png')}}" alt="image"
                                                 class="border-radius0">
                                            <!-- dish content -->
                                        </div>

                                        <!-- feature dish box -->
                                    </div>
                                    <!-- col -->
                                </div>

                                <!-- row -->
                            </div>
                            <!-- dessert -->
                        </div>
                        <div id="fastfood" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                        <figure><img src="{{asset('assets/website/images/food-dish-img8.jpg')}}"
                                                     alt="image"></figure>
                                        <div class="dish-content">
                                            <h4>Sweet Sandwich <span
                                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$50</span>
                                            </h4>
                                            <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                exlicao.</p>
                                            <img src="{{asset('assets/website/images/stars.png')}}" alt="image"
                                                 class="border-radius0">
                                            <!-- dish content -->
                                        </div>

                                        <!-- feature dish box -->
                                    </div>
                                    <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                        <figure><img src="{{asset('assets/website/images/food-dish-img9.jpg')}}"
                                                     alt="image"></figure>
                                        <div class="dish-content">
                                            <h4>Chiken Toast <span
                                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$70</span>
                                            </h4>
                                            <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                exlicao.</p>
                                            <img src="{{asset('assets/website/images/stars.png')}}" alt="image"
                                                 class="border-radius0">
                                            <!-- dish content -->
                                        </div>

                                        <!-- feature dish box -->
                                    </div>
                                    <!-- col -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                        <figure><img src="{{asset('assets/website/images/food-dish-img5.jpg')}}"
                                                     alt="image"></figure>
                                        <div class="dish-content">
                                            <h4>Buna Kirchi <span
                                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$40</span>
                                            </h4>
                                            <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                exlicao.</p>
                                            <img src="{{asset('assets/website/images/stars.png')}}" alt="image"
                                                 class="border-radius0">
                                            <!-- dish content -->
                                        </div>

                                        <!-- feature dish box -->
                                    </div>
                                    <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                        <figure><img src="{{asset('assets/website/images/food-dish-img6.jpg')}}"
                                                     alt="image"></figure>
                                        <div class="dish-content">
                                            <h4>Yummy Noodles <span
                                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$60</span>
                                            </h4>
                                            <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                exlicao.</p>
                                            <img src="{{asset('assets/website/images/stars.png')}}" alt="image"
                                                 class="border-radius0">
                                            <!-- dish content -->
                                        </div>

                                        <!-- feature dish box -->
                                    </div>
                                    <!-- col -->
                                </div>

                                <!-- row -->
                            </div>
                            <!-- fast food -->
                        </div>
                        <div id="drinks" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                        <figure><img src="{{asset('assets/website/images/food-dish-img6.jpg')}}"
                                                     alt="image"></figure>
                                        <div class="dish-content">
                                            <h4>Yummy Noodles <span
                                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$60</span>
                                            </h4>
                                            <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                exlicao.</p>
                                            <img src="{{asset('assets/website/images/stars.png')}}" alt="image"
                                                 class="border-radius0">
                                            <!-- dish content -->
                                        </div>

                                        <!-- feature dish box -->
                                    </div>
                                    <!-- col -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                        <figure><img src="{{asset('assets/website/images/food-dish-img5.jpg')}}"
                                                     alt="image"></figure>
                                        <div class="dish-content">
                                            <h4>Buna Kirchi <span
                                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$40</span>
                                            </h4>
                                            <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                exlicao.</p>
                                            <img src="{{asset('assets/website/images/stars.png')}}" alt="image"
                                                 class="border-radius0">
                                            <!-- dish content -->
                                        </div>

                                        <!-- feature dish box -->
                                    </div>
                                    <!-- col -->
                                </div>

                                <!-- row -->
                            </div>
                            <!-- drinks -->
                        </div>
                        <div id="soups" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                        <figure><img src="{{asset('assets/website/images/food-dish-img7.jpg')}}"
                                                     alt="image"></figure>
                                        <div class="dish-content">
                                            <h4>Chochin Cake <span
                                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$30</span>
                                            </h4>
                                            <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                exlicao.</p>
                                            <img src="{{asset('assets/website/images/stars.png')}}" alt="image"
                                                 class="border-radius0">
                                            <!-- dish content -->
                                        </div>

                                        <!-- feature dish box -->
                                    </div>
                                    <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                        <figure><img src="{{asset('assets/website/images/food-dish-img5.jpg')}}"
                                                     alt="image"></figure>
                                        <div class="dish-content">
                                            <h4>Buna Kirchi <span
                                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$40</span>
                                            </h4>
                                            <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                exlicao.</p>
                                            <img src="{{asset('assets/website/images/stars.png')}}" alt="image"
                                                 class="border-radius0">
                                            <!-- dish content -->
                                        </div>

                                        <!-- feature dish box -->
                                    </div>
                                    <!-- col -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                        <figure><img src="{{asset('assets/website/images/food-dish-img8.jpg')}}"
                                                     alt="image"></figure>
                                        <div class="dish-content">
                                            <h4>Sweet Sandwich <span
                                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$50</span>
                                            </h4>
                                            <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                exlicao.</p>
                                            <img src="{{asset('assets/website/images/stars.png')}}" alt="image"
                                                 class="border-radius0">
                                            <!-- dish content -->
                                        </div>

                                        <!-- feature dish box -->
                                    </div>
                                    <div class="feature-dish-box position-relative w-100 d-flex align-items-center">
                                        <figure><img src="{{asset('assets/website/images/food-dish-img9.jpg')}}"
                                                     alt="image"></figure>
                                        <div class="dish-content">
                                            <h4>Chiken Toast <span
                                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$70</span>
                                            </h4>
                                            <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt
                                                exlicao.</p>
                                            <img src="{{asset('assets/website/images/stars.png')}}" alt="image"
                                                 class="border-radius0">
                                            <!-- dish content -->
                                        </div>

                                        <!-- feature dish box -->
                                    </div>
                                    <!-- col -->
                                </div>

                                <!-- row -->
                            </div>
                            <!-- soups -->
                        </div>

                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <!-- tabs box -->
        </div>
        <!-- container -->
    </div>
    <!-- featured dishes con -->
</section>
