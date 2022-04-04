@extends('layouts.frontend')
@push('styles')
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
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
              
              <p class="text-small mb-0 text-muted">Welcome, I am a chatbox and I will help you determine what you need.
                <br> Please tell me your email address
                </p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

        <!-- Reciever Message-->
        <div class="media w-50 ml-auto mb-3">
          <div class="media-body">
            <div class="bg-primary rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-white">My email is something@gmail.com</p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

        <!-- Sender Message-->
        <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
          <div class="media-body ml-3">
            <div class="bg-light rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-muted">Great, Thanks
                <br> Could you also give me your phone number
              </p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

        <!-- Reciever Message-->
        <div class="media w-50 ml-auto mb-3">
          <div class="media-body">
            <div class="bg-primary rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-white">08034903455</p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

        <!-- Sender Message-->
        <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
          <div class="media-body ml-3">
            <div class="bg-light rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-muted">So you do know what you are looking for?</p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

        <!-- Reciever Message-->
        <div class="media w-50 ml-auto mb-3">
          <div class="media-body">
            <div class="rounded py-2 px-3 mb-2">
              <button class="btn-primary btn">Yes</button>
              <button class="btn-danger btn">No</button>
            </div>
          </div>
        </div>
        <!-- Sender Message-->
        <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
          <div class="media-body ml-3">
            <div class="bg-light rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-muted">So you do know what you are looking for?</p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

        <!-- Reciever Message-->
        <div class="media w-50 ml-auto mb-3">
          <div class="media-body">
            <div class="rounded py-2 px-3 mb-2">
              <button class="btn-primary btn">Yes</button>
              <button class="btn-danger btn">No</button>
            </div>
          </div>
        </div>

      </div>

      <!-- Typing area -->
      <form class="bg-light mb-4"  id="chat-form">
        <div class="input-group">
          <input type="text" placeholder="Type a message" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 ">
          <div class="input-group-append">
            <button id="button-addon2" type="submit" class="btn btn-link send-btn"> <i class="fas fa-paper-plane" ></i></button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>

@endsection

@push('scripts')
@include('messages.script')
@endpush