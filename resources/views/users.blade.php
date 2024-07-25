<div>
    <h1>User List</h1>
    {{
        print_r($users)
    }}
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
        </tr>
        @foreach ($users as $user )
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                
            </tr>
        @endforeach
    </table>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
</div>
