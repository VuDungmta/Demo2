<?php



namespace App\Http\Controllers;
use DB; 
use PDF;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function pdfview(Request $request)
    {
        $items = DB::select('select * from Users');
        view()->share('items',$items);

        if($request->has('download')){
            $pdf = PDF::loadView('pdfview',$items);
            return $pdf->download('pdfview.pdf');
        }

        return view('pdfview');
    }
    //
}
