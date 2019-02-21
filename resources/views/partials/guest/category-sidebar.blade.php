<div class="sidebar col-md-3">
<div class="spacer"></div>
  <div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Group Item #1 <i class="fa fa-angle-down"></i>
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          <ul class="nav flex-column">
            @foreach($categories as $category)
              <li class="nav-item">
                <a class="nav-link" href="category.html">{{ $category->name }}</a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Group Item #2 <i class="fa fa-angle-down"></i>
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          <ul class="nav flex-column">
            @foreach($categories as $category)
              <li class="nav-item">
                <a class="nav-link" href="category.html">{{ $category->name }}</a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Group Item #3 <i class="fa fa-angle-down"></i>
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          <ul class="nav flex-column">
            @foreach($categories as $category)
              <li class="nav-item">
                <a class="nav-link" href="category.html">{{ $category->name }}</a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>