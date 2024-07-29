<div>
    <h1>Login</h1>
    <form action="/session" method="post">  
        @csrf
        <input type="text" name="user" placeholder="Enter name">
        <br><br>
        <input type="password" name="password" placeholder="Enter password">
        <br><br>
        <button>Login</button>
    </form>
    <!-- When there is no desire, all things are at peace. - Laozi -->
</div>
