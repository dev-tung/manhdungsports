<div class="Sidebar" id="Sidebar">
    <nav class="SidebarNav">
        <a class="SidebarNavLink" href="{{route('dashboard.index')}}">
            <span class="SidebarNavText">Tổng quan</span> 
        </a>
        <a class="SidebarNavLink" href="{{route('productype.index', ['screen'=>'pos'])}}">
            <span class="SidebarNavText">Loại sản phẩm</span> 
        </a>
        <a class="SidebarNavLink" href="{{route('product.index', ['screen'=>'pos'])}}">
            <span class="SidebarNavText">Sản phẩm</span> 
        </a>
        <a class="SidebarNavLink" href="{{route('invoice.index', ['screen'=>'pos'])}}">
            <span class="SidebarNavText">Đơn hàng</span> 
        </a>
        <a class="SidebarNavLink" href="{{route('string.index', ['screen'=>'pos'])}}">
            <span class="SidebarNavText">Các loại cước</span> 
        </a>
        <a class="SidebarNavLink" href="{{route('stringorder.index', ['screen'=>'pos'])}}">
            <span class="SidebarNavText">Đơn căng cước</span> 
        </a>
        <a class="SidebarNavLink" href="{{route('customergroup.index', ['screen'=>'pos'])}}">
            <span class="SidebarNavText">Nhóm khách hàng</span> 
        </a>
        <a class="SidebarNavLink" href="{{route('customer.index', ['screen'=>'pos'])}}">
            <span class="SidebarNavText">Khách hàng</span> 
        </a>
    </nav>
</div>