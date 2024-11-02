<?php

namespace App\Http\Controllers;

use App\Models\Statistical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Exception;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function __construct(Statistical $statistical)
    {
        $this->statistical = $statistical;
    }

    public function index(Request $request)
    {
        return view('dashboard.dashboard');
    }
    public function get(Request $request)
    {
        $start = $request->input('start');
        $end = $request->input('end');

        // Lấy dữ liệu thống kê trong khoảng thời gian từ $start đến $end
        $get = $this->statistical->whereBetween('order_date', [$start, $end])
            ->orderBy('order_date', 'ASC')
            ->get();

        // Kiểm tra xem dữ liệu có trống hay không
        if ($get->isEmpty()) {
            return response()->json(['error' => 'Không có dữ liệu cho khoảng thời gian đã chọn.']);
        }

        // Chuẩn bị dữ liệu cho biểu đồ
        $chart = [];
        foreach ($get as $value) {
            $chart[] = [
                'period' => $value->order_date,
                'order' => $value->total_order,
                'sales' => $value->sales,
                'profit' => $value->profit,
                'quantity' => $value->quantity
            ];
        }

        // Trả về dữ liệu JSON
        return response()->json($chart);
    }
}

