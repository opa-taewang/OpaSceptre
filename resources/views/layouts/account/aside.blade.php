<aside class="sidebar col-lg-3">
						<div class="widget widget-dashboard">
							<h3 class="widget-title">My Account</h3>

							<ul class="list">
								<li class="{{'account/dashboard' == request()->path() ? 'active' : ''}}"><a href="{{route('account.dashboard')}}">Account Dashboard</a></li>
								<li class="{{'account/update' == request()->path() ? 'active' : ''}}"><a href="{{route('account.update')}}">Update Account</a></li>
								<li class="{{'account/address' == request()->path() ? 'active' : ''}}"><a href="{{route('account.address')}}">Address Book</a></li>
								<li class="{{'account/order' == request()->path() ? 'active' : ''}}"><a href="{{route('account.order')}}">My Orders</a></li>
								<li><a href="#">Billing Agreements</a></li>
								<li><a href="#">My Product Reviews</a></li>
								{{-- <li><a href="#">My Wishlist</a></li> --}}
								{{-- <li><a href="#">Newsletter Subscriptions</a></li> --}}
							</ul>
						</div><!-- End .widget -->
					</aside><!-- End .col-lg-3 -->
