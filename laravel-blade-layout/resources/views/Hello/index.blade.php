@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文コンテンツです。</p>
  <p>必要なだけ記述できます。</p>
@endsection

@section('footer')
copyright 2018 matsumoto.
@endsection