<nav id="mainNav">
    <ul class="inlineContainer">
        <li><a href="<?php echo $root; ?>/">Home</a></li>
        <li><a href="<?php echo $root; ?>/profile">Profile</a></li>
        <!--
        <li><a href="article.html">Articles</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li>
            <a>Menu</a>
            <ul class="submenu">
                <li><a href="">Link #1</a></li>
                <li><a href="">Link #2</a></li>
                <li><a href="">Link #3</a></li>
                <li><a href="">Link #4</a></li>
                <li><a href="">Link #5</a></li>
            </ul>
        </li>-->
    </ul>
</nav>
<script>
    var urlRegExp = new RegExp(window.location.pathname.replace(/\/$/,''));
    $('#mainNav').find('li').each(function() {
        if (urlRegExp.test(this.href)) {
            $(this).parent().addClass('selected');
        }
    });
</script>