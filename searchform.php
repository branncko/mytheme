<form role="search" method="get" action="<?php echo home_url('/'); ?>">
    <div class="input-group">
        <input type="search" class="form-control" placeholder="digite sua pesquisa" aria-label="digite sua pesquisa 2" aria-describedby="basic-addon2"
          value="<?php get_search_query(); ?>" name="s">
        <div class="input-group-append">
            <button class="btn btn-lc-orange" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>