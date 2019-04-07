@extends('admin.layouts.app')

@section('content')

    <div class="contact-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a class="btn btn-default buttons-create" tabindex="0" aria-controls="dataTableBuilder"
                       href="{{ route("gallery.create") }}"><span><i class="fa fa-plus"></i> Add Image</span></a>
                </div>
                <div class="col-lg-12 grid mt-30">

                    @foreach($gallery as $gal)
                        <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat{{$gal->category_id}}">
                            <div class="gallery mb-30">
                                <div class="gallery-img">
                                    <img src="{{ asset('/uploads/'.$gal->image_url) }}" alt=""/>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['gallery.destroy', $gal->id]]) !!}
                                    {!! Form::submit('Delete') !!}
                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>

        </div>
    </div>


@endsection

