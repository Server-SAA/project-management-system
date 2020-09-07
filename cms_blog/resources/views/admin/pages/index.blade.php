@extends("layouts.admin")

@section("Admin-Content")
    <div class="col-lg-12">
        <h1 class="page-header">
            {{ __('Blank Page') }}
            <small>{{ __('Subheading') }}</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="/admin">{{ __('Dashboard') }}</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> {{ __('Blank Page') }}
            </li>
        </ol>
    </div>
@endsection
