<div class="row menu-items">
    <?php $col_counter = 0 ?>
    @foreach($products as $product)
        <div class="col-md-6 mt-5 pl-5 pr-4">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="/public_assets/images/{{ $product->image }}" style="min-width: 110px" alt="menu-image" class="img-thumbnail menu-img">
                </div>
                <div class="col-md-8">
                    <div class="menu-title text-center">
                        <h4>{{ $product->name }}</h4>
                    </div>
                    <div class="menu-desc text-center">
                        <p>
                            {{ $product->description }}
                        </p>
                    </div>

                    <div class="row text-center">
                        <div class="col-md-6">
                            <span class="price">
                                <h5 class="minwidth-110">
                                    {{ number_format($product->price) }} {{ \App\Configuration::find(1)->currency->currency_code }}
                                </h5>
                            </span>
                        </div>
                        <div class="col-md-6">
                        <span class="add-to-cart">
                                <button type="button" class="btn btn-primary btn-sm btn-add-to-cart minwidth-110"  onclick="getItemId({{ $product->id }})" >
                                    <input class="itemId" value="{{ $product->id }}" hidden>
                                    <i class="fa fa-plus-circle"></i> Add to cart
                                </button>
                            </span>
                        </div>
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
