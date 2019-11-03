@guest
        <fieldset class="fieldsets p-3 rounded" id="rightsideloginfieldset">
            <legend class="w-auto pl-3 pr-3">Login</legend>
            <div class="eachloginregistercontainer pt-2 pb-2 border-bottom">
                <a class="text-secondary" href="{{route('login')}}"><span class="badge badge-success"><span class="fa fa-sign-in"></span></span> Login</a>
            </div>

            <div class="eachloginregistercontainer pt-2 pb-2 border-bottom">
                <a href="{{route('jobseeker.create')}}" class=" text-secondary"><span class="badge badge-success"><span class="fa fa-user-plus"></span></span> Register as Job Seeker</a>
            </div>
            <div class="eachloginregistercontainer pt-2 pb-2 border-bottom">
                <a href="{{route('company.create')}}" class=" text-secondary"><span class="badge badge-success"><span class="fa fa-user-plus"></span></span> Register as Employer</a>
            </div>
        </fieldset>
@endguest