
  @extends('layout.mainLayout')

  @section('content')

  <main> 
    <div class="container">
      
      <h1 style="color: white">VIDEOS</h1>
       
    
      <div class="box">
        {{-- <ProductCard v-for="(product, index) in productList" 
        :key="index" 
        :productName="product.series"
        :productImage="product.thumb"
        /> --}}

        

      </div>
      
    </div>
    <div class="div-button"><button>Load more</button></div>
  </main>

  @endsection

