@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('CV Maker') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form>
                        <div class="row form-group">
                            <div class="col col-sm-4 col-md-3 col-lg-3">
                                <label >Name</label>
                            </div>
                            <div class="col col-sm-8 col-md-9 col-lg-9">
                                <input class="form-control" type="text" name="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
