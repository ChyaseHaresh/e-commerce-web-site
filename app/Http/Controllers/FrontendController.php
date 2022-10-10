<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\HomeBanner;
use App\Models\Admin\Product;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        $result['banner'] = HomeBanner::all();
        $result['top_categories'] = Category::all();
        $result['electronics'] = Category::where('parent_category_id', 18)->get();
        $result['beauty'] = Category::where('parent_category_id', 17)->get();
        $result['fashion'] = Category::where('parent_category_id', 14)->get();

        $result['featured'] = Product::where('is_featured', 1)->get();

        return view('frontend.home', $result);
    }

    public function product(Request $request, $slug)
    {
        $result['product'] =
        DB::table('products')
            ->where(['status' => 1])
            ->where(['slug' => $slug])
            ->get();

        foreach ($result['product'] as $list1) {
            $result['product_attr'][$list1->id] =
            DB::table('products_attr')
                ->leftJoin('sizes', 'sizes.id', '=', 'products_attr.size_id')
                ->leftJoin('colors', 'colors.id', '=', 'products_attr.color_id')
                ->where(['products_attr.products_id' => $list1->id])
                ->get();
        }

        foreach ($result['product'] as $list1) {
            $result['product_images'][$list1->id] =
            DB::table('products_attr')
                ->where(['products_attr.products_id' => $list1->id])
                ->get();
        }

        $result['related_product'] =
        DB::table('products')
            ->where(['status' => 1])
            ->where('slug', '!=', $slug)
            ->where(['category_id' => $result['product'][0]->category_id])
            ->get();

        foreach ($result['related_product'] as $list1) {
            $result['related_product_attr'][$list1->id] =
            DB::table('products_attr')
                ->leftJoin('sizes', 'sizes.id', '=', 'products_attr.size_id')
                ->leftJoin('colors', 'colors.id', '=', 'products_attr.color_id')
                ->where(['products_attr.products_id' => $list1->id])
                ->get();
        }

        $result['product_review'] =
        DB::table('product_review')
            ->leftJoin('users', 'users.id', '=', 'product_review.customer_id')
            ->where(['product_review.products_id' => $result['product'][0]->id])
            ->where(['product_review.status' => 1])
            ->orderBy('product_review.added_on', 'desc')
            ->select('product_review.rating', 'product_review.review', 'product_review.added_on', 'users.name')
            ->get();
        //prx($result['product_review']);
// dd($result);
// die;
        return view('frontend.product_detail', $result);
    }

    public function add_to_cart(Request $request)
    {
        $uid = Auth::id();

        $actual_size = $request->post('actual_size');
        $actual_color = $request->post('actual_color');

        $size_id = $request->post('size_id');
        $color_id = $request->post('color_id');
        $pqty = $request->post('pqty');
        $product_id = $request->post('p_id');

        $result = DB::table('products_attr')
            ->where('products_id', '=', $product_id)
            ->where('size_id', '=', $size_id)
            ->where('color_id', '=', $color_id)
            ->first();
        // dd($result);
        // die;
        if ($result != null) {
            $product_attr_id = $result->id;

            // $getAvaliableQty = getAvaliableQty($product_id, $product_attr_id);
            // $finalAvaliable = $getAvaliableQty[0]->pqty - $getAvaliableQty[0]->qty;
            // if ($pqty > $finalAvaliable) {
            //     return response()->json(['msg' => "not_avaliable", 'data' => "Only $finalAvaliable left"]);
            // }

            $check = DB::table('cart')
                ->where('user_id', '=', $uid)
            // ->where('user_type','=', $user_type)
                ->where('product_id', '=', $product_id)
                ->where('product_attr_id', '=', $product_attr_id)
                ->get();
            if (isset($check[0])) {
                $update_id = $check[0]->id;
                if ($pqty == 0) {
                    DB::table('cart')
                        ->where(['id' => $update_id])
                        ->delete();
                    $msg = "removed";
                } else {
                    DB::table('cart')
                        ->where(['id' => $update_id])
                        ->update(['qty' => $pqty]);
                    $msg = "updated";
                }

            } else {
                $id = DB::table('cart')->insertGetId([
                    'user_id' => $uid,
                    'product_id' => $product_id,
                    'product_attr_id' => $product_attr_id,
                    'qty' => $pqty,
                    'size' => $actual_size,
                    'color' => $actual_color,
                    'added_on' => date('Y-m-d h:i:s'),
                ]);
                $msg = "added";
            }
        } else {
            $check = DB::table('cart')
                ->where('user_id', '=', $uid)
                ->where('product_id', '=', $product_id)
                ->get();
            if (isset($check[0])) {
                $update_id = $check[0]->id;
                if ($pqty == 0) {
                    DB::table('cart')
                        ->where(['id' => $update_id])
                        ->delete();
                    $msg = "removed";
                } else {
                    DB::table('cart')
                        ->where(['id' => $update_id])
                        ->update(['qty' => $pqty]);
                    $msg = "updated";
                }

            } else {
                $id = DB::table('cart')->insertGetId([
                    'user_id' => $uid,
                    'product_id' => $product_id,
                    'qty' => $pqty,
                    'size' => $actual_size,
                    'color' => $actual_color,
                    'added_on' => date('Y-m-d h:i:s'),
                ]);
                $msg = "added";
            }
        }

        $result = DB::table('cart')
            ->leftJoin('products', 'products.id', '=', 'cart.product_id')
            ->leftJoin('products_attr', 'products_attr.id', '=', 'cart.product_attr_id')
            ->leftJoin('sizes', 'sizes.id', '=', 'products_attr.size_id')
            ->leftJoin('colors', 'colors.id', '=', 'products_attr.color_id')
            ->where(['user_id' => $uid])
            ->select('cart.qty', 'products.name', 'products.image', 'sizes.size', 'colors.color', 'products.price', 'products.slug', 'products.id as pid', 'products_attr.id as attr_id')
            ->get();
        return redirect('/cart');
    }

    public function cart(Request $request)
    {
        $uid = Auth::id();

        $result['list'] = DB::table('cart')
            ->leftJoin('products', 'products.id', '=', 'cart.product_id')
            ->leftJoin('products_attr', 'products_attr.id', '=', 'cart.product_attr_id')
            ->leftJoin('sizes', 'sizes.id', '=', 'products_attr.size_id')
            ->leftJoin('colors', 'colors.id', '=', 'products_attr.color_id')
            ->where(['user_id' => $uid])
            ->select('cart.id', 'cart.qty', 'products.name', 'products.image', 'sizes.size', 'colors.color', 'products.price', 'products.slug', 'products.id as pid', 'products_attr.id as attr_id')
            ->get();
        return view('frontend.cart', $result);
    }
    public function cart_delete($cart_id)
    {
        DB::table('cart')->where('id', '=', $cart_id)->delete();
        return redirect('/cart');
    }

    public function checkout(Request $request)
    {
        $result['cart_data'] = getAddToCartTotalItem();

        if (isset($result['cart_data'][0])) {

            if (Auth::check()) {
                $uid = Auth::id();
                $customer_info = DB::table('users')
                    ->where(['id' => $uid])
                    ->get();
                $result['customers']['name'] = $customer_info[0]->name;
                $result['customers']['email'] = $customer_info[0]->email;
                $result['customers']['phone'] = $customer_info[0]->phone;
                // $result['customers']['address'] = $customer_info[0]->address;
                // $result['customers']['city'] = $customer_info[0]->city;
                // $result['customers']['state'] = $customer_info[0]->state;
                // $result['customers']['zip'] = $customer_info[0]->zip;
            } else {
                $result['customers']['name'] = '';
                $result['customers']['email'] = '';
                $result['customers']['mobile'] = '';
                $result['customers']['address'] = '';
                $result['customers']['city'] = '';
                $result['customers']['state'] = '';
                $result['customers']['zip'] = '';
            }

            return view('frontend.checkout', $result);
        } else {
            return redirect('/');
        }
    }

    // public function apply_coupon_code(Request $request)
    // {
    //     $totalPrice=0;
    //     $result=DB::table('coupons')
    //         ->where(['code'=>$request->coupon_code])
    //         ->get();

    //     if(isset($result[0])){
    //         $value=$result[0]->value;
    //         $type=$result[0]->type;
    //         $getAddToCartTotalItem=getAddToCartTotalItem();

    //         foreach($getAddToCartTotalItem as $list){
    //             $totalPrice=$totalPrice+($list->qty*$list->price);
    //         }
    //         if($result[0]->status==1){
    //             if($result[0]->is_one_time==1){
    //                 $status="error";
    //                 $msg="Coupon code already used";
    //             }else{
    //                 $min_order_amt=$result[0]->min_order_amt;
    //                 if($min_order_amt>0){

    //                     if($min_order_amt<$totalPrice){
    //                         $status="success";
    //                         $msg="Coupon code applied";
    //                     }else{
    //                         $status="error";
    //                         $msg="Cart amount must be greater then $min_order_amt";
    //                     }
    //                 }else{
    //                      $status="success";
    //                      $msg="Coupon code applied";
    //                 }
    //             }
    //         }else{
    //             $status="error";
    //             $msg="Coupon code deactivated";
    //         }

    //     }else{
    //        $status="error";
    //        $msg="Please enter valid coupon code";
    //     }

    //     if($status=='success'){
    //         if($type=='Value'){
    //             $totalPrice=$totalPrice-$value;
    //         }if($type=='Per'){
    //             $newPrice=($value/100)*$totalPrice;
    //             $totalPrice=round($totalPrice-$newPrice);
    //         }
    //     }

    //     return response()->json(['status'=>$status,'msg'=>$msg,'totalPrice'=>$totalPrice]);
    // }

    public function apply_coupon_code(Request $request)
    {
        $arr = apply_coupon_code($request->coupon_code);
        $arr = json_decode($arr, true);

        return response()->json(['status' => $arr['status'], 'msg' => $arr['msg'], 'totalPrice' => $arr['totalPrice']]);
    }

    public function remove_coupon_code(Request $request)
    {
        $totalPrice = 0;
        $result = DB::table('coupons')
            ->where(['code' => $request->coupon_code])
            ->get();
        $getAddToCartTotalItem = getAddToCartTotalItem();
        $totalPrice = 0;
        foreach ($getAddToCartTotalItem as $list) {
            $totalPrice = $totalPrice + ($list->qty * $list->price);
        }

        return response()->json(['status' => 'success', 'msg' => 'Coupon code removed', 'totalPrice' => $totalPrice]);
    }

    public function place_order(Request $request)
    {
        if (Auth::check()) {
            $coupon_value = 0;
            if ($request->coupon_code != '') {
                $arr = apply_coupon_code($request->coupon_code);
                $arr = json_decode($arr, true);
                if ($arr['status'] == 'success') {
                    $coupon_value = $arr['coupon_code_value'];
                } else {
                    return response()->json(['status' => 'false', 'msg' => $arr['msg']]);
                }
            }

            $uid = Auth::id();
            $totalPrice = 0;
            $getAddToCartTotalItem = getAddToCartTotalItem();
            foreach ($getAddToCartTotalItem as $list) {
                $totalPrice = $totalPrice + ($list->qty * $list->price);
            }
            $arr = [
                "customers_id" => $uid,
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "address" => $request->address,
                "city" => $request->city,
                "state" => $request->state,
                "zip" => $request->zip,
                "coupon_code" => $request->coupon_code,
                "coupon_value" => $coupon_value,
                "payment_type" => "Unknown",
                "payment_status" => "Pending",
                "total_amt" => $totalPrice,
                "order_status" => 1,
                "added_on" => date('Y-m-d h:i:s'),
            ];
            $order_id = DB::table('orders')->insertGetId($arr);

            if ($order_id > 0) {
                foreach ($getAddToCartTotalItem as $list) {
                    $prductDetailArr['product_id'] = $list->pid;
                    $prductDetailArr['products_attr_id'] = $list->attr_id;
                    $prductDetailArr['price'] = $list->price;
                    $prductDetailArr['qty'] = $list->qty;
                    $prductDetailArr['orders_id'] = $order_id;
                    DB::table('orders_details')->insert($prductDetailArr);
                }
                // DB::table('cart')->where(['user_id'=>$uid])->delete();
                $request->session()->put('ORDER_ID', $order_id);

                $status = "success";
                $msg = "Order placed";
            } else {
                $status = "false";
                $msg = "Please try after sometime";
            }
        } else {
            $status = "false";
            $msg = "Please login to place order";
        }
        return response()->json(['status' => $status, 'msg' => $msg, 'coupon_value' => $coupon_value, 'order_id' => $order_id]);
    }

    public function payment_methods(Request $request, $val, $order_id)
    {
        $totalPrice = 0;
        $getAddToCartTotalItem = getAddToCartTotalItem();
        foreach ($getAddToCartTotalItem as $list) {
            $totalPrice = $totalPrice + ($list->qty * $list->price);
        }
        $datas['amount'] = ceil($totalPrice - $val);
        $datas['order_id'] = $order_id;

        if ($order_id != '') {
            return view('frontend.payment_methods', $datas);
        } else {
            return redirect('/');
        }
    }

    public function order_placed(Request $request, $val, $order_id)
    {
        $decoded_data = json_decode($val);

        $arr['data'] = json_decode($val);

        if ($val != null) {
            DB::table('orders')
                ->where(['id' => $order_id])
                ->update(['txn_id' => $decoded_data->idx, 'payment_id' => $decoded_data->state->idx, 'payment_status' => 'Success', 'payment_type' => 'Khalti ' . $decoded_data->type->name]);
            return view('frontend.order_placed', $arr);
        } else {
            return view('frontend.order_fail');
        }
    }

    public function verifyPayment(Request $request)
    {
        $token = $request->token;
        $args = http_build_query(array(
            'token' => $token,
            'amount' => $request->amount,
        ));

        $url = "https://khalti.com/api/v2/payment/verify/";

        # Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $headers = ['Authorization: Key test_secret_key_da36a8077b2e480f904d2fa38b531e23'];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Response
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }
    public function cash_on_delivery(Request $request, $order_id)
    {
        $arr['data'] = "Cash on Delivery";
        DB::table('orders')
            ->where(['id' => $order_id])
            ->update(['payment_type' => 'Cash on Delivery', 'payment_status' => 'Completed']);
        return view('frontend.order_placed', $arr);
    }


    public function order(Request $request)
    {
        $result['orders'] = DB::table('orders')
            ->select('orders.*', 'orders_status.orders_status')
            ->leftJoin('orders_status', 'orders_status.id', '=', 'orders.order_status')
            ->where(['orders.customers_id' => Auth::id()])
            ->get();
        return view('frontend.order', $result);
    }

    public function order_detail(Request $request, $id)
    {
        $result['orders_details'] =
        DB::table('orders_details')
            ->select('orders.*', 'orders_details.price', 'orders_details.qty', 'products.name as pname', 'products_attr.attr_image', 'sizes.size', 'colors.color', 'orders_status.orders_status')
            ->leftJoin('orders', 'orders.id', '=', 'orders_details.orders_id')
            ->leftJoin('products_attr', 'products_attr.id', '=', 'orders_details.products_attr_id')
            ->leftJoin('products', 'products.id', '=', 'products_attr.products_id')
            ->leftJoin('sizes', 'sizes.id', '=', 'products_attr.size_id')
            ->leftJoin('orders_status', 'orders_status.id', '=', 'orders.order_status')
            ->leftJoin('colors', 'colors.id', '=', 'products_attr.color_id')
            ->where(['orders.id' => $id])
            ->where(['orders.customers_id' => Auth::id()])
            ->get();
        if (!isset($result['orders_details'][0])) {
            return redirect('/');
        }
        return view('frontend.order_detail', $result);
    }

}
