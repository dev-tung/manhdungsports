@extends('pos.layouts.cover')
@section('Title', 'MANH DUNG POS')
@section('Main')
        <main class="Main">
            <div class="CardGrid">
                <div class="CardGridItem Bg_Primary">
                    <h3 class="CardTitle">Tồn kho</h3>
                    <p class="CardValue">{{ $priceTotalInput }}</p>
                </div>
                <div class="CardGridItem Bg_Success">
                    <h3 class="CardTitle">Doanh thu hôm nay</h3>
                    <p class="CardValue">{{ $todayTotalRevenue }}</p>
                </div>
                <div class="CardGridItem Bg_Warning">
                    <h3 class="CardTitle">Chi tiêu hôm nay</h3>
                    <p class="CardValue">{{ $todayExpenseMoney }}</p>
                </div>
                <div class="CardGridItem Bg_Info">
                    <h3 class="CardTitle">Lợi nhuận hôm nay</h3>
                    <p class="CardValue">{{ $todayTotalProfit }}</p>
                </div>
                <div class="CardGridItem Bg_Danger">
                    <h3 class="CardTitle">Lợi nhuận sau chi tiêu hôm nay</h3>
                    <p class="CardValue">{{ $todayTotalActualProfit }}</p>
                </div>
            </div>
        </main>
        <!-- End Main -->
@endsection