<div class="col-lg-12 mb-5" id="getComments">

</div>

<div class="col-lg-12">
    <form class="contact-form bg-white rounded p-5" id="comment-form">
        <h4 class="mb-4">Write a comment</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="name" id="name"
                           placeholder="Name:">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="mail" id="mail"
                           placeholder="Email:">
                </div>
            </div>
        </div>


        <textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5"
                  placeholder="Comment"></textarea>

        <input class="btn btn-main btn-round-full" type="submit" name="submit-contact"
               id="submit_contact" value="Submit Message">
    </form>
</div>

{{--<script>--}}
{{--    async function getComments() {--}}
{{--        try {--}}
{{--            let URL = "{{ route('comments.fetch', $blog->id) }}";--}}

{{--            let response = await axios.get(URL);--}}
{{--            console.log(response);--}}
{{--            response.data.forEach(item => {--}}

{{--                document.getElementById('getComments').innerHTML += `--}}
{{--                   <div class="comment-area card border-0 p-5">--}}
{{--            <h4 class="mb-4">2 Comments</h4>--}}
{{--            <ul class="comment-tree list-unstyled">--}}
{{--                <li class="mb-5">--}}
{{--                    <div class="comment-area-box">--}}
{{--                        <img alt="" src="images/blog/test1.jpg" class="img-fluid float-left mr-3 mt-2">--}}

{{--                        <h5 class="mb-1">Philip W</h5>--}}
{{--                        <span>United Kingdom</span>--}}

{{--                        <div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">--}}
{{--                            <a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply |</a>--}}
{{--                            <span class="date-comm">Posted October 7, 2018 </span>--}}
{{--                        </div>--}}

{{--                        <div class="comment-content mt-3">--}}
{{--                            <p>Some consultants are employed indirectly by the client via a consultancy--}}
{{--                                staffing company, a company that provides consultants on an agency--}}
{{--                                basis. </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <div class="comment-area-box">--}}
{{--                        <img alt="" src="images/blog/test2.jpg" class="mt-2 img-fluid float-left mr-3">--}}

{{--                        <h5 class="mb-1">Philip W</h5>--}}
{{--                        <span>United Kingdom</span>--}}

{{--                        <div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">--}}
{{--                            <a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply |</a>--}}
{{--                            <span class="date-comm">Posted October 7, 2018</span>--}}
{{--                        </div>--}}

{{--                        <div class="comment-content mt-3">--}}
{{--                            <p>Some consultants are employed indirectly by the client via a consultancy--}}
{{--                                staffing company, a company that provides consultants on an agency--}}
{{--                                basis. </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--    </div>`--}}
{{--            })--}}
{{--        } catch (error) {--}}
{{--            console.error(error);--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}






<script>
    // getComments();
    async function getComments() {
        try {
            let URL = "{{ route('comments.fetch', $blog->id) }}";

            let response = await axios.get(URL);
            console.log(response);

            // Assuming the response contains an array of comments
            response.data.forEach(item => {
                // Generate HTML dynamically for each comment
                let commentHtml = `
                    `;

                // Append each comment HTML to the container element
                document.getElementById('commentsContainer').innerHTML += commentHtml;
            });
        } catch (error) {
            console.error(error);
        }
    }

    // Call the getComments() function to fetch and display comments
    getComments();
</script>
