@extends('mobile.layouts.mobile_frame')

@section('title', '首页')

@section('page-group')

    @include('mobile.pages.home.home_page')

@endsection

@section('extra')

    <div class="panel-overlay"></div>
    <!-- Left Panel with Reveal effect -->
    <div class="panel panel-left panel-reveal">
        <div class="content-block">
            <p>这是一个侧栏</p>
            <p></p>
            <!-- Click on link with "close-panel" class will close panel -->
            <p><a href="#" class="close-panel">关闭</a></p>
        </div>
    </div>

@endsection