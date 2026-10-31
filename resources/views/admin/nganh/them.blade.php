@extends('admin.layouts.index')
@section('content')
    <h1>Thêm ngành </h1>
    @if (session('thongbao'))
        <div class="alert alert-success">{{ session('thongbao') }} </div>
    @endif
    @if (count($errors))
        <div class="alert alert-danger">
            <span>Thông báo!</span>
            @foreach ($errors->all() as $er)
                {{ $er }} <br />
            @endforeach
        </div>
    @endif
    <form action="them" method="post">
        @csrf
        Mã ngành: <input type="text" name="manganh" value=""> <br />
        Tên ngành: <input type="text" name="tennganh" value=""> <br />
        <input type="submit" name="" value="Lưu">
        <a href="them">Nhập lại</a>
        <a href="danhsach">Danh sách</a>
    </form>
@endsection
