<div class="page">
    <header class="bar bar-nav">

        <h1 class="title">我的</h1>

    </header>
    <nav class="bar bar-tab">
        <a class="tab-item" href="{{ url('m/home') }}">
            <span class="icon icon-home"></span>
            <span class="tab-label">首页</span>
        </a>
        <a class="tab-item active" href="#">
            <span class="icon icon-me"></span>
            <span class="tab-label">我</span>
            <span class="badge">2</span>
        </a>
        <a class="tab-item" href="#">
            <span class="icon icon-star"></span>
            <span class="tab-label">收藏</span>
        </a>
        <a class="tab-item" href="#">
            <span class="icon icon-settings"></span>
            <span class="tab-label">设置</span>
        </a>
    </nav>
    <div class="content">

        <div class="buttons-tab">
            <a href="#tab1" class="tab-link active button">全部</a>
            <a href="#tab2" class="tab-link button">待付款</a>
            <a href="#tab3" class="tab-link button">待发货</a>
        </div>
        <div class="content-block">
            <div class="tabs">
                <div id="tab1" class="tab active">
                    <div class="content-block">
                        <p>This is tab 1 content</p>
                    </div>
                </div>
                <div id="tab2" class="tab">
                    <div class="content-block">
                        <p>This is tab 2 content</p>
                    </div>
                </div>
                <div id="tab3" class="tab">
                    <div class="content-block">
                        <p>This is tab 3 content</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>