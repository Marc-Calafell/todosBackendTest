@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">

					<div class="box-body">
						<table class="table table-bordered">
							<thead>
							<tr>
								<th style="width: 10px">#</th>
								<th>Name</th>
								<th>Priority</th>
								<th>Done</th>

							</tr>
							</thead>
							<tbody>


							@foreach($tasks as $task)
							<tr v-for="(todo, index) in filteredTodos">
								<td>{{$task-> name}}</td>
								<td>{{$task-> priority}}</td>
								<td>{{$task-> done}}</td>
							</tr>
							@endforeach

							</tbody>

						</table>
					</div>




				</div>
			</div>
		</div>
	</div>
@endsection
