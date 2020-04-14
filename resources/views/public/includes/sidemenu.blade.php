<div class="card" style="width: 18rem;">
    <div class="card-header">
        <h5>Categories</h5>
    </div>
    <ul class="list-group list-group-flush">
        <a href="{{ route('categories') }}">
            <li class="list-group-item <?php if($active == 'all'){ echo "active"; }?>">

                All <i class="fa fa-angle-right float-right"></i>

            </li>
        </a>

        @foreach($categories as $category)
            <a href="{{ route('category', $category->id) }}">
                <li class="list-group-item <?php if($active == $category->name){ echo "active"; }?>">

                    {{ $category->name }} <i class="fa fa-angle-right float-right"></i>

                </li>
            </a>

        @endforeach
    </ul>
</div>
