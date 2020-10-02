@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Dashboard</div>

				<div class="card-body">
					@auth
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
							You are logged in!
						</div>
					@endauth
					<p>does this work?</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
