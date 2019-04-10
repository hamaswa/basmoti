@extends('admin.layouts.app')

@section('content')

    <div class="contact-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 contact-message-wrapper">
                <div class="col-lg-12">
                  <h5>  {{$message->email}} </h5>

                </div>

                <div class="col-lg-12">
                    <h5>{{$message->fullname}}</h5>

                </div>

                <div class="col-lg-12">
                    <h4>  {{$message->subject}}</h4>

                </div>

                <div class="col-lg-12"><p>
                    <h5>{{$message->message}} </h5>
                    </p>

                </div>
                </div>
            </div>

        </div>
    </div>


@endsection
