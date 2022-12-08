<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
    
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Fredoka+One&display=swap" rel="stylesheet">
</head>
<style>

header {
    background-color: #dc8c80;
    border: #f3c191 5px solid;
    border-radius: 15px;
}

.estilo{
font-family: 'Balsamiq Sans', cursive;
font-family: 'Fredoka One', cursive;
-webkit-text-stroke: 2px #916752;
}

.estilo2{
font-family: 'Balsamiq Sans', cursive;
font-family: 'Fredoka One', cursive;
-webkit-text-stroke: 1px #916752;

}




/* CSS */
.button-19 {
  appearance: button;
  background-color: #916752;
  border: solid transparent;
  border-radius: 16px;
  border-width: 0 0 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: din-round,sans-serif;
  font-size: 15px;
  font-weight: 700;
  letter-spacing: .8px;
  line-height: 20px;
  margin: 0;
  outline: none;
  overflow: visible;
  padding: 13px 16px;
  text-align: center;
  text-transform: uppercase;
  touch-action: manipulation;
  transform: translateZ(0);
  transition: filter .2s;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: middle;
  white-space: nowrap;
  width: 100%;
}

.button-19:after {
  background-clip: padding-box;
  background-color: #f3c191;
  border: solid transparent;
  border-radius: 16px;
  border-width: 0 0 4px;
  bottom: -4px;
  content: "";
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: -1;
}

.button-19:main,
.button-19:focus {
  user-select: auto;
}

.button-19:hover:not(:disabled) {
  filter: brightness(1.1);
}

.button-19:disabled {
  cursor: auto;
}



.button-18 {
  appearance: button;
  background-color: #D3D9D3;
  border: solid transparent;
  border-radius: 16px;
  border-width: 0 0 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: din-round,sans-serif;
  font-size: 15px;
  font-weight: 700;
  letter-spacing: .8px;
  line-height: 20px;
  margin: 0;
  outline: none;
  overflow: visible;
  padding: 13px 16px;
  text-align: center;
  text-transform: uppercase;
  touch-action: manipulation;
  transform: translateZ(0);
  transition: filter .2s;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: middle;
  white-space: nowrap;
  width: 100%;
}

.button-18:after {
  background-clip: padding-box;
  background-color: #B5B8B5;
  border: solid transparent;
  border-radius: 16px;
  border-width: 0 0 4px;
  bottom: -4px;
  content: "";
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: -1;
}

.button-18:main,
.button-18:focus {
  user-select: auto;
}

.button-18:hover:not(:disabled) {
  filter: brightness(1.1);
}

.button-18:disabled {
  cursor: auto;
}


.button-17 {
  appearance: button;
  background-color: #64CF5E;
  border: solid transparent;
  border-radius: 16px;
  border-width: 0 0 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: din-round,sans-serif;
  font-size: 15px;
  font-weight: 700;
  letter-spacing: .8px;
  line-height: 20px;
  margin: 0;
  margin-top: 30px;
  outline: none;
  overflow: visible;
  padding: 13px 16px;
  text-align: center;
  text-transform: uppercase;
  touch-action: manipulation;
  transform: translateZ(0);
  transition: filter .2s;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: middle;
  white-space: nowrap;
  width: 10%;
}

.button-17:after {
  background-clip: padding-box;
  background-color: #3DBC36;
  border: solid transparent;
  border-radius: 16px;
  border-width: 0 0 4px;
  bottom: -4px;
  content: "";
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: -1;
}

.button-17:main,
.button-17:focus {
  user-select: auto;
}

.button-17:hover:not(:disabled) {
  filter: brightness(1.1);
}

.button-17:disabled {
  cursor: auto;
}

.button-16 {
  appearance: button;
  background-color: #F58868;
  border: solid transparent;
  border-radius: 16px;
  border-width: 0 0 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: din-round,sans-serif;
  font-size: 15px;
  font-weight: 700;
  letter-spacing: .8px;
  line-height: 20px;
  margin: 0;
  outline: none;
  overflow: visible;
  padding: 13px 16px;
  text-align: center;
  text-transform: uppercase;
  touch-action: manipulation;
  transform: translateZ(0);
  transition: filter .2s;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: middle;
  white-space: nowrap;
  width: 50%;
}

