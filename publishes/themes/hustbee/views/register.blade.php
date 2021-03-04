<div class="row">
    <div class="col-md-12">
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
                        <a href="" class="link-to">Login</a> or <a href="#" class="link-to active">Register</a>
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
                        <div class="col-xs-12">
                            <label>Repeat password</label>
                            <input type="password" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-xs-12">
                            <label>Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-xs-12">
                            <div class="submit-holder">
                                <button type="submit">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
