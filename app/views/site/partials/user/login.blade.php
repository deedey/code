<form class="form-horizontal" method="POST" action="{{ URL::to('user/login') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <fieldset>
        <div class="form-group email-form-group">
            <div class="col-md-12">
                <input class="form-control" tabindex="1" placeholder="{{ Lang::get('confide::confide.username_e_mail') }}" type="text" name="email" id="email" value="{{ Input::old('email') }}" autocomplete="off">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <input class="form-control" tabindex="2" placeholder="{{ Lang::get('confide::confide.password') }}" type="password" name="password" id="password" autocomplete="off">
            </div>
        </div>
		<!--
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <div class="checkbox">
                    <label for="remember">{{ Lang::get('confide::confide.login.remember') }}
                        <input type="hidden" name="remember" value="0">
                        <input tabindex="4" type="checkbox" name="remember" id="remember" value="1">
                    </label>
                </div>
            </div>
        </div>
		-->

        @if ( Session::get('error') )
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
        @endif

        @if ( Session::get('notice') )
            <div class="alert">{{ Session::get('notice') }}</div>
        @endif

        <div class="form-group">
            <div class="col-md-12 login-link">
                <button tabindex="3" type="submit" class="btn btn-primary col-md-12">{{ Lang::get('confide::confide.login.submit') }}</button>
                <a class="" href="forgot">Forgot Password</a>
            </div>
        </div>
    </fieldset>
</form>