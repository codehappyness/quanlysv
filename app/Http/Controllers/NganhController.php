<?php

namespace App\Http\Controllers;

use App\Models\Nganh;
use Illuminate\Http\Request;

class NganhController extends Controller
{
    public function getDanhSach()
    {
        $nganh = Nganh::all();

        return view('admin.nganh.danhsach', ['nganh' => $nganh]);
    }
    //
    public function getThem()
    {

        return view('admin.nganh.them');
    }
    public function postThem(Request $request)
    {
        //cơ chế tự xác thực thông qua hàm
        $validate = $request->validate(
            //mảng kiểm lỗi
            [
                'manganh' => 'required|min:3|max:20|unique:Nganh',
                'tennganh' => 'required|min:3|max:100|'
            ],
            //mảng chứa thông báo khi có lỗi (tên mảng error)
            [
                'manganh.required' => 'Bạn chưa nhập mã ngành',
                'manganh.min' => 'Nhập mã ngành ít nhất 3 ký đến 20 ký tự',
                'manganh.max' => 'Nhập mã ngành ít nhất 3 ký đến 20 ký tự',
                'manganh.unique' => 'Mã ngành này đã tồn tại trong database',
                'tennganh.required' => 'Bạn chưa nhập tên ngành',
                'tennganh.min' => 'Nhập tên ngành ít nhất 3 ký đến 100 ký tự',
                'tennganh.max' => 'Nhập tên ngành ít nhất 3 ký đến 100 ký tự',
            ]
        );

        $nganh = new Nganh; //Tạo đối tượng kết nối đến model ngành
        $nganh->MANGANH = $request->manganh;
        $nganh->TENNGANH = $request->tennganh;

        $nganh->save(); //tương ứng câu lệnh insert into NGANH value.....
        return redirect('admin/nganh/them')->with('thongbao', "Thêm ngành thành công");
    }
}
