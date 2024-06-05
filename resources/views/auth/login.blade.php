public function index() {
    Return view ('auth.login');
}

public function postLogin (Request $request) {
    $request ->validate ([
        'email' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect ()->intended('dashboard')
                                ->withSuccess('Login Berhasil!');
            }

            return redirect ("login")->withSuccess('Gagal Login!');
}