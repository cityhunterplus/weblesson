@extends('layouts.master')

@section('content')

<div class="row">

	<div class="col-md-offset-3 col-md-6">

		<div class="row" style="margin-bottom: 20px">

			<div class="col-md-12">

				{!! Form::open([
					'action' => [
						'HostsController@destroy',
						$host->id
					]
				]) !!}

					<div class="btn-group" role="group">
						{!! link_to_action('HostsController@index', '<< 一覧へ', null, ['class' => 'btn btn-default']) !!}
						{!! Form::submit('選択したものを削除', ['class' => 'btn btn-danger']) !!}
					</div>

					{!! Form::hidden('_method', 'DELETE') !!}

				{!! Form::close() !!}

			</div>

		</div>

		<div class="panel panel-default">

			<div class="panel-heading">

				ホスト

			</div>

			<div class="panel-body form-horizontal">

				<div class="form-group">
					{!! Form::label('id', 'ID', ['class' => 'col-md-3 control-label']) !!}
					<div class="col-md-9">
						<p class="form-control-static">{{ $host->id }}</p>
					</div>
				</div>

				<div class="form-group">
					{!! Form::label('host_name', 'ホスト名', ['class' => 'col-md-3 control-label']) !!}
					<div class="col-md-9">
						<p class="form-control-static">{{ $host->host_name }}</p>
					</div>
				</div>

				<div class="form-group">
					{!! Form::label('domain_name', 'ドメイン名', ['class' => 'col-md-3 control-label']) !!}
					<div class="col-md-9">
						<p class="form-control-static">{{ $host->domain_name }}</p>
					</div>
				</div>

				<div class="form-group">
					{!! Form::label('ip_address', 'IP アドレス', ['class' => 'col-md-3 control-label']) !!}
					<div class="col-md-9">
						<p class="form-control-static">{{ $host->ip_address }}</p>
					</div>
				</div>

			</div>

		</div><!-- .panel end -->

		<div class="panel panel-default">

			<div class="panel-heading">

				ハードウェアインベントリ

			</div>

			<div class="panel-body form-horizontal">

				<div class="form-group">
					{!! Form::label('host_name', 'コンピューター名', ['class' => 'col-md-3 control-label']) !!}
					<div class="col-md-9">
						<p class="form-control-static">{{ $host->hardwareinventory->computer_name }}</p>
					</div>
				</div>

				<div class="form-group">
					{!! Form::label('host_name', 'ベンダー名', ['class' => 'col-md-3 control-label']) !!}
					<div class="col-md-9">
						<p class="form-control-static">{{ $host->hardwareinventory->vendor_name }}</p>
					</div>
				</div>

				{!! link_to_action('HardwareinventoriesController@show', '詳細', $host->hardwareinventory->id, ['class' => 'btn btn-default btn-sm']) !!}

			</div>

		</div><!-- .panel end -->

	</div><!-- .col end -->

</div><!-- .row end -->

@endsection