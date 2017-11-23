<div class="direct-chat-msg">
  <div class="direct-chat-info clearfix">
    <span class="direct-chat-name pull-left">{{$comment->user->name}}</span>
    <span class="direct-chat-timestamp pull-right">{{$comment->created_at}}</span>
  </div>
  <!-- /.direct-chat-info -->
  <img class="direct-chat-img" src="\{{$comment->user->image}}" alt="user image">
  <!-- /.direct-chat-img -->
  <div class="direct-chat-text">
    {{$comment->text}}
  </div>
  <!-- /.direct-chat-text -->
</div>