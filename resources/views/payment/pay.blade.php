@extends('layouts.app')

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

@section('title')
    Home
@endsection


@section('contents')
    <!-- Main Content -->
    <div id="content">

        @include('components.navigation')

        <!-- Begin Page Content -->
        <div class="container-fluid">

       {{--      @include('components.topcard') --}}

        <div class="row">
           <div class="col-lg-12 margin-tb">
              <div class="pull-left">
                <h2>PAYMENT</h2>
              </div>
       </div>
   
        @if ($errors->any())
            <div class="alert alert-danger">
               <strong>Whoops!</strong> There were some problems with your input.<br><br>
               <ul>
                   @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                   @endforeach
               </ul>
            </div>
        @endif
   
{{--  <form action="{{ url('payments/pay') }}" method="POST">  --}}
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Machant:</strong>
                <input type="text" name="name_of_premises" class="form-control" value="{{ $users->name }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NAME OF PREMISES:</strong>
                <input type="text" name="name_of_premises" class="form-control" value="{{ $fumigations->name_of_premises }}" placeholder="name_of_premises">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ADDRESS OF PREMISES:</strong>
                <input type="text" name="address_of_premises" class="form-control" value="{{$fumigations->address_of_premises  }}" placeholder="address_of_premises">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PHONE NUMBER:</strong>
                <input type="text" name="phone_no" class="form-control" value="{{ $fumigations->phone_no }}" placeholder="phone_no">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DATE OF FUMIGATION:</strong>
                <input type="date" name="date_of_fumigation" class="form-control" value="{{$fumigations->date_of_fumigation  }}" placeholder="date_of_fumigation">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>VENDOR NAME:</strong>
                <input type="text" name="vendors_use" class="form-control" value="{{ $fumigations->vendors_use }}" placeholder="vendors_use">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CERTIFICATE NO:</strong>
                <input type="text" name="cert_no" class="form-control" value="{{ $fumigations->cert_no }}" placeholder="cert_no">
            </div>
        </div>
         {{--  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ISSUE DATE:</strong>
                <input type="date" name="issue_date" class="form-control" value="{{ $fumigations->issue_date }}" placeholder="issue_date" id="datepicker">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>EXPIRE DATE:</strong>
                <input type="date" name="expires_date" class="form-control" value="{{$fumigations->expires_date  }}" placeholder="expires_date" id="datepicker" >
            </div>
        </div>  --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Amount:</strong>
                <input type="number" name="Amount" id="Amount" placeholder="500000">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@endsection
 {{-- {!! $vendors->links() !!} --}}


@section('scripts')
    
@endsection




