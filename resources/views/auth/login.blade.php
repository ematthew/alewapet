@extends('layouts.app')

@section('contents')

<div class="card mb-3">
    <center>

        <img src="{{ asset('img/logo.jpeg') }}" width="100px" height="auto" alt="...">
    
    </center>
  <div class="container">
    <div style="height: 50px;"></div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#verifyCertificateModal">
                                    Verify Certificate
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="verifyCertificateModal" tabindex="-1" role="dialog" aria-labelledby="verifyCertificateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verifyCertificateModalLabel">Verify Certificate</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="verifyCertificateForm">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="certificateSearchBy">Search By</label>
                            <select class="form-control" id="certificateSearchBy" name="search_by" required>
                                <option value="cert_no">Certificate No</option>
                                <option value="name_of_premises">Name of Premises</option>
                            </select>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="certificateSearchKeywords">Search</label>
                            <input type="text" class="form-control" id="certificateSearchKeywords" name="search_keywords" placeholder="Enter certificate no or name of premises" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Search
                    </button>
                </form>

                <div id="certificateSearchMessage" class="alert mt-3 d-none"></div>

                <div class="table-responsive mt-3 d-none" id="certificateSearchResultsWrapper">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th>Name of Premises</th>
                                <th>Address of Premises</th>
                                <th>Phone No</th>
                                <th>Cert No</th>
                                <th>Issue Date</th>
                                <th>Expires Date</th>
                            </tr>
                        </thead>
                        <tbody id="certificateSearchResults"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
  

@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function () {
    $('#verifyCertificateForm').on('submit', function (event) {
        event.preventDefault();

        var $form = $(this);
        var $message = $('#certificateSearchMessage');
        var $resultsWrapper = $('#certificateSearchResultsWrapper');
        var $results = $('#certificateSearchResults');
        var $button = $form.find('button[type="submit"]');

        $message.addClass('d-none').removeClass('alert-success alert-danger alert-info').text('');
        $resultsWrapper.addClass('d-none');
        $results.html('');
        $button.prop('disabled', true).text('Searching...');

        $.ajax({
            url: "{{ route('verify-certificate') }}",
            method: 'GET',
            data: $form.serialize(),
            success: function (response) {
                var records = response.data || [];

                if (!records.length) {
                    $message.removeClass('d-none').addClass('alert-info').text('No certificate record found.');
                    return;
                }

                records.forEach(function (record) {
                    $results.append(
                        '<tr>' +
                            '<td>' + escapeHtml(record.name_of_premises) + '</td>' +
                            '<td>' + escapeHtml(record.address_of_premises) + '</td>' +
                            '<td>' + escapeHtml(record.phone_no) + '</td>' +
                            '<td>' + escapeHtml(record.cert_no) + '</td>' +
                            '<td>' + escapeHtml(record.issue_date) + '</td>' +
                            '<td>' + escapeHtml(record.expires_date) + '</td>' +
                        '</tr>'
                    );
                });

                $resultsWrapper.removeClass('d-none');
            },
            error: function () {
                $message.removeClass('d-none').addClass('alert-danger').text('Unable to verify certificate. Please check your search value and try again.');
            },
            complete: function () {
                $button.prop('disabled', false).text('Search');
            }
        });
    });

    function escapeHtml(value) {
        return $('<div>').text(value || '').html();
    }
});
</script>
@endsection


