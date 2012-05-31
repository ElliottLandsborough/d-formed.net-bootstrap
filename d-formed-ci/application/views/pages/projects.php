<div class="container content">
    <div class="row-fluid projects">
        <div class="span8">
            <div class="projectswrap">
                <h1 class="blue">Projects</h1>
<?
if (isset ($posts))
{
    foreach ($posts as $post)
    {
        echo '                  <div class="portfolio-post">
';
        echo '                  <p class="post-content"><span class="post-title"><a href="/projects/post/'.$post->ID.'">'.$post->post_title.'</a></span>'.$post->post_content.'</p>
';
        echo '                  <div class="readmore"><a class="light-green" href="/projects/post/'.$post->ID.'">Permalink</a></div>
';
        echo '                  </div>
';
    }
}
else if (isset($post))
{
    echo '                  <div class="portfolio-post">
';
    echo '                  <p class="post-content"><span class="post-title">'.$post->post_title.'</span>'.$post->post_content.'</p>
';
    echo '                  <div class="readmore"><br /></div>
';
    echo '                  </div>
';
}
?>
            </div>
        </div>
        <div class="span4 aboutright">
            <?php $this->load->view('boxes/bigcase'); ?>
            <?php $this->load->view('boxes/testimonials'); ?>
        </div>
    </div>
</div>