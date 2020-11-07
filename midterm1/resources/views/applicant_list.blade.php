@extends("home")


@section("content")

	<div class="container mt-5">

		<table class="table table-border table-hover table-striped">
			<tr>
				<td>id</td>
				<td>name</td>
				<td>surname</td>
				<td>position</td>
				<td>phone</td>
				<td>status</td>
				<td></td>
			</tr>

			@foreach($applicants as $applicant)

			<tr>
				<td>{{ $applicant->id }}</td>
				<td>{{ $applicant->name }}</td>
				<td>{{ $applicant->surname }}</td>
				<td>{{ $applicant->position }}</td>
				<td>{{ $applicant->phone }}</td>
				<td>
					@if($applicant->is_hired)
						HIRED
					@else
						<a href="/hire/{{ $applicant->id }}">Hire</a>
					@endif
				</td>
				<td>
					<a href="/edit/{{ $applicant->id }}">Edit</a>
				</td>
			</tr>

			@endforeach

		</table>

	</div>


@endsection
