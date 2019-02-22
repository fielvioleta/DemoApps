<div id="category-nav" class="sticky-top">
	<nav role="navigation" class="container">
		<ul class="nav nav-pills nav-fill">
		  @foreach($categories as $category)
			  <li class="nav-item">
			    <a class="nav-link" href="{{route('categories', $category->id)}}">{{ $category->name }}</a>
			  </li>
		  @endforeach
		</ul>
	</nav>
</div>