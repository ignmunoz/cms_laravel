@extends('layouts.manage')

@section('content')
	<div class="flex-container">
		<div class="columns m-t-10">
			<div class="column">
				<h1 class="title">Manage Users</h1>
			</div>
			<div class="column"><a href="{{route('users.create')}}" class="button is-primary"><i class="fa fa-user-add m-r-10"></i> Create New User</a></div>
		</div>
		<hr>
		<div class="card">
			<div class="card-content">
				<table class="table is-narrow">
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Date Created</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
							<tr>
								<td>{{$user->id}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->created_at->toFormattedDateString()}}</td>
								<td><a class="button is-outlined" href="{{route('users.edit', $user->id)}}">Edit</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div> <!-- .end of .card -->
		{{$users->links()}}
	</div>
@endsection