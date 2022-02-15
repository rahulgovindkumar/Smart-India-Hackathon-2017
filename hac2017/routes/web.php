<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('customer/{id}','CustomerController@customer');
Route::get('get_customer',function(){

	$customer=App\Customer::where('name','=','abc')->first();
	echo $customer->id;
});
Route::get('orders',function(){
$orders=App\Order::all();
foreach ($orders as $order) {
	$customer=App\Customer::find($order->customer_id);
	echo $order->name."Ordered by ".$order->customer->name."<br/>";
}

});
Route::get('mypage',function(){
$data = array('var1' =>'ham' ,'var2' =>'hotdog' ,'orders'=>App\Order::all());
	return view('mypage',$data);

});
*/