<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**      * Create a new AuthController instance.      *
     * * @return void      */
    public function __construct()
    {
        /* Utilizar el middleware de autentificación
            Indicando que excepto las accione de login y register deben solicitarse autentificación */

        $this->middleware('auth:api', ['except' => ['login', 'register', 'me']]);
    }
    //Registrar usuario
    //Request todos los datos enviados
    public function register(Request $request)
    {
        try {
            //Validación de las entradas
            $this->validate($request, ['name' => 'required', 'email' => 'required|email|unique:users,email', 'password' => 'required|min:6']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            //Captura de los errores de validación
            return $this->responseErrors($e->errors(), 422);
        }
        try {
            //Instancia con la información del usuario
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->rol_id = 2;

            //Insertar el usuario
            $user->save();

            //Retornar información del usuario
            return response()->json($user, 201);
        } catch (\Exception $e) {
            //Captura de errores al insertar el usuario
            return response()->json($e->getMessage(), 422);
        }
    }

    /*     * Get a JWT via given credentials.      *
     * @return \Illuminate\Http\JsonResponse      */

    public function login()
    {
        //Autentificación del usuario
        $credentials = request(['email', 'password']);
        //Verificar las credenciales email y password

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Credenciales incorrectas'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**      * Get the authenticated User.      *
     *    * @return \Illuminate\Http\JsonResponse      */
    public function me()
    {
        //Información del usuario autentificado
        return response()->json(auth()->user());
    }

    /**      * Log the user out (Invalidate the token).      *
     *   * @return \Illuminate\Http\JsonResponse      */
    public function logout()
    {
        //Desloguear al usuario autentificado
        //Se envía el token del autentificado para ejecutar la acción
        auth()->logout();

        return response()->json(['message' => 'Salió exitosamente']);
    }

    /**      * Refresh a token.      *
     *   * @return \Illuminate\Http\JsonResponse      */
    public function refresh()
    {
        //Refrescar o actualizar el Token
        return $this->respondWithToken(auth()->refresh());
    }

    /**      * Get the token array structure.      *
     *   * @param  string $token      *
     *   * @return \Illuminate\Http\JsonResponse
     *    */
    protected function respondWithToken($token)
    {
        //Información del token y del usuario al que le pertenece
        return response()->json([
            'access_token' => $token, 'token_type' => 'bearer', 'user' => Auth::guard('api')->user(),
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    //Método para dar formato a los errores de validación
    public function responseErrors($errors, $statusHTML)
    {
        $transformed = [];

        foreach ($errors as $field => $message) {
            $transformed[] = ['field' => $field, 'message' => $message[0]];
        }

        return response()->json(['errors' => $transformed], $statusHTML);
    }
}
