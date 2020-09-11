<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Irvan Rizki</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('include.style')
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	 
	@include('include.navbar')
	
	
	{{-- first page --}}
	<section class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
          	<div class="text text-center">
          		<span class="subheading">Hey! I am</span>
		  				<h1>Muhamad Irvan Rizki</h1>
			  				<h2>I'm a 
								  <span
								     class="txt-rotate"
								     data-period="2000"
								     data-rotate='[ "Web Designer.", "Developer.", "And Blogger" ]'></span>
								</h2>
							</div>
            </div>
          </div>
        </div>
      </div>
      <div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
				</a>
			</div>
    </section>

	@include('include.about')
    
	@include('include.resumes')
    
	@include('include.project')
	
	@include('include.blog')

	@include('include.freelance')

	@include('include.contact')
	
	@include('include.footer')
	

  @include('include.script')
    
  </body>
</html>