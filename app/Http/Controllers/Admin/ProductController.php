<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;


class ProductController extends Controller
{
    public function index()
    {
        $result['data']=Product::all();
        return view('admin/product',$result);
    }


    public function manage_product(Request $request,$id='')
    {
        if($id>0){
            $arr=Product::where(['id'=>$id])->get();

            $result['category_id']=$arr['0']->category_id;
            $result['name']=$arr['0']->name;
            $result['image']=$arr['0']->image;
            $result['slug']=$arr['0']->slug;
            $result['sku']=$arr['0']->sku;
            $result['mrp']=$arr['0']->mrp;
            $result['price']=$arr['0']->price;
            $result['brand']=$arr['0']->brand;
            $result['desc']=$arr['0']->desc;
            $result['keywords']=$arr['0']->keywords;

            $result['is_promo']=$arr['0']->is_promo;
            $result['is_featured']=$arr['0']->is_featured;
            $result['is_discounted']=$arr['0']->is_discounted;
            $result['is_tranding']=$arr['0']->is_tranding;
            $result['status']=$arr['0']->status;
            $result['id']=$arr['0']->id;

            $result['productAttrArr']=DB::table('products_attr')->where(['products_id'=>$id])->get();

            $productImagesArr=DB::table('product_images')->where(['products_id'=>$id])->get();

            if(!isset($productImagesArr[0])){
                $result['productImagesArr']['0']['id']='';
                $result['productImagesArr']['0']['images']='';
            }else{
                $result['productImagesArr']=$productImagesArr;
            }
            //$result['productImagesArr']
        }else{
            $result['category_id']='';
            $result['name']='';
            $result['slug']='';
            $result['image']='';
            $result['brand']='';
            $result['sku']='';
            $result['mrp']='';
            $result['price']='';
            $result['desc']='';
            $result['keywords']='';

            $result['is_promo']='';
            $result['is_featured']='';
            $result['is_tranding']='';
            $result['status']='';
            $result['id']=0;
            $result['productAttrArr'][0]['id']='';
            $result['productAttrArr'][0]['products_id']='';
            $result['productAttrArr'][0]['attr_image']='';
            $result['productAttrArr'][0]['qty']='';
            $result['productAttrArr'][0]['size_id']='';
            $result['productAttrArr'][0]['color_id']='';

            $result['productImagesArr']['0']['id']='';
            $result['productImagesArr']['0']['images']='';
            /*echo '<pre>';
            print_r( $result['productAttrArr']);
            die();*/
        }
        /*echo '<pre>';
        print_r( $result);
        die();*/
        $result['category']=DB::table('categories')->where(['status'=>1])->get();

        $result['sizes']=DB::table('sizes')->where(['status'=>1])->get();

        $result['colors']=DB::table('colors')->where(['status'=>1])->get();

        $result['brands']=DB::table('brands')->where(['status'=>1])->get();

        $result['taxs']=DB::table('taxs')->where(['status'=>1])->get();
        return view('admin/manage_product',$result);
    }

