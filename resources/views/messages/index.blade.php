@extends('layouts.frontend')
@push('styles')
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
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
<div class="container pt-4 pb-2 px-4 overflow-hidden mt-4" id="chat-container">
  <div class="row rounded-md shadow justify-content-center overflow-hidden pt-4">
    
    <!-- Chat Box-->
    <div class="col-9 px-0 overflow-hidden">
      <div class="px-4 py-2 chat-box overflow-auto bg-white" id="chat-box" >
        <!-- Sender Message-->
        <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
          <div class="media-body ml-3">
            <div class="bg-light rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-muted">Test which is a new approach all solutions</p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

        <!-- Reciever Message-->
        <div class="media w-50 ml-auto mb-3">
          <div class="media-body">
            <div class="bg-primary rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-white">Test which is a new approach to have all solutions</p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

        <!-- Sender Message-->
        <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
          <div class="media-body ml-3">
            <div class="bg-light rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-muted">Test, which is a new approach to have</p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

        <!-- Reciever Message-->
        <div class="media w-50 ml-auto mb-3">
          <div class="media-body">
            <div class="bg-primary rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

        <!-- Sender Message-->
        <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
          <div class="media-body ml-3">
            <div class="bg-light rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-muted">Test, which is a new approach</p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

        <!-- Reciever Message-->
        <div class="media w-50 ml-auto mb-3">
          <div class="media-body">
            <div class="bg-primary rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

      </div>

      <!-- Typing area -->
      <form class="bg-light mb-4"  id="chat-form">
        <div class="input-group">
          <input type="text" placeholder="Type a message" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
          <div class="input-group-append">
            <button id="button-addon2" type="submit" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script type="text/javascript">

$('#chat-form').on('submit',function(e){
    e.preventDefault();
    var message = $('input[type=text]').val();
    $.ajax({
        url: "{{ route('storeMessage') }}",
        dataType: 'json', 
        type:'POST',
        data:{
            '_token' : $('meta[name="csrf-token"]').attr('content'),
            message:message
        },
        success:function(data){
            // console.log(data)
            // console.log(data.date)
            $('input[type=text]').val('');
            $('#chat-box').append(
                '<div class="media w-50 ml-auto mb-3">'+
                    '<div class="media-body">'+
                        '<div class="bg-primary rounded py-2 px-3 mb-2">'+
                            '<p class="text-small mb-0 text-white">'+data.message+'</p>'+
                        '</div>'+   
                        '<p class="small text-muted">' +data.time +' | ' + data.date + '</p>'+
                    '</div>'+
                '</div>'
            );
        }
    });
});

</script>
@endpush