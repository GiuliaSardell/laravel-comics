
  @extends('layout.mainLayout')

  @section('content')

  

  <main> 
    <div class="container flex-column">
      
      <h1 style="color: white">HOME</h1>

      <div class="row my-5 justify-content-center align-item-center">
      
        @foreach ($products as $product)
          <div class="box flex-column justify-content-center my-4">

            <img src="{{$product['thumb']}}" alt="{{$product['title']}}">
            <h5 style="text-align:center; color: white;">{{$product['title']}}</h5>

          </div>
            
        @endforeach
        
     
        


 

      </div>
      
    </div>
    <div class="div-button"><button>Load more</button></div>
  </main>

  @endsection

