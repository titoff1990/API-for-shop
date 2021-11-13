<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderCreation ()
    {
        return view('orderCreation');
    }

    public function createOrder (Request $request)
    {
        $data = $this->validate($request, [
        'name' => 'required',
        'comment' => 'required',
        'partNumber' => 'required',
        'brand' => 'required'
    ]);

$comment = $request->input('comment');
$f = $request->input('name');
$fio = explode(' ', $f);
$fio = list($lastName, $firstName, $patronymic) = $fio;

$order = [
'status' => 'trouble',
'Type' => 'fizik',
'orderMethod' => 'test',
'number' => '7041990',
'lastName' => $lastName,
'firstName' => $firstName,
'patronymic' => $patronymic,
'customerComment' => $comment];

$order = json_encode($order);
$order = ['order' => $order];

$url ='https://superposuda.retailcrm.ru/api/v5/orders/create?apiKey=QlnRWTTWw9lv3kjxy1A8byjUmBQedYqb';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $order);
    $result = curl_exec($ch);
    curl_close($ch);

 $result = json_decode($result, true);

      return view('show', ['result' => $result]);
    }   
}
