<div class="container content">
    <div class="row-fluid about">
        <div class="span8">
            <div class="aboutwrap">
                <?php
                if (isset($success))
                {
                ?>
                <h1 class="blue">Thanks</h1>
                <div id="about-text" class="thanks">
                    <p>Your message was successfully sent.</p>
                    <p><a class="light-green" href="/home">Go to the home page...</a></p>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="span4 aboutright">
            <?php $this->load->view('boxes/bigcircle'); ?>
        </div>
    </div>
</div>