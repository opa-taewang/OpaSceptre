<?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderSuccessMail extends Mailable
{
    use Queueable, SerializesModels;
    public $trxRef,
            $order =[],
            $orderItems = [],
            $deliveryAddress = [],
            $orderStatus;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($trxRef)
    {
        $this->trxRef = $trxRef;
        $this->getData();
    }

    public function getData()
    {

        $this->order = Order::where('order_payment_reference', $this->trxRef)
            ->first();
        $this->orderItems = $this->order->orderitems;
        $this->deliveryAddress = $this->order->shippingAddress;
        $this->orderStatus = $this->order->orderStatus->name;

    }
    // opasceptre_5868413822
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.order-success-email');
    }
}
