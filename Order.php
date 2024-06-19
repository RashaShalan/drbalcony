<!DOCTYPE html>
<html>
<head>
<title>Dr balcony - code test</title>
<link rel="stylesheet" href="style/styles.css">
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>

<script type="text/javascript" src="./js/scripts.js"></script>

</head>
<body>


<nav class="sticky navbar">
	

	<input type="checkbox" id="nav" class="hidden" />
	<label for="nav" class="nav__open"><i></i><i></i><i></i></label>
	<div class="nav">
		<ul class="nav__items">
			<li class="nav__item"><a href="index.php" class="nav__link">Register</a></li>
			<li class="nav__item"><a href="Order.php" class="nav__link">Order form</a></li>
			<li class="nav__item"><a href="report.php" class="nav__link">Report</a></li>
		</ul>
	</div>
</nav>

<main>
	<section class="home" id="mainDiv">
	<!-- Registration 3 - Bootstrap Brain Component -->
<section class="p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="row">
     
      <div class="col-12 col-md-6 bsb-tpl-bg-lotion">
        <div class="p-3 p-md-4 p-xl-5">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h2 class="h3">Order Form</h2>
                <h3 class="fs-6 fw-normal text-secondary m-0">Enter your order details </h3>
                <span id="errorLog" class="error"></span>
                <span id="sucessLog" class="sucess"></span>
              </div>
            </div>
          </div>
          <form action="order.php" method="post" id="orderForm">
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="Username" class="form-label">Customer <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="Username" id="Username" placeholder="User Name" required >
                <input type="hidden" name="user_id" id="user_id">
                <span id="Usererror" class="error"></span>
                 
              </div>
              <div class="col-12">
                <label for="product_name" class="form-label">Product name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Product name " required>
              </div>
              <div class="col-12">
                <label for="quantity" class="form-label">Quantity <span class="text-danger">*</span></label>
                <input type="number" step="0.5" class="form-control" name="quantity" id="quantity" value="1" placeholder="Quantity" onchange="Calcprice()" required>
              </div>
              <div class="col-12">
                <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
                <input type="number" step="0.5" class="form-control" name="price" id="price" placeholder="Price" value="1" onchange="Calcprice()" required>
              </div>
              <div class="col-12">
                <label for="total_price" class="form-label">Total price <span class="text-danger">*</span></label>
                <input type="number" value="1" class="form-control" name="total_price" id="total_price" placeholder="Total price" required readOnly>
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <button class="btn bsb-btn-xl btn-primary" type="button" onclick="saveOrder()">Save</button>
                </div>
              </div>
            </div>
          </form>
         
       
        </div>
      </div>
    </div>
  </div>
</section>        
	</section>
	
</main>




</body>
<script>
   $( function() {
    function log( message ) {
      $( "<div>" ).text( message ).prependTo( "#log" );
      $( "#log" ).scrollTop( 0 );
    }
    $( "#Username" ).autocomplete({
      source: function (request, response) {
        $.getJSON("library.php?module=orders&submodule=checkusers&q=" + request.term, function (data) {
            response($.map(data, function (value, key) {
                return {
                    label: value,
                    value: value,
                    id:key
                };
            }));
        });
    },
    minLength: 2,
    delay: 100,
    select: function( event, ui ) {
      console.log(ui)
       $('#user_id').val(ui.item.id)
      }
    });
  } );
  </script>
</html>