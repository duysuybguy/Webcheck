@extends("admin.layout.app")
@section("title")
    <title>Quản lý chapter</title>
@endsection
@section("content")
    <div id="app">
        <chapter-manager/>
    </div>
@endsection
@section("js_location")
    <script src="{{asset('js/chapter-managerment.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>
@endsection
