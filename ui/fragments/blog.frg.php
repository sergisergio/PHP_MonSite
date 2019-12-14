<div class="container inner">
    <div class="blog list-view row">
        <div class="col-md-8 col-sm-12 content">
            <div class="blog-posts">
                <div class="box" style="margin-bottom: 50px;">
                    <div class="count">
                        <h3> <?= count($ListOfPosts); ?> articles</h3>
                    </div>
                </div>
                <!-- début boucle -->
                <div class="post box">
                    <div class="row">
                        <div class="col-sm-5">
                            <figure class="frame"><a href="{{ path('view', { id: post.id }) }}">
                                    <div class="text-overlay">
                                        <div class="info"><span>Voir plus</span></div>
                                    </div>
                                    <img src="img/b1-1.jpg" alt="" />
                                </a></figure>
                        </div>
                        <!-- /column -->
                        <div class="col-sm-7 post-content">
                            <div class="meta">
                                <span class="category">
                                    Boucle catégories- Afficher catégorie
                                </span>
                                <span class="date">Date</span>
                                <span class="comments"><a href="#">Nombre de commentaires <i class="icon-chat-1"></i></a></span>
                            </div>
                            <h2 class="post-title"><a href="{{ path('view', { id: post.id }) }}">Titre de l'article</a></h2>
                            100 premiers caractères du contenu de l'article
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- fin boucle -->
            </div>
            <!-- /.blog-posts -->
            <div class="pagination box">
                <ul>
                    <li><a href="#" class="btn">Prev</a></li>
                    <li class="active"><a href="#" class="btn"><span>1</span></a></li>
                    <li><a href="#" class="btn"><span>2</span></a></li>
                    <li><a href="#" class="btn"><span>3</span></a></li>
                    <li><a href="#" class="btn">Next</a></li>
                </ul>
            </div>
            <!-- /.pagination -->
            <div class="pagination box">
                <div class="navigation">
                    Pagination
                </div>
            </div>
        </div>
        <!-- /.content -->
        <aside class="col-md-4 col-sm-12 sidebar">
            <div class="sidebox box widget">
                <h3 class="widget-title section-title">Affichage</h3>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>
                <ul class="layout-switcher">
                    <li><a href="{{ path('blog') }}" class="btn btn-small hint--top active" data-hint="Liste"><i class="icon-menu-1"></i></a></li>
                    <li><a href="{{ path('blog2') }}" class="btn btn-small hint--top" data-hint="Grille"><i class="icon-th-large"></i></a></li>
                    <li><a href="{{ path('blog3') }}" class="btn btn-small hint--top" data-hint="Classique"><i class="icon-stop-1"></i></a></li>
                </ul>
            </div>
            <!-- /.widget -->
            <div class="sidebox box widget">
                <form class="searchform" method="get">
                    <input type="text" id="s2" name="s" value="type and hit enter" onfocus="this.value=''" onblur="this.value='type and hit enter'" />
                </form>
            </div>
            <!-- /.widget -->
            <div class="sidebox box widget">
                <h3 class="widget-title section-title">Popular Posts</h3>
                <ul class="post-list">
                    <li>
                        <figure class="frame pull-left">
                            <div class="icon-overlay"><a href="blog-post.html"><img src="style/images/art/a1.jpg" alt="" /> </a></div>
                        </figure>
                        <div class="meta"> <em><span class="date">3 Oct 2012</span><span class="comments"><a href="#">8 <i class="icon-chat-1"></i></a></span></em>
                            <h5><a href="blog-post.html">Magna Mollis Ultricies</a></h5>
                        </div>
                    </li>
                    <li>
                        <figure class="frame pull-left">
                            <div class="icon-overlay"><a href="blog-post.html"><img src="style/images/art/a2.jpg" alt="" /> </a></div>
                        </figure>
                        <div class="meta"> <em><span class="date">28 Sep 2012</span><span class="comments"><a href="#">5 <i class="icon-chat-1"></i></a></span></em>
                            <h5><a href="blog-post.html">Ornare Nullam Risus</a></h5>
                        </div>
                    </li>
                    <li>
                        <figure class="frame pull-left">
                            <div class="icon-overlay"><a href="blog-post.html"><img src="style/images/art/a3.jpg" alt="" /> </a></div>
                        </figure>
                        <div class="meta"> <em><span class="date">15 Aug 2012</span><span class="comments"><a href="#">9 <i class="icon-chat-1"></i></a></span></em>
                            <h5><a href="blog-post.html">Euismod Nullam</a></h5>
                        </div>
                    </li>
                </ul>
                <!-- /.post-list -->
            </div>
            <!-- /.widget -->
            <div class="sidebox box widget">
                <h3 class="widget-title section-title">Categories</h3>
                <ul class="circled">
                    <!-- boucle catégories -->
                    <li><a href="#">Nom de la catégorie (21)</a></li>
                    <!-- fin de la boucle -->
                </ul>
            </div>
            <!-- /.widget -->
            <div class="sidebox box widget">
                <h3 class="widget-title section-title">Tags</h3>
                <ul class="tag-list">
                    <!-- boucle tags -->
                    <li><a href="#" class="btn">Nom du tag</a></li>
                    <!-- fin boucle tags -->
                </ul>
                <!-- /.tag-list -->
            </div>
            <!-- /.widget -->
        </aside>
        <!-- /column .sidebar -->
    </div>
    <!-- /.blog -->
</div>
