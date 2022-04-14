<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
<style>
#table2, td {
  border: 1px solid black;

}

#table2 {
  border-collapse: collapse;
  width:40%;
}
.W-5{
    display:none;
}
html {   
    height: 100%;   
}  
body {   
    height: 100%;   
}  
.global-container {  
   
    display: flex;  
    align-items: center;  
    justify-content: center;  
    
}  
form {  
    padding-top: 10px;  
    font-size: 14px;  
    margin-top: 30px;  
}  
.card-title {   
font-weight: 300;  
 }  
.btn {  
    font-size: 14px;  
    margin-top: 20px;  
}  
.login-form {   
    width: 330px;  
    margin: 20px;  
}  
.sign-up {  
    text-align: center;  
    padding: 20px 0 0;  
}  
.alert {  
    margin-bottom: -30px;  
    font-size: 13px;  
    margin-top: 20px;  
}  
</style>
</head>
<div class="pt-5">  
  <div class="global-container">  
    <div class="card login-form">  
    <div class="card-body">  
        <h3 class="card-title text-center"> Update </h3>  
        <div class="card-text">  
            <form method="POST" action="/memberedit" enctype="multipart/form-data">  
                @csrf
               
                <!-- ID Field -->
                <input type="hidden" name="id" value="{{$member['id']}}">

                <!-- Name Field -->
                <div class="form-group">  
                    <label for="exampleInputname"> Enter Name </label>  
                    <input type="text" class="form-control form-control-sm" value="{{$member['name']}}" name="name" id="exampleInputname" aria-describedby="nameHelp">  
                    @error('name')
                    <div class="alert alert-danger" style="bottom:10px;" role="alert"> {{$message}} </div>
                    @enderror
                </div>  

                <!-- Phone number Field -->
                <div class="form-group">  
                    <label for="exampleInputnumber">Enter Phone number </label>  
                    <input type="text" class="form-control form-control-sm" value="{{$member['Phone_number']}}" name="Phone_number" id="exampleInputnumber"> 
                    @error('Phone_number')
                    <div class="alert alert-danger" style="bottom:10px;" role="alert"> {{$message}} </div>
                    @enderror     
                </div> 

               <!-- E-mail Field -->
                <div class="form-group">  
                    <label for="exampleInputemail">Enter E-mail </label>  
                    <input type="text" class="form-control form-control-sm" value="{{$member['email']}}" name="email" id="exampleInputemail">  
                    @error('email')
                    <div class="alert alert-danger" style="bottom:10px;" role="alert"> {{$message}} </div>
                    @enderror   
                </div>  

                <!-- Attachment Field -->
                <div class="form-group">  
                    <label for="exampleInputfile">Enter Attachement </label>  
                    <input type="file" class="form-control form-control-sm" value="{{$member['Attachment']}}" name="Attachment" id="exampleInputfile"> 
                    @error('Attachment')
                    <div class="alert alert-danger" style="bottom:10px;" role="alert"> {{$message}} </div>
                    @enderror 
                </div> 

                <!-- Radio Button Field -->
                <div class="form-group">  
                    <label for="exampleInputradio">Enter Gender </label> 
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Male"  name="gender" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                       Male
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Female" name="gender" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Female
                    </label>
                </div>
                    @error('gender')
                    <div class="alert alert-danger" style="bottom:10px;" role="alert"> {{$message}} </div>
                    @enderror
                </div>

                <!-- Check box Field -->
                <div class="form-group">  
                    <label for="exampleInputradio">Enter favorite Color </label> 
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Black" name="CheckBox" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                       Black
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Blue" name="CheckBox" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Blue
                    </label>
                </div>
                    @error('CheckBox')
                    <div class="alert alert-danger" style="bottom:10px;" role="alert"> {{$message}} </div>
                    @enderror
                </div>

                <!-- DropDown -->
                <div class="form-group">  
                    <select class="form-select" aria-label="Default select example" name="DropDown">
                        <option selected>Select Subject</option>
                        <option value="IT">IT</option>
                        <option value="Bio">Bio</option>
                        <option value="Maths">Maths</option>
                    </select>
                <div>
                
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-block" name="Update"> Save </button>  
            </form>  
        </div>  
    </div>  
</div>  
</div>  
</body>  