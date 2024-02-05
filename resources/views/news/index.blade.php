@extends('layouts.header')
@section('title')
    News | Rama blog
@endsection
@section('style')
    <style>
        /* My pop up code */
     #popup-container{
            position: absolute;
            left: 25%;
            top: 35%;
            width: 50%;
            height: auto;
            padding: 10px;
            border-radius: 7px;
            border: none;
            box-shadow: 0px 0px 10px #ccc;
            background-color: #D4E6F1;
            display: none;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }
        #close-btn{
            float: right;
        }
        #close-btn{
            cursor: pointer;
        } 
    </style>
@endsection
@section('content')
@section('heading')
    News Feed
@endsection
@section('head-paragraph')
    Meet new peoples
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

{{-- <button id="show-popup-btn">Show Popup</button> --}}

{{-- My pop up code --}}
{{-- <div id="popup-container">
    <div id="close-btn-container">
        <span id="close-btn">close</span>
    </div>
    <h3>Modal Heading</h3>
    <p>This is Modal paragraph</p>
</div> --}}

<div class="row mb-3">

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

    <div class="col-4">

        

        <div id="newspop" class="btn btn-success btn-sm">+ Add News</div>
    

     <div id="popup-container">
    <div id="close-btn-container">
        <span id="close-btn" style="color: #fff;padding:15px;">close</span>
    </div>
    <h3 class="col-12 mb-3 bg-dark text-light py-3">Post news</h3>
    <form action="{{route('processing_news')}}" method="POST" >
        @csrf
    <div class="mb-3">
        <input type="email" class="form-control" id="name" placeholder="name" name="name">
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" id="news_title" placeholder="News title" name="news_title">
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" id="location" placeholder="Your location" name="location">
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" id="source" placeholder="Source of your news" name="source">
      </div>
      <div class="mb-3">
        <textarea class="form-control" id="new_desc" name="new_desc" rows="3" placeholder="Enter your news here"></textarea>
      </div>
      <div class="d-grid gap-2 col-12 mx-auto">
        <button class="btn btn-danger" type="submit">Post</button>
      </div>
</div> 
</form>
</div>

    <div class="col">
    <p class="fs-6"><i>Posted at : {{$latest->created_at}}, {{$latest->location}}</i></p>
    </div> 
</div>
<hr>

<div class="d-flex justify-content-center">
<img src="https://media.istockphoto.com/id/1322517295/photo/cyber-security-it-engineer-working-on-protecting-network-against-cyberattack-from-hackers-on.jpg?s=2048x2048&w=is&k=20&c=AYDxnKzNTK_iFSe-bvYrezj0MqfBwDok_TvBCbpG_2c=" width="500" height="250px" alt="" srcset="">
</div>
<hr>
<h2 class="d-flex justify-content-center">{{$latest->news_title}}</h2>
<hr>

<p>{{$latest->new_desc}}</p>

@endsection
@section('right-sidebar')
<h3 class="text-align-center p-2" style="background-color: #CD0909; color: #fff;"><strong>Archieved</strong></h3>
<div class="row mt-3">
  @foreach ($latest as $latests)
  <div class="col p-1">
    <img src="https://media.istockphoto.com/id/1451079337/photo/customer-review-good-rating-concept-hand-pressing-user-and-five-star-icon-on-visual-screen.jpg?s=1024x1024&w=is&k=20&c=QPAM1YxTn6I8Qwp90manpa0ikNcuMEqfLC4Zs0j37qQ=" width="40" height="50" alt="">
</div>
<div class="col-9" style="height:40px;font-size:12px;">
    <p><strong>{{$latest->new_desc}} {!! Str::words($latest->new_desc, 30, '<a href="#' . $latest->id . '">Read more</a>') !!}
    </strong> <a href="{{route('news')}}"><i>More</i></a></p>
</div>
  @endforeach
   
</div>
<hr>

@endsection

 <script type="text/javascript">
    $(document).ready(function(){
        $("#newspop").click(function(){
            $("#popup-container").show();
        })
        // close btn
        $("#close-btn").click(function(){
            $("#popup-container").hide();
        })
    })
</script> 
@endsection