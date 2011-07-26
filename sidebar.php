<div id="sidebar">
    <div class="sidebar-block">
        <div id="welcome">
            <?php echo get_page_by_title("Welcome")->post_content ?>    
        </div>
    </div>
    
    <div class="sidebar-block">
        <h1>Search</h1>
        <?php echo get_search_form() ?>
    </div>

	<div class="sidebar-block">
    <h1>Categories</h1>
	<ul>
		<?php wp_list_categories(array(
		  'title_li' => '',
		  'hide_empty' => 0,
		  'exclude' => '1,4,5',
		)); ?>
	</ul>
    </div>
    
    <div class="sidebar-block">
	    <div id="contributors">
            <div id="contributors-title">
                <h1>Contributors</h1>
            </div>
            <?php echo do_shortcode('[authoravatars avatar_size=50 show_name=true show_biography=true render_as_list=true order=date_registered link_to_authorpage=false]') ?>
        </div>
    </div>
</div>
