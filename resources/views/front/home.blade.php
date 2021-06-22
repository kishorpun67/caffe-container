
  @extends('layouts.front_layout.front_layout')
  @section('content')
  @include('layouts.front_layout.header')
  @include('front.main')


  <!-- View Your Order -->
  <a href="#" class="btn btn-success round-50 botto-res-btn d-lg-none" data-bs-toggle="modal" data-bs-target="#view-your-order">View Your Order</a>
<!-- POPUP STYLE 1 -->

<!-- POPUP STYLE 2 -->
<div class="modal fade popup-wrapper" id="exampleModal1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content round-8 pt-3">
      <div class="modal-body p-0">
        <button type="button" class="btn-close mr-2" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        <div class="popup-content round-8">
          <div class="px-3 pb-3">
            <h4 class="text-success mb-0">Checkout</h4>
            <p class="text-md mb-2">Verify your details</p>
            <ul class="list-group has-border-y round-0 pt-2 pb-1 mt-2">
              <li class="list-item d-flex flex-wrap mb-2">
                <h5 class="mr-auto mb-0">Your total cost:</h5>
                <p class="mb-0 ml-2">रु 395.40</p>
              </li>
            </ul>
            <ul class="nav justify-content-center">
              <!-- RADIO BUTTON -->
              <li class="nav-item">
                <button class="form_btn-tab" data-bs-toggle="tab" data-bs-target="#Delivery-tab">
                  <div class="radio-btn-content">
                    <img src="{{asset('frontend/assets/img/pickup.svg')}}" alt="">
                    <p>Delivery</p>
                  </div>
                </button>
              </li>
              <!-- RADIO BUTTON -->
              <li class="nav-item">
                <button class="form_btn-tab active" data-bs-toggle="tab" data-bs-target="#Pickup-tab">
                  <div class="radio-btn-content">
                    <img src="{{asset('frontend/assets/img/icon-1.svg')}}" alt="">
                    <p>Pickup</p>
                  </div>
                </button>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane" id="Delivery-tab">
                <input type="text" placeholder="Your Name" class="form-control form-bg-gray mb-2">
                <input type="text" placeholder="Phone Number" class="form-control form-bg-gray mb-2">
                <div class="has-right-icon">
                  <input type="text" placeholder="Pickup Time" class="datepicker form-control form-bg-gray mb-2">
                  <i class="far fa-clock"></i>
                </div>
                <textarea name="" class="form-control form-bg-gray mb-2" placeholder="Any Order Notes? Special Instruction about packaging? Write here."></textarea>
                <button class="btn btn-success btn-lg round-50 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-dismiss="modal">Place Order <i class="ml-3 text-dark fas fa-arrow-right"></i></button>
               </div>
               <div class="tab-pane fade show active" id="Pickup-tab">
                <input type="text" placeholder="Your Name" class="form-control form-bg-gray mb-2">
                <input type="text" placeholder="Delivery Address" class="form-control form-bg-gray mb-2">
                <input type="text" placeholder="Phone Number" class="form-control form-bg-gray mb-2">
                 <textarea name="" class="form-control form-bg-gray mb-2" placeholder="Any Order Notes? Special Instruction about packaging? Write here."></textarea>
                 <button class="btn btn-success btn-lg round-50 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-dismiss="modal">Place Order <i class="ml-3 text-dark fas fa-arrow-right"></i></button>
               </div>
             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- POPUP STYLE 2 -->
<div class="modal fade popup-wrapper" id="exampleModal2">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content round-8 border-none bg-gray">
      <div class="modal-body pt-120 pb-120">
        <div class="row">
          <div class="col-lg-8 text-center mx-auto">
            <h4>Account verification</h4>
            <p class="mb-3">Send verification code to your phone <br><b>( +977 9840010029 )</b></p>
            <input type="text" class="form-control border-none text-center form-control-lg mb-2" placeholder="Enter verification code">
            <small>Didn’t get a verification code?</small>
            <a href="#" class="text-success fw600 td-none d-block mb-4">Resend code</a>
            <a href="#" class="btn btn-success round-8" data-bs-toggle="modal" data-bs-target="#exampleModal3" data-bs-dismiss="modal">Verify & Place Order</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- LOGIN -->
