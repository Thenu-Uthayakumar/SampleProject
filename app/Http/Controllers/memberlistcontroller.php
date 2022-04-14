<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class memberlistcontroller extends Controller
{
   
    //View Table
    function show()
    {
        $data=Member::paginate(5);
        return view('memberlistview',['member'=>$data]);
    }

    //Insert Coding
    function addmember(Request $req)
    {
       
        $req->validate([
            'name' =>'required',
            'Phone_number' =>'required',
            'email' =>'required',
            'Attachment'=>'required',
            'gender' =>'required | min:1',
            'CheckBox' =>'required'      
        ]);
        $member=new Member();
        $member -> name = $req->name;
        $member -> Phone_number = $req->Phone_number;
        $member -> email = $req->email;
        if($req->Attachment)
        {
            $file=$req->file('Attachment');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('img/',$filename);
            $member->Attachment=$filename;
        }
        $member -> gender = $req->gender;
        $member -> CheckBox = $req->CheckBox;
        $member -> DropDown = $req->DropDown;
        $member->save();
        return redirect('memberlistview')->with('addmessage','Data add Successfully !');
       
    }

    //Delete Coding
    function deletemember($id)
    {
        $data = Member::find($id);
        $data -> delete();
        return redirect('memberlistview')->with('deletemessage','Data Delete Successfully !');;
    }

    //Update Coding
    function updatemember($id)
    {
        $member=Member::find($id);
        return view('memberedit',['member'=> $member]);
    }

    function memberedit(Request $req)
    {
        $req->validate([
            'name' =>'required',
            'Phone_number' =>'required',
            'email' =>'required',
            'Attachment'=>'required',
            'gender' =>'required | min:1',
            'CheckBox' =>'required'
        ]);
        $member=Member::find($req -> id);
        $member -> name = $req->name;
        $member -> Phone_number = $req->Phone_number;
        $member -> email = $req->email;
        if($req->Attachment)
        {
            $file=$req->file('Attachment');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('img/',$filename);
            $member->Attachment=$filename;
        }
        $member -> gender = $req->gender;
        $member -> CheckBox = $req->CheckBox;
        $member -> DropDown = $req->DropDown;
     
        $member->save();
        return redirect('memberlistview')->with('updatemessage','Data Update Successfully !');
    }

    //Search Coding
    function search(Request $req)
    {
    
        $member=Member::where('name','like','%'.$req -> search.'%')
        ->orWhere('id','like','%'.$req -> search.'%')
        ->orWhere('Phone_number','like','%'.$req -> search.'%')
        ->orWhere('email','like','%'.$req -> search.'%')
        ->orWhere('DropDown','like','%'.$req -> search.'%')
        ->paginate();
        return view('memberlistview',['member'=> $member]);
   
    }
  
   
}
