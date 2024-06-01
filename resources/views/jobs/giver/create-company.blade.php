<x-base title="Create Company">
    <x-navbar />
     <div class="msg-alerts"></div>
	<div class="container">
		<div class="d-flex flex-column h-100 justify-content-center align-items-center">
			<div class="card p-5 bg-white shadow-sm shadow-lg-none border-0 rounded-4">
				<div>
					<h3 class="text-center fw-bold site-text-primary">CREATE YOUR COMPANY!</h3>
					<p class="text-center mb-3">Start your journey by creating a company</p>
				</div>
				<div class="w-500 step-container mb-3">
					<form id="create-company" class="w-100">
						<div class="mb-3 mt-5 step form-group w-100">
							<input type="text" name="company_name" class="form-control p-3 w-100" placeholder="Company Name" validate="name" />
							<label class="floating-label">Company Name</label>
							<p class="error-msg text-danger"></p>
						</div>
						<div class="mb-3 step form-group w-100">
							<input type="file" name="company_logo" id="logo-select" class="form-control p-3 w-100 position-relative" placeholder="Company Logo" accept="image/png, image/jpeg, imgage/jpg"/>
							<label class="floating-label">Company Logo</label>
							<p class="error-msg text-danger"></p>
							<div class="d-flex justify-content-end">
								<button class="border-0 rounded-pill submit-btn site-primary px-5 py-2 text-white">Done</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	@push('scripts')
        <script src="{{asset('assets/plugins/message-alert/dist/main.js')}}"></script>
    	<script src="{{asset('assets/js/step.js')}}"></script>
		<script defer>
			const step = new Step('#create-company', ['btn', 'login', 'p-3'], 'jobs/giver/{{Auth::id()}}/create-company', false);
		</script>
	@endpush
</x-base>