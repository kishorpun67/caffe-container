<header class="header-area">
    <div class="container-fluid">
      <nav class="navbar">
        <button class="bars-wrap toggle-nav d-md-block d-none"><span></span></button>
        <a href="#" class="logo-wrap ml-0 ml-md-3 mr-auto">Falano Restaurant</a>
        <div class="search-wrap">
          <input type="text" class="search-field" placeholder="Search Hotel, Restaurant">
          <button class="btn-search"><i class="fas fa-search"></i></button>
        </div>
        <ul class="navbar-nav ml-3">
          <li class="nav-item">
            <a href="#" class="nav-link"  data-bs-toggle="modal" data-bs-target="#exampleModallogin"><i class="lg-icon text-success far fa-user-circle"></i></a>
          </li>
        </ul>
      </nav>
      <div class="sidenav-wrapper">
        <div class="content-wrap d-flex flex-wrap">
          <div class="mb-auto">
            <h3>My Order</h3>
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
            <h3 class="d-flex flex-wrap mb-2"><span class="mr-auto">Total</span> <span class="count">रु 395.40</span></h3>
            <a href="#" class="btn btn-success btn-lg round-50 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal1">Order and checkout <i class="ml-3 text-dark fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </header>
