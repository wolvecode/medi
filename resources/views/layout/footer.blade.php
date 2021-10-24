@include ('partials.newsletter')

<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
							<li><a href="{{ route('contact') }}"></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
							<!-- <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li> -->
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr align-content-center">©2021 All Rights Reserverd. Design Ojo Jeremiah Oluwasegun <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">17/47CS/722</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

@include('partials.script')

</body>

</html>
