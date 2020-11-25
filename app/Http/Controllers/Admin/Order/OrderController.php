<?php

namespace App\Http\Controllers\Admin\Order;

use App\Order;
use App\OrderStatus;
use Illuminate\Http\Request;
use App\Mail\OrderSuccessMail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $orders = DB::table('orders')
                    ->join('order_statuses', 'order_statuses.id', '=', 'orders.order_status')
                    ->select('orders.*', 'order_statuses.order_status_name')
                    ->orderBy('orders.created_at', 'desc')
                    ->get();
        // dd($orders);
        return view('admin.order.all', compact('orders'));
    }

    public function show(Order $order)
    {
        $order_items = $order->orderitems;
        $shipping_address = $order->shippingAddress;
        $state = $shipping_address->state->state_name;
        $lgarea = $shipping_address->lgarea->lgarea_name;
        $order_status = $order->orderStatus->order_status_name;
        // dd(date("d M Y", strtotime($order->created_at)));
        // dd($order, $shipping_address, $order_status, $order_items, $state, $lgarea);
        return view('admin.order.view', compact('order', 'shipping_address', 'order_status', 'order_items', 'state', 'lgarea'));
    }

    public function edit(Order $order)
    {
        $order_statuses = OrderStatus::get();
        return view('admin.order.edit', compact('order', 'order_statuses'));
    }

    public function update(Order $order)
    {
        return redirect()->route('admin.order.show');
    }

    public function delete(Order $order)
    {
        return redirect()->route('admin.order.show');
    }

    public function updateOrderStatus(Order $order, Request $request)
    {
        $request->validate([
            'order_status' => ['numeric','between:1,6'],
        ]);
        if($order->order_status == $request->input('order_status')){
            toastr('There is nothing to update', 'failure');
        }
        else{
            $order->order_status = $request->input('order_status');
            $order->save() ? toastr('Order status updated successfully', 'success') : toastr('Order status update failed', 'failure');
        }
        return redirect()->back();
    }

    public function updatePaymentStatus(Order $order, Request $request)
    {
        $request->validate([
            'payment_status' => ['nullable','numeric','size:1'],
        ]);
        $payment_status = $request->input('payment_status') == 1 ? 1 : 0;
        if ($order->order_payment_status === $payment_status) {
            toastr('There is nothing to update', 'failure');
        } else {
            $order->order_payment_status = $payment_status;
            $order->save() ? toastr('Order status updated successfully', 'success') : toastr('Order status update failed', 'failure');
        }
        return redirect()->back();
    }

    public function sendInvoice(Order $order)
    {
        $email = Mail::to($order->user->email)->send(new OrderSuccessMail($order->order_payment_reference));
        // dd(Mail::sent());
        toastr('Invoice sent to Successfully','success');
        return redirect()->back();
    }
}
