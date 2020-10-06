@extends('layouts.app')

@section('content')
<div class="h1 text-center" style="margin-bottom: 50px;">Sobre</div>
<div class="row">
    <div class="col">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis neque aperiam inventore sequi assumenda mollitia eum soluta, illum maiores asperiores officia quos rerum possimus ipsam, quod iusto. Omnis, quia esse! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci quaerat itaque magnam numquam velit in tempora commodi perferendis eum culpa illo, ea totam ducimus cumque perspiciatis, tempore excepturi inventore sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod ipsam laudantium possimus culpa molestias aliquid dignissimos. Cumque illo quam inventore, nihil maiores dolor quo modi harum porro. Eligendi, tempora quia!</p>
    </div>
    <div class="col">
        <img class="d-block mx-auto mb-4" src="{{ asset('images/sobre.png') }}" alt="" width="300" height="300">
    </div>
</div>
@endsection