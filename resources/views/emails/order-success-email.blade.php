<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Confirmation Email</title>

        <!-- Start Common CSS -->
        <style type="text/css">
            #outlook a {padding:0;}
            body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0; font-family: Helvetica, arial, sans-serif;}
            .ExternalClass {width:100%;}
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
            .backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
            .main-temp table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; font-family: Helvetica, arial, sans-serif;}
            .main-temp table td {border-collapse: collapse;}
        </style>
        <!-- End Common CSS -->
    </head>
    <body>
        <table width="100%" cellpadding="0" cellspacing="0" border="0" class="backgroundTable main-temp" style="background-color: #d5d5d5;">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellpadding="15" cellspacing="0" border="0" class="devicewidth" style="background-color: #ffffff;">
                            <tbody>
                                <!-- Start header Section -->
                                <tr>
                                    <td style="padding-top: 30px;">
                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner" style="border-bottom: 1px solid #eeeeee; text-align: center;">
                                            <tbody>
                                                <tr>
                                                    <td style="padding-bottom: 10px;">
                                                        <a href="https://htmlcodex.com"><img src="https://res.cloudinary.com/opasceptre/image/upload/v1604537283/icons/favicon_qz0ykx.ico" alt="PapaChina" /></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 14px; line-height: 18px; color: #666666;">
                                                        3828 Mall Road
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 14px; line-height: 18px; color: #666666;">
                                                        Los Angeles, California, 90017
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 14px; line-height: 18px; color: #666666;">
                                                        Phone: 310-807-6672 | Email: info@example.com
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 14px; line-height: 18px; color: #666666; padding-bottom: 25px;">
                                                        <strong>Order Number:</strong> {{$order->id}} | <strong>Order Date:</strong> {{date('F j, Y', strtotime($order->created_at)) }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!-- End header Section -->

                                <!-- Start address Section -->
                                <tr>
                                    <td style="padding-top: 0;">
                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner" style="border-bottom: 1px solid #bbbbbb;">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 55%; font-size: 16px; font-weight: bold; color: #666666; padding-bottom: 5px;">
                                                        Delivery Adderss
                                                    </td>
                                                    <td style="width: 45%; font-size: 16px; font-weight: bold; color: #666666; padding-bottom: 5px;">
                                                        Billing Address
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 55%; font-size: 14px; line-height: 18px; color: #666666;">
                                                        {{$deliveryAddress->first_name.' '.$deliveryAddress->last_name }}
                                                    </td>
                                                    <td style="width: 45%; font-size: 14px; line-height: 18px; color: #666666;">
                                                        James C Painter
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 55%; font-size: 14px; line-height: 18px; color: #666666;">
                                                        {{$deliveryAddress->street_address }}
                                                    </td>
                                                    <td style="width: 45%; font-size: 14px; line-height: 18px; color: #666666;">
                                                        3939  Charles Street, Farmington Hills
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 55%; font-size: 14px; line-height: 18px; color: #666666; padding-bottom: 10px;">
                                                        {{$deliveryAddress->contact_number}}
                                                    </td>
                                                    <td style="width: 45%; font-size: 14px; line-height: 18px; color: #666666; padding-bottom: 10px;">
                                                        Michigan, 48335
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!-- End address Section -->

                                <!-- Start product Section -->
                                @foreach ($orderItems as $orderItem)
                                    <tr>
                                        <td style="padding-top: 0;">
                                            <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner" style="border-bottom: 1px solid #eeeeee;">
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="4" style="padding-right: 10px; padding-bottom: 10px;">
                                                            <img style="" src="https://res.cloudinary.com/opasceptre/image/upload/v1604537283/{{$orderItem->product_image}}" alt="Product Image" height="80px"; width="80px" />
                                                        </td>
                                                        <td colspan="2" style="font-size: 14px; font-weight: bold; color: #666666; padding-bottom: 5px;">
                                                            {{$orderItem->product_name}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; line-height: 18px; color: #757575; width: 440px;">
                                                            Quantity: {{$orderItem->product_quantity}}
                                                        </td>
                                                        <td style="width: 130px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; line-height: 18px; color: #757575;">
                                                            Color: {{$orderItem->product_colour}}
                                                        </td>
                                                        <td style="font-size: 14px; line-height: 18px; color: #757575; text-align: right;">
                                                            &#8358;{{number_format(($orderItem->product_price/$orderItem->product_quantity), 2)}} Per Unit
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; line-height: 18px; color: #757575; padding-bottom: 10px;">
                                                            Size: {{$orderItem->product_size}}
                                                        </td>
                                                        <td style="font-size: 14px; line-height: 18px; color: #757575; text-align: right; padding-bottom: 10px;">
                                                            <b style="color: #666666;">&#8358;{{number_format($orderItem->product_price, 2)}}</b> Total
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- End product Section -->

                                <!-- Start calculation Section -->
                                <tr>
                                    <td style="padding-top: 0;">
                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner" style="border-bottom: 1px solid #bbbbbb; margin-top: -5px;">
                                            <tbody>
                                                <tr>
                                                    <td rowspan="5" style="width: 55%;"></td>
                                                    <td style="font-size: 14px; line-height: 18px; color: #666666;">
                                                        Sub-Total:
                                                    </td>
                                                    <td style="font-size: 14px; line-height: 18px; color: #666666; width: 130px; text-align: right;">
                                                        &#8358;{{number_format($order->subtotal, 2)}}
                                                    </td>
                                                </tr>
                                                @if ($order->coupon)
                                                    <tr>
                                                        <td style="font-size: 14px; line-height: 18px; color: #666666; padding-bottom: 10px; border-bottom: 1px solid #eeeeee;">
                                                            Coupon <b>{{$order->coupon}}</b>:
                                                        </td>
                                                        <td style="font-size: 14px; line-height: 18px; color: #666666; padding-bottom: 10px; border-bottom: 1px solid #eeeeee; text-align: right;">
                                                            &#8358;{{number_format($order->discount_price, 2)}}
                                                        </td>
                                                    </tr>
                                                @endif
                                                <tr>
                                                    <td style="font-size: 14px; line-height: 18px; color: #666666; padding-bottom: 10px; border-bottom: 1px solid #eeeeee;">
                                                        Shipping Fee:
                                                    </td>
                                                    <td style="font-size: 14px; line-height: 18px; color: #666666; padding-bottom: 10px; border-bottom: 1px solid #eeeeee; text-align: right;">
                                                        &#8358;{{number_format($order->shipping_fee, 2)}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 14px; font-weight: bold; line-height: 18px; color: #666666; padding-top: 10px;">
                                                        Order Total
                                                    </td>
                                                    <td style="font-size: 14px; font-weight: bold; line-height: 18px; color: #666666; padding-top: 10px; text-align: right;">
                                                        &#8358;{{number_format($order->order_price, 2)}}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!-- End calculation Section -->

                                <!-- Start payment method Section -->
                                <tr>
                                    <td style="padding: 0 10px;">
                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                            <tbody>
                                                <tr>
                                                    <td colspan="2" style="font-size: 16px; font-weight: bold; color: #666666; padding-bottom: 5px;">
                                                        Payment Method: {{strtoupper($order->order_payment_method)}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 55%; font-size: 14px; line-height: 18px; color: #666666;">
                                                        Payment Status: {{$order->order_payment_status === 1 ? 'PAID':'NOT PAID'}}
                                                    </td>
                                                    <td style="width: 45%; font-size: 14px; line-height: 18px; color: #666666;">
                                                        Order Status: {{$orderStatus}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="width: 100%; text-align: center; font-style: italic; font-size: 13px; font-weight: 600; color: #666666; padding: 15px 0; border-top: 1px solid #eeeeee;">
                                                        <b style="font-size: 14px;">Note:</b> This is to notify you that the following goods have been placed on order
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!-- End payment method Section -->
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
