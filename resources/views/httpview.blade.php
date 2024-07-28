<div>
    <h1>data</h1>
    {{ print_r( $data) }}
   
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <ul>
        <li>
            <span>Name : </span> <span>{{ $data->name }}</span>
        </li>
        <li>
            <span>Username : </span> <span>{{ $data->username }}</span>
        </li>
        <li>
            <span>Email : </span> <span>{{ $data->email }}</span>
        </li>
       
       
        <li>
            <span>Phone : </span> <span>{{ $data->phone }}</span>
        </li>
        <li>
            <span>Website : </span> <span>{{ $data->website }}</span>
        </li>
        <li>
            <span>Address: </span>
            <span>{{ $data->address->street }}</span>, 
            <span>{{ $data->address->suite }}</span>, 
            <span>{{ $data->address->city }}</span>, 
            <span>{{ $data->address->zipcode }}</span>
        </li>
    </ul>
</div>
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        margin-top: 100px;
    }
    li {
        margin-bottom: 10px;
    }
   
    span:last-child {
        margin-bottom: 0;
    }
    
</style>