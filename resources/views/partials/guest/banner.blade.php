<div class="banner">
	<div class="container">
		<div class="row">
			
			@foreach($categories as $category)
                <div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url({{ asset('/storage/categories/'.$category->image_path) }})">
						<div class="banner_category">
							<a href="categories.html">{{$category->name}}</a>
						</div>
					</div>
				</div>
            @endforeach
			
		</div>
	</div>
</div>