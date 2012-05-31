<?php
function dodate($post_date)
{
    $datetime=explode(" ",$post_date); // separate the date and time
    $date=explode("-",$datetime['0']); // split the date up depending on where the '-'s are
    $output['year']=$date['0'];
    $output['month']=$date['1'];
    $output['day']=$date['2'];
    $time=explode(":",$datetime['1']); // split the time up depending on :
    $hour=$time['0'];
    $minute=$time['1'];
    $second=$time['2'];
    return $output;
}
?>
<div class="container content">
    <div class="row-fluid projects">
        <div class="span8">
            <div class="projectswrap">
                <h1 class="blue">News</h1>
<?
if (isset ($posts))
{
    $last=count($posts)-1;
    foreach ($posts as $post)
    {
        $date=dodate($post->post_date);
        echo '                  <div class="wp-post">
';
        echo '                  <div class="post-date"><span class="day">'.$date['day'].'</span><br /><span class="month">'.date("M",mktime(0,0,0,$date['month'],1,2003)).'</span><br /><span class="year">'.$date['year'].'</span></div>
';
        echo '                  <p class="post-title"><a href="/news/post/'.$post->ID.'">'.$post->post_title.'</a></p>
';
        echo '                  <p class="post-content">'.$post->post_content.'</p>
';
        echo '                  <div class="post-footer">
';
        echo '                  <div class="readmore"><a class="light-green" href="/news/post/'.$post->ID.'">Read more</a></div>
';
        $this->load->view('boxes/sharebox');
        echo '                  </div>
';
        echo '                  </div>
';
        echo '                  <div class="clear"></div>
';
        if ($post->ID!==$posts[$last]->ID)
        {
            echo '                  <div class="newsline"></div>
';
        }
        else
        {
            echo '                  <div class="newslast"></div>
';
        }
    }
}
else if (isset($post))
{
    $date=dodate($post->post_date);
    echo '                  <div class="wp-post">
';
    echo '                  <div class="post-date"><span class="day">'.$date['day'].'</span><br /><span class="month">'.date("M",mktime(0,0,0,$date['month'],1,2003)).'</span><br /><span class="year">'.$date['year'].'</span></div>
';
    echo '                  <p class="post-title">'.$post->post_title.'</p>
';
    echo '                  <p class="post-content">'.$post->post_content.'</p>
';
    echo '                  <div class="post-footer">
';
    echo '                  <div class="readmore"></div>
';
    $this->load->view('boxes/sharebox');
    echo '                  </div>
';
    echo '                  </div>
';
}
?>
            </div>
        </div>
        <div class="span4 aboutright">
            <?php $this->load->view('boxes/bighat'); ?>
            <?php $this->load->view('boxes/testimonials'); ?>
        </div>
    </div>
</div>