<?php

namespace App\Http\Controllers\Admin\Apps;

use Illuminate\Support\Facades\Mail;
use App\Mail\UserRegisteredMail;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Admin\Apps\BaseAdminController;
use App\Models\User;
use Illuminate\Http\Request;

class EcommerceCustomerAll extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.content.apps.app-ecommerce-customer-all', compact('users'));
    }

    public function updateStatus($id, Request $request)
    {
        $request->validate([
            'status' => 'required|boolean',
        ]);
    
        $user = User::findOrFail($id);
        $user->status = $request->status;
        $user->save();
    
        Log::info("User ID $id updated status to {$request->status}");

        if ($request->status == 1) {
            Mail::to($user->email)->send(new UserRegisteredMail($user, false));
        }
    
        return response()->json(['success' => true]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view("{$this->prefix}.content.apps.edit-customer", compact('user'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'language' => 'required',
            'contact_number' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|min:6',
            'is_reseller' => 'required|boolean',
            'neq_number' => 'required',
            'status' => 'required|boolean',
            'country' => 'required',
        ]);

        $user = User::findOrFail($id);
        $data = $request->all();
        if (!$request->filled('password')) {
            unset($data['password']);
        }
        $user->update($data);

        return redirect()->route("{$this->prefix}.app-ecommerce-customer-all")->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route(route($this->prefix . '.app-ecommerce-customer-all', [], false));

    }
}
