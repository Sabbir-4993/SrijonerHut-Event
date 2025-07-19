<section class="page-title" style="background-image:url(@yield('bg'));">
    <div class="auto-container">
        <h1>@yield('page_name')</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{route('index')}}">Home</a></li>
            <li>@yield('page_name')</li>
        </ul>
    </div>
</section>
