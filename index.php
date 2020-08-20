<?php get_header();?>

<div class="card border-0 text-white text-center">
    <img src="./assets/banner.png" class="card-img banner-header" alt="imagem Banner ">
    <div class="card-img-overlay bg-banner-header p-0 m-0 row">
        <div class="col align-self-end">
            <p class="mb-0 lead"> Emprestimo Pessoal</p>
            <h1 class="mb-3">A solução para quem pensa no futuro</h1>
            <p><a href="#" class="btn btn-lg btn-lc-orange mb-3">Saiba mais</a></p>
        </div>
    </div>

</div>

<div class="container">
    <div class="row my-5 pt-5">
        <div class="col-lg-4 col-sm-6">
            <img src="./assets/image-1920x1080.jpg" class="img-fluid mb-3" alt="Imagem 01">
            <h5>
                <a href="#">Empréstimo Consignado</a>
            </h5>
            <p>As melhores taxas e condições para voce que deseja realizar todos os seus sonhos na melhor fase da vida
            </p>

            <p>
                <a href="#" class="btn btn-lc-orange">Saiba Mais</a>

            </p>
        </div>

        <div class="col-lg-4 col-sm-6">
            <img src="./assets/image-1920x1080.jpg" class="img-fluid mb-3" alt="Imagem 01 ">
            <h5>
                <a href="#">Empréstimo Consignado</a>
            </h5>
            <p>As melhores taxas e condições para voce que deseja realizar todos os seus sonhos na melhor fase da vida
            </p>

            <p>
                <a href="#" class="btn btn-lc-orange">Saiba Mais</a>

            </p>
        </div>

        <div class="col-xl-4 col-12 mt-3 mt-xl-0">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item border-0">
                        <h5>
                            <a href="#">Empréstimo Consignado</a>
                        </h5>
                        <p class="mb-0">As melhores taxas e condições para voce que deseja realizar todos os seus sonhos
                            na melhor
                            fase da vida.</p>
                    </li>

                    <li class="list-group-item border-0">
                        <h5>
                            <a href="#">Empréstimo Consignado</a>
                        </h5>
                        <p class="mb-0">As melhores taxas e condições para voce que deseja realizar todos os seus sonhos
                            na melhor
                            fase da vida.</p>
                    </li>

                    <li class="list-group-item border-0">
                        <h5>
                            <a href="#">Empréstimo Consignado</a>
                        </h5>
                        <p class="mb-0">As melhores taxas e condições para voce que deseja realizar todos os seus sonhos
                            na melhor
                            fase da vida.</p>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-12">
            <h5 class="border-bottom pb-2 mb-4"><i class="fas fa-newspaper"></i> Novidades</h5>

            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            
        <p>
            <span class="badge badge-lc-gray">Seu Dinheiro</span>
        </p>
        <h5>
            <a href="#">A culpa é do STF. Bozo tá certo</a>
        </h5>
        <p class="mb-0">As melhores taxas e condições para voce que deseja realizar todos os seus sonhos na
            melhor
            fase da vida.</p>
        <p class="text-muted mt-3"><i class="far fa-clock"></i><small>Publicado em 11 de agosto de
                2020</small></p>
    


            <?php endwhile; ?>

            <?php else : ?>

            <p class="lead">Nenhuma publicação localizada!</p>

            <?php endif; ?>

        </div>
        <!-- Sidebar 2 -->
        <div class="col-lg-4 d-none d-lg-block">
            <div class="card bg-lc-gray border-0 mb-4">
                <div class="card-body">
                    <h5>Pesquisar</h5>
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Crédito Pessoal"
                                aria-label="Crédito Pessoal 2" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-lc-orange" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="card text-white mb-4">
                <img src="./assets/image-1920x1080.jpg" class="card-img" alt="Descrição da Imagem">
                <div class="card-img-overlay bg-banner-header p-0 m-0 row">
                    <div class="col align-self-end">
                        <h5 class="mb-0">Empréstimo Pessoal</h5>
                        <p>A solução para quem pensa no futuro</p>

                    </div>
                </div>

            </div>
            <div class="card text-white mb-4">
                <img src="./assets/image-1920x1080.jpg" class="card-img" alt="Descrição da Imagem">
                <div class="card-img-overlay bg-banner-header p-0 m-0 row">
                    <div class="col align-self-end">
                        <h5 class="mb-0">Empréstimo Consignado</h5>
                        <p>A solução para quem pensa no futuro</p>

                    </div>
                </div>

            </div>
            <div class="card bg-lc-gray text-center border-0">
                <div class="card-body">
                    <ul class="list-unstyled list-inline mb-0">
                        <li class="list-inline-item"><i class="fab fa-whatsapp fa-2x"></i></li>
                        <li class="list-inline-item"><i class="fas fa-inbox fa-2x"></i></li>
                        <li class="list-inline-item"><i class="fab fa-facebook-square fa-2x"></i></li>
                        <li class="list-inline-item"><i class="fab fa-instagram fa-2x"></i></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- caixas de Comentários  -->
<div class="bg-lc-gray py-4 mt-4 mb-md-0">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-4">
                <div class="card border-card-footer">
                    <div class="card-body">
                        <p> <em>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat porro laudantium
                                cumque, harum
                                ratione, aliquid natus consequuntur doloremque error consectetur, dolorem totam amet
                                illum quae odit!
                                Enim vitae vero animi.</em> </p>
                        <p class="mb-0">
                            <strong>
                                <i class="fas fa-user"></i> João da Silva
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card border-card-footer">
                    <div class="card-body">
                        <p><em> Lorem ipsum dolor sit amet, consectetur elit. Nam, provident? Saepe quaerat eos
                                distinctio in
                                odio? Porro deserunt maxime molestiae! Minima amet mollitia praesentium ratione
                                inventore doloribus
                                iusto ducimus sequi.</em></p>
                        <p class="mb-0">
                            <strong>
                                <i class="fas fa-user"></i> Zé Raimundo
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>