<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
  public function index()
  {
    // return Test::all();
    $testinis = Test::all();
    return response(['tests' => $testinis]);
  }

  public function store(Request $request)
  {
    $test = Test::create($request->all());
    return response($test, 201);
    // return "hello";
  }

  public function update(Request $request, $id)
  {
    $test = Test::findOrFail($id);

    $test->name = $request->input('name');
    $test->save();

    return response($test, 200);
  }

  public function destroy($id)
  {
    $test = Test::findOrFail($id);

    $test->delete();

    return response('', 204);
  }
}
