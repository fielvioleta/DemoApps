<div id="category-nav" class="bg-light sticky-top">
	<nav role="navigation">
		<ul class="nav nav-pills nav-fill">
		  @foreach($categories as $category)
			  <li class="nav-item">
			    <a class="nav-link" href="{{route('categories')}}">{{ $category->name }}</a>
			  </li>
		  @endforeach
		</ul>
	</nav>
</div>