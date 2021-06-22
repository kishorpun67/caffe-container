<?php
    use App\Admin\Category;
    use App\Admin\Banner;
    use App\Admin\AddOn;
    use App\Admin\Size;

    $category=  Category::with('items')->get();
    $banner = Banner::get();

?>
<main class="main-root">
    <section class="prod-slide-section py-md-5 pt-2 pb-4">
      <div class="container-fluid">
        <div class="prod-slide-wrapper">
          <div class="prod-slide-container swiper-container">
            <div class="swiper-wrapper">
              <!-- SLIDE ITEM -->
              @foreach ($banner  as $item)
              <div class="swiper-slide">
                <div class="prod-slide-wrap" style="background-image: url({{asset( $item->image)}});">
                  <div class="text-content">
                    <h3 class="text-success mb-md-4 mb-2">{{  $item->title }}</h3>
                    <a href="#" class="text-btn text-white">Learn more <i class="text-dark fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              @endforeach
          </div>
          <div class="prod-slid-nav"></div>
        </div>
      </div>
    </section>
    <section class="prod__section">
      <div class="container-fluid">
        <h2 class="title-md mb-4">Choose from popular categories</h2>
        <div class="cat-slide-wrapper">
          <div class="cat-slide-container swiper-container">
            <div class="swiper-wrapper">
                @foreach ($category as  $cat)
                    <div class="swiper-slide"><a href="#" class="cat-btn" data-filter=".prod-cat-{{ $cat->id }}"><i class="{{ $cat->icon }}"></i>{{ $cat->category }}</a></div>
                @endforeach
            </div>
          </div>
          <div class="cat-slide-nav-wrap">
            <button class="next"><i class="fas fa-angle-right"></i></button>
            <button class="prev"><i class="fas fa-angle-left"></i></button>
          </div>
          <div class="cat-slide-scrollbar"></div>
        </div>
      </div>
      <div class="prod_card_area">
        <div class="container-fluid">
          <div class="prod-card-wrapper">
            <div class="row mt-4">
              <!-- PRODUCT CARD ITEM -->
              @foreach($category as $category)
                @foreach($category->items as $item)
                <div class="product__item prod-cat-{{ $item->category_id }} col-xxl-2 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="prod-card">
                        <div class="thumb">
                        <img src="{{asset($item->image )}}" alt="">
                        <button class="produch-add-btn fas fa-plus-circle" data-bs-toggle="modal" data-bs-target="#exampleModal-item{{ $item->id }}"></button>
                        </div>
                        <div class="text">
                        <h6 class="d-flex">{{ $item->item_name  }} <span class="ml-sm-auto rate">{{ $item->price  }} </span></h6>
                        <p>{{ $item->details }} </p>
                        </div>
                    </div>
                </div>
                <form action="#" method="">
                    @csrf
                <div class="modal fade popup-wrapper" id="exampleModal-item{{ $item->id }}">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content round-8">
                        <div class="modal-body p-0">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                          <div class="popup-content round-8">
                            <img src="{{asset($item->image )}}" alt="" class="round-8">
                              <div class="p-3">
                                <h4 class="mb-0 d-flex">{{ $item->item_name  }}<span class="ml-auto rate-text" id="item-price">{{ $item->price  }}</span></h4>
                                <input type="hidden" name="start_price" id="start_price"  value="{{ $item->price  }}"/>
                                <input type="hidden" name="name" id="start_price"  value="{{ $item->item_name  }}"/>
                                <input type="hidden" name="description" id="start_price"  value="{{ $item->details  }}"/>

                                <p class="text-md mb-2">{{ $item->deatils  }}</p>
                                <h4 class="mb-0 d-flex">Size/Varients</h4>
                                <p class="text-md mb-2">Select One (Required)</p>

                                <ul class="list-normal">
                                    <?php
                                    $size = Size::where('item_id', $item->id)->get();
                                    ?>
                                    @forelse ($size as $items)
                                        <li class="list-item"><a href="#" class="btn btn-gray round-0 size" ><input type="radio" name="price" class="input-checkbox size" value="{{ $items->price }}" id="radio-1"> {{ $items->size }}</a></li>
                                    @empty
                                    @endforelse
                                </ul>
                              </div>
                              <div class="has-border-y px-3 mb-2">
                                <h4>Add-Ons</h4>
                                <p class="text-md mb-2">Select One or Multiple (Optional)</p>
                                <ul class="list-group round-0">
                                  <!-- LIST ITEM -->
                                    <?php
                                        $addon = AddOn::where('item_id', $item->id)->get();
                                    ?>
                                    @forelse ($addon as $item)
                                    <li class="list-item d-flex flex-wrap mb-1">
                                        <div class="checkbox-wrap mr-auto">
                                        <input type="checkbox" name="add_on[]" class="input-checkbox add-on" id="checkbox-{{ $item->id }}" value="{{ $item->price }}">
                                        <label for="checkbox-{{ $item->id }}">{{ $item->add_on }}</label>
                                        </div>
                                        <p class="rate mb-0">{{ $item->price }}</p>
                                    </li>
                                    @empty
                                        Add Not Found
                                    @endforelse
                                </ul>
                              </div>
                              <div class="px-3 mb-3">
                                <h4>Special Message/Instructions</h4>
                                <textarea class="form-control round-8"></textarea>
                                <div class="d-flex align-items-center mt-3">
                                  <!-- NUMBER FIELD -->
                                  <div class="number-field mr-auto">
                                    <div class="custom-number-wrap">
                                      <div class="d-flex align-items-center">
                                        <a herf="javascript:" style="text-decoration:none;" class="minus-btn fas fa-minus"></a>
                                        <span class="number mx-auto" data-maxlength="5">1</span><input type="hidden" name="quantity" id="item_num" value="1" class="input-num">
                                        <a herf="javscript:" style="text-decoration:none;" class="plus-btn fas fa-plus"></a>
                                      </div>
                                    </div>
                                  </div>
                                  <button class="btn btn-success btn-lg round-50">Add to cart <i class="ml-3 text-dark fas fa-arrow-right"></i></button>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                </form>
                @endforeach
            @endforeach
            </div>
          </div>
         </div>
       </div>
    </section>
</main>
