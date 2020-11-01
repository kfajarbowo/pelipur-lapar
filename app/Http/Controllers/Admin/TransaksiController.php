<?php

namespace App\Http\Controllers\Admin;

use App\Transaksi;
use DB;
use App\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    public function index(){
        $items= Item::where('stock','>',0)->get();
        return view('admin.transaksi.index',compact('items'));
    }

    public function create(Request $request){
        $item= Item::where('id',$request->item_id)->first();
        $transaksi= new Transaksi();
        $transaksi->item_id = $request->item_id;
        $transaksi->jumlah = $request->jumlah*$item->price;
        $transaksi->stock=$request->jumlah;
        $transaksi->save();
        $stockupdate=$item->stock - $request->jumlah;
        DB::table('items')
            ->where('id', $request->item_id)
            ->update(['stock' => $stockupdate]);

        $items=DB::table('transaksi')
                ->where('transaksi.id',$transaksi->id)
                ->join('items','transaksi.item_id','items.id') 
                ->select('transaksi.*','items.name','items.price')
                ->first();

        return view('admin.transaksi.show',compact('items'));
  
    }
}