@include('front.login')
<!-- POPUP STYLE 3 -->
<div class="modal fade popup-wrapper" id="exampleModal3">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content round-8 border-none bg-gray">
      <div class="modal-body p-3">
        <button type="button" class="btn-close mr-2" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        <div class="popup-content round-8">
          <div class="px-3 pb-3">
            <h4 class="mb-0">Your Profile</h4>
            <div class="mb-3">
              <label for="fullname_" class="form-label text-gray">Full name*</label>
              <div class="has-form-icon">
                <input type="email" class="form-control border-none form-control-lg" id="fullname_" placeholder="Summit Pathak">
                <i class="fas fa-pen text-success"></i>
              </div>
            </div>
            <div class="mb-3">
              <label for="Phone__Number*" class="form-label text-gray">Phone Number*</label>
              <div class="has-form-icon">
                <input type="email" class="form-control border-none form-control-lg" id="Phone__Number" placeholder="9840010029">
                <i class="fas fa-pen text-success"></i>
              </div>
            </div>
            <div class="mb-3">
              <label for="fullname_" class="form-label text-gray">Address*</label>
              <div class="has-form-icon">
                <input type="email" class="form-control border-none form-control-lg" id="fullname_" placeholder="Nayabazar Near Aarambha ko office. 2 ghar uta">
              </div>
            </div>
            <h3>Your Order History</h3>
            <!-- ORDER HISTORY -->
            <div class="history-wrap">
              <!-- HISTORY ITEM -->
              <div class="bg-white p-2 mb-2 round-8 mr-2">
                <!-- item -->
                <div class="d-flex flex-wrap">
                  <p class="mr-auto mb-2">Order Number #112 (<small>11th March, 2020</small>)</p>
                  <p class="mb-2">Completed</p>
                </div>
                 <!-- item -->
                <div class="d-flex flex-wrap">
                  <p class="mr-auto mb-2">Food Item Name</p>
                  <p class="mb-2">Rs. 100</p>
                </div>
                <!-- item -->
                <div class="d-flex flex-wrap">
                  <p class="mr-auto mb-2">Food Item Name</p>
                  <p class="mb-2">Rs. 100</p>
                </div>
                <!-- item -->
                <div class="d-flex flex-wrap">
                  <p class="mr-auto mb-2">Food Item Name</p>
                  <p class="mb-2">Rs. 100</p>
                </div>
                <hr>
                <!-- item -->
                <div class="d-flex flex-wrap">
                  <p class="mr-auto mb-2">Delivery Charge</p>
                  <p class="mb-2">Rs. 10</p>
                </div>
                 <!-- item -->
                <div class="d-flex flex-wrap">
                  <p class="mr-auto mb-2">Total</p>
                  <p class="mb-2">Rs. 510 </p>
                </div>
              </div>
              <!-- HISTORY ITEM -->
              <div class="bg-white p-2 mb-2 round-8 mr-2">
                <!-- item -->
                <div class="d-flex flex-wrap">
                  <p class="mr-auto mb-2">Order Number #112 (<small>11th March, 2020</small>)</p>
                  <p class="mb-2">Completed</p>
                </div>
                 <!-- item -->
                <div class="d-flex flex-wrap">
                  <p class="mr-auto mb-2">Food Item Name</p>
                  <p class="mb-2">Rs. 100</p>
                </div>
                <!-- item -->
                <div class="d-flex flex-wrap">
                  <p class="mr-auto mb-2">Food Item Name</p>
                  <p class="mb-2">Rs. 100</p>
                </div>
                <!-- item -->
                <div class="d-flex flex-wrap">
                  <p class="mr-auto mb-2">Food Item Name</p>
                  <p class="mb-2">Rs. 100</p>
                </div>
                <hr>
                <!-- item -->
                <div class="d-flex flex-wrap">
                  <p class="mr-auto mb-2">Delivery Charge</p>
                  <p class="mb-2">Rs. 10</p>
                </div>
                 <!-- item -->
                <div class="d-flex flex-wrap">
                  <p class="mr-auto mb-2">Total</p>
                  <p class="mb-2">Rs. 510 </p>
                </div>
              </div>
              <!-- HISTORY ITEM -->
              <div class="bg-white p-2 mb-2 round-8 mr-2">
                <!-- item -->
                <div class="d-flex flex-wrap">
                  <p class="mr-auto mb-2">Order Number #112 (<small>11th March, 2020</small>)</p>
                  <p class="mb-2">Completed</p>
                </div>
                 <!-- item -->
                <div class="d-flex flex-wrap">
                  <p class="mr-auto mb-2">Food Item Name</p>
                  <p class="mb-2">Rs. 100</p>
                </div>
                <!-- item -->
                <div class="d-flex flex-wrap">
                  <p class="mr-auto mb-2">Food Item Name</p>
                  <p class="mb-2">Rs. 100</p>
                </div>
                <!-- item -->
                <div class="d-flex flex-wrap">
                  <p class="mr-auto mb-2">Food Item Name</p>
                  <p class="mb-2">Rs. 100</p>
                </div>
                <hr>
                <!-- item -->
                <div class="d-flex flex-wrap">
                  <p class="mr-auto mb-2">Delivery Charge</p>
                  <p class="mb-2">Rs. 10</p>
                </div>
                 <!-- item -->
                <div class="d-flex flex-wrap">
                  <p class="mr-auto mb-2">Total</p>
                  <p class="mb-2">Rs. 510 </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- View Your Order -->
