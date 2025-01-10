<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.html">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>

            <li class="nav-item">
                @if (Route::has('login'))
                    <!-- <nav class="-mx-3 flex flex-1 justify-end"> -->
                        @auth

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('showcart')}}">
                            <i class="fas fa-shopping-cart"></i>
                              Cart[{{$count}}]</a>
                        </li>


                        <li>
                         <x-app-layout>  

                        </x-app-layout>
                        </li>
                            
                @else
                    <li><a
                        href="{{ route('login') }}"
                        class="nav-link"
                        >
                            Log in
                        </a></li>

                @if (Route::has('register'))
                    <li><a
                        href="{{ route('register') }}"
                        class="nav-link"
                    >
                        Register
                     </a></li>
                @endif
                    @endauth
                    <!-- </nav> -->
                @endif
            </li>
            </ul>
          </div>
        </div>
      </nav>
      @if(session()->has('message'))
        <!-- <div class="alert alert-success alert-dismissible fade show" role="alert" style="height:10%; width:50%;"> -->
        <div class="alert alert-success">
            
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ session()->get('message') }}
        </div>
      @endif
    </header>

    <div style="padding: 100px;" align="center">
    <table>
        <tr style="background-color: grey;">
            <td style="padding: 10px; font-size: 20px;">Product Name</td>
            <td style="padding: 10px; font-size: 20px;">Quantity</td>
            <td style="padding: 10px; font-size: 20px;">Price</td>
            <td style="padding: 10px; font-size: 20px;">Action</td>
        </tr>

        @foreach($cart as $carts)
        <tr style="background-color: black;">
            <td style="padding: 10px; color:white;">{{$carts->product_title}}</td>
            <td style="padding: 10px; color:white;">{{$carts->quantity}}</td>
            <td style="padding: 10px; color:white;">{{$carts->proce}}</td>
            <td style="padding: 10px; color:white;">
                <a class="btn btn-danger" href="{{url('delete',$carts->id)}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
    </div>
    


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
