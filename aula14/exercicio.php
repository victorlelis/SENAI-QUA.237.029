<h3>Exercício</h3>
<div class="bg-light">
  <!-- nav, div, a, b, ul, li -->
  <nav class="bg-dark sticky-top">
    <div class="container d-flex justify-content-between align-items-center">
      <a class="text-uppercase text-decoration-none link-light py-4" href="?aula=aula14&arquivo=exercicio.php">
        <b>Blog</b>
      </a>
      <ul class="d-flex mb-0 list-unstyled gap-4">
        <li>
          <a class="text-decoration-none link-light py-4" href="#artigo">Artigo</a>
        </li>
        <li>
          <a class="text-decoration-none link-light py-4" href="#comentarios">Comentários</a>
        </li>
        <li>
          <a class="text-decoration-none link-light py-4" href="#comentar">Comentar</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- section, main, article, img, h1, h2, h4, h6, p, aside, sub, sup, em -->
  <main class="container mt-3" id="artigo">

    <div class="row">
      <div class="col-md-8">
        <article class="py-4">
          <img class="img-fluid rounded" src="https://becode.com.br/wp-content/uploads/2017/09/php-post-1.png" alt="O que é PHP?">
          <p class="text-end small my-2">Publicado em 29/07/2022 ás 19:39</p>

          <h1>O que é o PHP?</h1>
          <p>
            O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor) é uma linguagem de script open source de uso geral, muito utilizada, e especialmente adequada para o desenvolvimento web e que pode ser embutida dentro do HTML.
          </p>

          <em>
            Ótimo, mas o que isso significa?
          </em>

          <h2>Um exemplo introdutório</h2>

          <div class="bg-white p-3 rounded mb-4">
            <code><span style="color: #000000">
                &lt;!DOCTYPE&nbsp;HTML&gt;<br />&lt;html&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;head&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;Exemplo&lt;/title&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;/head&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;body&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"Olá,&nbsp;eu&nbsp;sou&nbsp;um&nbsp;script&nbsp;PHP!"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">?&gt;<br /></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;/body&gt;<br />&lt;/html&gt;</span>
            </code>
          </div>

          <iframe class="rounded mb-4" width="100%" height="400" src="https://www.youtube.com/embed/Q0gL995UazU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>

          <p>
            Em vez de muitos comandos para mostrar HTML (como acontece com C ou Perl), as páginas PHP contém HTML em código mesclado que faz &quot;alguma coisa&quot; (neste caso, mostra &quot;Olá, eu sou um script PHP!&quot;). O código PHP é delimitado pelas <a class="link-primary text-decoration-none" href="https://www.php.net/manual/pt_BR/language.basic-syntax.phpmode.php" target="_blank">instruções de processamento (tags) de início e fim <code class="code">&lt;?php</code> e <code class="code">?&gt;</code></a> que permitem que você entre e saia do &quot;modo PHP&quot;.
          </p>

          <p>
            O que distingue o PHP de algo como o JavaScript no lado do cliente é que o código é executado no servidor, gerando o HTML que é então enviado para o navegador. O navegador recebe os resultados da execução desse script, mas não sabe qual era o código fonte. Você pode inclusive configurar seu servidor web para processar todos os seus arquivos HTML com o PHP, e então não há como os usuários dizerem o que você tem na sua manga.
          </p>

          <p>
            A melhor coisa em usar o PHP é que ele é extremamente simples para um iniciante, mas oferece muitos recursos avançados para um programador profissional. Não tenha medo de ler a longa lista de recursos do PHP. Pode entrar com tudo, o mais rápido que puder, e começar a escrever scripts simples em poucas horas.
          </p>

          <p>
            Apesar do desenvolvimento do PHP ser focado nos scripts do lado do servidor,
            você pode fazer muito mais com ele. Veja sobre isso na seção <a class="link-primary text-decoration-none" href="https://www.php.net/manual/pt_BR/intro-whatcando.php" target="_blank">O que o PHP pode fazer?</a>, ou vá diretamente para o <a class="link-primary text-decoration-none" href="https://www.php.net/manual/pt_BR/tutorial.php" target="_blank">tutorial introdutório</a> se você estiver interessado apenas em programação web.
          </p>
        </article>

        <!-- h3, h5 -->
        <section class="py-4" id="comentarios">
          <h3>Comentários</h3>

          <div class="row">
            <div class="col-12">

              <div class="card border-0 mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-2">
                      <img class="img-fluid rounded-circle" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="">
                    </div>
                    <div class="col-10">
                      <h5>Victor Lelis</h5>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quibusdam quo consequuntur nisi possimus. A reiciendis suscipit laudantium architecto error corrupti eum velit illo! Molestiae autem animi ratione consequatur beatae.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card border-0 mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-2">
                      <img class="img-fluid rounded-circle" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="">
                    </div>
                    <div class="col-10">
                      <h5>Victor Lelis</h5>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quibusdam quo consequuntur nisi possimus. A reiciendis suscipit laudantium architecto error corrupti eum velit illo! Molestiae autem animi ratione consequatur beatae.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card border-0 mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-2">
                      <img class="img-fluid rounded-circle" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="">
                    </div>
                    <div class="col-10">
                      <h5>Victor Lelis</h5>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quibusdam quo consequuntur nisi possimus. A reiciendis suscipit laudantium architecto error corrupti eum velit illo! Molestiae autem animi ratione consequatur beatae.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card border-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col-2">
                      <img class="img-fluid rounded-circle" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="">
                    </div>
                    <div class="col-10">
                      <h5>Victor Lelis</h5>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quibusdam quo consequuntur nisi possimus. A reiciendis suscipit laudantium architecto error corrupti eum velit illo! Molestiae autem animi ratione consequatur beatae.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- form, label, input -->
        <section class="py-4" id="comentar">
          <h3>Comentar</h3>
          <div class="card border-0">
            <div class="card-body">
              <form>
                <div class="mb-3">
                  <div class="row">
                    <div class="col-6">
                      <label for="nome">Nome:</label>
                      <input type="text" name="nome" id="nome" class="form-control" placeholder="Jhon Doe">
                    </div>
                    <div class="col-6">
                      <label for="email">E-mail:</label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="jhon@example.com">
                    </div>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="mensagem">Comentário</label>
                  <textarea name="mensagem" id="mensagem" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="text-end">
                  <button class="btn btn-dark" type="submit">Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </section>
      </div>

      <aside class="col-md-4 py-4">
        <div class="sticky-top" style="top: 80px;">
          <h4>Sugestões</h4>
          <a class="link-primary text-decoration-none" href="https://www.php.net/manual/pt_BR/manual.php" target="_blank">Manual do PHP</a>,
          <a class="link-primary text-decoration-none" href="https://www.php.net/manual/pt_BR/install.php" target="_blank">Instalação e Configuração</a>,
          <a class="link-primary text-decoration-none" href="https://www.php.net/manual/pt_BR/introduction.php" target="_blank">Introdução do PHP</a>,
          <a class="link-primary text-decoration-none" href="https://www.php.net/manual/pt_BR/tutorial.php" target="_blank">Tutorial PHP</a>

          <br>
          <br>
          <h6>Top Artigos</h6>
          <table class="table">
            <thead>
              <tr>
                <th>Artigo</th>
                <th>Visualizações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>O que é o PHP?</td>
                <td>4.000 <sup>views</sup></td>
              </tr>
              <tr>
                <td>Introdução ao PHP</td>
                <td>2.970 <sup>views</sup></td>
              </tr>
              <tr>
                <td>Tutorial PHP</td>
                <td>2.590 <sup>views</sup></td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td class="text-center border-0" colspan="2"><sub>artigos com mais visualizações</sub></td>
              </tr>
            </tfoot>
          </table>

          <br>
          <br>
          <h6>Top Comentários</h6>
          <ol type="1">
            <li>Victor Lelis</li>
            <li>Victor Lelis</li>
            <li>Victor Lelis</li>
          </ol>
        </div>
      </aside>
    </div>

  </main>
</div>