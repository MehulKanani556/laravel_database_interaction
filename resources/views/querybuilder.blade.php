<div>
    <h1>Users</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id }}</td>
            <td>{{$user->name }}</td>
            <td>{{$user->email }}</td>
            <td>{{$user->password }}</td>
            
        </tr>
        @endforeach
    </table>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>
<style>
  
    
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
   
</style>