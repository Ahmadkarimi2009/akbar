
    @include('layout.headingforadminpages')
    <title>Job Categories</title>
    <style>
        .actionicons{
            cursor:pointer
        }
        .fa-edit{
            color:#28a745;
        }
        .fa-trash{
            color:#f44a40;
        }

        .single-job{
            flex: 1 0 21%;
            margin-right: 5px;
        }
  
    </style>
    @include('layout.globalfontsize')
    @include('layout.headersectionwithoutimage')



    <section class="job-single-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main-content">
                        <div class="single-content1 d-md-flex flex-wrap" id="categorycontainer">
                            @foreach($categories as $cat)
                            <div class="single-job mb-4">
                                <div class="job-text">  
                                    <ul class="mt-4 text-center">
                                        <li class="mb-3"><h5>{{$cat->name}}</h5></li>
                                        <span class="actionicons d-inline-block fa fa-edit" onclick=""></span>&nbsp&nbsp&nbsp    
                                        <span class="actionicons d-inline-block fa fa-trash" onclick="deletecategory('{{$cat->name}}', {{$cat->id}})"></span>
                                    </ul>
                                </div>
                            </div>
                          
                            @endforeach
                        </div>
                    </div>
                    <div class="more-job-btn mt-5 text-center">
                        <a href="{{route('jobcategory.create')}}" class="template-btn">Add another Category</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    
                </div>
            </div>
        </div>
    </section>




    @include('layout.footersection_admin')
    <script src="{{asset('assets/js/vendor/sweetalert.min.js')}}"></script>

    <script>
        function deletecategory(name, jid){
        swal({
                title: "Are you sure?",
                text: "Are you Sure you want to delete "+name+"?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    $.ajax(
                        {
                            type:'POST',
                            url: "{{ url('/deletejobcategory') }}",
                            data: {_token: '{{csrf_token()}}', id : jid},
                            success:function(data) {
                                swal({
                                        title: "Hurra!",
                                        text: "Class was deleted successfully!",
                                        icon: "success",
                                    });
                                    $('#categorycontainer').html('');
                                    $.each(data[0], function(index, value){
                                        $('#categorycontainer').append('<div class="single-job mb-4">'
                                            +'<div class="job-text">'
                                                 +'<ul class="mt-4 text-center">'
                                                     +'<li class="mb-3"><h5>'+value.name+'</h5></li>'
                                                     +'<span class="actionicons d-inline-block fa fa-edit" onclick="editcategory("'+value.name+'"")"></span>&nbsp&nbsp&nbsp' 
                                                     +'<span class="actionicons d-inline-block fa fa-trash" onclick="deletecategory("'+value.name+'", '+value.name+'"></span>'
                                                 +'</ul>'
                                             +'</div>'
                                         +'</div>');
                                        console.log(value.name);
                                    });
                            },
                            error:function(){
                                swal("Oops!", "The Deletion was unsuccessful!", "error");
                            }

                        }
                    );
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
        }
    </script>



@include('layout.sessionmessage')
</body>
</html>