    public function manage_product_process(Request $request)
    {
        //return $request->post();
        //echo '<pre>';
        //print_r($request->post());
        //die();
        if($request->post('id')>0){
            $image_validation="mimes:jpeg,jpg,png";
        }else{
            $image_validation="required|mimes:jpeg,jpg,png";
        }
        $request->validate([
            'name'=>'required',
            // 'image'=>$image_validation,
            'slug'=>'required|unique:products,slug,'.$request->post('id'),
            // 'attr_image.*' =>'mimes:jpg,jpeg,png',
            // 'images.*' =>'mimes:jpg,jpeg,png'
        ]);

        $paidArr=$request->post('paid');
        $qtyArr=$request->post('qty');
        $size_idArr=$request->post('size_id');
        $color_idArr=$request->post('color_id');

        if($request->post('id')>0){
            $model=Product::find($request->post('id'));
            $msg="Product updated";
        }else{
            $model=new Product();
            $msg="Product inserted";
        }

        if($request->hasfile('image')){
            if($request->post('id')>0){
                $arrImage=DB::table('products')->where(['id'=>$request->post('id')])->get();
                if(Storage::exists('/public/media/'.$arrImage[0]->image)){
                    Storage::delete('/public/media/'.$arrImage[0]->image);
                }
            }
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            // $image->storeAs('/public/media',$image_name);
            $image->move(public_path('/storage/media/product'),$image_name);

            $model->image=$image_name;
        }

        $model->category_id=$request->post('category_id');;
        $model->name=$request->post('name');
        $model->slug=$request->post('slug');

        $model->sku=$request->post('sku');
        $model->mrp=$request->post('mrp');
        $model->price=$request->post('price');

        $model->brand=$request->post('brand');
        $model->desc=$request->post('desc');
        $model->keywords=$request->post('keywords');

        $model->is_promo=$request->post('is_promo');
        $model->is_featured=$request->post('is_featured');
        $model->is_tranding=$request->post('is_tranding');
        $model->status=1;
        $model->save();
        $pid=$model->id;
        /*Product Attr Start*/
        foreach($qtyArr as $key=>$val){
            $productAttrArr=[];
            $productAttrArr['products_id']=$pid;
            $productAttrArr['qty']=(int)$qtyArr[$key];
            if($size_idArr[$key]==''){
                $productAttrArr['size_id']=0;
            }else{
                $productAttrArr['size_id']=$size_idArr[$key];
            }

            if($color_idArr[$key]==''){
                $productAttrArr['color_id']=0;
            }else{
                $productAttrArr['color_id']=$color_idArr[$key];
            }
            if($request->hasFile("attr_image.$key")){
                if($paidArr[$key]!=''){
                    $arrImage=DB::table('products_attr')->where(['id'=>$paidArr[$key]])->get();
                    if(Storage::exists('/public/media/'.$arrImage[0]->attr_image)){
                        Storage::delete('/public/media/'.$arrImage[0]->attr_image);
                    }
                }

                $rand=rand('111111111','999999999');
                $attr_image=$request->file("attr_image.$key");
                $ext=$attr_image->extension();
                $image_name=$rand.'.'.$ext;
                $request->file("attr_image.$key")->move(public_path('/storage/media/product'),$image_name);

                $productAttrArr['attr_image']=$image_name;
            }

            if($paidArr[$key]!=''){
                DB::table('products_attr')->where(['id'=>$paidArr[$key]])->update($productAttrArr);
            }else{
                DB::table('products_attr')->insert($productAttrArr);
            }

        }

        /*Product Attr End*/

        /*Product Images Start*/
        // $piidArr=$request->post('piid');
        // foreach($piidArr as $key=>$val){
        //     $productImageArr['products_id']=$pid;
        //     if($request->hasFile("images.$key")){

        //         if($piidArr[$key]!=''){
        //             $arrImage=DB::table('product_images')->where(['id'=>$piidArr[$key]])->get();
        //             if(Storage::exists('/public/media/'.$arrImage[0]->images)){
        //                 Storage::delete('/public/media/'.$arrImage[0]->images);
        //             }
        //         }

        //         $rand=rand('111111111','999999999');
        //         $images=$request->file("images.$key");
        //         $ext=$images->extension();
        //         $image_name=$rand.'.'.$ext;
        //         $request->file("images.$key")->move(public_path('/storage/media/brand'),$image_name);
        //         $productImageArr['images']=$image_name;

        //         if($piidArr[$key]!=''){
        //             DB::table('product_images')->where(['id'=>$piidArr[$key]])->update($productImageArr);
        //         }else{
        //             DB::table('product_images')->insert($productImageArr);
        //         }

        //     }
        // }

        /*Product Images End*/

        $request->session()->flash('message',$msg);
        return redirect('admin/product');

    }

    public function delete(Request $request,$id){
        $model=Product::find($id);
        $model->delete();
        $request->session()->flash('message','Product deleted');
        return redirect('admin/product');
    }

    public function product_attr_delete(Request $request,$paid,$pid){
        $arrImage=DB::table('products_attr')->where(['id'=>$paid])->get();
        if(Storage::exists('/public/media/'.$arrImage[0]->attr_image)){
            Storage::delete('/public/media/'.$arrImage[0]->attr_image);
        }
        DB::table('products_attr')->where(['id'=>$paid])->delete();
        return redirect('admin/product/manage_product/'.$pid);
    }

    public function product_images_delete(Request $request,$paid,$pid){
        $arrImage=DB::table('product_images')->where(['id'=>$paid])->get();
        if(Storage::exists('/public/media/'.$arrImage[0]->images)){
            Storage::delete('/public/media/'.$arrImage[0]->images);
        }
        DB::table('product_images')->where(['id'=>$paid])->delete();
        return redirect('admin/product/manage_product/'.$pid);
    }

    public function status(Request $request,$status,$id){
        $model=Product::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message','Product status updated');
        return redirect('admin/product');
    }
}
