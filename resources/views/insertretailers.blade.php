<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<h1 class="text-center">Wellcome to our Ebonik site</h1>
	<form method="POST" action="/store">
		@csrf
		<div class="mb-3">
			<label><b>Company Id</b></label>
			<input type="text" name="id"  class="form-control">
		</div>
		<div class="mb-3">
			<label><b>Company Name</b></label>
			<input type="text" name="company"  class="form-control">
		</div>
		<div class="mb-3">
			<label><b>Product Name</b></label>
			<input type="text" name="product_type"  class="form-control">
		</div>
		<div class="mb-3">
			<label><b>Product Quantity</b></label>
			<input type="text" name="product_quantity"  class="form-control">
		</div>
		<div class="mb-3">
			<label><b>Order date</b></label>
			<input type="text" name="order_date"  class="form-control">
		</div>
		<div class="mb-3">
			<label><b>Payment</b></label>
			<input type="text" name="payment"  class="form-control">
		</div>
		<div class="mb-3">
			<label><b>Delivery Date</b></label>
			<input type="text" name="delivery_date"  class="form-control">
		</div>
		<input type="submit" name="insert" value="Submit" class="btn btn-primary">
	</form>
</div>

</body>
</html>