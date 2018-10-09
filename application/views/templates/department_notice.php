<style type="text/css">
@media (max-width: 991px) {
  .navbar-header {
      float: none;
  }
  .navbar-left,.navbar-right {
      float: none !important;
  }
  .navbar-toggle {
      display: block;
  }
  .navbar-collapse {
      border-top: 1px solid transparent;
      box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
  }
  .navbar-fixed-top {
      top: 0;
      border-width: 0 0 1px;
  }
  .navbar-collapse.collapse {
      display: none!important;
  }
  .navbar-nav {
      float: none!important;
      margin-top: 7.5px;
  }
  .navbar-nav>li {
      float: none;
  }
  .navbar-nav>li>a {
      padding-top: 10px;
      padding-bottom: 10px;
  }
  .collapse.in{
      display:block !important;
  }
}
</style>

    

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/ui/style.css" media="all">
<style type="text/css">
        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted black;
        }

            .tooltip .tooltiptext {
                visibility: hidden;
                width: 120px;
                background-color: black;
                color: #fff;
                text-align: center;
                border-radius: 6px;
                padding: 5px 0;
                /* Position the tooltip */
                position: absolute;
                z-index: 1;
            }

            .tooltip:hover .tooltiptext {
                visibility: visible;
            }



        .scrol-bg {
            background-color: #DEDEDE;
        }

        .scrol {
            padding: 5px;
            color: #8E0000;
        }

        .scrol2 {
            padding: 5px;
            color: #060;
        }

        .exam {
            background-color: #d7d7d7;
            border: 1px solid #fcfcfc;
            font-size: 13px;
            font-weight: bold;
            min-height: 40px;
            text-align: center;
        }

        .sml-lnk a {
            font-size: 9pt;
        }

        .sml-lnk img {
            width: 25px;
        }

        .dropdown-menu > li > a {
          white-space: normal;
        }
    </style>



<!-- custum -->
<script>
        $(document).ready(function () {
            $(".topbar-icon").click(function () {
                $("#top-bar").toggle();
            });
        });

        $(document).ready(function () {
            $(".nav-icon").click(function () {
                $("#nav").toggle();
            });
        });

    </script>

    <script>
        $(function () {
            var x;
            setInterval(function () {
                if (x == 0) {
                    $('.blinking').css('color', '#E58829');
                    x = 1;
                } else {
                    if (x = 1) {
                        $('.blinking').css('color', '#FFFFFF');
                        x = 0;
                    }
                }
            }, 500);
        });

    </script>
    <script>
        $(function () {
            var x;
            setInterval(function () {
                if (x == 0) {
                    $('.blink').css('color', '#8E0000');
                    x = 1;
                } else {
                    if (x = 1) {
                        $('.blink').css('color', '#000');
                        x = 0;
                    }
                }
            }, 500);
        });

    </script>

<!-- /custum -->


<div class="container-fluid">
        <div class="row">
          <!-- second section -->
          <br>
          <section class="second-w3ls">
            <div class="container-fluid">
              <div class="col-lg-6 col-md-6 tab-w3layouts">
            <div class="panel panel-default panel-default-new">
                              <div class="panel-heading panel-heading-left">Notice Board <a class="circular-more" href="#">More <i class="fa fa-arrow-circle-right"></i></a></div>
                              <div class="panel-body whats-new-panel">
                                  <div class="row">
                                      <div class="col-xs-12">
                                          <ul class="porn" style="overflow-y: hidden; height: 250px;">
                                            <?php foreach($notice as $notice):?>
                                            <?php if ($notice['pdf']):?>
                                            <li class="news-item"><a href="<?php echo base_url();?><?php echo $notice['pdf'];?>" class="blinking"><?php $notice['title']?></a></li>                                                
                                            <?php elseif($notice['link']):?>
                                            <li class="news-item"><a href="<?php echo base_url();?><?php echo $notice['link'];?>" class="blinking"><?php $notice['title']?></a></li>
                                            <?php else:?>
                                            <li class="news-item"><a href="#" class="blinking"><?php echo $notice['title']?></a></li>
                                            <?php endif ;?>
                                            <?php endforeach;?>
                                            
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>

              <div class="col-lg-6 col-md-6 tab-w3layouts">
            <div class="panel panel-default panel-default-new">
                              <div class="panel-heading panel-heading-left">What's New <a class="circular-more" href="#">More <i class="fa fa-arrow-circle-right"></i></a></div>
                              <div class="panel-body whats-new-panel">
                                  <div class="row">
                                      <div class="col-xs-12">
                                          <ul class="porn" style="overflow-y: hidden; height: 250px;">
                                          <?php foreach($what_new as $notice):?>
                                            <?php if ($notice['pdf']):?>
                                            <li class="news-item"><a href="<?php echo base_url();?><?php echo $notice['pdf'];?>" class="blinking"><?php $notice['title']?></a></li>                                                
                                            <?php elseif($notice['link']):?>
                                            <li class="news-item"><a href="<?php echo base_url();?><?php echo $notice['link'];?>" class="blinking"><?php $notice['title']?></a></li>
                                            <?php else:?>
                                            <li class="news-item"><a href="#" class="blinking"><?php echo $notice['title']?></a></li>
                                            <?php endif ;?>
                                            <?php endforeach;?>									
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>


              <div class="clear"></div>
            </div>
          </section>
          <!-- /second section -->
        </div>