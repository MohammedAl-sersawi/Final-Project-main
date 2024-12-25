<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PharmacyInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $medicines = Medicine::all();
        $pharmacy = Auth::user()->pharmacy;
        $medicines = $pharmacy->medicines;
        // dd($medicines[0]->pivot->expire);
        if ($request->ajax()) {
            return datatables()->of($medicines)
                ->addColumn('actions', function ($row) {
                    return '
                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit"
                    type="button" id="edit">
                        <i class="la la-edit"></i>
                    </a>
                    <span class="dropdown">
                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                            <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" ><i class="la la-eye"></i> Generate Report</a>
                            <a class="dropdown-item" id="trash" href="javascript:;"  ><i class="la la-trash"></i>Delete Record</a>
                        </div>
                    </span>';
                })
                ->addColumn('quantity', function ($row) {
                    return $row->pivot->quantity;
                })
                ->addColumn('expire', function ($row) {
                    return $row->pivot->expire;
                })
                ->rawColumns(['actions', 'expire'])
                ->make(true);
        }
        return view('dashboard.pharmacist.medicine.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'medicines' => 'required|array',
            'medicines.*.medicine_id' => 'required|integer|exists:medicines,id',
            'medicines.*.quantity' => 'required|integer|min:1',
        ]);
        $pharmacy = Auth::user()->pharmacy;
        foreach ($request->medicines as $medicine) {
            $existingRecord = $pharmacy->medicines()
                ->wherePivot('medicine_id', $medicine['medicine_id'])
                ->first();
            if ($existingRecord) {
                $pharmacy->medicines()->updateExistingPivot(
                    $medicine['medicine_id'],
                    [
                        'quantity' => $existingRecord->pivot->quantity + $medicine['quantity'],
                        'updated_at' => now(),
                    ]
                );
            } else {
                $pharmacy->medicines()->attach(
                    $medicine['medicine_id'],
                    [
                        'quantity' => $medicine['quantity'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );
            }
        }
        return response()->json(['message' => 'تم حفظ البيانات بنجاح'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
