@extends('Layout.layout')



@section('things')

    <div class="clearfix"></div>
    <!-- /banner_inner -->
    <div class="services-breadcrumb_w3ls_agileinfo">
        <div class="inner_breadcrumb_agileits_w3">

            <ul class="short">
                <li><a href="{{url('index')}}">Home</a><i>|</i></li>
                <li>Check Out</li>
            </ul>
        </div>
    </div>
    <!-- //banner_inner -->
    </div>

    <!-- //banner -->
    <!-- top Products -->
    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            <div class="privacy about">
                <h3>Chec<span>kout</span></h3>

                <div class="checkout-right">
                    <h4>Your shopping cart contains: <span>3 Products</span></h4>
                    <table class="timetable_sub">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Product</th>
                            <th>Quality</th>
                            <th>Product Name</th>

                            <th>Price</th>
                            <th>Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="rem1">
                            <td class="invert">1</td>
                            <td class="invert-image"><a href="{{url('single')}}"><img src="/images/s1.jpg" alt=" " class="img-responsive"></a></td>
                            <td class="invert">
                                <div class="quantity">
                                    <div class="quantity-select">
                                        <div class="entry value-minus">&nbsp;</div>
                                        <div class="entry value"><span>1</span></div>
                                        <div class="entry value-plus active">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td class="invert">Bella Toes</td>

                            <td class="invert">$675.00</td>
                            <td class="invert">
                                <div class="rem">
                                    <div class="close1"> </div>
                                </div>

                            </td>
                        </tr>
                        <tr class="rem2">
                            <td class="invert">2</td>
                            <td class="invert-image"><a href="{{url('single')}}"><img src="/images/s5.jpg" alt=" " class="img-responsive"></a></td>
                            <td class="invert">
                                <div class="quantity">
                                    <div class="quantity-select">
                                        <div class="entry value-minus">&nbsp;</div>
                                        <div class="entry value"><span>1</span></div>
                                        <div class="entry value-plus active">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td class="invert">Red Bellies</td>

                            <td class="invert">$325.00</td>
                            <td class="invert">
                                <div class="rem">
                                    <div class="close2"> </div>
                                </div>

                            </td>
                        </tr>
                        <tr class="rem3">
                            <td class="invert">3</td>
                            <td class="invert-image"><a href="{{url('single')}}"><img src="/images/s2.jpg" alt=" " class="img-responsive"></a></td>
                            <td class="invert">
                                <div class="quantity">
                                    <div class="quantity-select">
                                        <div class="entry value-minus">&nbsp;</div>
                                        <div class="entry value"><span>1</span></div>
                                        <div class="entry value-plus active">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td class="invert">Chikku Loafers</td>

                            <td class="invert">$405.00</td>
                            <td class="invert">
                                <div class="rem">
                                    <div class="close3"> </div>
                                </div>

                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="checkout-left">
                    <div class="col-md-4 checkout-left-basket">
                        <h4>Continue to basket</h4>
                        <ul>
                            <li>Product1 <i>-</i> <span>$675.00 </span></li>
                            <li>Product2 <i>-</i> <span>$325.00 </span></li>
                            <li>Product3 <i>-</i> <span>$405.00 </span></li>
                            <li>Total Service Charges <i>-</i> <span>$55.00</span></li>
                            <li>Total <i>-</i> <span>$1405.00</span></li>
                        </ul>
                    </div>
                    <div class="col-md-8 address_form">
                        <h4>Add a new Details</h4>
                        <form action="{{url('payment')}}" method="post" class="creditly-card-form agileinfo_form">
                            <section class="creditly-wrapper wrapper">
                                <div class="information-wrapper">
                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <label class="control-label">Full name: </label>
                                            <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                        </div>
                                        <div class="card_number_grids">
                                            <div class="card_number_grid_left">
                                                <div class="controls">
                                                    <label class="control-label">Mobile number:</label>
                                                    <input class="form-control" type="text" placeholder="Mobile number">
                                                </div>
                                            </div>
                                            <div class="card_number_grid_right">
                                                <div class="controls">
                                                    <label class="control-label">Landmark: </label>
                                                    <input class="form-control" type="text" placeholder="Landmark">
                                                </div>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Town/City: </label>
                                            <input class="form-control" type="text" placeholder="Town/City">
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Address type: </label>
                                            <select class="form-control option-w3ls">
                                                <option>Office</option>
                                                <option>Home</option>
                                                <option>Commercial</option>

                                            </select>
                                        </div>
                                    </div>
                                    <button class="submit check_out">Delivery to this Address</button>
                                </div>
                            </section>
                        </form>
                        <div class="checkout-right-basket">
                            <a href="{{url('payment')}}">Make a Payment </a>
                        </div>
                    </div>

                    <div class="clearfix"> </div>


                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //top products -->
        <div class="mid_slider_w3lsagile">
            <div class="col-md-3 mid_slider_text">
                <h5>Some More Shoes</h5>
            </div>
            <div class="col-md-9 mid_slider_info">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                    <div class="thumbnail"><img src="/images/g1.jpg" alt="Image" style="max-width:100%;"></div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                    <div class="thumbnail"><img src="/images/g2.jpg" alt="Image" style="max-width:100%;"></div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                    <div class="thumbnail"><img src="/images/g3.jpg" alt="Image" style="max-width:100%;"></div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                    <div class="thumbnail"><img src="/images/g4.jpg" alt="Image" style="max-width:100%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                    <div class="thumbnail"><img src="/images/g5.jpg" alt="Image" style="max-width:100%;"></div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                    <div class="thumbnail"><img src="/images/g6.jpg" alt="Image" style="max-width:100%;"></div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                    <div class="thumbnail"><img src="/images/g2.jpg" alt="Image" style="max-width:100%;"></div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                    <div class="thumbnail"><img src="/images/g1.jpg" alt="Image" style="max-width:100%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                    <div class="thumbnail"><img src="/images/g1.jpg" alt="Image" style="max-width:100%;"></div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                    <div class="thumbnail"><img src="/images/g2.jpg" alt="Image" style="max-width:100%;"></div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                    <div class="thumbnail"><img src="/images/g3.jpg" alt="Image" style="max-width:100%;"></div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                    <div class="thumbnail"><img src="/images/g4.jpg" alt="Image" style="max-width:100%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                    <div class="thumbnail"><img src="/images/g1.jpg" alt="Image" style="max-width:100%;"></div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                    <div class="thumbnail"><img src="/images/g2.jpg" alt="Image" style="max-width:100%;"></div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                    <div class="thumbnail"><img src="/images/g3.jpg" alt="Image" style="max-width:100%;"></div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                    <div class="thumbnail"><img src="/images/g4.jpg" alt="Image" style="max-width:100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="fa fa-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="fa fa-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!-- The Modal -->

                </div>
            </div>

            <div class="clearfix"> </div>
        </div>

    @stop
