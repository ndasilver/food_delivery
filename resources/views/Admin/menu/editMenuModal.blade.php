<!-- Modal -->
<div class="modal fade" id="editMenuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Item to the menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form role="form" enctype="multipart/form-data" id="modalEditForm" method="post" >
                @csrf
                @method('PUT')
            <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Id</label>
                            <input required="" id="itemEditId" name="id" readonly="" type="text" class="form-control itemEditId"  placeholder="Item Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input required="" name="name" id="editModalName" type="text" class="form-control"  placeholder="Item Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input required="" name="description" type="text" id="editModalDescription" class="form-control"  placeholder="Item Description">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input required="" type="number" id="editModalPrice" name="price" class="form-control"  placeholder="Item Price">
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category" id="editModalCategory">
                                @foreach(\App\Category::all() as $category)
                                <option value="{{$category->id}}">{{ $category->name }}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>