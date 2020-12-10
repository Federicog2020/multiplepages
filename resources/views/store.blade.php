@extends('layouts.main')

@section('title', 'Multiple pages')

@section('content')
<div class="container-fluid">
	<div class="container-2">
		<div class="container-border">
			<div class="info-2">
				<div class="container-hours">
					<div class="row justify-content-center">
						<div class="col-md-12 text-center">
							<div class="info-title">
								Come with us
							</div>
							<div class="info-subtitle status">
								We're open
							</div>
						</div>
					</div>

					<ul class="list-hours mt-4">
						<li>Sunday <span>8:00 AM to 9:00 PM</span></li>
						<li>Monday <span>8:00 AM to 9:00 PM</span></li>
						<li>Tuesday <span>8:00 AM to 9:00 PM</span></li>
						<li>Wednesday <span>8:00 AM to 9:00 PM</span></li>
						<li>Thursday <span>8:00 AM to 9:00 PM</span></li>
						<li>Friday <span>8:00 AM to 9:00 PM</span></li>
						<li>Saturday <span>8:00 AM to 9:00 PM</span></li>
					</ul>

					<div class="row justify-content-center my-4">
						<div class="col-md-12 text-center mt-4">
							<div class="address">1342 Av. Park</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="container-store-image">
		<div class="row justify-content-center mx-4">
			<div class="col-md-8">
				<div class="container-img-store">
					<img class="img-fluid" src="images/cafe-843293_1920.jpg">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection