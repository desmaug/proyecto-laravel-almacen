@if(Auth::user()->image)
    <img  class="container-avatar" src="{{ route('user.avatar',['filename'=>Auth::user()->image])}}" class="avatar" >
@endif