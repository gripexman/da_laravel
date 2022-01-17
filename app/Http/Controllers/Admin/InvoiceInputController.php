<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InvoiceInput;
use Illuminate\Http\Request;

class InvoiceInputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoice_input = InvoiceInput::latest()->paginate(5);
        return view('admin.invoiceinput.index',compact('invoice_input'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.invoiceinput.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ngaynhap' => 'required',
            'mahoadon' => 'required',
            'tensanpham' => 'required',
            'soluong' => 'required',
            'dongia' => 'required',
            'tongtien' => 'nullable',
        ]);

        $input = $request->all();

        InvoiceInput::create($input);

        return redirect()->route('invoiceinput.index')
        ->with('success','Tạo hóa đơn thành công.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvoiceInput  $invoiceInput
     * @return \Illuminate\Http\Response
     */
    public function show(InvoiceInput $invoiceInput)
    {
        return view('admin.invoiceinput.show',compact('invoice_input'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvoiceInput  $invoiceInput
     * @return \Illuminate\Http\Response
     */
    public function edit(InvoiceInput $invoiceInput)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvoiceInput  $invoiceInput
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvoiceInput $invoiceInput)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvoiceInput  $invoiceInput
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvoiceInput $invoiceInput, $id)
    {
        InvoiceInput::find($id)->delete();

        return redirect()->route('invoiceinput.index')
            ->with('success','Đã xóa !');
    }
}
