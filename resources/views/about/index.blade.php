@extends('layouts.header')

@section('title')
    About us | Rama Blog
@endsection

@section('heading')
    About Us
@endsection
@section('head-paragraph')
    Share Our Motivational story
@endsection

@section('content')

@section('left-sidebar')
        <div class="row">
            <h4 class="text-align-center p-2" style="background-color: #CD0909; color: #fff;"><strong>Gallery</strong></h4> 
            <div class="mt-2">
                <div class="row">
                  <div class="col">
                    <img src="https://cdn.pixabay.com/photo/2012/04/18/23/36/boy-38262_1280.png" width="70" height="70" alt="" srcset="">

                    <img src="https://cdn.pixabay.com/photo/2012/04/01/18/03/water-balloon-23799_1280.png" width="70" height="70" alt="" srcset="">

                    <img src="https://cdn.pixabay.com/photo/2019/09/23/12/37/people-4498458_1280.png" width="70" height="70" alt="" srcset="">
                  </div>
                </div>

                <div class="row">
                    <div class="col">
                      <img src="https://cdn.pixabay.com/photo/2019/07/26/20/52/man-4365597_1280.png" width="70" height="70" alt="" srcset="">
  
                      <img src="https://cdn.pixabay.com/photo/2016/06/13/09/57/meeting-1453895_1280.png" width="70" height="70" alt="" srcset="">
  
                      <img src="https://cdn.pixabay.com/photo/2016/06/15/16/16/man-1459246_1280.png" width="70" height="70" alt="" srcset="">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <img src="https://cdn.pixabay.com/photo/2014/04/02/17/05/couple-307924_1280.png" width="70" height="70" alt="" srcset="">
  
                      <img src="https://cdn.pixabay.com/photo/2013/07/13/12/43/kids-160168_1280.png" width="70" height="70" alt="" srcset="">
  
                      <img src="https://cdn.pixabay.com/photo/2013/07/12/14/07/student-147783_1280.png" width="70" height="70" alt="" srcset="">
                    </div>
                  </div>

                  
                </div>

                
        </div>
        <hr>

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
        <h3 class="text-align-center p-2" style="color: #000;"><strong>Our History</strong></h3>
      </div>
      <hr>

      <div class="row">
        <div class="col">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ut, iusto omnis dolores quas optio rem tempore aspernatur deleniti, in ea reiciendis fugit velit! Eaque accusamus quaerat non cum ipsa?</p>
        </div>
        <div class="col">
            <img src="https://cdn.pixabay.com/photo/2017/05/30/03/17/applications-2355609_1280.png" class="col-md-10 float-md mb-2 ms-md-6" alt="...">
        </div>
      </div>
      <div class="row">
        <div class="col">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ut, iusto omnis dolores quas optio rem tempore aspernatur deleniti, in ea reiciendis fugit velit! Eaque accusamus quaerat non cum ipsa?</p>
        </div>
        <div class="col">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ut, iusto omnis dolores quas optio rem tempore aspernatur deleniti, in ea reiciendis fugit velit! Eaque accusamus quaerat non cum ipsa?</p>
        </div>
      </div>
    @endsection

    @section('right-sidebar')
    <h3 class="text-align-center p-2" style="background-color: #CD0909; color: #fff;"><strong>Archieved</strong></h3>
    <div class="row mt-3">
        <div class="col">
            <img src="https://media.istockphoto.com/id/1451079337/photo/customer-review-good-rating-concept-hand-pressing-user-and-five-star-icon-on-visual-screen.jpg?s=1024x1024&w=is&k=20&c=QPAM1YxTn6I8Qwp90manpa0ikNcuMEqfLC4Zs0j37qQ=" width="40" height="50" alt="">
        </div>
        <div class="col-9" style="height:40px;font-size:12px;">
            <p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong> <a href="#"><i>More</i></a></p>
        </div>

        <div class="col mt-2">
            <img src="https://media.istockphoto.com/id/1451079337/photo/customer-review-good-rating-concept-hand-pressing-user-and-five-star-icon-on-visual-screen.jpg?s=1024x1024&w=is&k=20&c=QPAM1YxTn6I8Qwp90manpa0ikNcuMEqfLC4Zs0j37qQ=" width="40" height="50" alt="">
        </div>
        <div class="col-9" style="height:40px;font-size:12px;">
            <p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong> <a href="#"><i>More</i></a></p>
        </div>

        <div class="col mt-2">
            <img src="https://media.istockphoto.com/id/1451079337/photo/customer-review-good-rating-concept-hand-pressing-user-and-five-star-icon-on-visual-screen.jpg?s=1024x1024&w=is&k=20&c=QPAM1YxTn6I8Qwp90manpa0ikNcuMEqfLC4Zs0j37qQ=" width="40" height="50" alt="">
        </div>
        <div class="col-9" style="height:40px;font-size:12px;">
            <p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong> <a href="#"><i>More</i></a></p>
        </div>
    </div>
    <hr>

    <div class="row">
        <h4 class="text-align-center p-2" style="background-color: #CD0909; color: #fff;"><strong>Join Us</strong></h4> 
        <form class="g-3" action="" >
          @csrf
            <input class="form-control form-control-sm" type="text" placeholder="Full Name" name="f_name" id="f_name" aria-label=".form-control-sm example"><br>
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
    
    @endsection
@endsection