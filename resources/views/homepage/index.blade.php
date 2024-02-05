@extends('layouts.header')

@section('title')
    Welcome to Rama Blog | Rama Sultan
@endsection

@section('style')
<style>

</style>

@section('heading')
    Homepage
@endsection

@section('head-paragraph')
    Modern Blog
@endsection

@section('content')

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
          <th scope="col">Name</th>
          <th scope="col">region</th>
        </tr>
      </thead>

      @foreach ($blogs as $blog)
      <tbody>
        <tr>
          <th scope="row">{{$blog->id}}</th>
          <td scope="col">{{$blog->full_name}}</td>
          <td scope="col">{{$blog->region}}</td>
        </tr>
      </tbody>
        @endforeach
        
  </table>
  
</div>
      

@endsection

@section('main-sidebar')

<div class="row">
  <h3 class="text-align-center p-2" style="color: #000;"><strong>Who Are we</strong></h3>
</div>
<hr>
  <div class="row">
      <div class="col">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ut, iusto omnis dolores quas optio rem tempore aspernatur deleniti, in ea reiciendis fugit velit! Eaque accusamus quaerat non cum ipsa?</p>
      </div>
      <div class="col">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ut, iusto omnis dolores quas optio rem tempore aspernatur deleniti, in ea reiciendis fugit velit! Eaque accusamus quaerat non cum ipsa?</p>
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
    <div class="row mt-4">
      <div class="col">
          <h3 class="text-align-center p-2" style="color: #000;"><strong>Mission</strong></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ut, iusto omnis dolores quas optio rem tempore aspernatur deleniti, in ea reiciendis fugit velit! Eaque accusamus quaerat non cum ipsa?</p>
      </div>
      <div class="col">
          <h3 class="text-align-center p-2" style="color: #000;"><strong>Vision</strong></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ut, iusto omnis dolores quas optio rem tempore aspernatur deleniti, in ea reiciendis fugit velit! Eaque accusamus quaerat non cum ipsa?</p>
      </div>
    </div>
  

@endsection

@section('right-sidebar')
<h3 class="text-align-center p-2" style="background-color: #CD0909; color: #fff;"><strong>Latest News</strong></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ut, iusto omnis dolores quas optio rem tempore aspernatur deleniti, in ea reiciendis fugit velit! Eaque accusamus quaerat non cum ipsa?</p>
<hr>
<div class="row">
    <h4 class="text-align-center p-2" style="background-color: #CD0909; color: #fff;"><strong>Join Us</strong></h4> 
    
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

    <form class="g-3" action="{{route('membership')}}" method="POST">
      @csrf
        <input class="form-control form-control-sm" type="text" placeholder="Full Name" id="f_name" name="full_name" aria-label=".form-control-sm example"><br>
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