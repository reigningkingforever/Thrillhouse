@extends('layouts.frontend')
@push('styles')
<link rel="stylesheet" href="{{asset('css/wizard.css')}}">
<!-- <style>
     
      .chat-container {
        height: 80vh;
      }
      #chat-box {
          overflow-y: scroll;
          scrollbar-width: none; /* Firefox */
          -ms-overflow-style: none;  /* Internet Explorer 10+ */
      }
  #chat-box::-webkit-scrollbar { /* WebKit */
      width: 0;
      height: 0;
  } -->
@endpush
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="{{asset('assets/js/wizard/main.js')}}"></script>
<script src="{{asset('assets/js/wizard/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/wizard/jquery-steps/jquery.steps.js')}}"></script>
<script src="{{asset('assets/js/wizard/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/wizard/jquery-validation/dist/additional-methods.min.js')}}"></script>
<script type="text/javascript">
let chatBox = document.getElementById('chat-box');
$("#chat-container").animate({
    scrollTop: ($("#chat-container")[0].scrollHeight)
}, 2500);
</script>
<script type="text/javascript">
$('#chat-form').on('submit', function(e) {
    e.preventDefault();
    var message = $('input[type=text]').val();
    $.ajax({
        url: "{{ route('storeMessage') }}",
        dataType: 'json',
        type: 'POST',
        data: {
            '_token': $('meta[name="csrf-token"]').attr('content'),
            message: message
        },
        success: function(data) {
            // console.log(data)
            // console.log(data.date)
            $('input[type=text]').val('');
            $('#chat-box').append(
                '<div class="media w-50 ml-auto mb-3">' +
                '<div class="media-body">' +
                '<div class="bg-primary rounded py-2 px-3 mb-2">' +
                '<p class="text-small mb-0 text-white">' + data.message + '</p>' +
                '</div>' +
                '<p class="small text-muted">' + data.time + ' | ' + data.date + '</p>' +
                '</div>' +
                '</div>'
            );
        }
    });
});
</script>
@endpush