@extends('layouts.app')

@section('contents')
    <!-- Main Content -->
    <div id="content">

        @include('components.navigation')
        <center>
            <div>
                <h1 style="color: green">
                    RECEIPT
                </h1>
                {{--  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NAME OF PREMISES:</strong>
                        <input type="text" name="name_of_premises" class="form-control" value="{{ $subscription->name_of_premises }}" placeholder="name_of_premises">
                    </div>
                </div>
            </div>  --}}
        </center>
    {{--  @csrf  --}}

        {{$subscription->user_id}}
        {{$subscription->amount}}
        {{$subscription->expires_date}}
        {{--  {{$fumigations->expires_date  }}  --}}
@endsection