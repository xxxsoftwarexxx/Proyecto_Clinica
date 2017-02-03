@extends('index')

@section('benners')
<div class="banner page_head"></div>
@endsection
@section('mas')
<div class="about-page">
	<div class="container">
		<h3 class="tittle">Sobre nosotros</h3>
            <div class="col-md-6 about_img wow fadeInRight animated" data-wow-delay=".5s">
				<img src="images/g1.jpg" alt="">
            </div>
			<div class="col-md-6 about_img about_img_left">
				<div class="choose-grid wow fadeInRight animated" data-wow-delay=".5s">
					<h4>Temporibus autem quibusdam et aut officiis saepe eveniet ut et voluptates</h4>
					<p>Aenean ac leo eget nunc fringilla fringilla a non nulla! Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum justo eget.</p>
				</div>
				<div class="choose-grid wow fadeInLeft animated" data-wow-delay=".5s">
					<h4>Necessitatibus saepe eveniet ut et </h4>
					<p>Aenean ac leo eget nunc fringilla fringilla a non nulla! Aenean ac leo eget nunc fringilla fringilla a non nulla! Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum justo eget.</p>
				</div>
            </div>
			<div class="clearfix"></div>
		<p class="para_abt wow fadeInUp animated" data-wow-delay=".5s">Temporibus autem quibusdam et aut officiis
		debitis aut rerum necessitatibus saepe eveniet ut et voluptates
		repudiandae sint et molestiae non recusandae. Sed ut perspiciatis
		unde omnis iste natus error sit voluptatem accusantium.</p>
	</div>
</div>
@endsection
@section('info')
	<div class="testimonials">
		<div class="container">
			<h3 class="tittle">Testimonials</h3>
			<div class="testimonials-grids">
				<div class="col-md-6 testimonials-grid animated wow slideInLeft" data-wow-delay=".5s">
					<div class="testimonials-grid1">
						<img src="images/3.png" alt=" " class="img-responsive" />
						<p>Chris Won</p>
					</div>
					<div class="testimonials-grid2">
						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
							suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur
							quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
					</div>
				</div>
				<div class="col-md-6 testimonials-grid">
					<div class="testimonials-grid1">
						<img src="images/4.png" alt=" " class="img-responsive" />
						<p>James Alley</p>
					</div>
					<div class="testimonials-grid2">
						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
							suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur
							quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	@endsection
