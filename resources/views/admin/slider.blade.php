@extends('layouts.app')

@section('content')

    <div class="contact-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-message-wrapper">
                        <h4 class="contact-title mb-25">Edit Slider</h4>
                        <div class="contact-message">
                            {!! Form::model($slider, ['route' => ['slider.update', $slider->id], 'method' => 'patch', 'files'=>'ture']) !!}
                            {{ csrf_field() }}
                            <div class="row">
                                    <div class="col-lg-12">
                                        <div class="contact-form-style mb-20">
                                            <textarea name="description" id="description" placeholder="Description">
                                                {{ $slider->description }}
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="contact-form-style mb-20">
                                            <h6>https://www.youtube.com/watch?v="343aWmpsgT4". you need to enter <b>343aWmpsgT4</b> into input box </h6>
                                            <input class="form-control" name="video" placeholder="Youtube Video" value="{{ $slider->video }}" type="text">
                                        </div>
                                    </div>
                                <div class="col-lg-12">

                                        <h6>Background Image. 1920 X 1090</h6>

                                        <input class="form-control" name="image_url" placeholder="Background Image" type="file" />
                                </div>
                                    <div class="col-lg-12">
                                        <div class="contact-form-style">
                                            <button class="submit btn-style" type="submit">Update Slider</button>
                                        </div>
                                    </div>
                                </div>
                            {{ Form::close() }}
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

