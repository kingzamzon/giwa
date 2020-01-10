<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use App\Customer;
use App\OrderDetails;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('created_at','desc')->with('customer')->with('orderdetails')->get();
        return response()->json($orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'country' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'lagRegion' => 'required',
            'address' => 'required',
            'state' => 'required',
            'zipcode' => 'nullable|max:12',
            'email' => 'required|email',
            'phone' => 'required|max:20',
            'orderNote' => 'nullable',
            'alternateAddress' => 'required',
            'coupon_code' => 'nullable',
            'delivery_fee' => 'required',
            'reference' => 'required',
            'total_cost' => 'required',
            'is_paid' => 'required',
            'order_type' => 'required',
            'is_delivered' => 'required',
            'item' => 'required'

          ];
    
          $this->validate($request, $rules);
    
          $data = $request->all();

          $customer = Customer::create($data);  
          if($customer) {
              $data['customer_id'] =  $customer->id;       
              $order = Order::create($data);          
          }
          if($order) {
            for($i=0; $i < count($request->item); $i++){
             self::storeItems($order->id, $request->item[$i]);
            }
             
          }
    
          return response()->json(['data'=>$order,'customer'=>$customer], 201);
    }

    public function storeItems($id, $item)
    {
        $data['order_id'] =  $id;       
        $data['item'] = $item;
        $orderdetails = OrderDetails::create($data);  

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $reference)
    {
        $rules = [
            'is_paid' => 'required'
          ];
    
          $this->validate($request, $rules);
        $order = Order::where('reference',$reference)->first();
        $order->is_paid = $request->is_paid;
        $order->save();
        return response()->json($order);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
