@extends('layouts.master')

@section('title', 'Shop Online')

@section('content')

<!-- slides -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://media.istockphoto.com/photos/wide-perspective-of-empty-supermarket-picture-id487145302" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.plummersmarket.com/images/home/slider-04.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://cdn-vz-info.ecomparemo.com/wordpress-media/2016/04/8-Wide-Grocery-Floors.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- other header start -->
<center><div class="header_mart">
    <div class="display-4">
        Pakistan No's 1 Grocery site
    </div>
</div></center>
<!-- cards -->
<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="card-deck">
              <div class="j card">
                <img class="card-img-top" src="https://www.tazamart.pk/wp-content/uploads/2018/10/breakfast.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
              <div class="j card">
                <img class="card-img-top" src="https://www.tazamart.pk/wp-content/uploads/2018/10/dairy-products.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
              <div class="j card">
                <img class="card-img-top" src="https://www.tazamart.pk/wp-content/uploads/2018/10/breakfast.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
              <div class="j card">
                <img class="card-img-top" src="https://www.tazamart.pk/wp-content/uploads/2018/10/pasta-and-noodles.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="card-deck">
              <div class="j card">
                <img class="card-img-top" src="https://www.tazamart.pk/wp-content/uploads/2018/10/breakfast.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
              <div class="j card">
                <img class="card-img-top" src="https://www.tazamart.pk/wp-content/uploads/2018/10/dairy-products.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
              <div class="j card">
                <img class="card-img-top" src="https://www.tazamart.pk/wp-content/uploads/2018/10/breakfast.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
              <div class="j card">
                <img class="card-img-top" src="https://www.tazamart.pk/wp-content/uploads/2018/10/pasta-and-noodles.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<!-- some products -->
