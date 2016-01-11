@extends('layouts.master')

@section('content')

<div class="row">

	<div class="col-md-offset-3 col-md-6">

		<div class="row" style="margin-bottom: 20px">

			<div class="col-md-12">

				{!! link_to_action('HostsController@index', '<< 一覧へ', null, ['class' => 'btn btn-default']) !!}

			</div>

		</div>

		<div class="panel panel-default">

			<div class="panel-heading">

				ホスト

			</div>

			<div class="panel-body">

				{!!
					Form::model(
						$host,
						[
							'action' => ['HostsController@update', $host->id],
							'class' => 'form-horizontal',
						]
					)
				!!}

					<div class="form-group">
						{!! Form::label('id', 'ID', ['class' => 'col-md-3 control-label']) !!}
						<div class="col-md-9">
							<p class="form-control-static">{{ $host->id }}</p>
						</div>
					</div>

					<div class="form-group">
						{!! Form::label('host_name', 'ホスト名', ['class' => 'col-md-3 control-label']) !!}
						<div class="col-md-9">
							{!! Form::text('host_name', $host->host_name, ['class' => 'form-control']) !!}
						</div>
					</div>

					<div class="form-group">
						{!! Form::label('domain_name', 'ドメイン名', ['class' => 'col-md-3 control-label']) !!}
						<div class="col-md-9">
							{!! Form::text('domain_name', $host->domain_name, ['class' => 'form-control']) !!}
						</div>
					</div>

					<div class="form-group">
						{!! Form::label('ip_address', 'IP アドレス', ['class' => 'col-md-3 control-label']) !!}
						<div class="col-md-9">
							{!! Form::text('ip_address', $host->ip_address, ['class' => 'form-control']) !!}
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-6">
							{!! Form::submit('保存', ['class' => 'btn btn-primary']) !!}
							{!! link_to_action('HostsController@index', 'キャンセル', [], ['class' => 'btn btn-default']) !!}
						</div>
					</div>

				{!! Form::close() !!}

			</div>

		</div><!-- .panel end -->

	</div><!-- .col end -->

</div><!-- .row end -->

@endsection