@extends('welcome')
@section('Ridoy')
<!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('frontend/img/contact-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Contact Me</h1>
            <span class="subheading">Have questions? I have answers.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
   <div class="container">
     <div class="row">
       <div class="col-lg-8 col-md-10 mx-auto">
         <a href="{{route('add_category')}}"class="btn btn-danger">Add Category</a>
         <a href="#"class="btn btn-info">All Category</a>
         <hr>
         <form action="{{route('store_category')}}" method="post">
           @csrf
           <div class="control-group">
             <div class="form-group ">
               <label>Category Name</label>
               <input type="text" class="form-control" placeholder="Category Name" name="name" required >

             </div>
           </div>
           <br>
           <div class="control-group">
             <div class="form-group ">
               <label>Slug Name</label>
               <input type="text" class="form-control" placeholder="Slug Name" name="slug" required >

             </div>
           </div>

           <br>
           <div id="success"></div>
           <div class="form-group">
             <button type="submit" class="btn btn-primary">Submit</button>
           </div>
         </form>
       </div>
     </div>
   </div>

   <hr>

@endsection
