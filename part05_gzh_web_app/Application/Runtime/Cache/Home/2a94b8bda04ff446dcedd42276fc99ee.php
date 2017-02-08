<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title>GZH</title>
    <meta name="description" content="想看什么电影，关注公众号，告诉我们电影名称"/>
    <meta name="keywords" content="电影"/>
    <!--<link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">-->
    <!--<link href="/Public/app/css/app.css" rel="stylesheet" type="text/css">-->
    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/Public/app/css/app.css" rel="stylesheet" type="text/css">
    <style type="text/css">object, embed {
        -webkit-animation-duration: .001s;
        -webkit-animation-name: playerInserted;
        -ms-animation-duration: .001s;
        -ms-animation-name: playerInserted;
        -o-animation-duration: .001s;
        -o-animation-name: playerInserted;
        animation-duration: .001s;
        animation-name: playerInserted;
    }

    @-webkit-keyframes playerInserted {
        from {
            opacity: 0.99;
        }
        to {
            opacity: 1;
        }
    }

    @-ms-keyframes playerInserted {
        from {
            opacity: 0.99;
        }
        to {
            opacity: 1;
        }
    }

    @-o-keyframes playerInserted {
        from {
            opacity: 0.99;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes playerInserted {
        from {
            opacity: 0.99;
        }
        to {
            opacity: 1;
        }
    }


    </style>
</head>

<body>

<div class="header">
    <div class="logo">
        <a href="/Home">
            <img width="126" height="35" alt="logo" src="http://icon.solidot.org/images/topics/topicspace.gif">
        </a>
    </div>
    <form id="ffsearch" name="ffsearch" method="post" action="/plus/search.php">
        <div class="container-fluid">
            <div class="input-append row-fluid">
                <input type="text" class="span11" placeholder="输入影片名进行搜索" name="q">
                <button class="btn" type="button">搜索</button>
            </div>
        </div>
    </form>
</div>

<header>
    <div class="nav-wrapper">
        <ul class="nav nav-tabs">
            <?php
 if ($cat == 'zuixin') { echo "<li class='active'><a href='/Home'>最新电影</a></li>"; } else { echo "
            <li><a href='/Home'>最新电影</a></li>
            "; } if ($cat == 'jingdian') { echo "
            <li class='active'><a href='/Home?cat=jingdian'>经典合集</a></li>
            "; } else { echo "
            <li><a href='/Home?cat=jingdian'>经典合集</a></li>
            "; } if ($cat == 'renwu') { echo "
            <li class='active'><a href='/Home?cat=renwu'>人物系列</a></li>
            "; } else { echo "
            <li><a href='/Home?cat=renwu'>人物系列</a></li>
            "; } if ($cat == 'zongyi') { echo "
            <li class='active'><a href='/Home?cat=zongyi'>综艺</a></li>
            "; } else { echo "
            <li><a href='/Home?cat=zongyi'>综艺</a></li>
            "; } if ($cat == 'dianshiju') { echo "
            <li class='active'><a href='/Home?cat=dianshiju'>电视剧</a></li>
            "; } else { echo "
            <li><a href='/Home?cat=dianshiju'>电视剧</a></li>
            "; } if ($cat == 'yanchanghui') { echo "
            <li class='active'><a href='/Home?cat=yanchanghui'>演唱会</a></li>
            "; } else { echo "
            <li><a href='/Home?cat=yanchanghui'>演唱会</a></li>
            "; } ?>
        </ul>
    </div>
</header>

<div id="content">
    <div class="c-box" id="resize_list">
        <div class="title" align="center"><h2>热门最新电影推荐：</h2></div>
        <div class="plist">
            <ul class="list_tab_img">
                <?php
 foreach( $data as $item){ echo '<li><a href="/Home/Detail?id='.$item['id'].'">
                <div class="picsize">
                    <img src="'.$item['img'].'">
                    <label class="title text-success">'.$item['title'].'</label>
                </div>
            </a>
                </li>'; } ?>
            </ul>
        </div>
        <div class="pager pagination">
            <!--<a class="current btn-success btn btn-small btn">1</a>-->
            <!--<a class="num btn btn-small" href="/index.php/Home/Index/index/p/2.html">2</a>-->
            <!--<a class="num btn  btn-small" href="/index.php/Home/Index/index/p/3.html">3</a>-->
            <!--<a class="next btn  btn-small"-->
               <!--href="/index.php/Home/Index/index/p/2.html">下一页</a>-->
            <?php
 $d= mb_ereg_replace('span','a',$page); $d = mb_ereg_replace('current','current btn-success',$d); echo mb_ereg_replace('class="','class="btn btn-small ',$d); ?>

        </div>

    </div>
</div>
</div>

<!--<div class="profile_info">-->
<!--<a id="weui_btn" class="btn btn-block btn-info" href="http://www.58look.cn/dianying/">-->
<!--<div class="profile_opr">点击更多热门电影</div>-->
<!--</a>-->
<!--</div>-->

<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
    if (top.location != self.location) {
        top.location = self.location;//防止页面被框架包含
    }
</script>
<div id="footer">Copyright &copy; GZH | <a href="#header">回到顶部</a> 如有侵权请发邮件至: 我们会及时删除侵权内容，谢谢合作。</div>

</div></div></div></div></div>


</body>
</html>