<div>
    <h1>User Form</h1>
    <form action="/getroute" method="post">
        {{-- <input type="hidden" name="_method" value="delete"> --}}
        {{-- <input type="hidden" name="_method" value="PUT"> --}}
        <input type="hidden" name="_method" value="patch">
        @csrf
        <input type="text" name="user " placeholder="Enter Name">
        <br><br>
        <input type="password" name="password" placeholder="Enter password">
        <br><br>
        <input type="submit" value="Submit"> 
    
    
    </form>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
</div>
