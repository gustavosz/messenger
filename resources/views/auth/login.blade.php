@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card header="Inicio de sesión" header-tag="header">
                <b-form method="POST" action="{{ route('login') }}">
                    @csrf
                    <b-form-group label="Correo electrónico:" label-for="email"
                                  description="Nunca compartiremos tu correo. Está seguro con nosotros.">
                        <b-form-input id="email"
                                      name="email"
                                      type="email"
                                      required autofocus
                                      value="{{ old('email') }}"
                                      placeholder="Ingresa aquí tu correo">
                        </b-form-input>
                    </b-form-group>
                    <b-form-group label="Contraseña:" label-for="password">
                        <b-form-input id="password"
                                      name="password"
                                      type="password"
                                      required
                                      value="{{ old('email') }}">
                        </b-form-input>
                    </b-form-group>
                    <b-form-group>
                        <b-form-checkbox name="remember" {{ old('remember') ? 'checked="true"' : '' }}>
                            Recordar sesión
                        </b-form-checkbox>
                    </b-form-group>
                    <b-form-group>
                        <b-button type="submit" variant="primary">
                            Ingresar
                        </b-button>
                        <b-button href="{{ route('password.request') }}" variant="link">
                            ¿Olvidaste tu contraseña?
                        </b-button>
                    </b-form-group>
                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
