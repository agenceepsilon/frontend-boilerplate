<div id="wrapper" class="clearfix">
    <div class="container l-spalte-1 clearfix">
        <section class="l-col main-content">
            <style>
                .page-inte {
                    padding: 20px;
                }
                h2 {
                    height: 30px;
                    line-height: 30px;
                    font-size: 20px;
                }
                h2:first-child {
                    margin-top: 0;
                }
                strong {
                    font-weight: bold;
                    color: #C23E00;
                }
                ul,
                li {
                    margin: 0;
                    padding: 0;
                    list-style-type: none;
                }
                li:nth-child(2n+1) {
                    background: #eeeeee;
                }
                ul li a {
                    display: block;
                    height: 40px;
                    line-height: 42px;
                    font-size: 13px;
                    color: #000000;
                    text-decoration: none;
                    padding: 0 15px;
                }
                ul li a:hover {
                    text-decoration: none;
                }
                .note {
                    background: #FBFBFB;
                    font-size: 11px;
                    color: #777777;
                    padding: 10px 15px;
                    border-top: dashed 1px #CCCCCC;
                    border-bottom: dashed 1px #CCCCCC;
                }
                .note p,
                .note ul {
                    margin-top: 10px;
                    margin-bottom: 0;
                }
                .note p:first-child,
                .note ul:first-child {
                    margin-top: 0;
                }
                .note ul > li {
                    background: none;
                    list-style-type: disc;
                    margin: 5px 0 0 25px;
                }
                li .note {
                    margin: 0 15px 15px 15px;
                }
            </style>
            <div class="page-inte">
                <div class="note">
                    <p><strong>NOTE</strong> : ce projet utilise <em><a href="http://sass-lang.com" target="_blank">Sass</a></em>
                        avec <em><a href="http://compass-style.org" target="_blank">Compass</a></em>
                        et combiné avec <em><a href="http://gruntjs.com" target="_blank">Grunt</a></em>. </p>
                    <ul>
                        <li>Lancer <em><strong>"npm install"</strong></em> pour télécharger les modules de <strong>Grunt</strong></li>
                        <li>Lancer <em><strong>"bower install"</strong></em> pour télécharger les modules de <strong>Bower</strong></li>
                    </ul>
                </div>
                <h2>Pages</h2>
                <ul>
                    <li>
                        <a href="index.php?layout=hp&page=hp">Accueil</a>
                    </li>
                    <li>
                        <a href="index.php?layout=int-1col&page=wysiwyg">WYSIWYG général</a>

                        <div class="note">
                            <p>Classe : ".editor"</p>
                        </div>
                    </li>
                </ul>
                <h2>Styles généreaux</h2>
                <ul>
                    <li>
                        <a href="index.php?layout=int-2col-r&page=forms">Formulaires</a>
                    </li>
                </ul>
                <h2>Layouts exemples</h2>
                <ul>
                    <li>
                        <a href="index.php?layout=int-1col&page=wysiwyg">Layout 1 colonne</a>
                    </li>
                    <li>
                        <a href="index.php?layout=int-2col-l&page=wysiwyg">Layout 2 colonnes - Left</a>
                    </li>
                    <li>
                        <a href="index.php?layout=int-2col-r&page=wysiwyg">Layout 2 colonnes - Right</a>
                    </li>
                    <li>
                        <a href="index.php?layout=int-3col&page=wysiwyg">Layout 3 colonnes</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>