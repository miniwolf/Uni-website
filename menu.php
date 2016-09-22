<nav id="mainNav">
    <ul class="inlineContainer">
        <?php
        include("menu/Menu.php");
        $menu = new Menu($masterParser->getRoot());
        $menu->ConstructMenu();
        ?>
        <!--
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