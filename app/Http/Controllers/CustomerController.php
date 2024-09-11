<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;


class CustomerController extends Controller
{
    public function index()
    {
        // Mengambil data pelanggan dengan paginasi 5 per halaman
        $customers = Customer::paginate(5);

        // Mengirim data ke view
        return view('customers.index', ['customers' => $customers]);
    }

}