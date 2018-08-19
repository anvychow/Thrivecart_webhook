<?php
namespace App\Http\Controllers\API;

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ContentController extends Controller
{

    public function test(){
        $success = array();

        $success['event']=request('event');
        $success['thrivecart_account']=request('thrivecart_account');
        $success['thrivecart_secret']=request('thrivecart_secret');
        $success['base_product']=request('base_product');
        $success['order_id']=request('order_id');
        $success['currency']=request('currency');
        $success['customer_id']=request('customer_id');
        $success['customer_identifier']=request('customer_identifier');
        $success['customer']=request('customer');
        $success['order']=request('order');
        $success['purchases']=request('purchases');
        $success['purchase_map']=request('purchase_map');
        $success['purchase_map_flat']=request('purchase_map_flat');
        $success['fulfillment']=request('fulfillment');




        return response()->json(['success'=>$success], 200);

        //return new Response('Webhook Handled', 200);
    }
}