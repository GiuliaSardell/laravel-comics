<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Document</title>
</head>
<body>

  <header>
    <div class="container">
      <a href="{{ route('home') }}">
        <img src="{{asset('img/dc-logo.png')}}" alt="logo">
      </a>
      <nav>
        <ul>

          <li>
            <a class="{{ (Route::currentRouteName() === 'characters') ? 'active' : '' }}" href="{{ route('characters') }}">characters</a>
          </li>
          <li>
            <a class="{{ (Route::currentRouteName() === 'movies') ? 'active' : '' }}" href="{{ route('movies') }}">movies</a>
          </li>
          <li>
            <a class="{{ (Route::currentRouteName() === 'tv') ? 'active' : '' }}" href="{{ route('tv') }}">tv</a>
          </li>
          <li>
            <a class="{{ (Route::currentRouteName() === 'games') ? 'active' : '' }}" href="{{ route('games') }}">games</a>
          </li>
          <li>
            <a class="{{ (Route::currentRouteName() === 'collectibles') ? 'active' : '' }}" href="{{ route('collectibles') }}">collectibles</a>
          </li>
          <li>
            <a class="{{ (Route::currentRouteName() === 'videos') ? 'active' : '' }}" href="{{ route('videos') }}">videos</a>
          </li>
          <li>
            <a class="{{ (Route::currentRouteName() === 'fans') ? 'active' : '' }}" href="{{ route('fans') }}">fans</a>
          </li>
          <li>
            <a class="{{ (Route::currentRouteName() === 'news') ? 'active' : '' }}" href="{{ route('news') }}">news</a>
          </li>
       
        
          {{-- <li v-for="(item,index) in links" :key="index">
            <a :href="item.url">{{item.text}}</a>
          </li> --}}

          {{-- <li>
            <a class="{{ (route" href=""></a>
          </li> --}}
       
            {{-- @foreach ($data as $singleData)
              <li>
                {{$singleData['text']}}
              </li>
            @endforeach   --}}

          

        </ul>
      </nav>
      
      <input type="password" class="form-control" id="inputPassword2" placeholder="Search..." style="width: 200px">
      <button type="submit" class="btn btn-primary">GO</button>
      

    </div>
   
    
  </header>

  <div class="jumbo">
      
  </div>

  <main> 
    <div class="container">
      
       
    
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

  <footer> 
    <div class="footer-top">
      <div class="container">
        <div class="column">
          <ul>
            <li><span>dc comics</span></li>
            <li><a href="#">Characters</a></li>
            <li><a href="#">Comics</a></li>
            <li><a href="#">Movies</a></li>
            <li><a href="#">TV</a></li>
            <li><a href="#">Games</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="#">News</a></li>
          </ul>
          <ul>
            <li><span>shop</span></li>
            <li><a href="#">Shop DC</a></li>
            <li><a href="#">Shop DC Collectibles</a></li>
          </ul>
        </div>

        <ul>
          <li><span>dc comics</span></li>
          <li><a href="#">Characters</a></li>
          <li><a href="#">Comics</a></li>
          <li><a href="#">Movies</a></li>
          <li><a href="#">TV</a></li>
          <li><a href="#">Games</a></li>
          <li><a href="#">Videos</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Videos</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Videos</a></li>
          <li><a href="#">News</a></li>
        </ul>

        <ul>
          <li><span>shop</span></li>
          <li><a href="#">Shop DC</a></li>
          <li><a href="#">Shop DC Collectibles</a></li>
          <li><a href="#">Shop DC Collectibles</a></li>
          <li><a href="#">Shop DC Collectibles</a></li>
          <li><a href="#">Shop DC Collectibles</a></li>
        </ul>

        <div class="sfondo">

        </div>
        <!-- <img src="../assets/img/dc-logo-bg.png" alt=""> -->

      </div>

    </div>
    <div class="footer-bottom">
      <div class="container">
        <button>Sign-up now</button>
        <nav>
          <span>follow us</span>
          <img src="../assets/img/footer-facebook.png" alt="">
          <img src="../assets/img/footer-facebook.png" alt="">
          <img src="../assets/img/footer-facebook.png" alt="">
          <img src="../assets/img/footer-facebook.png" alt="">
          <img src="../assets/img/footer-facebook.png" alt="">
        </nav>

      </div>
    </div>

  </footer>
</body>
</html>