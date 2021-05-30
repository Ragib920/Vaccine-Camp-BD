@extends('layout.app')
@section('title','Update Category')


@section('content')
<section class="right-panel">

    <div class="container">
        <p>Health Inspector / View Notice</p> <hr>

        <div class="notice row">
            <div class="col-md-2"></div>
            <div class="col-md-8 shadow">
                <div class="card border-info mb-3">
                    <div class="card-header">
                        Notice
                    </div>
                    <div class="card-body text-dark">
                        <h5 class="card-title">{{ $notice->notice_title }}</h5>
                        <p class="card-text pt-3"> {{ $notice->notice_body }}</p>
                       Author <br> Directorate General of Health Services(DGHS) <br>Mohakhali, Dhaka-1212
                       Bangladesh <br>{{ $notice->created_at }}

                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

</section>
@endsection
