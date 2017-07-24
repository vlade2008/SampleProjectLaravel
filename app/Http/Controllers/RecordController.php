<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;

class RecordController extends Controller
{
    //
    public function getRecordLists()
    {
      $recordList = Record::all();
      return response()->json($recordList);

    }
}
