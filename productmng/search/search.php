
<?php
    include("../views/header.php");
?>
<!-- ============================================== HEADER : END ============================================== --> 

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
      <div class="head search-filter-status">
        <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shop-svg-icon">
          <g>
            <polyline fill="none" points="5.5 13.2 5.5 5.8 1.5 1.2 13.5 1.2 9.5 5.8 9.5 10.2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline>
            <polyline id="filter__ticked" points="9.2 11.3 10.3 12.1 11.8 10.4" style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 10; stroke-width: 0.5;"></polyline>
            <circle cx="10.5" cy="11.2" r="2.5" stroke="none"></circle>
            <use xlink:href="#filter__ticked"></use>
          </g>
        </svg>
        <h2 class="shop-search-filter-status__text">Bộ lọc tìm kiếm
          <span class="sr-only"></span>
        </h2>
      </div>
      </ul>
    </div>
    <!-- /.breadcrumb-inner --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <div class='col-md-3 sidebar'> 
        <!-- ================================== TOP NAVIGATION ================================== -->
        
        <!-- /.side-menu --> 
        <!-- ================================== TOP NAVIGATION : END ================================== -->

        <div class="sidebar-module-container">

          <div class="sidebar-filter"> 
            <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
            <div class="sidebar-widget wow fadeInUp">
              <fieldset class="shop-filter-group shop-facet-filter">
                <legend class="shop-filter-group__header">Theo Danh Mục</legend>
                <?php foreach ($categories as $category) : ?>
                <div class="shop-filter shop-checkbox-filter">
                  <label class="shop-checkbox">
                    <div class="shop-checkbox__box">
                      <input type="checkbox"  value="<?php echo $category['ID_loai_sp']; ?>" >
                      <!-- <svg enable-background="new 0 0 12 12" viewBox="0 0 12 12" x="0" y="0" class="shop-svg-icon shop-checkbox__tick icon-tick-bold"><g><path d="m5.2 10.9c-.2 0-.5-.1-.7-.2l-4.2-3.7c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l3.4 3 5.1-7c .3-.4 1-.5 1.4-.2s.5 1 .2 1.4l-5.7 7.9c-.2.2-.4.4-.7.4 0-.1 0-.1-.1-.1z"></path></g></svg> -->
                      </div>
                    <span class="shop-checkbox__label"><?php echo $category['Loai_sp']; ?></span>
                  </label>
                </div>
                <?php endforeach;?>
                
                <!-- <button aria-expanded="false" class="shop-filter-group__toggle-btn" aria-label="">Thêm
                  <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shop-svg-icon icon-arrow-down">
                    <g>
                      <path d="m11 2.5c0 .1 0 .2-.1.3l-5 6c-.1.1-.3.2-.4.2s-.3-.1-.4-.2l-5-6c-.2-.2-.1-.5.1-.7s.5-.1.7.1l4.6 5.5 4.6-5.5c.2-.2.5-.2.7-.1.1.1.2.3.2.4z"></path>
                    </g>
                  </svg>
                </button> -->
              </fieldset>
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== SIDEBAR CATEGORY : END ============================================== --> 
            
            <!-- ============================================== PRICE SILDER============================================== -->
            <div class="sidebar-widget wow fadeInUp">
              <div class="widget-header">
                <h4 class="widget-title">Price Slider</h4>
              </div>
              <div class="sidebar-widget-body m-t-10">
                <div class="shop-filter-group__body shopee-price-range-filter__edit">
                  <div class="shop-price-range-filter__inputs">
                    <input type="text" aria-label="" id="min" maxlength="13" class="shop-price-range-filter__input" placeholder="$ TỪ" value="">
                    <div class="shop-price-range-filter__range-line"></div>
                    <input type="text" aria-label="" id="max" maxlength="13" class="shop-price-range-filter__input" placeholder="$ ĐẾN" value="">
                  </div>
                </div>
                <!-- /.price-range-holder --> 
                <a  onclick="filterProducts()" class="lnk btn btn-primary">Show Now</a> </div>
              <!-- /.sidebar-widget-body --> 
              </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== PRICE SILDER : END ============================================== --> 
            <!-- ============================================== MANUFACTURES============================================== -->
            
            <!-- /.sidebar-widget --> 
            <!-- ============================================== MANUFACTURES: END ============================================== --> 
            <!-- ============================================== COLOR============================================== -->
           
            <!-- /.sidebar-widget --> 
            <!-- ============================================== COLOR: END ============================================== --> 
            <!-- ============================================== COMPARE============================================== -->
            <div class="sidebar-widget wow fadeInUp outer-top-vs">
              <h3 class="section-title">Compare products</h3>
              <div class="sidebar-widget-body">
                <div class="compare-report">
                  <p>You have no <span>item(s)</span> to compare</p>
                </div>
                <!-- /.compare-report --> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== COMPARE: END ============================================== --> 
            <!-- ============================================== PRODUCT TAGS ============================================== -->
            <div class="sidebar-widget product-tag wow fadeInUp outer-top-vs">
              <h3 class="section-title">Product tags</h3>
              <div class="sidebar-widget-body outer-top-xs">
                <div class="tag-list"> <a class="item" title="Phone" href="category.html">Phone</a> <a class="item active" title="Vest" href="category.html">Vest</a> <a class="item" title="Smartphone" href="category.html">Smartphone</a> <a class="item" title="Furniture" href="category.html">Furniture</a> <a class="item" title="T-shirt" href="category.html">T-shirt</a> <a class="item" title="Sweatpants" href="category.html">Sweatpants</a> <a class="item" title="Sneaker" href="category.html">Sneaker</a> <a class="item" title="Toys" href="category.html">Toys</a> <a class="item" title="Rose" href="category.html">Rose</a> </div>
                <!-- /.tag-list --> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
          <!----------- Testimonials------------->
            <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
              <div id="advertisement" class="advertisement">
                <div class="item">
                  <div class="avatar"><img src="..\assets\images\testimonials\member1.png" alt="Image"></div>
                  <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                  <div class="clients_author">John Doe <span>Abc Company</span> </div>
                  <!-- /.container-fluid --> 
                </div>
                <!-- /.item -->
                
                <div class="item">
                  <div class="avatar"><img src="..\assets\images\testimonials\member3.png" alt="Image"></div>
                  <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                  <div class="clients_author">Stephen Doe <span>Xperia Designs</span> </div>
                </div>
                <!-- /.item -->
                
                <div class="item">
                  <div class="avatar"><img src="..\assets\images\testimonials\member2.png" alt="Image"></div>
                  <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                  <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span> </div>
                  <!-- /.container-fluid --> 
                </div>
                <!-- /.item --> 
                
              </div>
              <!-- /.owl-carousel --> 
            </div>
            
            <!-- ============================================== Testimonials: END ============================================== -->
            
            <div class="home-banner"> <img src="..\assets\images\banners\LHS-banner.jpg" alt="Image"> </div>
          </div>
          <!-- /.sidebar-filter --> 
        </div>
        <!-- /.sidebar-module-container --> 
      </div>
      <!-- /.sidebar -->
      <div class='col-md-9'> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        
        
        
     
        <div class="clearfix filters-container ">
          <div class="row">
            <div class="col col-sm-6 col-md-2">
              <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                  <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                  <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
                </ul>
              </div>
              <!-- /.filter-tabs --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-6">
              <div class="col col-sm-3 col-md-6 no-padding">
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col -->
              <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Show</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> 1 <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">1</a></li>
                        <li role="presentation"><a href="#">2</a></li>
                        <li role="presentation"><a href="#">3</a></li>
                        <li role="presentation"><a href="#">4</a></li>
                        <li role="presentation"><a href="#">5</a></li>
                        <li role="presentation"><a href="#">6</a></li>
                        <li role="presentation"><a href="#">7</a></li>
                        <li role="presentation"><a href="#">8</a></li>
                        <li role="presentation"><a href="#">9</a></li>
                        <li role="presentation"><a href="#">10</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-6 col-md-4 text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row">
                <?php foreach ($products as $product) : ?>
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products" style="display: flex; justify-content: center; align-items: center;">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="./catalog/?action=chi_tiet_sp&product_id=<?php echo $product['ID_sp']; ?>"><img src="..\<?php echo $product['Images']; ?>" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="./catalog/?action=chi_tiet_sp&product_id=<?php echo $product['ID_sp']; ?>"><?php echo $product['ten_sp']; ?></a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $<?php echo $product['Gia_sp']; ?> </span> <span class="price-before-discount"></span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  <?php endforeach;?>
                  <!-- /.item --> 
                </div>
                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane " id="list-container">
              <div class="category-product">
              <?php foreach ($products as $product) : ?>
                <div class="category-product-inner wow fadeInUp">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="..\<?php echo $product['Images']; ?>" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="./catalog/?action=chi_tiet_sp&product_id=<?php echo $product['ID_sp']; ?>"><?php echo $product['ten_sp']; ?></a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $<?php echo $product['Gia_sp']; ?> </span> <span class="price-before-discount"></span> </div>
                            <!-- /.product-price -->
                            <div class="description m-t-10"></div>
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </li>
                                  <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                  <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                </ul>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                            
                          </div>
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->
                      <div class="tag new"><span>new</span></div>
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.category-product-inner -->
                <?php endforeach;?>
               
                <!-- /.category-product-inner --> 
                
              </div>
              <!-- /.category-product --> 
            </div>
            <!-- /.tab-pane #list-container --> 
          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container">
            <div class="text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.text-right --> 
            
          </div>
          <!-- /.filters-container --> 
          
        </div>
        <!-- /.search-result-container --> 
        
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="..\assets/images/brands/brand1.png" src="..\assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="..\assets/images/brands/brand2.png" src="..\assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="..\assets/images/brands/brand3.png" src="..\assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="..\assets/images/brands/brand4.png" src="..\assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="..\assets/images/brands/brand5.png" src="..\assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="..\assets/images/brands/brand6.png" src="..\assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="..\assets/images/brands/brand2.png" src="..\assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="..\assets/images/brands/brand4.png" src="..\assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="..\assets/images/brands/brand1.png" src="..\assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="..\assets/images/brands/brand5.png" src="..\assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item--> 
        </div>
        <!-- /.owl-carousel #logo-slider --> 
      </div>
      <!-- /.logo-slider-inner --> 
      
    </div>
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> </div>
  <!-- /.container --> 
  
