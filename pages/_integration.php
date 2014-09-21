<?php
    // INT to DEV
    // Page: main pages list
?>
<section id="wrapper">
    <div class="container l-1col clearfix">
        <section class="main-content l-col">
            <style scoped="scoped">
                .page_inte {
                    padding: 10px 0 0 0;
                }
                .page_inte h2 {
                    height: 30px;
                    line-height: 30px;
                    font-size: 20px;
                    color: #000;
                    margin: 10px 0;
                }
                .page_inte h2:first-child {
                    margin-top: 0;
                }
                .page_inte strong {
                    color: #C23E00;
                }
                .page_inte ul,
                .page_inte li {
                    font-size: 11px;
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                }
                .page_inte li:nth-child(2n+1) {
                    background: #EEE;
                }
                .page_inte ul li a {
                    display: block;
                    height: 40px;
                    line-height: 42px;
                    font-size: 12px;
                    color: #000;
                    text-decoration: none;
                    padding: 0 15px;
                }
                .page_inte ul li a:hover {
                    text-decoration: none;
                }
                .page_inte .note {
                    background: #FBFBFB;
                    color: #777;
                    padding: 10px 15px;
                    border-top: dashed 1px #CCC;
                    border-bottom: dashed 1px #CCC;
                }
                .page_inte .note p,
                .page_inte .note ul {
                    font-size: 11px;
                    margin-top: 10px;
                    margin-bottom: 0;
                }
                .page_inte .note p:first-child,
                .page_inte .note ul:first-child {
                    margin-top: 0;
                }
                .page_inte .note ul > li {
                    background-color: transparent;
                    list-style-type: disc;
                    margin: 0 0 0 15px;
                }
                .page_inte li .note {
                    margin: 0 15px 15px 15px;
                }
            </style>
            <div class="page_inte">
                <div class="note">
                    <p><strong>NOTE</strong>: this project uses <em><a href="http://sass-lang.com" target="_blank">Sass</a></em> with <em><a href="http://compass-style.org" target="_blank">Compass</a></em> combined with <em><a href="http://gruntjs.com" target="_blank">Grunt</a></em> and dependency management is done with <em><a href="http://bower.io" target="_blank">Bower</a></em>.</p>
                    <p><u>To initialize the project:</u></p>
                    <ul>
                        <li>Run <em><strong>"npm install"</strong></em> to download <strong>Grunt's plugins</strong></li>
                        <li>Run <em><strong>"bower install"</strong></em> to download <strong>Bower's packages</strong></li>
                    </ul>
                </div>
                <h2>Pages</h2>
                <ul>
                    <li class="clearfix">
                        <a href="index.php?layout=hp&amp;page=hp">Home</a>

                        <div class="note">
                            <p>Note...</p>
                        </div>
                    </li>
                </ul>
                <h2>Common styles</h2>
                <ul>
                    <li class="clearfix">
                        <a href="index.php?layout=int-1col&amp;page=wysiwyg">Typography</a>
                    </li>
                    <li class="clearfix">
                        <a href="index.php?layout=int-1col&amp;page=forms">Forms</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</section>