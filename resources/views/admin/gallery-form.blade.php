@extends('admin.layouts.app')

@section('content')

    <div class="contact-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-message-wrapper">
                        <h4 class="contact-title mb-25">Add Gallery Image</h4>
                        <div class="contact-message">
                            <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-12 mb-20">

                                    <select class="chosen-select form-control" data-placeholder="Select Extension"
                                            id="category_id" name="category_id" required>
                                        @foreach($category as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <input class="form-control" id="alt" name="alt" placeholder="Alternat Text" type="text" />
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <input class="form-control" name="image_url" placeholder="Gallery Image" type="file" />
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-form-style">
                                        <button class="submit btn-style" type="submit">Add Gallery Image</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

