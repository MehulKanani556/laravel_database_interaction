<div>
    <h1>Profile page</h1>
    {{  session('user') }}
    @if (session('user'))
        <h1>Welcome, {{session('user')}}</h1>
       @else
       <h1>No user found in session  <a href="session">Login</a> </h1> 
    @endif

    <a href="sessionlogout">Logout</a>
    <br><br>
{{ session('allData')['user'] }} <br>
{{ session('allData')['password'] }}

</div>
