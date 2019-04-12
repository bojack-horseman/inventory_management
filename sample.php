<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<title>Product Type Listing</title>
	<link rel="stylesheet" href="http://assets.bookchor.in/global/vendor/bootstrap-4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="http://assets.bookchor.in/global/css/color.css"/>
	<link rel="stylesheet" href="http://assets.bookchor.in/global/css/global.css"/>
	<link rel="stylesheet" href="http://assets.bookchor.in/global/css/element.css"/>
	<link rel="stylesheet" type="text/css" href="http://assets.bookchor.in/global/css/header.css">
	<link rel="stylesheet" type="text/css" href="http://assets.bookchor.in/global/css/footer.css">
	<link rel="stylesheet" href="http://assets.bookchor.in/external/merchants/product_type/css/product-type-listing.css"/>
	<link rel="stylesheet" type="text/css" href="../assets/bookchor_icons/styles.css">
	<link rel="stylesheet" href="http://assets.bookchor.in/global/css/responsive.css">

</head>
<body>
	<?php include "../header/header.php"?>
	<!--manage products page start-->
	<div class="container-fluid wrapper outer" >
		<div class="row mr-0 ml-0" >
			<!--adding of new product start-->
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding-less" >
				<div class=" pannel-row ">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 add-listing">
						<h4 class="mb-0">Add Listing</h4>
					</div>
				</div>
				<div class=" all-product-list" id="accordion">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 main-list ">
						<ul class="ul-style">
							<li class="item1">
								<div class="item1-name panel-heading active" data-toggle="collapse" data-target="#input-form,#book-plus" id="book" data-parent="#accordion">
									<h6 class="heading-title">Books</h6><strong><a href="#" class="bc-bc-plus-icon plus-icon collapse show" id="book-plus" data-parent="#accordion"></a></strong>
								</div>
								<div class="sub-list panel-collapse collapse show " id="input-form"  data-parent="#accordion">
									<ul class=" item1-form">
										<li class="item1-form-detail" >
											<div class="col-lg-12 col-md-12 col-sm-12 col-12">
												<form>
													<div class="row">
														<div class="col-lg-4 col-md-4 col-sm-4 col-4 pl-0 pr-0 " >
															<label class="checkbox-inline mb-0">
																<input type="checkbox" value="" class="mr-2">New
															</label>
														</div>
														<div class="col-lg-4 col-md-4 col-sm-4 col-4 pl-0 pr-0">
															<label class="checkbox-inline mb-0">
																<input type="checkbox" value="" class="mr-2">Old
															</label>
														</div>
														<div class="col-lg-4 col-md-4 col-sm-4 col-4 pl-0 pr-0">
															<label class="checkbox-inline mb-0">
																<input type="checkbox" value="" class="mr-2">Mint
															</label>
														</div>
													</div>
												</form>
											</div>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 main-list " >
						<ul class="ul-style">
							<li class="item1">
								<div class="item1-name panel-heading" data-toggle="collapse" data-target="#magezine-form,#magezine-plus" id="Magazine" data-parent="#accordion">
									<h6 class="heading-title">Magazine</h6><a href="#" class="bc-bc-plus-icon plus-icon collapse" id="magezine-plus" data-parent="#accordion" ></a>
								</div>
								<div class="sub-list panel-collapse collapse" id="magezine-form" data-parent="#accordion">
									<ul class=" item1-form">
										<li class="item1-form-detail" >
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<form >
													<div class="row">
														<div class="col-lg-4 col-md-4 col-sm-4 col-4 pl-0 pr-0">
															<label class="checkbox-inline mb-0">
																<input type="checkbox" value="" class="mr-2">New
															</label>
														</div>
														<div class="col-lg-4 col-md-4 col-sm-4 col-4 pl-0 pr-0">
															<label class="checkbox-inline mb-0">
																<input type="checkbox" value="" class="mr-2">Old
															</label>
														</div>
														<div class="col-lg-4 col-md-4 col-sm-4 col-4 pl-0 pr-0">
															<label class="checkbox-inline mb-0">
																<input type="checkbox" value="" class="mr-2">Mint
															</label>
														</div>
													</div>
												</form>
											</div>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 main-list ">
						<ul class="ul-style">
							<li class="item1">
								<div class="item1-name panel-heading" data-toggle="collapse" data-target="#donate-form,#donate-plus" data-parent="#accordion">
									<h6 class="heading-title">Donate</h6><a href="#" class="bc-bc-plus-icon plus-icon collapse" id="donate-plus" data-parent="#accordion" ></a>
								</div>
								<div class="sub-list panel-collapse collapse" id="donate-form" data-parent="#accordion">
									<ul class=" item1-form">
										<li class="item1-form-detail" >
											<div class="col-lg-12 col-md-12 col-sm-12 col-12">
												<form >
													<div class="row">
														<div class="col-lg-4 col-md-4 col-sm-4 col-4 pl-0 pr-0">
															<label class="checkbox-inline mb-0">
																<input type="checkbox" value="" class="mr-2">New
															</label>
														</div>
														<div class="col-lg-4 col-md-4 col-sm-4 col-4 pl-0 pr-0 ">
															<label class="checkbox-inline mb-0">
																<input type="checkbox" value="" class="mr-2">Old
															</label>
														</div>
														<div class="col-lg-4 col-md-4 col-sm-4 col-4 pl-0 pr-0">
															<label class="checkbox-inline mb-0">
																<input type="checkbox" value="" class="mr-2">Mint
															</label>
														</div>
													</div>
												</form>
											</div>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-list ">
						<ul class="ul-style">
							<li class="item1">
								<div class="item1-name panel-heading" data-toggle="collapse" data-target="#erager-form,#erager-plus" data-parent="#accordion">
									<h6 class="heading-title">Erager</h6><a href="#" class="bc-bc-plus-icon plus-icon collapse" id="erager-plus" data-parent="#accordion"></a>
								</div>
								<div class="sub-list panel-collapse collapse" id="erager-form" data-parent="#accordion">
									<ul class=" item1-form">
										<li class="item1-form-detail" >
											<div class="col-lg-12 col-md-12 col-sm-12 col-12">
												<form >
													<div class="row">
														<div class="col-lg-4 col-md-4 col-sm-4 col-4 pl-0 pr-0 ">
															<label class="checkbox-inline mb-0">
																<input type="checkbox" value="" class="mr-2">New
															</label>
														</div>
														<div class="col-lg-4 col-md-4 col-sm-4 col-4 pl-0 pr-0">
															<label class="checkbox-inline mb-0">
																<input type="checkbox" value="" class="mr-2">Old
															</label>
														</div>
														<div class="col-lg-4 col-md-4 col-sm-4 col-4 pl-0 pr-0">
															<label class="checkbox-inline mb-0">
																<input type="checkbox" value="" class="mr-2">Mint
															</label>
														</div>
													</div>
												</form>
											</div>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-list ">
						<div class="expend-icon" >
							<div class="expend-icon-font">
								<span href="#" class="bc-bc-down-arrow"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--adding of new product end-->
			<!-- product-added-list start-->
			<div class="col-lg-8 col-md-8 col-sm-12 col-12 padding-less"  >
				<div class="table-responsive table-wrapper">
					<table class="table table-style">
						<thead class="heading-box">
							<tr>
								<th class="table-heading">Name</th>
								<th class="table-heading">Condition</th>
								<th class="table-heading">Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="table-details">BOOK</td>
								<td class="table-details">New/Old</td>
								<td class="table-details">Pending
									<div class="edit-button toogle-click" data-toggle="dropdown">
										<div class="dropdown-menu">
											<a class="dropdown-item dropdown-links" href="#">delete</a>
											<a class="dropdown-item " href="#">edit</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td class="table-details">BOOK</td>
								<td class="table-details">New/Old</td>
								<td class="table-details">Pending
									<div class="edit-button toogle-click" data-toggle="dropdown">
										<div class="dropdown-menu">
											<a class="dropdown-item dropdown-links" href="#">delete</a>
											<a class="dropdown-item" href="#">edit</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td class="table-details">BOOK</td>
								<td class="table-details">New/Old</td>
								<td class="table-details">Pending
									<div class="edit-button toogle-click" data-toggle="dropdown">
										<div class="dropdown-menu">
											<a class="dropdown-item dropdown-links" href="#">delete</a>
											<a class="dropdown-item" href="#">edit</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td class="table-details">BOOK</td>
								<td class="table-details">New/Old</td>
								<td class="table-details">Pending

									<div class="edit-button toogle-click" data-toggle="dropdown">
										<div class="dropdown-menu">
											<a class="dropdown-item dropdown-links" href="#">delete</a>
											<a class="dropdown-item" href="#">edit</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td class="table-details">BOOK</td>
								<td class="table-details">New/Old</td>
								<td class="table-details">Pending
									<div class="edit-button toogle-click" data-toggle="dropdown">
										<div class="dropdown-menu">
											<a class="dropdown-item dropdown-links" href="#">delete</a>
											<a class="dropdown-item" href="#">edit</a>
										</div>
									</div>
								</td>							</tr>
								<tr>
									<td class="table-details">BOOK</td>
									<td class="table-details">New/Old</td>
									<td class="table-details">Pending
										<div class="edit-button toogle-click" data-toggle="dropdown">
											<div class="dropdown-menu">
												<a class="dropdown-item dropdown-links" href="#">delete</a>
												<a class="dropdown-item" href="#">edit</a>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- product-added-list end-->
			</div>
		</div>
		<!--manage products page end-->
		<?php include "../footer/footer.php";?>
	</body>
	<script src="http://assets.bookchor.in/global/vendor/bootstrap-4/js/jquery.js"></script>
	<script src="http://assets.bookchor.in/global/vendor/bootstrap-4/js/popper.js"></script>
	<script src="http://assets.bookchor.in/global/vendor/bootstrap-4/js/bootstrap.min.js"></script>
	<script src="http://assets.bookchor.in/global/scripts/global.js"></script>
	<script src="http://assets.bookchor.in/external/merchants/product_type/js/product-type-listing.js"></script>
