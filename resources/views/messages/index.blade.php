@extends('layouts.frontend')

@section('main')
<div class="main">

    <div class="container">
        <form method="POST" id="signup-form" class="signup-form" action="#">
            <div>
                <h3></h3>
                <fieldset>
                    <input type="text" name="first_name" id="first_name" />
                    <label for="first_name" class="form-label">01 . What is your first name ?</label>
                </fieldset>

                <h3></h3>
                <fieldset>
                    <input type="text" name="last_name" id="last_name" />
                    <label for="last_name" class="form-label">02 . What is your last name ?</label>
                </fieldset>

                <h3></h3>
                <fieldset>
                    <input type="email" name="email" id="email" />
                    <label for="email" class="form-label">03 . What is your Email ?</label>
                </fieldset>

                <h3></h3>
                <fieldset>
                    <input type="text" name="password" id="password" />
                    <label for="password" class="form-label">04 . Create your password</label>
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </fieldset>

                <h3></h3>
                <fieldset>
                    <input type="text" name="re_password" id="re_password" />
                    <label for="re_password" class="form-label">05 . Repeat your password </label>
                    <span toggle="#re_password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </fieldset>
            </div>
        </form>
    </div>

</div>

@endsection

@push('scripts')




@endpush