.button-16:after {
  background-clip: padding-box;
  background-color: #F16A42;
  border: solid transparent;
  border-radius: 16px;
  border-width: 0 0 4px;
  bottom: -4px;
  content: "";
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: -1;
}

.button-16:main,
.button-16:focus {
  user-select: auto;
}

.button-16:hover:not(:disabled) {
  filter: brightness(1.1);
}

.button-16:disabled {
  cursor: auto;
}



.button-15 {
  appearance: button;
  background-color: #4FA6E8;
  border: solid transparent;
  border-radius: 16px;
  border-width: 0 0 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: din-round,sans-serif;
  font-size: 15px;
  font-weight: 700;
  letter-spacing: .8px;
  line-height: 20px;
  margin: 0;
  outline: none;
  overflow: visible;
  padding: 13px 16px;
  text-align: center;
  text-transform: uppercase;
  touch-action: manipulation;
  transform: translateZ(0);
  transition: filter .2s;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: middle;
  white-space: nowrap;
  width: 100%;
}

.button-15:after {
  background-clip: padding-box;
  background-color: #89C1EC;
  border: solid transparent;
  border-radius: 16px;
  border-width: 0 0 4px;
  bottom: -4px;
  content: "";
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: -1;
}

.button-15:main,
.button-15:focus {
  user-select: auto;
}

.button-15:hover:not(:disabled) {
  filter: brightness(1.1);
}

.button-15:disabled {
  cursor: auto;
}





/* CSS */
.button-55 {
  align-self: center;
  background-color: #fff;
  background-image: none;
  background-position: 0 90%;
  background-repeat: repeat no-repeat;
  background-size: 4px 3px;
  border-radius: 15px 225px 255px 15px 15px 255px 225px 15px;
  border-style: solid;
  border-width: 2px;
  box-shadow: rgba(0, 0, 0, .2) 15px 28px 25px -18px;
  box-sizing: border-box;
  color: #41403e;
  cursor: pointer;
  display: inline-block;
  font-family: Neucha, sans-serif;
  font-size: 1rem;
  line-height: 23px;
  outline: none;
  padding: .75rem;
  text-decoration: none;
  transition: all 235ms ease-in-out;
  border-bottom-left-radius: 15px 255px;
  border-bottom-right-radius: 225px 15px;
  border-top-left-radius: 255px 15px;
  border-top-right-radius: 15px 225px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-55:hover {
  box-shadow: rgba(0, 0, 0, .3) 2px 8px 8px -5px;
  transform: translate3d(0, 2px, 0);
}

.button-55:focus {
  box-shadow: rgba(0, 0, 0, .3) 2px 8px 4px -6px;
}









</style>
<body class=" h-screen antialiased leading-none font-sans" >

    <div id="app" >
        
        <header class="py-6" >
            <div class="container mx-auto flex justify-between items-center px-6">
                
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                
                    <img src="/images/logo.png" alt="logo">
                    </a>

                </div>
  



                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    
                <ul>
           

 
                    
                <li>
                <a class="estilo2" href="/">
                <img src="/images/home.png"> 
                    Inicio
                </a>
                </li>

                <li>
                <a class="estilo2" href="/blog">
                <img src="/images/blog.png"> 
                    Foro
                </a>
                </li>

                    @guest
                        <li>
                        <a class="estilo2" href="{{ route('login') }}">
                        <img src="/images/login.png">
                        {{ __('Login') }}
                        </a>
                        </li>

                        @if (Route::has('register'))

                        <li>
                        <a class="estilo2" href="{{ route('register') }}">
                        <img src="/images/reg.png">        
                        {{ __('Registrarse') }}
                        </a>
                        </li>
                    
                        @endif
                    @else

                    <li>
                    <a href="{{ route('user.profile') }}" class="estilo2">
                    <img src="/images/user.png"> 
                    <span>{{ Auth::user()->name }}</span>
                    </a>
                    </li>

                    <li>
                    <a href="{{ route('logout') }}"
                    class="estilo2"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <img src="/images/log.png"> 
                    {{ __('Logout') }}
                    </a>
                    </li>
                    </ul>



                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                        
      
                       
                    @endguest

    
  


       
                </nav>
                
            </div>
            
        </header>

        <div>
        @yield('content')
        
        </div>
 


        

        <div>
        @include('layouts.footer')
        </div>

    </div>




</body>
</html>
