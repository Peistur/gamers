@extends('layout')

@section('content')

<div class=" wrapper bgrow1">
    <div id="topbar">
        <div id="search">
            <form action="#" method="post">
                <fieldset>
                    <legend>Site Search</legend>
                    <input type="text" value="Search the site&hellip;"  onfocus="this.value=(this.value=='Search the site&hellip;')? '' : this.value ;" />
                    <input type="submit" name="go" id="go" value="GO" />
                </fieldset>
            </form>
        </div>
    </div>
    <br class="clear" />
</div>

<div class="wrapper bgrow2">
    <div id="header">
        <div id="logo">
            <h1><a href="#">White Gallery </a></h1>
            <p>company slogan here</p>
        </div>
        <div id="topnav">
            <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="2-col.html">2 Column</a></li>
                <li><a href="full-col.html">Full Column</a></li>
                <li ><a href="contact.html">Contact</a></li>
                <li><a href="#">DropDown</a>
                    <ul>
                        <li><a href="#">sub menu 1</a></li>
                        <li><a href="#">sub menu 2</a></li>
                        <li><a href="#">sub menu 3</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <br class="clear" />
    </div>
</div>
<div class="wrapper bgrow4">
    <div id="container">
        <h1>Gallery Home Page</h1>
        <div id="gallery">
            <ul>
                @foreach ( $videos as $video )

                <li>
                    <a href="#"><img src="{{ $video->imgUrl }}" alt="" width="300" height="220" /></a>
                    <p><strong>{{ $video->title }}</strong><br />
                    <a class="viewproject" href="#">View Details &raquo;</a></p>
                </li>

                @endforeach
            </ul>
        </div>

        <iframe width="560" height="315" src="//www.youtube.com/embed/8Af2qXg-tHo" frameborder="0" allowfullscreen></iframe>

        <img width="242" height="142" src="http://img.youtube.com/vi/8Af2qXg-tHo/0.jpg">


        <div class="clear"></div>
        <div class="pagination">
            <ul>
                <li><a href="#">&laquo; Previous</a></li>
                <li><a href="#">1</a></li>
                <li class="current">2</li>
                <li><a href="#">3</a></li>
                <li class="divider">&hellip;</li>
                <li><a href="#">18</a></li>
                <li><a href="#">19</a></li>
                <li><a href="#">20</a></li>
                <li><a href="#">Next &raquo;</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="wrapper" class="wrapper bgrow4">
    <div id="container"><br class="clear" />
    </div>
</div>
<div class="wrapper bgrow5">
    <div id="footer">
        <div class="footbox newsletter">
            <h2>Subscribe Newsletter </h2>
            <p>Please enter your email to subscribe. </p>
            <form action="#" method="post">
                <fieldset>
                    <legend>News Letter</legend>
                    <input type="text" value="Enter Email Here&hellip;"  onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
                    <input type="submit" name="news_go" id="news_go" value="GO" />
                </fieldset>
            </form>
        </div>
        <div class="midbox">
            <h2 >Archive</h2>
            <ul>
                <li><a href="#">Phasellus nec nunc vel libero.</a></li>
                <li><a href="#">Phasellus nec nunc vel libero.</a></li>
                <li><a href="#">Phasellus nec nunc vel libero.</a></li>
                <li><a href="#">Phasellus nec nunc vel libero.</a></li>
            </ul>
        </div>
        <div class="footbox">
            <h2>Contact</h2>
            <p>Phasellus nec nunc vel libero gravida pellentesque   vitae et sem. Nam bibendum.</p>
            <p>Hotline: xx-xxxxxxxx<br />
                Fax: xx-xxxxxxxx<br />
                Email: <a href="mailto:support@domainname.com">Contact@domainname.com </a></p>
        </div>
    </div>
    <br class="clear" />
</div>
<div class="wrapper bgrow6">
    <div id="copyright">
        <p class="fl_left">Copyright &copy; 2010. Domain Name All Rights Reserved.</p>
        <p class="fl_right">Template by <a href="http://www.themasterwebs.com" target="_blank">The Master Webs </a></p>
        <br class="clear" />
    </div>
</div>
</div>

@stop