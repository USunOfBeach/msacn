<header id="header" class="media">
    <a href="" id="menu-toggle"></a> 
    <a class="logo pull-left" href="index.html">{{ Util::ts('msa_lobby') }}</a>
    
    <div class="media-body">
        <div class="media" id="top-menu">
            <div class="pull-left tm-icon">
                <a data-drawer="messages" class="drawer-toggle" href="">
                    <i class="sa-top-message"></i>
                    <i class="n-count animated">5</i>
                    <span>{{ Util::ts('my_message') }}</span>
                </a>
            </div>
            <div class="pull-left tm-icon">
                <a data-drawer="notifications" class="drawer-toggle" href="">
                    <i class="sa-top-updates"></i>
                    <i class="n-count animated">9</i>
                    <span>Updates</span>
                </a>
            </div>
            <div id="time" class="pull-right">
                <span id="hours"></span>
                :
                <span id="min"></span>
                :
                <span id="sec"></span>
            </div>
            
            <div class="media-body">
                <input type="text" class="main-search">
            </div>
        </div>
    </div>
</header>