<div class="modal fade popup-wrapper" id="view-your-order">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content round-8 border-none bg-gray">
      <div class="modal-body p-3">
        <button type="button" class="btn-close mr-3 mt-3" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        <div class="content-wrap d-flex flex-wrap">
          <div class="mb-auto w-100">
            <h4>My Order</h4>
            <ul class="list-group">
              <!-- PRODUCT ITEM -->
              <li class="list-item">
                <div class="row">
                  <div class="col-4">
                    <img src="{{asset('frontend/assets/img/placeholder-img-1.jpg')}}" alt="" class="w-100">
                  </div>
                  <div class="col-8">
                    <h6>Food Item Name <span class="d-inline-block ml-2">रु 79.99</span></h6>
                    <div class="d-flex">
                      <!-- NUMBER FIELD -->
                      <div class="custom-number-wrap mr-auto">
                        <div class="d-flex align-items-center">
                          <button class="minus-btn fas fa-minus"></button>
                          <span class="number mx-auto" data-maxlength="5">1</span><input type="hidden" value="1" class="input-num">
                          <button class="plus-btn fas fa-plus"></button>
                        </div>
                      </div>
                      <!-- NUMBER FIELD END -->
                      <button class="btn btn-sm"><i class="far fa-trash-alt"></i></button>
                    </div>
                  </div>
                </div>
              </li>
              <!-- PRODUCT ITEM -->
              <li class="list-item">
                <div class="row">
                  <div class="col-4">
                    <img src="{{asset('frontend/assets/img/placeholder-img-1.jpg')}}" alt="" class="w-100">
                  </div>
                  <div class="col-8">
                    <h6>Food Item Name <span class="d-inline-block ml-2">रु 79.99</span></h6>
                    <div class="d-flex">
                      <!-- NUMBER FIELD -->
                      <div class="custom-number-wrap mr-auto">
                        <div class="d-flex align-items-center">
                          <button class="minus-btn fas fa-minus"></button>
                          <span class="number mx-auto" data-maxlength="5">1</span><input type="hidden" value="1" class="input-num">
                          <button class="plus-btn fas fa-plus"></button>
                        </div>
                      </div>
                      <!-- NUMBER FIELD END -->
                      <button class="btn btn-sm"><i class="far fa-trash-alt"></i></button>
                    </div>
                  </div>
                </div>
              </li>
              <!-- PRODUCT ITEM -->
              <li class="list-item">
                <div class="row">
                  <div class="col-4">
                    <img src="{{asset('frontend/assets/img/placeholder-img-1.jpg')}}" alt="" class="w-100">
                  </div>
                  <div class="col-8">
                    <h6>Food Item Name <span class="d-inline-block ml-2">रु 79.99</span></h6>
                    <div class="d-flex">
                      <!-- NUMBER FIELD -->
                      <div class="custom-number-wrap mr-auto">
                        <div class="d-flex align-items-center">
                          <button class="minus-btn fas fa-minus"></button>
                          <span class="number mx-auto" data-maxlength="5">1</span><input type="hidden" value="1" class="input-num">
                          <button class="plus-btn fas fa-plus"></button>
                        </div>
                      </div>
                      <!-- NUMBER FIELD END -->
                      <button class="btn btn-sm"><i class="far fa-trash-alt"></i></button>
                    </div>
                  </div>
                </div>
              </li>
              <!-- PRODUCT ITEM -->
              <li class="list-item">
                <div class="row">
                  <div class="col-4">
                    <img src="{{asset('frontend/assets/img/placeholder-img-1.jpg')}}" alt="" class="w-100">
                  </div>
                  <div class="col-8">
                    <h6>Food Item Name <span class="d-inline-block ml-2">रु 79.99</span></h6>
                    <div class="d-flex">
                      <!-- NUMBER FIELD -->
                      <div class="custom-number-wrap mr-auto">
                        <div class="d-flex align-items-center">
                          <button class="minus-btn fas fa-minus"></button>
                          <span class="number mx-auto" data-maxlength="5">1</span><input type="hidden" value="1" class="input-num">
                          <button class="plus-btn fas fa-plus"></button>
                        </div>
                      </div>
                      <!-- NUMBER FIELD END -->
                      <button class="btn btn-sm"><i class="far fa-trash-alt"></i></button>
                    </div>
                  </div>
                </div>
              </li>
              <!-- PRODUCT ITEM END -->
            </ul>
            <div class="card coupon-card mt-3">
              <div class="card-body d-flex align-items-center">
                <p class="pr-2 mr-auto mb-0 text-success">Have Coupon?</p>
                <button class="use-btn btn btn-success round-8">Use now</button>
              </div>
              <input type="text" class="form-control" placeholder="Coupon Code">
            </div>
          </div>
          <div class="sidenav-footer mt-auto w-100 pt-5 pb-3">
            <ul class="list-group has-border-y round-0">
              <!-- LIST ITEM -->
              <li class="list-item d-flex flex-wrap mb-2">
                <p class="mr-auto mb-0">Sub total</p>
                <p class="mb-0 ml-2">रु 259.30</p>
              </li>
              <!-- LIST ITEM -->
              <li class="list-item d-flex flex-wrap mb-2">
                <p class="mr-auto mb-0">Delivery fee</p>
                <p class="mb-0 ml-2">रु 9.20</p>
              </li>
              <!-- LIST ITEM -->
              <li class="list-item d-flex flex-wrap mb-2">
                <p class="mr-auto mb-0">Taxes</p>
                <p class="mb-0 ml-2">रु 39.20</p>
              </li>
            </ul>
            <h4 class="d-flex flex-wrap mb-2"><span class="mr-auto">Total</span> <span class="count">रु 395.40</span></h4>
            <a href="#" class="btn btn-success btn-lg round-50 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal1">Checkout <i class="ml-3 text-dark fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