</div>
<!-- /.body-content --> 
<!-- ============================================================= FOOTER ============================================================= -->
<script>




const urlParams = new URLSearchParams(window.location.search);debugger;
  if (urlParams.has('minPrice')) {
    document.getElementById('min').value = urlParams.get('minPrice');
  }
  if (urlParams.has('maxPrice')) {
    document.getElementById('max').value = urlParams.get('maxPrice');
  }
  if (urlParams.has('category')) {
    selectedCategoriess = urlParams.get('category');
    var categoriesArray = selectedCategoriess.split("%1H");
  
    for (var i = 0; i < categoriesArray.length; i++) {
      var categoryID = categoriesArray[i];
      var checkbox = document.querySelector('[value="' + categoryID + '"]');
      checkbox.checked = true;

      var newSVGElement = document.createElementNS("http://www.w3.org/2000/svg", "svg");
      newSVGElement.setAttribute('enable-background', 'new 0 0 12 12');
      newSVGElement.setAttribute('viewBox', '0 0 12 12');
      newSVGElement.setAttribute('x', '0');
      newSVGElement.setAttribute('y', '0');
      newSVGElement.setAttribute('class', 'shop-svg-icon shop-checkbox__tick icon-tick-bold');

      var pathElement = document.createElementNS("http://www.w3.org/2000/svg", "path");
      pathElement.setAttribute('d', 'm5.2 10.9c-.2 0-.5-.1-.7-.2l-4.2-3.7c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l3.4 3 5.1-7c .3-.4 1-.5 1.4-.2s.5 1 .2 1.4l-5.7 7.9c-.2.2-.4.4-.7.4 0-.1 0-.1-.1-.1z');

      // Thêm phần tử `<path>` vào `<svg>`
      newSVGElement.appendChild(pathElement);

      checkbox.parentNode.appendChild(newSVGElement);
    }
  }

