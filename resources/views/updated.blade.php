@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('success') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h3>{{ __(' Your data is updated') }} </h3>

                   <h4> <a href="/admin/users/{user}/show">Back to users</a> </h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
