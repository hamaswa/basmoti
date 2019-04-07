@extends('admin.layouts.app')

@section('content')

    <div class="contact-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-message-wrapper">
                        <h4 class="contact-title mb-25">Edit Slider</h4>
                        <div class="contact-message">
                            {!! Form::model($about, ['route' => ['about.update', $about->id], 'method' => 'patch',
                             'files'=>'ture']) !!}
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-12 mb-20">
                                    <input class="form-control" name="title1" value="{{ $about->title1 }}"
                                           placeholder="Background Image" type="text"/>
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <input class="form-control" name="title2" value="{{ $about->title2 }}"
                                           placeholder="Background Image" type="text"/>
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <div class="contact-form-style mb-20">
                                            <textarea name="short_description" id="short_description"
                                                      placeholder="Description">
                                                {{ $about->short_description }}
                                            </textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <div class="contact-form-style mb-20">
                                            <textarea name="description" id="description"
                                                      placeholder="Description">
                                                {{ $about->description }}
                                            </textarea>
                                    </div>
                                </div>


                                <div class="col-lg-12 mb-20">

                                    <h6>Image. 1920 X 1090</h6>

                                    <input class="form-control" name="image_url" placeholder="Background Image"
                                           type="file"/>
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <div class="contact-form-style">
                                        <button class="submit btn-style" type="submit">Update About</button>
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
@push("scripts")
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector:'#description',
            width: '100%',
            height: 300,
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table paste imagetools wordcount"
            ],
            //images_upload_url: 'postAcceptor.php',
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",

        });
    </script>
@endpush

