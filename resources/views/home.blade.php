<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Document</title>
</head>
<body>
  <h1>HOME</h1>

  <header>
    <div class="container">
      <a href="#">
        <img src="{{asset('img/dc-logo.png')}}" alt="logo">
      </a>
      <nav>
        <ul>
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
    </div>
   
    
  </header>

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