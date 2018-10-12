@extends('layouts.app')

@section('content')

<b-container>

    <b-row align-h="center">

        <b-col md="8">

            <b-card header="Registro" header-tag="header">

                <b-form method="POST" action="{{ route('register') }}">
                    @csrf

                    <b-form-group label="Nombre" label-for="name" :label-cols="4" label-class="text-sm-right" horizontal>
                        <b-col md="8">
                            <b-form-input id="name" name="name" type="text" required autofocus class="{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                          value="{{ old('name') }}" placeholder="Nombre">
                            </b-form-input>
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </div>
                            @endif
                        </b-col>
                    </b-form-group>

                    <b-form-group label="Email" label-for="email" :label-cols="4" label-class="text-sm-right" horizontal>
                        <b-col md="8">
                            <b-form-input id="email" name="email" type="email" required class="{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                          value="{{ old('email') }}" placeholder="Email">
                            </b-form-input>
                            @if ($errors->has('email'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </div>
                            @endif
                        </b-col>
                    </b-form-group>

                    <b-form-group label="Contraseña" label-for="password" :label-cols="4" label-class="text-sm-right" horizontal>
                        <b-col md="8">
                            <b-form-input id="password" name="password" type="password" required class="{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                          placeholder="Contraseña">
                            </b-form-input>
                            @if ($errors->has('password'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </div>
                            @endif
                        </b-col>
                    </b-form-group>

                    <b-form-group label="Confirmar Contraseña" label-for="password_confirmation" :label-cols="4" label-class="text-sm-right" horizontal>
                        <b-col md="8">
                            <b-form-input id="password_confirmation" name="password_confirmation" type="password" required
                                          placeholder="Confirmar Contraseña">
                            </b-form-input>
                        </b-col>
                    </b-form-group>

                    <b-form-group>
                        <b-col md="6" offset="4">
                            <b-button type="submit" variant="primary">
                                Registrarse
                            </b-button>
                        </b-col>
                    </b-form-group>

                </b-form>

            </b-card>

        </b-col>

    </b-row>

</b-container>

@endsection
