<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistical;
use Exception;
use Illuminate\Support\Str;

class StatisticalController extends Controller
{
			report($e);
			return redirect('/statistics/create')->with('status', 'Thêm thất bại!');
		}
	}


			report($e);
			return redirect('/statistics/index')->with('status', 'Cập nhật thất bại!');
		}
	}
}
