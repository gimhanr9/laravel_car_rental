<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
use App\Models\Rental;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF($id)
    {
        $rentals=Rental::find($id);
        $data = [
            'name' => $rentals->customerName,
            'start' => $rentals->start,
            'destination' => $rentals->destination,
            'dateTaken' => $rentals->dateTaken,
            'dueDate' => $rentals->dueDate,
            'distance' => $rentals->distance,
            'price' => $rentals->price,
        ];
          
        $pdf = PDF::loadView('myPDF', $data);
    
        return $pdf->download('zineX.pdf');
    }
}