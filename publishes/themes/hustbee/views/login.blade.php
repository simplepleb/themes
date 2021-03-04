<div class="row">
    <div class="col-sm-12">
        <div class="login-register-form">
            <div class="form-holder">
                <div class="form-row form-head">
                    <div class="col-xs-6">
                        <a class="site-brand" href="/"><img src="{!! Theme::asset()->url('assets/images/logo.svg') !!}" alt="{{ config('app.name') }}"></a>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-title"><img src="{!! Theme::asset()->url('assets/images/lock.svg') !!}" alt="">Client Area</div>
                    </div>
                </div>
                <div class="form-row form-links">
                    <div class="col-xs-12">
                        <a href="#" class="link-to active">Login</a> or <a href="#" class="link-to">Register</a>
                    </div>
                </div>
                <form>
                    <div class="form-row">
                        <div class="col-xs-12">
                            <label>Username</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-xs-12">
                            <label>Password</label>
                            <input type="password" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-xs-6">
                            <a href="#" class="forget-link">Forget your password?</a>
                        </div>
                        <div class="col-xs-6">
                            <div class="submit-holder">
                                <button type="submit">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
