@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-3 p-5">
        <img src="https://instagram.fgse1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/84635926_812898812545178_7477793368076976128_n.jpg?_nc_ht=instagram.fgse1-1.fna.fbcdn.net&_nc_ohc=w846tZr3f9gAX9uTxba&oh=dd9f18de94d3e2ec9a3d444664fff7aa&oe=5EE29EE7" 
        class="rounded-circle" />
    </div>
    <div class="col-9 pt-5 pl-5">
        <div><h1>{{$user->username}}</h1></div>
        <div class="d-flex">
        <div class="pr-5"><strong>153</strong> posts</div>
        <div class="pr-5"><strong>23k</strong> followers</div>
        <div class="pr-5"><strong>212</strong> following</div>
        </div>
        <div class="pt-4"><strong>{{$user->profile->title}}</strong><div>
        <div>{{$user->profile->description}}</div>
        <div> <a href={{$user->profile->url}}>{{$user->profile->url}}</a></div>
    </div>
</div>
<div class="row pt-5">
<div class="col-4"><img src="https://instagram.fgse1-1.fna.fbcdn.net/v/t51.2885-15/e35/s1080x1080/90939781_505141500163869_3984329842232464180_n.jpg?_nc_ht=instagram.fgse1-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=jfBMfhyBcRsAX_AJW7P&oh=68cceac8055fe13bbc8c142536775c4e&oe=5EE10C92" class="w-50 h-50" />
</div>
<div class="col-4"><img src="https://instagram.fgse1-1.fna.fbcdn.net/v/t51.2885-15/e35/s1080x1080/90939781_505141500163869_3984329842232464180_n.jpg?_nc_ht=instagram.fgse1-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=jfBMfhyBcRsAX_AJW7P&oh=68cceac8055fe13bbc8c142536775c4e&oe=5EE10C92" />
</div>
<div class="col-4"><img src="https://instagram.fgse1-1.fna.fbcdn.net/v/t51.2885-15/e35/s1080x1080/90939781_505141500163869_3984329842232464180_n.jpg?_nc_ht=instagram.fgse1-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=jfBMfhyBcRsAX_AJW7P&oh=68cceac8055fe13bbc8c142536775c4e&oe=5EE10C92" />
</div>
</div>
</div>
@endsection
