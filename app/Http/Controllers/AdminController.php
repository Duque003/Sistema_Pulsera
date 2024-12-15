<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\SensorData;
use App\Models\Alarmas;
use App\Models\Contactos;
use App\Models\Dispositivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function showRegister()
    {
        return view('admin.register');
    }

    public function showRecuperacion()
    {
        return view('admin.recuperacion');
    }

    public function showLogin()
    {
        return view('admin.login');
    }

    public function showVerificacion()
    {
        return view('admin.verificacion');
    }

    public function verificacion(Request $request){
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6',
            'code' => 'required|numeric|digits:6',
        ]);
        
        Mail::send('admin.correo', [
            'name' => $request->name,
            'code' => $request->code
        ], function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('Código de Verificación');
        });

        $InforArray = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password, // Encripta la contraseña
            'code' => $request->code,
        ];

        // Redirect to the login page with a success message
        //return redirect()->route('admin.verificacion')->with('success', 'Por favor verifique su correo.');
        return view('admin.verificacion', [
            'success' => 'Por favor verifique su correo.',
            'codigo' => $InforArray,
        ]);
    }

    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8',
            'code' => 'required|numeric|digits:6',
            'codigo' => 'required|numeric|digits:6',
        ]);

        // Lista de imágenes predeterminadas
        $defaultImages = [
            'pictures_pre/user0.jpg',
            'pictures_pre/user1.jpg',
            'pictures_pre/user2.jpg',
        ];

        if($request->code === $request->codigo){
            // Create a new admin
            $admin = new Admin();
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = Hash::make($request->password); // Hash the password before saving
            $admin->picture = $defaultImages[array_rand($defaultImages)];
            $admin->save();

            // Redirect to the login page with a success message
            return redirect()->route('admin.login')->with('success', 'Registro exitoso. Por favor, inicie sesión..');
        }else{
            return redirect()->route('admin.verificacion')->withInput()->withErrors(['code' => 'Código de verificación incorrecto']);
        }
    }

    public function registerApp(Request $request){
        dd($request);
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8',
        ]);

        // Lista de imágenes predeterminadas
        $defaultImages = [
            'pictures_pre/user0.jpg',
            'pictures_pre/user1.jpg',
            'pictures_pre/user2.jpg',
        ];

            // Create a new admin
            $admin = new Admin();
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = Hash::make($request->password); // Hash the password before saving
            $admin->picture = $defaultImages[array_rand($defaultImages)];
            $admin->save();
    }

    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);
    
        // Find the admin by email
        $adminInfo = Admin::where('email', $request->input('email'))->first();
    
        // Check if admin exists
        if (!$adminInfo) {
            return back()->withInput()->withErrors(['email' => 'Email not found']);
        }
    
        // Check if the provided password matches the hashed password
        if (!Hash::check($request->input('password'), $adminInfo->password)) {
            return back()->withInput()->withErrors(['password' => 'Incorrect password']);
        }
    
        // Store admin ID in the session
        $request->session()->put('LoggedAdminInfo', $adminInfo->id);
    
        // Redirect to the dashboard
        return redirect()->route('admin.dashboard');
    }

    public function showDashboard()
    {
       $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));
        
       if (!$LoggedAdminInfo) {
           return redirect()->route('admin.login')->with('fail', 'You must be logged in to access the dashboard');
       }

       // Obtén el ID del usuario autenticado
        $loggedAdminId = session()->get('LoggedAdminInfo');

        // Recupera los datos en la tabla de alarmas asociados con el usuario autenticado
        $alarmas = Alarmas::where('admin_id', $loggedAdminId)->get();

        // Recupera los datos en la tabla de contactos asociados con el usuario autenticado
        $contactos = Contactos::where('admin_id', $loggedAdminId)->get();

        // Recupera los datos del sensor asociados con el usuario autenticado
        $sensorData = SensorData::where('admin_id', $loggedAdminId)->get();
    
       return view('admin.dashboard', [
           'LoggedAdminInfo' => $LoggedAdminInfo,
           'alarmas' => $alarmas,
           'contactos' => $contactos,
           'sensorData' => $sensorData
       ]);
    }

    public function showProfile(Request $request)
    {
        // Get the logged-in admin's information from the session
        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));

        if (!$LoggedAdminInfo) {
            return redirect()->route('admin.login')->with('fail', 'You must be logged in to access the profile page');
        }

        // Pass the admin data to the profile view
        return view('admin.profile', [
            'LoggedAdminInfo' => $LoggedAdminInfo,
        ]);
    }
    public function updateProfile(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string|max:1000',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Get the logged-in admin's information from the session
        $admin = Admin::find(session('LoggedAdminInfo'));

        if (!$admin) {
            return redirect()->route('admin.login')->with('fail', 'You must be logged in to update the profile');
        }

        // Lista de imágenes predeterminadas
        $defaultImages = [
            'pictures_pre/user0.jpg',
            'pictures_pre/user1.jpg',
            'pictures_pre/user2.jpg',
        ];

        // Update the admin's information
        $admin->name = $request->input('name');
        $admin->bio = $request->input('bio');

        // Handle the profile picture upload
        if ($request->hasFile('picture')) {
            // Delete old picture if it exists
            if ($admin->picture && !in_array($admin->picture, $defaultImages)) {
                Storage::disk('public')->delete($admin->picture);
            }

            // Store the new picture
            $file = $request->file('picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('profile_pictures', $filename, 'public');
        
            $admin->picture = $path;
        }

        $admin->save();

        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully'); 
    }

    // Remove the specified user from storage
    public function profiledestroy($id)
    {
        $usuario = Admin::findOrFail($id);
        $datos = SensorData::where('admin_id', $id)->delete();
        $contacto = Contactos::where('admin_id', $id)->delete();
        $alarmas = Alarmas::where('admin_id', $id)->delete();
        if (!Storage::disk('public')->exists('pictures_pre/' . $usuario->picture)) {
            Storage::disk('public')->delete($usuario->picture);
            
        }
        $usuario->delete();

        return redirect()->route('admin.login')->with('success', 'La cuenta ha sido eliminado exitosamente.');
    }

    public function logout()
    {
        // Clear the session data for the logged-in admin
        session()->forget('LoggedAdminInfo');
        
        // Redirect to the login page
        return redirect()->route('admin.login');
    }

     public function store(Request $request)
     {
        // Validate the request data
        $request->validate([
            'nombre' => 'required|string|max:255', // Nombre del contacto
            'numero' => 'required|string|digits:10|unique:contactos', // Número único con longitud máxima de 20 caracteres
            'parentesco' => 'required|string|max:100', // Parentesco con una longitud máxima de 100 caracteres
        ]);

        // Obtén el ID del usuario autenticado
        $loggedAdminId = session()->get('LoggedAdminInfo');
     
         // Create a new User instance
         $contacto = new Contactos();
         $contacto->admin_id = $loggedAdminId;
         $contacto->nombre = $request->nombre;
         $contacto->numero = $request->numero;
         $contacto->parentesco = $request->parentesco;
     
         // Save the contacto to the database
         $contacto->save();
         
         // Redirect to the user list with a success message
         return redirect()->route('admin.contactos')->with('success', 'Contacto creado exitósamente.');
     }
     
 
     // Update the specified user in storage
     public function update(Request $request, $id)
     {
        $request->validate([
            'nombre' => 'required|string|max:255', // Nombre del contacto
            'numero' => 'required|string|max:20|unique:contactos,numero,' . $id, // Número único con longitud máxima de 20 caracteres
            'parentesco' => 'required|string|max:100', // Parentesco con una longitud máxima de 100 caracteres
        ]);
 
         $contacto = Contactos::findOrFail($id);
         $contacto->nombre = $request->nombre;
         $contacto->numero = $request->numero;
         $contacto->parentesco = $request->parentesco;
     
         $contacto->save();
 
         return redirect()->route('admin.contactos')->with('success', 'El contactos ha sido actualizado exitosamente.');
     }
 
     // Remove the specified user from storage
     public function destroy($id)
     {
         $contacto = Contactos::findOrFail($id);
         $contacto->delete();
 
         return redirect()->route('admin.contactos')->with('success', 'El contacto ha sido eliminado exitosamente.');
     }

     // Método para obtener y mostrar los datos de sensores del usuario
    public function getUserSensorData()
    {
        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));

        if (!$LoggedAdminInfo) {
            return redirect()->route('admin.login')->with('fail', 'You must be logged in to access the profile page');
        }

        // Obtén el ID del usuario autenticado
        $loggedAdminId = session()->get('LoggedAdminInfo');

        // Recupera los datos del sensor asociados con el usuario autenticado
        $sensorData = SensorData::where('admin_id', $loggedAdminId)->get();

        // Mostrar los datos con dd()
        //dd($loggedAdminId);

        // Pasa los datos a la vista 'admin.datos' para mostrarlo
        return view('admin.datos', [
            'LoggedAdminInfo' => $LoggedAdminInfo,
            'sensorData' => $sensorData
        ]);
    }

    public function showcontactos()
    {
        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));

        if (!$LoggedAdminInfo) {
            return redirect()->route('admin.login')->with('fail', 'You must be logged in to access the profile page');
        }

        // Obtén el ID del usuario autenticado
        $loggedAdminId = session()->get('LoggedAdminInfo');

        // Recupera los datos den la tabla de contactos asociados con el usuario autenticado
        $contactos = Contactos::where('admin_id', $loggedAdminId)->get();

        // Pasa los datos a la vista 'admin.contactos' para mostrarlo
        return view('admin.contactos', [
            'LoggedAdminInfo' => $LoggedAdminInfo,
            'contactos' => $contactos
        ]);
    }

    public function updatelogin(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'newpassword' => 'required|min:5|max:12',
        ]);
    
        // Find the admin by email
        $adminInfo = Admin::where('email', $request->input('email'))->first();
    
        // Check if admin exists
        if (!$adminInfo) {
            return back()->withInput()->withErrors(['email' => 'Email not found']);
        }else {
            $adminInfo->password = Hash::make($request->newpassword);
            $adminInfo->save();
        }
        
        // Redirect to the dashboard
        return redirect()->route('admin.login');
    }

    public function showdispositivo()
    {
        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));

        if (!$LoggedAdminInfo) {
            return redirect()->route('admin.login')->with('fail', 'You must be logged in to access the profile page');
        }

        // Obtén el ID del usuario autenticado
        $loggedAdminId = session()->get('LoggedAdminInfo');

        // Recupera los datos den la tabla de contactos asociados con el usuario autenticado
        $dispositivos = Dispositivo::where('admin_id', $loggedAdminId)->get();

        // Pasa los datos a la vista 'admin.contactos' para mostrarlo
        return view('admin.dispositivo', [
            'LoggedAdminInfo' => $LoggedAdminInfo,
            'dispositivos' => $dispositivos
        ]);
    }

    public function storeD(Request $request)
     {
        // Validar los datos de la solicitud
        $request->validate([
            'nombre' => 'required|string|max:255', // Nombre del dispositivo, requerido y máximo 255 caracteres
            'id' => 'required|string|size:16|regex:/^\d{16}$/|unique:dispositivo,id_dispositivo', // ID único en la tabla dispositivos
            'tipo' => 'required|string|max:100', // Solo permite los valores definidos
        ]);


        // Obtén el ID del usuario autenticado
        $loggedAdminId = session()->get('LoggedAdminInfo');
     
         // Create a new User instance
         $dispositivo = new Dispositivo();
         $dispositivo->admin_id = $loggedAdminId;
         $dispositivo->nombre_dispositivo = $request->nombre;
         $dispositivo->id_dispositivo = $request->id;
         $dispositivo->tipo_dispositivo = $request->tipo;
     
         // Save the contacto to the database
         $dispositivo->save();
         
         // Redirect to the user list with a success message
         return redirect()->route('admin.dispositivo')->with('success', 'Dispositivo agregado exitósamente.');
     }
     
 
     // Update the specified user in storage
     public function updateD(Request $request, $id)
     {
        // Validar los datos de la solicitud
        $request->validate([
            'nombre' => 'required|string|max:255', // Nombre del dispositivo, requerido y máximo 255 caracteres
            'id' => ['required','string','size:16','regex:/^\d{16}$/', // Solo dígitos
                'unique:dispositivo,id'], // ID único en la tabla dispositivos
            'tipo' => 'required|string|max:100', // Solo permite los valores definidos
        ]);
 
         $dispositivo = Dispositivo::findOrFail($id);
         $dispositivo->nombre_dispositivo = $request->nombre;
         $dispositivo->id_dispositivo = $request->id;
         $dispositivo->tipo_dispositivo = $request->tipo;
     
         $dispositivo->save();
 
         return redirect()->route('admin.dispositivo')->with('success', 'El dispositivo ha sido actualizado exitosamente.');
     }
 
     // Remove the specified user from storage
     public function destroyD($id)
     {
         $dispositivo = Dispositivo::findOrFail($id);
         $dispositivo->delete();
 
         return redirect()->route('admin.dispositivo')->with('success', 'El dispositivo ha sido eliminado exitosamente.');
     }
}
