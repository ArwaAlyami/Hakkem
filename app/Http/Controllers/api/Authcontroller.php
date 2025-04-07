<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignInRequest;
use App\Http\Controllers\api\Validator;
use App\Models\FacultyMember;
use App\Http\Requests\RegisterRequest;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function login(SignInRequest $request): JsonResponse|mixed {

        $credentials = $request->only(['email', 'password']);

        if (! $token = auth(guard:'web')->attempt(credentials: $credentials)) {
            return response()->json(data:['error' => 'Unauthorized'], status: 401);
        }

        return $this->respondWithToken(token: $token);
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token):JsonResponse|mixed
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
             'expires_in' => auth()->factory()->getTTL() * 60]);}

    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'password' => [
            'required',
            'string',
            'min:12',
            'max:16',
            'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*#).+$/'
        ],
    ], [
        'password.required' => 'كلمة المرور مطلوبة.',
        'password.min' => 'يجب أن تكون كلمة المرور 12 حرفًا على الأقل.',
        'password.max' => 'يجب ألا تتجاوز كلمة المرور 16 حرفًا.',
        'password.regex' => 'يجب أن تحتوي كلمة المرور على حرف كبير، وحرف صغير، ورمز #.',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }
}

    // إذا التحقق نجح، كمل حفظ البيانات

    public function register( RegisterRequest $request) {
        $faculty_members = FacultyMember::create( [
                'f_name'=> $request->f_name,
                'l_name'=>$request->l_name,
                'email'=> $request->email,
                'pass' => $request->pass

        ]);
        return response()->json([
            'status' => true,
            'msg' => 'Registration completed successfully',
            'data' => $faculty_members
        ], 200);

    }

}



