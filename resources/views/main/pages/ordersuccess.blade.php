@extends('main.layouts.master')

@section('main-container')
    <section
        style="font-family: 'Inter', sans-serif; box-sizing: border-box; font-size: 15px; width: 100%; background-color: transparent; margin: 35px 0;color: #06283D;">
        <div
            style="max-width: 650px;margin:auto; box-shadow: rgba(135, 138, 153, 0.10) 0 5px 20px -6px;border-radius: 6px;border: 1px solid #eef1f5;overflow: hidden;background-color: #fff;">
            <div style="padding: 1.5rem;background-color: #fafafa;">
                <a href="index.html"><img src="{{ asset('assetsMain/images/logo-dark.png') }}" alt="" height="50"
                        style="display: block;margin: 0 auto;"></a>
            </div>
            <div style="padding: 1.5rem;">
                <h5
                
                    style="font-size: 18px;font-family: 'Inter', sans-serif;font-weight: 600;margin-bottom: 18px;margin-top: 0px;line-height: 1.2;">
                    Your Order Confirmed!</h5>

                <h6 style="font-size: 16px;font-weight: 500;margin-bottom: 12px;margin-top: 0px;line-height: 1.2;">Hello,
                    {{ $order->user->email }}</h6>
                <p style="color: #878a99 !important; margin-bottom: 20px;margin-top: 0px;">Your order has been Confirmed and
                    will be shipping soon.</p>
                <table style="width: 100%;" cellspacing="0" cellpadding="0">
                    <tr>
                        <td style="padding: 5px; vertical-align: top;">
                            <p
                                style="color: #878a99 !important; margin-bottom: 12px; font-size: 13px; text-transform: uppercase;font-weight: 500;margin-top: 0px;">
                                Order Time</p>
                            <h6 style="font-size: 15px; margin: 0px;font-weight: 600; font-family: 'Inter', sans-serif;">{{ $order->created_at }}</h6>
                        </td>
                        <td style="padding: 5px; vertical-align: top;">
                            <p
                                style="color: #878a99 !important; margin-bottom: 12px; font-size: 13px; text-transform: uppercase;font-weight: 500;margin-top: 0px;">
                                Order ID</p>
                            <h6 style="font-size: 15px; margin: 0px;font-weight: 600; font-family: 'Inter', sans-serif;">
                                {{ $order->order_id }}</h6>
                        </td>
                        <td style="padding: 5px; vertical-align: top;">
                            <p
                                style="color: #878a99 !important; margin-bottom: 12px; font-size: 13px; text-transform: uppercase;font-weight: 500;margin-top: 0px;">
                                Payment</p>
                            <h6 style="font-size: 15px; margin: 0px;font-weight: 600; font-family: 'Inter', sans-serif;">
                                PayPal</h6>
                        </td>
                      
                    </tr>
                </table>

                <h6
                    style="font-family: 'Inter', sans-serif; font-size: 15px;font-weight: 600; text-decoration-line: underline;margin-bottom: 16px;margin-top: 20px;">
                    Her'e what you ordered:</h6>
                <table style="width: 100%;border-collapse: collapse;" cellspacing="0" cellpadding="0">
                    @php
                    $subtotal = 0;
                @endphp
                
                @foreach($order->items as $item)
                @php
                    // Calculate the total price for each item
                    $itemTotal = ($item->product_price + $item->printing_price + $item->delivery_price) * $item->quantity;
                    $subtotal += $itemTotal; // Add to subtotal
                @endphp
                <tr>
                    <td style="padding: 12px 5px; vertical-align: top;width: 65px;">
                        <div
                            style="border: 1px solid #eaeef4;height: 64px;width: 64px;display: flex; align-items: center;justify-content: center;border-radius: 6px;">
                            <img src="{{ asset('storage/' . ($item->productBaseImages->first()->base_image ?? 'ProductImages/default.jpg')) }}" alt="" class="avatar-xs">


                        </div>
                    </td>
                    <td style="padding: 12px 5px; vertical-align: top;">
                        <h6 style="font-size: 15px; margin: 0px;font-weight: 500; font-family: 'Inter', sans-serif;">
                            {{ $item->product->title ?? 'Product Name' }}
                        </h6>
                        <p style="color: #878a99 !important; margin-bottom: 10px; font-size: 13px;font-weight: 500;margin-top: 6px;">
                            {{  $item->printing->title  ?? 'Embroidery' }}
                        </p>
                        <p style="color: #878a99 !important; margin-bottom: 0px; font-size: 13px;font-weight: 500;margin-top: 0;">
                            <span>Color: {{ $item->color->title ?? 'N/A' }}</span>
                            @php
                            // Ensure beanie_type is checked properly
                            $type = ($item->beanie_type === 1 || $item->beanie_type === '1') 
                                        ? "Flipped" 
                                        : (($item->beanie_type === 0 || $item->beanie_type === '0') 
                                            ? "Unflipped" 
                                            : "Not Specified");
                        @endphp
                        
                            <span style="margin-left: 15px;">Type: {{ $type ?? 'N/A' }}</span>
                        </p>
                    </td>
                    <td style="padding: 12px 5px; vertical-align: top;">
                        <h6 style="font-size: 15px; margin: 0px;font-weight: 400; font-family: 'Inter', sans-serif;">Qty
                            {{ $item->quantity }}</h6>
                    </td>
                    <td style="padding: 12px 5px; vertical-align: top;text-align: end;">
                        <h6 style="font-size: 15px; margin: 0px;font-weight: 600; font-family: 'Inter', sans-serif;">
                            ${{ number_format($itemTotal, 2) }}
                        </h6>
                    </td>
                </tr>
                @endforeach



                    <tr>
                        <td colspan="3" style="padding: 12px 8px; font-size: 15px;border-top: 1px solid #e9ebec;">
                            Subtotal
                        </td>
                        <td style="padding: 12px 8px; font-size: 15px;text-align: end; border-top: 1px solid #e9ebec;">
                            <h6 style="font-size: 15px; margin: 0px;font-weight: 600; font-family: 'Inter', sans-serif;">
                                ${{ number_format($subtotal, 2) }}</h6>
                        </td>
                    </tr>
             
                    <tr>
                        <td colspan="3" style="padding: 12px 8px; font-size: 15px;">
                            Discount
                        </td>
                        <td style="padding: 12px 8px; font-size: 15px;text-align: end; ">
                            <h6 style="font-size: 15px; margin: 0px;font-weight: 600; font-family: 'Inter', sans-serif;">
                                $0.00</h6>
                            </th>
                    </tr>
                    <tr>
                        <td colspan="3" style="padding: 12px 8px; font-size: 15px;border-top: 1px solid #e9ebec;">
                            Total Amount
                        </td>
                        <td style="padding: 12px 8px; font-size: 15px;text-align: end; border-top: 1px solid #e9ebec;">
                            <h6 style="font-size: 15px; margin: 0px;font-weight: 600; font-family: 'Inter', sans-serif;">
                                ${{ number_format($subtotal, 2) }}</h6>
                        </td>
                    </tr>
                </table>
                <p style="color: #878a99; margin-bottom: 20px;margin-top: 15px;">
                    Your item(s) are on the way! We appreciate your business, and hope you enjoy your purchase.</p>
                <div style="text-align: right;">
                    <h6
                        style="font-size: 15px; margin: 0px;font-weight: 500;font-size: 17px; font-family: 'Inter', sans-serif;">
                        Thank you!</h6>
                    <p style="color: #878a99; margin-bottom: 0;margin-top: 8px;">Monkey Beanies</p>
                </div>
            </div>
            <div style="padding: 1.5rem;background-color: #fafafa;">
                <div style="display: flex;gap: 5px;justify-content: space-between;">
                    {{-- <p style="color: #878a99; margin: 0;">Questions? Contact Our <a href="#!"
                            style="text-decoration: none;"> Customer Support</a></p> --}}
                    <p style="color: #878a99; margin: 0;">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Monkey Beanies.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection