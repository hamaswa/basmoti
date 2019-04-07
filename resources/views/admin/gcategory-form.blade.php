@extends('admin.layouts.app')

@section('content')

    <div class="contact-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-message-wrapper">
                        <h4 class="contact-title mb-25">Edit Slider</h4>
                        <div class="contact-message">
                            <form method="POST" action="{{ route('gcategory.store') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-12">
                                    <input class="form-control" name="name" value="{{ old('name') }}"
                                           placeholder="Background Image" type="text"/>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-form-style">
                                        <button class="submit btn-style" type="submit">Add Category</button>
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

