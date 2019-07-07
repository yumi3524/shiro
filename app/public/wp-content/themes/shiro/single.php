<?php get_header();?>
<div class="container">
    <div class="contents">
        <?php if(have_posts()):the_post();?>
        <article <?php post_class("kiji"); ?>>
        <!-- 登校日著者を表示 -->
        <div class="kiji-info">
        <!-- 投稿日を取得 -->
        <span clss="kiji-date">
            <i class="fas fa-pencil-alt"></i>
            <time datetime="<?php echo get_the_date('Y-m-d');?>">
            <?php echo get_the_date();?>
            </time>    
        </span>
        <?php if(has_category()): ?>
        <!-- カテゴリ取得 -->
        <span class="cat-data">
            <?php echo get_the_category_list( ' ' ); ?>
        </span>
        <?php endif; ?>
        </div>
        <!-- タイトル -->
        <h1><?php the_title(); ?></h1>
        <!-- アイキャッチ -->
        <?php  if(has_post_thumbnail() ): ?>
        <div class="kiji-img">
        <?php has_post_thumbnail('large'); ?>
        </div>
        <?php endif;?>
        <!-- 本文取得 -->
        <?php the_content(); ?>
        <div class="kiji-tag">
        <?php the_tags('<ul><li>タグ： </li><li>','</li><li>','</li></ul>'
        ); ?>
        </div>
        </article>
        <?php endif; ?>
    </div>
    <?php get_sidebar();?>
</div>
<?php get_footer();?>