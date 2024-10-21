<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistical;
use Exception;
use Illuminate\Support\Str;

class StatisticalController extends Controller
{
	public function __construct(Statistical $statistic)
	{
		$this->statistic = $statistic;
	}

	public function index(Request $request)
	{
		$query = $this->statistic->query();

		// Ví dụ: tìm kiếm theo tên
		if ($request->has('search') && $request->input('search') != '') {
			$query->where('category_name', 'LIKE', '%' . $request->input('search') . '%');
		}

		$datas = $query->get(); // Hoặc bạn có thể sử dụng paginate() để phân trang
		return view('statistics.index', ['datas' => $datas]);
	}

	public function create()
	{
		return view('statistics.create');
	}

	public function save(Request $request)
	{
		$request->validate([
			'name' => 'required|string|max:255',
			'parentId' => 'nullable|integer'
		]);

		try {
			$this->statistic->create([
				'category_name' => $request->name,
				'parentId' => $request->parentId,
				'alias' => Str::slug($request->name, '-')
			]);
			return redirect('/statistics/create')->with('status', 'Thêm thành công!');
		} catch (Exception $e) {
			report($e);
			return redirect('/statistics/create')->with('status', 'Thêm thất bại!');
		}
	}


	public function edit($id)
	{
		$item = $this->statistic->find($id);
		return view('statistics.edit', ['item' => $item]);
	}

	public function delete($id)
	{
		$statistic = $this->statistic->find($id);
		if (!$statistic) {
			return redirect('/statistics/index')->with('status', 'Không tìm thấy bản ghi để xóa!');
		}

		$statistic->delete();
		return redirect('/statistics/index')->with('status', 'Xóa thành công!');
	}

	public function saveedit($id, Request $request)
	{
		$request->validate([
			'name' => 'required|string|max:255',
			'parentId' => 'nullable|integer'
		]);

		try {
			$this->statistic->find($id)->update([
				'category_name' => $request->name,
				'parentId' => $request->parentId,
				'alias' => Str::slug($request->name, '-')
			]);
			return redirect('/statistics/edit/' . $id)->with('status', 'Cập nhật thành công!');
		} catch (Exception $e) {
			report($e);
			return redirect('/statistics/index')->with('status', 'Cập nhật thất bại!');
		}
	}

}
