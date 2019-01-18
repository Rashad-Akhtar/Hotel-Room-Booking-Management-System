<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Hotel;

class HotelController extends Controller
{
    public function hotel_add(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'description' => 'required',
            'advance_amount' => 'required',
            'price' => 'required'
        ]);

        $image1 = $request->image1;
        $image1_new_name = time().$image1->getClientOriginalName();
        $image1->move('hotels/images',$image1_new_name);

        $image2 = $request->image2;
        $image2_new_name = time().$image2->getClientOriginalName();
        $image2->move('hotels/images',$image2_new_name);

        Hotel::create([
            'title' => $request->title,
            'price' => $request->price,
            'advance_amount' => $request->advance_amount,
            'description' => $request->description,
            'image1' => 'hotels/images/'.$image1_new_name,
            'image2' => 'hotels/images/'.$image2_new_name,
        ]);

        return redirect()->route('admin.hotels');

    }

    public function hotel_update(Request $request)
    {

        // $hotel = Hotel::find($request->id);

        $this->validate($request,[
            'title' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'description' => 'required',
            'advance_amount' => 'required',
            'price' => 'required'
        ]);

        $image1 = $request->image1;
        $image1_new_name = time().$image1->getClientOriginalName();
        $image1->move('hotels/images',$image1_new_name);

        $image2 = $request->image2;
        $image2_new_name = time().$image2->getClientOriginalName();
        $image2->move('hotels/images',$image2_new_name);

        Hotel::where('id',$request->id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'advance_amount' => $request->advance_amount,
            'description' => $request->description,
            'image1' => 'hotels/images/'.$image1_new_name,
            'image2' => 'hotels/images/'.$image2_new_name,
        ]);

        return redirect()->route('admin.hotels');
        
    }

    public function hotel_delete($id)
    {
        Hotel::destroy($id);

        return back();
    }
}
