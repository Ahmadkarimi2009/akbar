
    @include('layout.headingforadminpages')
    <title>New Job Category</title>
    @include('layout.globalfontsize')
    @include('layout.headersectionwithoutimage')


    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <h3 class="mb-30 title_color">Add Job Category</h3>
                        <form action="{{route('jobcategory.store')}}" method="post">
                            {{ csrf_field() }}
                            <div class="mt-10">
                                <input type="text" name="name" placeholder="eg. IT - Software" onfocus="this.placeholder = ''" onblur="this.placeholder = 'eg. IT - Software'" required="" class="single-input">
                            </div>
                            <div class="button-group-area mt-40">
                                <button type="submit" class="genric-btn primary radius">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-sm-30 element-wrap">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    @include('layout.footersection')
    @include('layout.sessionmessage')
