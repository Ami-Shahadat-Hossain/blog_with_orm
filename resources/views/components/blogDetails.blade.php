<section class="page-title bg-1">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
    <div class="block text-center">
     <span class="text-white">News details</span>
     <h1 class="text-capitalize mb-4 text-lg">Blog Single</h1>
     <ul class="list-inline">
      <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
      <li class="list-inline-item"><span class="text-white">/</span></li>
      <li class="list-inline-item"><a href="#" class="text-white-50">News details</a></li>
     </ul>
    </div>
   </div>
  </div>
 </div>
</section>

<section class="section blog-wrap bg-gray">
 <div class="container">
  <div class="row">
   <div class="col-lg-12">
    <div class="row">
     <div class="col-lg-12 mb-5">
      <div class="single-blog-item">
       <img src="images/blog/2.jpg" alt="" class="img-fluid rounded">

       <div class="blog-item-content bg-white p-5">
        <div class="blog-item-meta bg-gray py-1 px-2">
         <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>{{ $blog->category }}</span>
         <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
         <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i>
          {{ $blog->created_at->diffForHumans() }}</span>
        </div>

        <h2 class="mt-3 mb-4"><a href="blog-single.html">{{ $blog->category }}</a></h2>

        <p class="lead mb-4">
         {{ $blog->description }}
        </p>
       </div>
      </div>
     </div>
     {{-- Comment --}}
     <h4 class="mb-4 ml-5">Comments : {{ $commentCount }}</h4>

     <div class="comment_data">

      @foreach ($comments as $comment)
       <div class="col-lg-12 mb-5">
        <div class="comment-area card border-0 p-5">

         <ul class="comment-tree list-unstyled">
          <li class="mb-5">
           <div class="comment-area-box">

            <h5 class="mb-1">Name: {{ $comment->name }} </h5>
            <span>Email: {{ $comment->email }}</span>

            <div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
             <a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply |</a>
             <span class="date-comm">posted at: {{ $comment->created_at }} </span>
            </div>

            <div class="comment-content mt-3">
             <p>{{ $comment->comment }} </p>
            </div>
           </div>
          </li>

         </ul>
        </div>
       </div>
      @endforeach

     </div>


     <div class="col-lg-12">
      <form class="contact-form bg-white rounded p-5" id="comment_form">
       <h4 class="mb-4">Write a comment</h4>
       <div class="row">
        <div class="col-md-6">
         <div class="form-group">
          <input class="form-control" type="text" name="name" id="name" placeholder="Name:">
         </div>

         <input type="hidden" id="blogs_id" value="{{ $blog->id }}">

        </div>
        <div class="col-md-6">
         <div class="form-group">
          <input class="form-control" type="text" name="mail" id="email" placeholder="Email:">
         </div>
        </div>
       </div>

       <textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>

       <input class="btn btn-main btn-round-full" type="submit" name="submit" id="submit" value="Submit Message">
      </form>
     </div>

    </div>
   </div>
  </div>
 </div>
 </div>
 </div>
</section>

{{-- Js --}}

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>

 let contactForm = document.getElementById('comment_form')

 contactForm.addEventListener('submit', async (e) => {
  e.preventDefault();
  let name = document.getElementById('name').value;
  let email = document.getElementById('email').value;
  let comment = document.getElementById('comment').value;
  let blogs_id = document.getElementById('blogs_id').value;

  if (name.length === 0) {
   alert('Name is required')
  } else if (email.length === 0) {
   alert('Email is required')
  } else if (comment.length === 0) {
   alert('comment is required')
  } else {

   let formData = {
    name: name,
    email: email,
    comment: comment,
    blogs_id: blogs_id
   }
   let URL = "{{ url('/comments') }}";


   // Ajax Request
   let result = await axios.post(URL, formData);





   if (result.status === 200) {

    toastr.success("Your Comment has been submitted successfully.");

    $(".comment_data").load(location.href + ' .comment_data');

    contactForm.reset();
   } else {
    alert('Something went wrong');
   }

   console.log(result);

  }

 })
</script>
