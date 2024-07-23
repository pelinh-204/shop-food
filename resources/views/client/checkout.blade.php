@extends('layout.main')
@section('main')

<main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Checkout<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="checkout">
	                <div class="container">
					<div class="cart-discount">
                                <form action="">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Coupon code">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary-2" type="submit" style="height:40px"><i class="icon-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
            			<form action="#">
		                	<div class="row">
		                		<div class="col-lg-5">
		                			<h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
		                				<div class="row">
		                					<div class="col-sm-12">
		                						<label>Name</label>
		                						<input type="text" class="form-control" required>
		                					</div>
		                				</div>
										<div class="row">
											<div class="col-sm-12">
		                						<label>Phone *</label>
		                						<input type="tel" class="form-control" required>
		                					</div>
										</div>
										<label>Email address *</label>
	        							<input type="email" class="form-control" required>

	            						<label>Street address *</label>
	            						<input type="text" class="form-control" placeholder="House number and Street name" required>

		                				<div class="row">
		                					<div class="col-sm-12">
		                						<label>Postcode</label>
		                						<input type="text" class="form-control" required>
		                					</div>
		                				</div>

	                					<label>Note</label>
	        							<textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
		                		</div><!-- End .col-lg-9 -->
		                		<aside class="col-lg-7">
		                			<div class="summary">
		                				<h3 class="summary-title">Your Order</h3>

		                				<table class="table table-summary">
		                					<thead>
		                						<tr>
		                							<th>Product</th>
													<th>Color</th>
													<th>Price</th>
													<th>Quantity</th>
		                							<th>Total</th>
		                						</tr>
		                					</thead>

		                					<tbody>
		                						@foreach ($cart as $value )
												<tr>
		                							<td><a href="#">{{$value->name}}</a></td>
													<td>{{$value->color}}</td>
													<td>{{$value->price}}</td>
													<td>{{$value->quantity}}</td>
													<td>{{number_format($value->total,0,',','.')}}VNĐ</td>
		                						</tr>
												@endforeach

		                						<tr class="summary-subtotal">
		                							<td colspan="4">Cart Total:</td>
		                							<td class="total-col">{{number_format($total,0,',','.')}}VNĐ</td>
		                						</tr>
		                						<tr>
		                							<td colspan="4">Shipping:</td>
		                							<td>Free shipping</td>
		                						</tr>
		                						<tr class="summary-total">
		                							<td colspan="4">Total:</td>
		                							<td>{{number_format($total,0,',','.')}}VNĐ</td>
		                						</tr>
		                					</tbody>
		                				</table>

		                				<div class="accordion-summary" id="accordion-payment">
										    <div class="card">
										        <div class="card-header" id="heading-1">
										            <h2 class="card-title">
										                <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
										                    Direct bank transfer
										                </a>
										            </h2>
										        </div>
										        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
										            <div class="card-body">
										                Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
										            </div>
										        </div>
										    </div>

										  
										</div>

		                				<button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
		                					<span class="btn-text">Place Order</span>
		                					<span class="btn-hover-text">Proceed to Checkout</span>
		                				</button>
		                			</div><!-- End .summary -->
		                		</aside><!-- End .col-lg-3 -->
		                	</div><!-- End .row -->
            			</form>
	                </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->
        </main>
@endsection