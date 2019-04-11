@extends('admin.layouts.app')

@section('content')

    <div class="contact-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-message-wrapper">
                        <h4 class="contact-title mb-25">General Settings</h4>
                        <div class="contact-message">


                            {!! Form::model($config, ['route' => ['config.update', $config->id], 'method' => 'patch',
                             'files'=>'ture']) !!}
                            {{ csrf_field() }}

                            <div class="row">

                                <div class="col-lg-6 mb-20">
                                    <input class="form-control" name="site_logo"
                                           placeholder="Site logo" type="file"/>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input class="form-control" name="title" value="{{ $config->title }}"
                                           placeholder="Site Title" type="text"/>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input class="form-control" name="email" value="{{ $config->email }}"
                                           placeholder="Administrator Email" type="text"/>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input class="form-control" name="title" value="{{ $config->location }}"
                                           placeholder="Address" type="text"/>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input class="form-control" name="title" value="{{ $config->map }}"
                                           placeholder="Address" type="text"/>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input class="form-control" name="title" value="{{ $config->phone }}"
                                           placeholder="Phone" type="text"/>
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <h6 class="contact-title mb-25">Contact Us Info</h6>

                                    <textarea name="contact_us" id="contact_us"
                                              placeholder="Contact Us Intro">
                                                {{ $config->contact_us }}
                                            </textarea>
                                </div>
                            </div>


                            <h4 class="contact-title">Open/Close Timing</h4>
                            <div class="row">

                                <div class="col-lg-6 mb-20">
                                    <input class="form-control" name="saturday" value="{{ $config->saturday }}"
                                           placeholder="Saturday timing" type="text"/>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input class="form-control" name="sunday" value="{{ $config->sunday }}"
                                           placeholder="Sunday Timing" type="text"/>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input class="form-control" name="monday" value="{{ $config->monday }}"
                                           placeholder="Monday Timing" type="text"/>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input class="form-control" name="tuesday" value="{{ $config->tuesday }}"
                                           placeholder="Tuesday Timing" type="text"/>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input class="form-control" name="wednesday" value="{{ $config->wednesday }}"
                                           placeholder="Wednesday Timing" type="text"/>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input class="form-control" name="thursday" value="{{ $config->thursday }}"
                                           placeholder="Thursday Timing" type="text"/>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input class="form-control" name="friday" value="{{ $config->friday }}"
                                           placeholder="Friday Timing" type="text"/>
                                </div>

                            </div>
                            <h4 class="contact-title">Social Media Settings</h4>

                            <div class="row">


                                <div class="col-lg-6 mb-20">
                                    <input class="form-control" name="facebook" value="{{ $config->facebook }}"
                                           placeholder="Facebook URL" type="text"/>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input class="form-control" name="twitter" value="{{ $config->twitter }}"
                                           placeholder="Twitter URL" type="text"/>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input class="form-control" name="youtube" value="{{ $config->youtube }}"
                                           placeholder="Youtube URL" type="text"/>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input class="form-control" name="pintrest" value="{{ $config->pintrest }}"
                                           placeholder="Pintrest URL" type="text"/>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input class="form-control" name="instagram" value="{{ $config->instagram }}"
                                           placeholder="Pintrest URL" type="text"/>
                                </div>
                            </div>

                            <h4 class="contact-title">Other Settings</h4>
                            <div class="row">
                                <div class="col-lg-12 mb-20">
                                    <input class="form-control" name="gallerytitle" value="{{ $config->gallerytitle }}"
                                           placeholder="Gallery Title" type="text"/>
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <div class="contact-form-style mb-20">
                                            <textarea name="gallerydescription" id="gallerydescription"
                                                      placeholder="Gallery Description">
                                                {{ $config->gallerydescription }}
                                            </textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <input class="form-control" name="menutitle" value="{{ $config->menutitle }}"
                                           placeholder="Menu Title" type="text"/>
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <div class="contact-form-style mb-20">
                                            <textarea name="menudescription" id="menudescription"
                                                      placeholder="Menu Description">
                                                {{ $config->menudescription }}
                                            </textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-20">
                                    <div class="contact-form-style">
                                        <button class="submit btn-style" type="submit">Update Setting</button>
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
            selector: '#description',
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

