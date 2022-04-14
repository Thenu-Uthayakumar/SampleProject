<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
<style>

.W-5{
    display:none;
    text:none;
}
.btn 
{
    width:100px;
    margin-left:50px;
}
h1{
    text-align:center;
    color:#04776b;
}

</style>
</head>
<body>

<h1 class="display-3">Member Site</h1>   

<a class="btn btn-primary" role="button" href="addmember">Add</a>
<br><br>

<form action="search-record" class="form-inline" method="POST">
@csrf
    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary  my-2 my-sm-0" type="submit">Search</button>
</form>

<!-- Success Add message alert -->
@if(session('addmessage'))
    <div class="alert alert-success" role="alert">
        {{session('addmessage')}}
    </div>
@endif

<!-- Success Update message alert -->
@if(session('updatemessage'))
    <div class="alert alert-success" role="alert">
        {{session('updatemessage')}}
    </div>
@endif

<!-- Success Delete message alert -->
@if(session('deletemessage'))
    <div class="alert alert-success" role="alert">
        {{session('deletemessage')}}
    </div>
@endif

<!-- Start Table -->
<table class="table table-hover">
<thead>
 <tr>
 <th scope="col"> ID </th>
 <th scope="col"> Name </th>
 <th scope="col"> Phone number </th>
 <th scope="col"> E-mail </th>
 <th scope="col"> Attachment </th>
 <th scope="col"> Gender </th>
 <th scope="col"> CheckBox </th>
 <th scope="col"> DropDown </th>
 <th scope="col" > Action </th>
  

</tr>
</thead>
@foreach($member as $user)
<tbody>
 <tr>

    <td> {{$user['id']}} </td>
    <td> {{$user['name']}} </td>
    <td> {{$user['Phone_number']}} </td>
    <td> {{$user['email']}} </td>
    <td><img src="{{ asset ('img/'.$user->Attachment) }} " alt="img" width="50">  </td>
    <td> {{$user['gender']}} </td>
    <td> {{$user['CheckBox']}} </td>
    <td> {{$user['DropDown']}} </td>
    <td > <a href={{"memberedit/" . $user['id'] }} ><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;
    <a href={{"deletemember/" . $user['id'] }} ><i class="fa fa-trash"></i></a></td>

 
  
  

</tr>

</tbody>


@endforeach


</table>
<a class="uk-button uk-button-default" href="">{{$member -> links()}}</a>