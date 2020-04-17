<div class="row menu-items">
    <?php $col_counter = 0 ?>
    @foreach($products as $product)

        <div class="col-md">
            <div class="row">
                <div class="col-4">
                    <img src="/public_assets/images/{{ $product->image }}" alt="menu-image" class="img-thumbnail menu-img">
                </div>
                <div class="col-8">
                    <div class="menu-title">
                        <h4>{{ $product->name }}</h4>
                    </div>
                    <div class="menu-desc">
                        <p>
                            {{ $product->description }}
                        </p>
                    </div>

                    <div class="">
                            <span class="price float-left">
                                <h5>
                                    {{ number_format($product->price) }} Rwf
                                </h5>
                            </span>

                        <span class="add-to-cart float-right">
                                <button type="button" class="btn btn-primary btn-sm btn-add-to-cart"  onclick="getItemId({{ $product->id }})" >
                                    <input class="itemId" value="{{ $product->id }}" hidden>
                                    <i class="fa fa-plus-circle"></i> Add to cart
                                </button>
                            </span>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $col_counter = $col_counter + 1;
        if($col_counter == 2){
            echo "<div class='w-100'></div>";

            $col_counter = 0;
        }

        ?>

    @endforeach

</div>

<div class="row">
    <div class="col-12">
        <div class="pagination-controls text-center">
            {{ $products->links() }}
        </div>
    </div>

</div>
