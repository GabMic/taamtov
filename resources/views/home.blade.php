@extends('layouts.app')
@section('title', 'בלוג עם טעם טוב - הבית שלכם למתכונים טעימים ומוצלחים')
@section('content')
            <recipe-cards :recipes="{{$recipes}}"></recipe-cards>
        </div>
@endsection
