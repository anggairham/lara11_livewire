<?php

use App\Livewire\CreateCustomer;
use App\Livewire\Customers;
use App\Livewire\EditCustomers;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\ViewCustomers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function () {
    Route::get('customers/create', CreateCustomer::class);
    Route::get('customers', Customers::class);
    Route::get('customers/view/{id}', ViewCustomers::class);
    Route::get('customers/edit/{id}', EditCustomers::class);
});

Route::get('register', Register::class);
Route::get('login', Login::class);
