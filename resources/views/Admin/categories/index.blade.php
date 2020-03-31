@extends('Admin.layouts.master')
@section('content-admin')

    <div class="row">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Add a new Category</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('categories.store') }}">
                        @csrf
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="Category Name" required name="name">
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
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>{{ $category->updated_at }}</td>
                                    <td><a href="#">Edit</a> </td>
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
    <script type="text/javascript">
        $(function () {

            var table = $('#categories').DataTable();

            // Function to edit a category
            table.on('click', '.edit-button', function () {
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }

                const data = table.row($tr).data();
                const id = data[0];
                console.log(id);
                $.ajax({
                    url: "/subscriptions/" + id + "/edit",
                    dataType: "json",
                    success: function (data) {
                        console.log(data.status);

                        $('#status_edit').val(data.status);
                        // Dynamically set the form's action
                        // After getting the base URL
                        const baseUrl = window.location;
                        $('#edit-form').attr('action', "http://127.0.0.1:8000/subscriptions" + "/" + data.id + "");

                        $('#editModal').modal('show');

                    }

                });

            });
        });
    </script>
@endsection
