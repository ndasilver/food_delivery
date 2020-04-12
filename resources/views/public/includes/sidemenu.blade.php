<div class="card" style="width: 18rem;">
    <div class="card-header">
        <h5>Categories</h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item <?php if($active == 'all'){ echo "active"; }?>">
            <a href="{{ route('categories') }}">
                All <i class="fa fa-angle-right float-right"></i>
            </a>
        </li>
        @foreach($categories as $category)
            <li class="list-group-item <?php if($active == $category->name){ echo "active"; }?>">
                <a href="{{ route('category', $category->id) }}">
                    {{ $category->name }} <i class="fa fa-angle-right float-right"></i>
                </a>
            </li>
        @endforeach
    </ul>
</div>