<section class="feature_product_area section_gap">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
						<h2>Featured Products</h2>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
				</div>
				<div class="row">
					<div class="col col1">
						<div class="f_p_item">
							<div class="f_p_img">
								<img class="img-fluid" src="img/product/feature-product/f-p-1.jpg" alt="">
								<div class="p_icon">
                                    <button type="button" class="btn btn-primary btn-block btn-sm" name="button">Add to Cart</button>

								</div>
							</div>
							<a href="#">
								<h4>Long Sleeve TShirt</h4>
							</a>
							<h5>$150.00</h5>
                            <button type="button" class="btn btn-success btn-gol" name="button">Add to Cart</button>

						</div>
					</div>
					<div class="col col2">
						<div class="f_p_item">
							<div class="f_p_img">
								<img class="img-fluid" src="img/product/feature-product/f-p-2.jpg" alt="">
								<div class="p_icon">

								</div>
							</div>
							<a href="#">
								<h4>Long Sleeve TShirt</h4>
							</a>
							<h5>$150.00</h5>
                            <button type="button" class="btn btn-success btn-gol" name="button">Add to Cart</button>

						</div>
					</div>
					<div class="col col3">
						<div class="f_p_item">
							<div class="f_p_img">
								<img class="img-fluid" src="img/product/feature-product/f-p-3.jpg" alt="">
								<div class="p_icon">
                                    <button type="button" class="btn btn-primary btn-block btn-sm" name="button">Add to Cart</button>

								</div>
							</div>
							<a href="#">
								<h4>Long Sleeve TShirt</h4>
							</a>
							<h5>$150.00</h5>
                            <button type="button" class="btn btn-success btn-gol" name="button">Add to Cart</button>

						</div>
					</div>
					<div class="col col4">
						<div class="f_p_item">
							<div class="f_p_img">
								<img class="img-fluid" src="img/product/feature-product/f-p-4.jpg" alt="">
								<div class="p_icon">
                                    <button type="button" class="btn btn-primary btn-block btn-sm" name="button">Add to Cart</button>

								</div>
							</div>
							<a href="#">
								<h4>Long Sleeve TShirt</h4>
							</a>
							<h5>$150.00</h5>
                            <button type="button" class="btn btn-success btn-gol" name="button">Add to Cart</button>

						</div>
					</div>
					<div class="col col5">
						<div class="f_p_item">
							<div class="f_p_img">
								<img class="img-fluid" src="img/product/feature-product/f-p-5.jpg" alt="">
								<div class="p_icon">
                                    <button type="button" class="btn btn-primary btn-block btn-sm" name="button">Add to Cart</button>

								</div>
							</div>
							<a href="#">
								<h4>Long Sleeve TShirt</h4>
							</a>
							<h5>$150.00</h5>
                            <button type="button" class="btn btn-success btn-gol" name="button">Add to Cart</button>

						</div>
					</div>

					<div class="col col6">
						<div class="f_p_item">
							<div class="f_p_img">
								<img class="img-fluid" src="img/product/feature-product/f-p-5.jpg" alt="">
								<div class="p_icon">
                                    <button type="button" class="btn btn-primary btn-block btn-sm" name="button">Add to Cart</button>

								</div>
							</div>
							<a href="#">
								<h4>Long Sleeve TShirt</h4>
							</a>
							<h5>$150.00</h5>
                            <button type="button" class="btn btn-success btn-gol" name="button">Add to Cart</button>

						</div>
					</div>

					<div class="col col7">
						<div class="f_p_item">
							<div class="f_p_img">
								<img class="img-fluid" src="img/product/feature-product/f-p-4.jpg" alt="">
								<div class="p_icon">
                                    <button type="button" class="btn btn-primary btn-block btn-sm" name="button">Add to Cart</button>

								</div>
							</div>
							<a href="#">
								<h4>Long Sleeve TShirt</h4>
							</a>
							<h5>$150.00</h5>
                            <button type="button" class="btn btn-success btn-gol" name="button">Add to Cart</button>

						</div>
					</div>

					<div class="col col8">
						<div class="f_p_item">
							<div class="f_p_img">
								<img class="img-fluid" src="img/product/feature-product/f-p-5.jpg" alt="">
								<div class="p_icon">
                                    <button type="button" class="btn btn-primary btn-block btn-sm" name="button">Add to Cart</button>

								</div>
							</div>
							<a href="#">
								<h4>Long Sleeve TShirt</h4>
							</a>
							<h5>$150.00</h5>
                            <button type="button" class="btn btn-success btn-gol" name="button">Add to Cart</button>

						</div>
					</div>
					<div class="col col9">
						<div class="f_p_item">
							<div class="f_p_img">
								<img class="img-fluid" src="img/product/feature-product/f-p-1.jpg" alt="">
								<div class="p_icon">
                                    <button type="button" class="btn btn-primary btn-block btn-sm" name="button">Add to Cart</button>

								</div>
							</div>
							<a href="#">
								<h4>Long Sleeve TShirt</h4>
							</a>
							<h5>$150.00</h5>
                            <button type="button" class="btn btn-success btn-gol" name="button">Add to Cart</button>

						</div>
					</div>
					<div class="col col10">
						<div class="f_p_item">
							<div class="f_p_img">
								<img class="img-fluid" src="img/product/feature-product/f-p-4.jpg" alt="">
								<div class="p_icon">
                                    <button type="button" class="btn btn-primary btn-block btn-sm" name="button">Add to Cart</button>

								</div>
							</div>
							<a href="#">
								<h4>Long Sleeve TShirt</h4>
							</a>
							<h5>$150.00</h5>
                            <button type="button" class="btn btn-success btn-gol" name="button">Add to Cart</button>
						</div>
					</div>
				</div>

				<div class="row">
					<nav class="cat_page mx-auto" aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#">
									<i class="fa fa-chevron-left" aria-hidden="true"></i>
								</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="#">01</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">02</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">03</a>
							</li>
							<li class="page-item blank">
								<a class="page-link" href="#">...</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">09</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!--================End Feature Product Area =================-->
    <!--================Clients Logo Area =================-->

        <ul class="nav justify-content-center">
            <li class="o nav-item">
                <img src="https://www.tazamart.pk/wp-content/uploads/2018/10/Dettol-RB.jpg" alt="">

            </li>
          <li class="o nav-item">
              <img src="https://www.tazamart.pk/wp-content/uploads/2018/10/Lays.jpg" alt="">

          </li>
          <li class="o nav-item">
              <img src="https://www.tazamart.pk/wp-content/uploads/2018/10/fauji.png.jpg" alt="">

          </li>
          <li class="o nav-item">
              <img src="https://www.tazamart.pk/wp-content/uploads/2018/10/Lays.jpg" alt="">

          </li>
          <li class="o nav-item">
              <img src="https://www.tazamart.pk/wp-content/uploads/2018/10/Dettol-RB.jpg" alt="">

          </li>
          <li class="o nav-item">
              <img src="https://www.tazamart.pk/wp-content/uploads/2018/10/Clean-Clear.png.jpg" alt="">

          </li>
          <li class="o nav-item">
              <img src="https://www.tazamart.pk/wp-content/uploads/2018/10/Lays.jpg" alt="">

          </li>
          <li class="o nav-item">
              <img src="https://www.tazamart.pk/wp-content/uploads/2018/10/Dettol-RB.jpg" alt="">

          </li>
          <li class="o nav-item">
              <img src="https://www.tazamart.pk/wp-content/uploads/2018/10/milkpak1.jpg" alt="">

          </li>
        </ul>
    	<!--================End Clients Logo Area =================-->




@endsection
