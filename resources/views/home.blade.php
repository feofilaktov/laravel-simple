@extends('layouts.app')

@section('title-block')Главная старница@endsection

@section('content')
<h1>Main</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
Officia maiores deleniti reiciendis perspiciatis quisquam quas minus earum. 
Temporibus deserunt necessitatibus blanditiis totam cum. 
Magni odio beatae reprehenderit atque dolore optio?</p>
@endsection    

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
