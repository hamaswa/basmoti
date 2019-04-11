@extends('admin.layouts.app')

@section('content')

    <div class="contact-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 contact-message-wrapper">


                    <div class="col-lg-12">
                        <h3>{{$message->fullname}}</h3>

                    </div>
                    <div class="col-lg-12">
                        <h3>  {{$message->email}} </h3>

                    </div>

                    <div class="col-lg-12">
                        <h3>  {{$message->subject}}</h3>

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
