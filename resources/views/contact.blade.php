@extends('layouts.main')

@section('title', 'Multiple pages')

@section('content')
<div class="container-fluid">
	<div class="container-2">
		<div class="container-border">
			<div class="info-contact">
				<div class="container mt-4">
					<div class="row justify-content-center">
						<div class="col-md-12 text-center">
							<div class="info-title">Contact</div>
							<div class="info-subtitle text-muted">Leave us your message</div>
						</div>
					</div>

					<div class="row justify-content-center mt-5">
						<div class="col-12">
							<form id="contactForm" name="sentMessage" novalidate="novalidate">
								<div class="row">
									<div class="col-md-12 my-auto">
										<div class="row justify-content-center">
											<div class="col-md-6">
												<div class="form-group">
													<!--<input type="text" name="name" class="form-control form-control-sm" placeholder="Su nombre*">-->
													<input class="form-control form-control-sm" id="name" name="name" type="text" required="required" placeholder="Your name *" data-validation-required-message="fill in your name" />
		                                			<div class="help-block text-danger display-msg" id="error-name"></div>
												</div>
												<div class="form-group">
													<input type="email" name="email" id="email" class="form-control form-control-sm" required="required" placeholder="Your email *" data-validation-required-message="fill in your email" />
													<p class="help-block text-danger" id="error-email"></p>
												</div>
												<div class="form-group">
													<input type="text" name="telefono" id="phone" class="form-control form-control-sm" required="required" placeholder="Your phone *" data-validation-required-message="fill in your phone" />
													<p class="help-block text-danger" id="error-phone"></p>
												</div>
											</div>
											<div class="col-md-6 my-auto">
												<div class="form-group">
													<textarea rows="5" name="msg" id="message" class="form-control form-control-sm" placeholder="Your message *" required="required" data-validation-required-message="fill in your message"></textarea>
													<p class="help-block text-danger" id="error-message"></p>
												</div>
											</div>	
										</div>
										<div class="row justify-content-center">
											<div class="col-md-12 text-center">
												<button id="btn-msg" class="btn btn-primary">Enviar</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection