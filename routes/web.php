<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/setup', function () {
    $credentials = [
        'email' => 'fendye@gmail.com',
        'password' => 'password'
    ];

    if(!Auth::attempt($credentials)) {
        $user = new User();

        $user->name = 'admin';
        $user->email = $credentials['email'];
        $user->password = Hash::make($credentials['password']);

        $user->save();
        
        if(Auth::attempt($credentials)) {
            $user = Auth::User();
    
            $adminToken = $user->createToken('admin-token',['create', 'update', 'delete']);
            $updateToken = $user->createToken('update-token',['create', 'update']);
            $basicToken = $user->createToken('basic-token');
    
            return [
                'admin' => $adminToken->plainTextToken,
                'update' => $updateToken->plainTextToken,
                'basic' => $basicToken->plainTextToken,
            ];

            // {
            //     "admin": "1|xNUNXGDHQM2EU2JzUureMLQzfNJy0rxIcn6oc7CJ",
            //     "update": "2|3E3ezxMX4wn8C9WCB5SFhwCNHi6jlcLmMJEUsnlE",
            //     "basic": "3|1EG2Qd9EcRzAt2mGQRqsRsQvXk6x2dkeV9cpdnce"
            //   }
        }
    }
});
