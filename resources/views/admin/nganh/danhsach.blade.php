@extends('admin.layouts.index')
@section('content')
    @php
    @endphp
    <h1>Danh sách ngành</h1>
    <a href="them" class="btn btn-danger">Thêm ngành</a>
    <table>
        <thead>
            <th>
                ID
            </th>
            <th>
                Mã ngành
            </th>
            <th>
                Tên ngành
            </th>
            <th>
                Xoa
            </th>
            <th>
                Sua
            </th>
        </thead>
        <tbody>
            @foreach ($nganh as $n)
                <tr>
                    <td> {{ $n->ID }}</td>
                    <td> {{ $n->MANGANH }}</td>
                    <td> {{ $n->TENNGANH }}</td>
                    <td>
                        <a href="">Xóa</a>
                        </td>
                    <td><a href="">Sửa</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
