@extends('Admin.layouts.master')
@section('content-admin')

    <div class="row">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Add a new Category</h3>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('categories.store') }}">
                        @csrf
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder="Category Name" required name="name">
                            </div>
                            <div class="col-4 form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="category_pic" required name = "image">
                                        <label class="custom-file-label" for="category_pic">Choose Picture</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-info" type="submit" style="width: 100%;">
                                    Create Category
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

    <div class="content-header">
        <div class="container-fluid">
            <h2>All Categories</h2>
        </div>
    </div>



    <div class="row">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-striped table-valign-middle" id = "categories">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <img src="/public_assets/images/categories/{{$category->image}}" class="img-thumbnail" alt="Category Image here" style="width: 60px;height: 60px;padding: 0;margin: 0"/>
                                    </td>
                                    <td>
                                        @if($category->isActive == 1)
                                            {{ 'Active' }}
                                        @elseif($category->isActive == 0)
                                            {{ 'Disable' }}
                                        @endif
                                    </td>
                                    <td><a href="{{ route('categories.edit', $category) }}" class="edit-button">Edit</a> </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
