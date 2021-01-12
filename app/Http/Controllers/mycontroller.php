<?php
namespace App\Http\Controllers;

use App\Models\hotelcarddata;
use App\Models\imagedata;
use App\Models\inserttouristspotshomepage;
use App\Models\avariroom;
use App\Models\signup;
use App\Models\admin;
use App\Models\clientdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class mycontroller extends Controller
{
    //

    function index(){
        $data2 = inserttouristspotshomepage::all();
        $data1 = imagedata::all();
        return view('welcome', ['data1' => $data1, 'data2' => $data2]);
        
    }

    function hotel(){
        $data3 = hotelcarddata::all();
        return view('hotel', ['data3' => $data3]);
        
    }


    function avarirooms(){
        $data4 = avariroom::all();

        return view('avarirooms', ['data4' => $data4]);
        
    }

    function insert(Request $req){

        $ImageName = $req->file('image')->getClientOriginalName();
        // move_uploaded_file()
        $req->image->move(public_path('images'), $ImageName);

        $hotelname = $req->get('hotelname');
        $priceofhotel = $req->get('priceofhotel');

        $prod = new imagedata();

        $prod->hotelname =  $hotelname;
        $prod->priceofhotel =  $priceofhotel;
        $prod->image =  $ImageName;
        $prod->save();

        return redirect('/index');
    }

    function inserttouristspotshomepage(Request $req){

        $ImageName = $req->file('timage')->getClientOriginalName();
        // move_uploaded_file()
        $req->timage->move(public_path('images'), $ImageName);

        $tname = $req->get('tname');
        $tdesc = $req->get('tdesc');

        $prod = new inserttouristspotshomepage();

        $prod->tname =  $tname;
        $prod->tdesc =  $tdesc;
        $prod->timage =  $ImageName;
        $prod->save();

        return redirect('/index');
    }

    function insertionofhotels(Request $req){

        $ImageName = $req->file('hotelimage')->getClientOriginalName();

        // move_uploaded_file()
        $req->hotelimage->move(public_path('images'), $ImageName);

        $hotelname = $req->get('hotelname');
        $hotelprice = $req->get('hotelprice');

        $prod = new hotelcarddata();

        $prod->hotelname =  $hotelname;
        $prod->hotelprice =  $hotelprice;
        $prod->hotelimage =  $ImageName;
        $prod->save();

        return redirect('/index');
    }

    function clientdetails(Request $req){

        $hotelname = $req->get('hotelname');
        $hotelroom = $req->get('hotelroom');
        $roomprice = $req->get('roomprice');
        $clientprefix = $req->get('clientprefix');
        $clientfirstname = $req->get('clientfirstname');
        $clientlastname = $req->get('clientlastname');
        $clientemail = $req->get('clientemail');
        $clientphone = $req->get('clientphone');
        $checkindate = $req->get('checkindate');
        $checkoutdate = $req->get('checkoutdate');
        $clientcountry = $req->get('clientcountry');
        $clientaddress = $req->get('clientaddress');
        $clientcity = $req->get('clientcity');
        $clientstate = $req->get('clientstate');
        $clientzip = $req->get('clientzip');


        $prod = new clientdetail();

        $prod->hotelname =  $hotelname;
        $prod->hotelroom = $hotelroom;
        $prod->roomprice = $roomprice;
        $prod->clientprefix = $clientprefix;
        $prod->clientfirstname = $clientfirstname;
        $prod->clientlastname = $clientlastname;
        $prod->clientemail = $clientemail;
        $prod->clientphone = $clientphone;
        $prod->checkindate = $checkindate;
        $prod->checkoutdate = $checkoutdate;
        $prod->clientcountry = $clientcountry;
        $prod->clientaddress = $clientaddress;
        $prod->clientcity = $clientcity;
        $prod->clientstate = $clientstate;
        $prod->clientzip = $clientzip;

        $prod->save();

        return redirect('/index');
    }


    function insertionofrooms(Request $req){

        $ImageName = $req->file('roomimage')->getClientOriginalName();

        // move_uploaded_file()
        $req->roomimage->move(public_path('images'), $ImageName);

        $roomname = $req->get('roomname');
        $roomdesc = $req->get('roomdesc');
        $roomprice = $req->get('roomprice');

        $prod = new avariroom();

        $prod->roomname =  $roomname;
        $prod->roomdesc =  $roomdesc;
        $prod->roomprice =  $roomprice;
        $prod->roomimage =  $ImageName;
        $prod->save();

        return redirect('/avarirooms');
    }

//signup login

function insertt(Request $req){

    $Name = $req->get('name');
    $Email = $req->get('email');
    $Password = $req->get('password');


    $result = new signup();

    $result->Name =  $Name;
    $result->Email =  $Email;
    $result->Password = $Password;

    $result->save();

    return redirect('/userlogin');

}
function login(Request $req){
    $Username = $req->get('userEmail');
    $Userpass = $req->get('userPassword');
    $Result = count(signup::all()->where('Email',$Username)->where('Password',$Userpass));
    if($Result > 0){
        return redirect('index');
    }
    else{
        echo "incorrect";
    }
        //  $check = signup::all();
        //  return $check;
    // $check = $req->input();
    //  return $check;


}

//   admin login

function admin(Request $req){
    $Adminn= $req->get('adminn');
    $Adminp = $req->get('adminp');
    $Result = count(admin::all()->where('adminname',$Adminn)->where('adminpassword',$Adminp));
    if($Result > 0){
        return redirect('/homecardsinsertion');
    }
    else{
        echo "incorrect";
    }
        //  $check = signup::all();
        //  return $check;
    // $check = $req->input();
    //  return $check;


}

//for display user and login view in button links
function loginform(){
    return view('login');
}
function adminform(){
    return view('admin');
}

function userform(){
    return view('user');
}

function homecardsinsertion(){

    $data5 = clientdetail::all();



    return view('homecardsinsertion', ['data5' => $data5]);
}


function awariroomsview(){
    $data4 = avariroom::all();

    return view('avarirooms', ['data4' => $data4]);

}
// function detailss(Request $req){
//     $hotelname = $req->post('hotelname');
//     $roomname= $req->post('roomname');
//     $roomprice = $req->post('roomprice');
//     if($req->post('Select') == "Select"){

//         return view('details', ['hotelname' => $hotelname, 'roomname' => $roomname, 'roomprice' => $roomprice]);
      
// }
// }
function details(Request $req){
    $hotelname = $req->post('hotelname');
    $roomname= $req->post('roomname');
    $roomprice = $req->post('roomprice');
    return view('details', ['hotelname' => $hotelname, 'roomname' => $roomname, 'roomprice' => $roomprice]);

}


}