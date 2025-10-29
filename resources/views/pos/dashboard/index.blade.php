@extends('pos.layouts.cover')
@section('Title', 'MANH DUNG POS')
@section('Main')
        <main class="Main MainDashboard">
            <div class="CardGroup">
                <h3 class="CardGroupTitle">Tổng quan</h3>
                <div class="CardGrid">
                    <div class="CardGridItem Bg_Primary">
                        <h3 class="CardTitle">Tồn kho</h3>
                        <p class="CardValue">{{ $priceTotalInput }}</p>
                    </div>
                    <div class="CardGridItem Bg_Danger">
                        <h3 class="CardTitle">Khách nợ</h3>
                        <p class="CardValue">{{ $debtTotalInput }}</p>
                    </div>
                </div>
            </div>

            <div class="CardGroup">
                <h3 class="CardGroupTitle">Hôm nay</h3>
                <div class="CardGrid">
                    <div class="CardGridItem Bg_Primary">
                        <h3 class="CardTitle">Doanh thu</h3>
                        <p class="CardValue">{{ $todayTotalRevenue }}</p>
                    </div>
                    <div class="CardGridItem Bg_Danger">
                        <h3 class="CardTitle">Chi tiêu</h3>
                        <p class="CardValue">{{ $todayExpenseMoney }}</p>
                    </div>
                    <div class="CardGridItem Bg_Info">
                        <h3 class="CardTitle">Lợi nhuận</h3>
                        <p class="CardValue">{{ $todayTotalProfit }}</p>
                    </div>
                    <div class="CardGridItem Bg_Success">
                        <h3 class="CardTitle">Sau chi</h3>
                        <p class="CardValue">{{ $todayTotalActualProfit }}</p>
                    </div>
                </div>
            </div>

            <div class="CardGroup">
                <h3 class="CardGroupTitle">Tháng này</h3>
                <div class="CardGrid">
                    <div class="CardGridItem Bg_Primary">
                        <h3 class="CardTitle">Doanh thu</h3>
                        <p class="CardValue">{{ $thismonthTotalRevenue }}</p>
                    </div>
                    <div class="CardGridItem Bg_Danger">
                        <h3 class="CardTitle">Chi tiêu</h3>
                        <p class="CardValue">{{ $thismonthExpenseMoney }}</p>
                    </div>
                    <div class="CardGridItem Bg_Info">
                        <h3 class="CardTitle">Lợi nhuận</h3>
                        <p class="CardValue">{{ $thismonthTotalProfit }}</p>
                    </div>
                    <div class="CardGridItem Bg_Success">
                        <h3 class="CardTitle">Sau chi</h3>
                        <p class="CardValue">{{ $thismonthTotalActualProfit }}</p>
                    </div>
                </div>
            </div>

        </main>
        <!-- End Main -->
@endsection