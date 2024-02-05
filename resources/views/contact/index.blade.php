@extends('layouts.header')
@section('title')
    Contact us | Rama Blog
@endsection
@section('heading')
    Contact Us 
@endsection
@section('head-paragraph')
    Get in touch with us
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
    <h3 class="text-align-center p-2" style="color: #000;"><strong>Get close with us</strong></h3>
  </div>
  <hr>

  <div class="row justify-content-around mb-3">
    <div class="col-4">
      <h5>Contact details</h5>
      <p>Ali Hassan Mwinyi Road</p>
      <p>Plot no 412</p>
      <p>Faiya Tower</p>
    </div>
    <div class="col-4">
      <h5>Contact Person</h5>
      <p>Maryan Bashir</p>
      <p>255 753 094 268</p>
      <p>Support Incharge</p>
    </div>
  </div>
  <hr>

  <div class="container mt-2">
    @if ($errors->any())
      @foreach ($errors->all() as $error)
      <div class="alert alert-danger" role="alert">
        {{$error}}
      </div>
      @endforeach    
    @endif
  </div>

  <div class="container mt-2">
    @if (session()->exists('message'))
      <div class="alert alert-success" role="alert">
        {{session('message')}}
      </div>  
    @endif
  </div>

  {{-- new function --}}
  @if (session()->has('success'))
      <div class="alert alert-success">{{session('success')}}</div>
    
  @endif

    <div class="container">
      @if (session()->exists('message'))
        <div class="alert alert-success" role="alert">
          {{session('message')}}
        </div>
      @endif
    </div>

  <h5 class="text text-center">Write us</h5>
  <form action="{{route('processing-contact')}}" method="POST">
    @csrf
  
    <div class="mb-3 mt-3">
      <label for="contact_name" class="form-label">Full name</label>
      <input type="text" class="form-control" id="contact_name" name="contact_name" aria-describedby="fname">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="contact_email" class="form-label">Email</label>
      <input type="email" class="form-control" id="contact_email" name="contact_email">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" id="contact_description" name="contact_description" rows="3"></textarea>
      </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-danger hover">Send</button>
  </form>
@endsection
@section('right-sidebar')
<h3 class="text-align-center p-2" style="background-color: #CD0909; color: #fff;"><strong>Latest News</strong></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ut, iusto omnis dolores quas optio rem tempore aspernatur deleniti, in ea reiciendis fugit velit! Eaque accusamus quaerat non cum ipsa?</p>
<hr>

<div class="row">
    <h4 class="text-align-center p-2" style="background-color: #CD0909; color: #fff;"><strong>Join Us</strong></h4> 
    <form class="g-3" action="" >
        <input class="form-control form-control-sm" type="text" id="f_name" name="f_name" placeholder="Full Name" aria-label=".form-control-sm example"><br>
        <input class="form-control form-control-sm" type="email" placeholder="Email" id="email" name="email" aria-label=".form-control-sm example"><br>
        <input class="form-control form-control-sm" type="text" placeholder="region" id="region" name="region" aria-label=".form-control-sm example">
        <div class="d-grid">
            <button type="submit" class="btn btn-danger mt-3">Yes! Join Me</button>
          </div>
    </form>
    
    <div class="row">
        <hr>
        <img src="https://cdn.pixabay.com/photo/2016/05/31/10/52/sale-1426594_1280.png" alt="" srcset="">
    </div>
</div>
</div>
@endsection