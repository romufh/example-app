@props([
  'title',
  'describ'=>'',
  'img'=>''

  ])


<div class="card group hover:shadow-sm sm:max-w-sm">
  <figure>
    <img src={{ $img }} alt="Shoes" class="transition-transform duration-500 group-hover:scale-110" />
  </figure>
  <div class="card-body">
    <h5 class="card-title mb-2.5">{{$title}}</h5>
    <p class="mb-6">{{$describ}}</p>
    <div class="card-actions">
      <button class="btn btn-primary">Buy Now</button>
      <button class="btn btn-soft">Add to cart</button>
    </div>
  </div>
</div>
