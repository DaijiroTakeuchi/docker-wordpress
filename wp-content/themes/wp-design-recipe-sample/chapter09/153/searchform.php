<!-- form#serchform 検索フォーム -->
<form id="searchform" method="GET" action="/" class="form-inline kp-header-searchinput" role="search">
    <div class="input-group">
        <label for="searchword">サイト内検索</label>
        <input type="text" name="s" class="form-control" placeholder="検索" id="searchword" value="<?php echo get_search_query(); ?>">
        <div class="input-group-append">
            <button class="btn btn-info" type="submit"><i class="fas fa-search"></i><span>検索</span></button>
        </div>
    </div>
</form>
<!-- /form#serchform 検索フォーム -->