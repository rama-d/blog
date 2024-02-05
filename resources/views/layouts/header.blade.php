<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,800;1,300;1,600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,400;1,500;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>
        @yield('title')
    </title>
   @yield('style')
</head>
<body style="background-color: #D4E6F1">
    <div class="container-md">
        <div class="row"  style="background-color:#CD0909;margin-top:20px;color:#fff;">
            <h1 style="font-size: 4rem;font-weight:900;padding-left:10px;">@yield('heading')</h1>
            <p style="text-decoration: overline;text-transform:capitalize;font-style:italic;padding-left:10px;">@yield('head-paragraph')</p>
        </div>
    </div>
<div class="container-md" >
    <nav class="navbar navbar-expand-lg" style="background-color: #CCD1D1;margin-top:15px;">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('homepage')}}"><strong>Rama Blog</strong></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('team')}}">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('news')}}">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </div>

    @yield('content')
    <div class="container py-4">  
      <div class="row shadow-xl gap-3 border-rounded" style="background-color: #D4E6F1">
        <div class="col p-3 bg-light">

          @yield('left-sidebar')
           
        </div>
        <div class="col-6 p-3 bg-light">

          @yield('main-sidebar')
          
           
        </div>
        <div class="col p-3 bg-light">

          @yield('right-sidebar')

        </div>
            
      </div>

    </div>

    <div class="container mt-3 bg-light shadow-md">
      <div class="col">
        <div class="p-3 bg-light">
          <div class="row">
          <h3 class="text-center p-2 mb-8" style="color: #000;"><strong>Our Partners</strong></h3>

          <div class="container text-center">
            <div class="row row-cols-4 pb-9">
              <div class="col">
                <img src="https://sanlamvaps.vusha.co.tz/media/images/sanlam_lg.svg" alt="" srcset="" style="width: 120px; height:70px;">
              </div>
              <div class="col">
                <img src="https://metinsurance.co.tz/media/site-contents/logo_n.png" alt="" srcset="" style="width: 120px; height:70px;">
              </div>
              <div class="col">
                <img src="https://metinsurance.co.tz/media/partners/vusha.png" alt="" srcset="" style="width: 120px; height:70px;">
              </div>
              <div class="col">
                <img src="https://icealionvaps.vusha.co.tz/media/images/general-logo.png" alt="" srcset="" style="width: 120px; height:70px;">
              </div>
            </div>
          </div>
    
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-2">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.9352461357958!2d39.26431277441774!3d-6.777735966280551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4d4903bac61d%3A0x5a79f0f1365b8f29!2sFaiya%20Towers%2C%20Eljiva%20specialized%20ENT%20clinic%2C%20medical%20supplies%20and%20service!5e0!3m2!1sen!2stz!4v1705656756013!5m2!1sen!2stz" width="1120" height="200" style="border:0; margin-left-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

      <div class="container mt-0" style="background-color: #CD0909; color:#fff;">
 
        <div class="row">
          <div class="col">
            <div class="mt-2">
                <h2>MY LOGO</h2>
            </div>
          </div>
          <div class="col">
            <div class="mt-2">
               <div class="row"><h6><strong>Pages</strong></h6></div> 
                <hr>
                <div class="mt-2 pages">
                    <ul class="list-group bg-transparent">
                        <li>Home</li>
                        <li>About</li>
                        <li>Team</li>
                        <li>Contact</li>
                        <li>Team</li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="mt-2">
              <div class="row"> <h6><strong>We available in</strong></h6></div> 
              <hr>
              <div class="row">
    
                <div class="col">
                  <a href=""><i class="fa-brands fa-x-twitter" style="background-color: #fff;color:#CD0909;padding:10px;border-radius:50%;"></i></a>
                </div>
                <div class="col">
                  <a href="https://www.instagram.com/ramasultan96/"><i class="fa-brands fa-instagram" style="background-color: #fff;color:#CD0909;padding:10px;border-radius:50%;"></i></a>
                </div>
                <div class="col">
                  <a href=""><i class="fa-brands fa-whatsapp" style="background-color: #fff;color:#CD0909;padding:10px;border-radius:50%;"></i></a>
                </div>
              
                <div class="col">
                  <a href="#"><i class="fa-brands fa-threads" style="background-color: #fff;color:#CD0909;padding:10px;border-radius:50%;"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="mt-2">
                <div class="row"><h6><strong>Overview</strong></h6></div>
                <hr>
                <div class="row">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae voluptas quam, itaque hic, fuga corrupti maxime odio blanditiis quidem quaerat veritatis adipisci quis expedita recusandae ducimus earum est nihil? Ullam?</p>
                </div>

            </div>
          </div>
        </div>
    </div> 
    
  
</body>
</html>