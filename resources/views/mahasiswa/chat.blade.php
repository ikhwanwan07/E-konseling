@extends('layouts.master')
@section('content')
<style>
* {
  box-sizing: border-box;
  
}

body {
  background-color: #edeff2;
  font-family: "Calibri", "Roboto", sans-serif;
}

.chat_window {
    margin-top :250px auto;
  position: absolute;
  width: calc(100% - 20px);
  max-width: 1000px;
  height: 550px;
  border-radius: 10px;
  background-color: #fff;
  left: 50%;
  top: 60%;
  transform: translateX(-50%) translateY(-50%);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
  background-color: #f8f8f8;
  overflow: hidden;
}

.top_menu {
  background-color: #fff;
  width: 100%;
  padding: 20px 0 15px;
  box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
}
.top_menu .buttons {
  margin: 3px 0 0 20px;
  position: absolute;
}
.top_menu .buttons .button {
  width: 16px;
  height: 16px;
  border-radius: 50%;
  display: inline-block;
  margin-right: 10px;
  position: relative;
}
.top_menu .buttons .button.close {
  background-color: #f5886e;
}
.top_menu .buttons .button.minimize {
  background-color: #fdbf68;
}
.top_menu .buttons .button.maximize {
  background-color: #a3d063;
}
.top_menu .title {
  text-align: center;
  color: #bcbdc0;
  font-size: 20px;
}

.messages {
  position: relative;
  list-style: none;
  padding: 20px 10px 0 10px;
  margin: 0;
  height: 347px;
  overflow: scroll;
}
.messages .message {
  clear: both;
  overflow: hidden;
  margin-bottom: 20px;
  transition: all 0.5s linear;
  opacity: 0;
}
.messages .message .left .avatar {
  background-color: #f5886e;
  float: left;
}
.messages .message.left .text_wrapper {
  background-color: #ffe6cb;
  margin-left: 20px;
}
.messages .message.left .text_wrapper::after, .messages .message.left .text_wrapper::before {
  right: 100%;
  border-right-color: #ffe6cb;
}
.messages .message.left .text {
  color: #c48843;
}
.messages .message.right .avatar {
  background-color: #fdbf68;
  float: right;
}
.messages .message.right .text_wrapper {
  background-color: #c7eafc;
  margin-right: 20px;
  float: right;
}
.messages .message.right .text_wrapper::after, .messages .message.right .text_wrapper::before {
  left: 100%;
  border-left-color: #c7eafc;
}
.messages .message.right .text {
  color: #45829b;
}
.messages .message.appeared {
  opacity: 1;
}
.messages .message .avatar {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: inline-block;
}
.messages .message .text_wrapper {
  display: inline-block;
  padding: 20px;
  border-radius: 6px;
  width: calc(100% - 85px);
  min-width: 100px;
  position: relative;
}
.messages .message .text_wrapper::after, .messages .message .text_wrapper:before {
  top: 18px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.messages .message .text_wrapper::after {
  border-width: 13px;
  margin-top: 0px;
}
.messages .message .text_wrapper::before {
  border-width: 15px;
  margin-top: -2px;
}
.messages .message .text_wrapper .text {
  font-size: 18px;
  font-weight: 300;
}

.bottom_wrapper {
  position: relative;
  width: 100%;
  background-color: #fff;
  padding: 20px 20px;
  position: absolute;
  bottom: 0;
}
.bottom_wrapper .message_input_wrapper {
  display: inline-block;
  height: 50px;
  border-radius: 25px;
  border: 1px solid #bcbdc0;
  width: calc(100% - 160px);
  position: relative;
  padding: 0 20px;
}
.bottom_wrapper .message_input_wrapper .message_input {
  border: none;
  height: 100%;
  box-sizing: border-box;
  width: calc(100% - 40px);
  position: absolute;
  outline-width: 0;
  color: gray;
}
.bottom_wrapper .send_message {
  width: 140px;
  height: 50px;
  display: inline-block;
  border-radius: 50px;
  background-color: #a3d063;
  border: 2px solid #a3d063;
  color: #fff;
  cursor: pointer;
  transition: all 0.2s linear;
  text-align: center;
  float: right;
}
.bottom_wrapper .send_message:hover {
  color: #a3d063;
  background-color: #fff;
}
.bottom_wrapper .send_message .text {
  font-size: 18px;
  font-weight: 300;
  display: inline-block;
  line-height: 48px;
}

.message_template {
  display: none;
}
.kotak {
  width:100%;
	height:50px;
  background-color:#f5886e;
  float: left;
  padding-bottom:
  
}
.right{
  float:right;
  background-color:#fff;
  width:100%;
	height:50px;
}
.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
  max-width: 100%;
      overflow-x: hidden;
}

/* Darker chat container */
.darker {
  border-color: #ccc;
  background-color: #ddd;
}
.green {
  border-color: #ccc;
  background-color: #00ffff;
}

/* Clear floats */
.container::after {
  content: "";
  clear: both;
  display: table;
  max-width : 400px;
}

/* Style images */
.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

/* Style the right image */
.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

/* Style time text */
.time-right {
  float: right;
  color: #aaa;
}

/* Style time text */
.time-left {
  float: left;
  color: #999;
}



</style>
<div class="main">
<div class="main-content">
<div class="container-fluid">
<div class="chat_window chat">
  <div class="top_menu">
    <div class="buttons">
      <div class="button close">
        
      </div>
      <div class="button minimize">
        
      </div>
      <div class="button maximize">
        
      </div>
    </div>
    <div class="title">{{$chat->subjek}}</div>
  </div>
  <ul class="messages">
  <div class="container">
  
  <img src="{{asset('admin/uii.png')}}" alt="Avatar">
  <p>{{$chat->pesan}}</p>
  <span class="time-right">{{$chat->created_at->diffForHumans()}}</span>
  
</div>

@foreach($balas as $b)
@if($b->role == 'mahasiswa')
<div class="container green">
@else 
<div class="container darker">
@endif
  <img src="{{asset('admin/uii.png')}}" alt="Avatar" class="right">
  <p>{{$b['balas']}}</p>
  <span class="time-left">{{$b['created_at']}}</span>
 
</div>

@endforeach


 
  </ul>
  <form action="/balasmhs" method="POST">
  {{ csrf_field() }}
  <input type="hidden" name="chat_id" value="{{$chat->id}}">
  <div class="bottom_wrapper clearfix">
    <div class="message_input_wrapper">
      <input class="message_input"name="balas" placeholder="Type your message here..." />
    </div>
    
      <button type="submit" class="send_message"> Send</button>
      </form>
  </div>
</div>
<div class="message_template">
  <li class="message">
    <div class="avatar">
      
    </div>
    <div class="text_wrapper">
      <div class="text">
        
      </div>
    </div>
  </li>
</div>

</div>
</div>
</div>
@endsection