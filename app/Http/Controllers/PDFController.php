<?php
  
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Models\User;
use PDF;
    
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $users = User::orderBy('last_name', 'asc')->get();
    
        $data = [
            'title' => 'Gamma Alpha Chapter Directory',
            'date' => date('m/d/Y'),
            'image' => public_path('storage/images/zbZaLhvhLTLztRSMBz5xFJY9GFvNvPyEkreZMrHB.jpg'),
            'users' => $users
        ]; 
              
        $pdf = PDF::loadView('myPDF', $data);
       
        return $pdf->download('GADirectory.pdf');
    }
}
