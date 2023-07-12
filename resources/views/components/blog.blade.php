<section class="section blog-wrap bg-gray">
 <div class="container">
  <div class="row" id="blogGet">

  </div>

 </div>

 <div class="row justify-content-center mt-5">
  <div class="col-lg-6 text-center">
   <nav class="navigation pagination d-inline-block">
    <div class="nav-links">
     <a class="prev page-numbers" href="#">Prev</a>
     <span aria-current="page" class="page-numbers current">1</span>
     <a class="page-numbers" href="#">2</a>
     <a class="next page-numbers" href="#">Next</a>
    </div>
   </nav>
  </div>
 </div>
 </div>
</section>

<script>
 getBlogs();

 async function getBlogs() {
  try {
   let URL = "/blogAjax";
   let response = await axios.get(URL);
   response.data.forEach(item => {

    let title = item['title'].substr(0, 80) + (item['title'].length > 200 ? '...' : '');

    let content = item['description'].substr(0, 119) + (item['description'].length > 200 ? '...' : '');


    function formatDate(date) {
     const months = [
      'January', 'February', 'March', 'April', 'May', 'June',
      'July', 'August', 'September', 'October', 'November', 'December'
     ];

     const day = date.getDate();
     const month = months[date.getMonth()];
     const year = date.getFullYear();

     return `${month} ${day}, ${year}`;
    }


    const date = new Date(item['created_at']);
const formattedDate = formatDate(date);


    document.getElementById('blogGet').innerHTML += `
                  <div  class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                    <img src="${item['image']}" alt="" class="img-fluid rounded">

                    <div class="blog-item-content bg-white p-5">
                        <div class="blog-item-meta bg-gray py-1 px-2">
                            <span class="text-muted text-capitalize mr-3"><i
                                    class="ti-pencil-alt mr-2"></i>${item['category']}</span>
                            <span class="text-black text-capitalize mr-3"><i
                                    class="ti-time mr-1"></i> ${formattedDate}</span>
                        </div>

                        <h3 class="mt-3 mb-3"><a href="{{ url('blogdetails') }}">${item['title']}</a>
                        </h3>
                        <p class="mb-4">${content}</p>

                       <a href="#" onclick="redirectToDetails(${item['id']})" class="btn btn-small btn-main btn-round-full">Learn More</a>
                    </div>
                    </div>
                </div>`
   });


  } catch (e) {
   alert(e.message);
  }
 }

 function redirectToDetails(id) {
  window.location.href = `/blogdetails/${id}`;
 }
</script>
