@extends('welcome')
@section('Ridoy')
<!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('frontend/img/contact-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Write Your Post</h1>
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
         <form name="sentMessage" id="contactForm" novalidate>
           <div class="control-group">
             <div class="form-group ">
               <label>Post Title</label>
               <input type="text" class="form-control" placeholder="Title" id="name" required >

             </div>
           </div>
           <br>
           <div class="control-group">
             <div class="form-group col-xs-12 ">
               <label>Category</label>
               <select class="form-control" name="category_id">
                 <option value="">sds</option>
                 <option value="">lol</option>
                 <option value="">sds</option>
                 <option value="">lol</option>
               </select>
             </div>
           </div>
         </br>
           <div class="control-group">
             <div class="form-group ">
               <label>Post Details</label>
               <textarea rows="5" class="form-control" placeholder="Details"  required></textarea>

             </div>
           </div>
           <br>
           <div id="success"></div>
           <div class="form-group">
             <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
           </div>
         </form>
       </div>
     </div>
   </div>

   <hr>
@endsection
