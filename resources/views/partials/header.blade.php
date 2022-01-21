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