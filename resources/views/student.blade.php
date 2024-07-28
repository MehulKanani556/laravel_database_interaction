<div>
    <h1>Student data</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Batch</th>
        </tr>
        @foreach($data as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->batch}}</td>
            </tr>
        @endforeach
    </table>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>

<style>
    table {
        width: 100%;
    }
    th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    tr:hover {background-color: #f5f5f5;}
    h1{
        text-align: center;
        margin-bottom: 20px;
        text-decoration: underline;
    }
</style>