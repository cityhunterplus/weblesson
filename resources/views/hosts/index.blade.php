@extends('layouts.master')

@section('content')

<div class="panel panel-default">

	<div class="panel-heading">

		ホスト一覧

	</div>

	<div class="panel-body">

		<table class="table table-default">
			<thead>
				<tr>
					<th>ID</th>
					<th>ホスト名</th>
					<th>ドメイン名</th>
					<th>IP アドレス</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($hosts as $host)
				<tr>
					<td>{{ $host->id }}</td>
					<td>{{ $host->host_name }}</td>
					<td>{{ $host->domain_name }}</td>
					<td>{{ $host->ip_address }}</td>
					<td>
						{!! link_to_action('HostsController@show', '表示', $host->id, ['class' => 'btn btn-default btn-sm']) !!}
						{!! link_to_action('HostsController@edit', '編集', $host->id, ['class' => 'btn btn-info btn-sm']) !!}
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>

		{!! $hosts->render() !!}

	</div>

</div>

@endsection