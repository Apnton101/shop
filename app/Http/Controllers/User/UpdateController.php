<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdayeRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdayeRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return redirect()->route('category.show', $category->id);
    }
}
