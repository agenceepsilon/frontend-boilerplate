<section id="wrapper">
    <div class="container l-1col clearfix">
        <section class="main-content l-col">
            <style scoped="scoped">
                .page-inte {
                    padding: 10px 0 0 0;
                }
                .page-inte h2 {
                    height: 30px;
                    line-height: 30px;
                    font-size: 20px;
                    margin: 10px 0;
                }
                .page-inte h2:first-child {
                    margin-top: 0;
                }
                .page-inte strong {
                    color: #C23E00;
                }
                .page-inte ul,
                .page-inte li {
                    font-size: 11px;
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                }
                .page-inte li:nth-child(2n+1) {
                    background: #EEE;
                }
                .page-inte ul li a {
                    display: block;
                    height: 40px;
                    line-height: 42px;
                    font-size: 12px;
                    color: #000;
                    text-decoration: none;
                    padding: 0 15px;
                }
                .page-inte ul li a:hover {
                    text-decoration: none;
                }
                .page-inte .note {
                    background: #FBFBFB;
                    color: #777;
                    padding: 10px 15px;
                    border-top: dashed 1px #CCC;
                    border-bottom: dashed 1px #CCC;
                }
                .page-inte .note p,
                .page-inte .note ul {
                    font-size: 11px;
                    margin-top: 10px;
                    margin-bottom: 0;
                }
                .page-inte .note p:first-child,
                .page-inte .note ul:first-child {
                    margin-top: 0;
                }
                .page-inte .note ul > li {
                    background-color: transparent;
                    list-style-type: disc;
                    margin: 5px 0 0 25px;
                }
                .page-inte li .note {
                    margin: 0 15px 15px 15px;
                }
            </style>
            <div class="page-inte">
                <div class="note">
                    <p><strong>NOTE</strong> : ce projet utilise
                        <em><a href="http://sass-lang.com" target="_blank">Sass</a></em>
                        avec <em><a href="http://compass-style.org" target="_blank">Compass</a></em>
                        combiné à <em><a href="http://gruntjs.com" target="_blank">Grunt</a></em> et la gestion des dépendances est faite avec <em><a href="http://bower.io" target="_blank">Bower</a></em>.</p>
                    <p>Pour initilaiser le projet :</p>
                    <ul>
                        <li>Lancer <em><strong>"npm install"</strong></em> pour télécharger les modules de
                            <strong>Grunt</strong>
                        </li>
                        <li>Lancer <em><strong>"bower install"</strong></em> pour télécharger les modules de <strong>Bower</strong>
                        </li>
                    </ul>
                </div>
                <h2>Pages</h2>
                <ul>
                    <li class="clearfix">
                        <a href="index.php?layout=hp&amp;page=hp">Accueil</a>

                        <div class="note">
                            <p>Note...</p>
                        </div>
                    </li>
                </ul>
                <h2>Styles généraux</h2>
                <ul>
                    <li class="clearfix">
                        <a href="index.php?layout=int-1col&amp;page=wysiwyg">WYSIWYG</a>
                    </li>
                    <li>
                        <a href="index.php?layout=int-1col&amp;page=forms">Formulaires</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</section>