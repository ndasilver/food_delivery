@extends('Admin.layouts.master')
@section('content-admin')
    {{--BUTTON SECTION--}}
    <div class="row mb-2">
        <div class="col-12">
            <a href="{{ route('categories.index') }}" type="button" class="btn btn-info" >
                <i class="fa fa-arrow-left"></i>
                Back
            </a>
        </div>
    </div>
    {{--END OF UBTTON SECTION--}}
    <div class="row">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Edit Category</h3>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('categories.update', $category) }}">
                        @csrf
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder="Category Name" value="{{ $category->name }}" required name="name">
                            </div>
                            <div class="col-4">
                                <select name = "isActive" class="form-control">

                                    <option value="1" @php if($category->isActive == 1) echo "selected" ;@endphp>Activate</option>
                                    <option value="0" @php if($category->isActive == 0) echo "selected" ;@endphp>Disable</option>
                                </select>
                            </div>
                            <div class="col-4 form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="category_pic" name = "image">
                                        <label class="custom-file-label" for="category_pic">Choose Picture</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <button class="btn btn-success pull-right" type="submit" style="width: 100%;">
                                    Update Category
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>


@endsection

@section('js')

@endsection
