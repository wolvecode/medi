@extends('layout.master')

@section('content')

<div class="container contact_container">
	<div class="row">
		<div class="col">
			<!-- Breadcrumbs -->

			<div class="breadcrumbs d-flex flex-row align-items-center">
				<ul>
					<li><a href="{{ route('index') }}">Home</a></li>
					<li class="active"><a href="{{ route('contact') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Find Pharmacy</a></li>
				</ul>
			</div>
		</div>
	</div>
		<!-- Map Container -->

		<div class="row">
			<div class="col">
				<div id="google_map">
					<div class="map_container">
						<div id="map"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Contact Us -->

		<div class="row">

			<div class="col-lg-6 contact_col">
				<div class="contact_contents">
					<h1>Find nearby pharmacy now!</h1>
					<p>
						All you have to do is to on your location and click the find button to ger nearby pharmacy around you. with one click
						you will locate pharmacy around you with the available product.
					</p>
					<div>
						<a href="/pages/find/pharmacy" type="submit" class="con_red_button message_submit_btn trans_300" >Find</a>
					</div>
					<!-- <div>
						<p>(800) 686-6688</p>
						<p>mail@gmail.com</p>
					</div>
					<div>
						<p>24 hours support</p>
					</div>
					<div>
						<p>Open hours: 8.00-18.00 Sat-Thu</p>
						<p>Friday: Closed</p>
					</div> -->
				</div>

				<!-- Follow Us -->

				<div class="follow_us_contents">
					<h1>Follow Us</h1>
					<ul class="social d-flex flex-row">
						<li><a href="#" style="background-color: #3a61c9"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" style="background-color: #41a1f6"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" style="background-color: #2ecc71"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
						<li><a href="#" style="background-color: #8f6247"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>

			</div>

			<div class="col-lg-6 get_in_touch_col">
				<div class="get_in_touch_contents">
					<h1>Get your pharmacy registered!</h1>
					<p>
						You can fill this form to get Pharmacy pre-registered with us. Note our team is going to reach out to you on your final Registration process
					</p>
					<form action="{{ route('pharmacy.add') }}" method="post" enctype="multipart/form-data">
                        @csrf
						<div>
							<input id="input_name" class="form_input input_name input_ph" type="text" name="name" placeholder="Name" required="required" data-error="Name is required.">
							<input class="form_input input_email input_ph" type="text" name="address" placeholder="Phamarcy address" required="required" data-error="Valid email is required.">
							<input id="input_email" class="form_input input_email input_ph" type="email" name="email" placeholder="Email" required="required" data-error="Valid email is required.">
							<input  class="form_input input_website input_ph" type="text" name="website" placeholder="Telephone" required="required" data-error="Name is required.">
							<textarea id="input_message" class="input_ph input_message" name="description"  placeholder="Reason we should accept your pharmacy" rows="3" required data-error="Please, write us a message."></textarea>
						</div>
						<div>
							<button type="submit" class="con_red_button message_submit_btn trans_300" value="Submit">Submit Appication</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

@endsection
