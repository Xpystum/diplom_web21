  @extends("layouts.{$layout}")
  @section('title', 'Одобренные')
  @section('content')
  
  <h1><i class="fa-solid fa-circle-check"></i> Список товаров | Одобренные</h1>
    <div class="table-wrap">
      {{ $products->links('vendor.pagination.bootstrap-5') }}
      @yield('table-product')
      {{ $products->links('vendor.pagination.bootstrap-5') }}
    </div>
    
    

  @endsection