document.addEventListener('DOMContentLoaded', function() {

  
  

  const asElements = document.querySelectorAll('.shop-checkbox-filter');

  asElements.forEach(function(asElement) {
    const checkbox = asElement.querySelector('input[type="checkbox"]');
    checkbox.addEventListener('change', function() {
      filterProducts();
    });
  });
  
  
});
  

function filterProducts() {debugger;
  var selectedCategories = "";
  const urlParams = new URLSearchParams(window.location.search);
  const keyParam = urlParams.get('key');debugger;
  if (urlParams.has('minPrice') && document.getElementById('min').value==null) {
    document.getElementById('min').value = urlParams.get('minPrice');
  }
  if (urlParams.has('maxPrice') && document.getElementById('max').value==null) {
    document.getElementById('max').value = urlParams.get('maxPrice');
  }

  var checkboxes = document.querySelectorAll('input[type=checkbox]:checked');
  checkboxes.forEach(function(checkbox, index) {
    if (index === checkboxes.length - 1) {
        selectedCategories += checkbox.value;
    } else {
        selectedCategories += checkbox.value + "%1H";
    }
  });

  var minPrice = parseFloat(document.getElementById('min').value);
  var maxPrice = parseFloat(document.getElementById('max').value);

  

  var form = document.createElement("form");
        form.method = "GET";
        form.action = ".";
        
        // Tạo các trường input
        var a_Input = document.createElement("input");
        a_Input.type = "text";
        a_Input.name = "key";
        a_Input.value = keyParam;

        if(minPrice>=0){
          var n_Input = document.createElement("input");
          n_Input.type = "text";
          n_Input.name = "minPrice";
          n_Input.value = minPrice;
          form.appendChild(n_Input);
        }
        
        if(maxPrice>minPrice){
          var l_Input = document.createElement("input");
          l_Input.type = "text";
          l_Input.name = "maxPrice";
          l_Input.value = maxPrice;
          form.appendChild(l_Input);
        }

        if(selectedCategories != ""){
          var loai_Input = document.createElement("input");
          loai_Input.type = "text";
          loai_Input.name = "category";
          loai_Input.value = selectedCategories;
          form.appendChild(loai_Input);
        }
        
        
        // Thêm các trường input vào form
        form.appendChild(a_Input);
        
        
        // Thêm form vào body của trang
        document.body.appendChild(form);
        debugger;
        // Gửi form
        form.submit();
        
}

const logout = document.querySelector('.reset-button-style');

logout.addEventListener('click', function(){
  debugger;
  window.location.href = '../login/logout.php';
});


</script>
<?php
    include("../views/footer.php");
?>