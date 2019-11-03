@if(session()->has('message'))
    <script>
        swal('{{session()->get("message")}}');
        @php
            Session()->forget('message');
        @endphp
    </script>
@endif