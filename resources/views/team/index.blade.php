@extends('layouts.header')
@section('title')
    Meet Our team | Rama Blog
@endsection

@section('content')

    @section('heading')
        Meet Our Team
    @endsection
    @section('head-paragraph')
        We believing in hard work
    @endsection
    @section('left-sidebar')
    <h4 class="text-align-center p-2" style="background-color: #CD0909; color: #fff;"><strong>Advertise with us</strong></h4> 
          
    <div class="row">
      <img src="https://cdn.pixabay.com/photo/2016/02/27/10/14/signage-1225355_1280.jpg" alt="" srcset="">
    </div>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ut, iusto omnis dolores quas optio rem tempore aspernatur deleniti, in ea reiciendis fugit velit! Eaque accusamus quaerat non cum ipsa?</p>
    <div class="row">
      <h4 class="text-align-center p-2" style="background-color: #CD0909; color: #fff;width:100%;"><strong>Top User</strong></h4> 
      <table class="table table-striped border">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td >Larry</td>
              <td >Mine</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
    </div>
    
    @endsection
    @section('main-sidebar')
    <div class="row">
        <h3 class="text-align-center p-2" style="color: #000;"><strong>Our Winning team</strong></h3>
      </div>
      <hr>
      <div class="row justify-content-start">
        <div class="col">
          <img src="http://thispix.com/wp-content/uploads/2015/06/passport-009.jpg" width="200" height="200" alt="">
         
        </div>
        <div class="col">
          <div class="row"><h5>Ramadhan Sultan</h5></div>
          <div class="row"><p><i>CEO and Founder of Rama Blog</i></p></div>
          <hr>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptates nihil suscipit quisquam fugit libero veniam </p>
          <div class="row mt-2">
            <div class="col"><i class="fa-brands fa-whatsapp"></i></div>
            <div class="col"><i class="fa-brands fa-facebook-f"></i></div>
            <div class="col"><i class="fa-brands fa-instagram"></i></div>
            <div class="col"><i class="fa-brands fa-whatsapp"></i></div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row justify-content-start">
        <div class="col">
          <img src="https://media.licdn.com/dms/image/C4D03AQF5D_aPvwjI5g/profile-displayphoto-shrink_200_200/0/1576852231293?e=2147483647&v=beta&t=t2-wXsZBUiaCdKRbI4tOpiU4HFIIHHlqriGjM3v_Xtc" width="200" height="200" alt="">
        </div>
        <div class="col">
          <div class="row"><h5>Ramadhan Sultan</h5></div>
          <div class="row"><p><i>CEO and Founder of Rama Blog</i></p></div>
          <hr>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptates nihil suscipit quisquam fugit libero veniam </p>
          <div class="row mt-2">
            <div class="col"><i class="fa-brands fa-whatsapp"></i></div>
            <div class="col"><i class="fa-brands fa-facebook-f"></i></div>
            <div class="col"><i class="fa-brands fa-instagram"></i></div>
            <div class="col"><i class="fa-brands fa-whatsapp"></i></div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row justify-content-start">
        <div class="col">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrmpEfhEweiXD1Qm6pRJqGWFhgSQoQNLoc_VXdyMEjmcTD4Xy8EGmNj8euLIzmrAPdOsA&usqp=CAU" width="200" height="200" alt="">
         
        </div>
        <div class="col">
          <div class="row"><h5>Ramadhan Sultan</h5></div>
          <div class="row"><p><i>CEO and Founder of Rama Blog</i></p></div>
          <hr>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptates nihil suscipit quisquam fugit libero veniam </p>
          <div class="row mt-2">
            <div class="col"><i class="fa-brands fa-whatsapp"></i></div>
            <div class="col"><i class="fa-brands fa-facebook-f"></i></div>
            <div class="col"><i class="fa-brands fa-instagram"></i></div>
            <div class="col"><i class="fa-brands fa-whatsapp"></i></div>
          </div>
        </div>
      </div>
      
    @endsection
    @section('right-sidebar')
    <h3 class="text-align-center p-2" style="background-color: #CD0909; color: #fff;"><strong>Latest News</strong></h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ut, iusto omnis dolores quas optio rem tempore aspernatur deleniti, in ea reiciendis fugit velit! Eaque accusamus quaerat non cum ipsa?</p>
    <hr>
    <div class="row mb-2">
        <h4 class="text-align-center p-2" style="background-color: #CD0909; color: #fff;"><strong>Join Us</strong></h4> 
        <form class="g-3" action="" >
            <input class="form-control form-control-sm" type="text" placeholder="Full Name" id="f_name" name="f_name" aria-label=".form-control-sm example"><br>
            <input class="form-control form-control-sm" type="email" placeholder="Email" id="email" name="email" aria-label=".form-control-sm example"><br>
            <input class="form-control form-control-sm" type="text" placeholder="Region" id="region" name="region" aria-label=".form-control-sm example">
            <div class="d-grid">
                <button type="submit" class="btn btn-danger mt-3">Yes! Join Me</button>
              </div>
        </form>
        <hr>
        <div class="row">
            <img src="https://cdn.pixabay.com/photo/2016/05/31/10/52/sale-1426594_1280.png" alt="" srcset="">
        </div>
    </div>
    </div>
    @endsection
@endsection