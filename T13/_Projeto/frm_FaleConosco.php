<br>
<form id="my-form" action="#" class="from-control" method="post">

<div class="box-formulario">        
        
        <div class="formulario">
            
            <div class="title-form">
              <h1>Fale Conosco</h1>
            </div>

            <form action="#" method="post">
                    
                <span>
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" autocomplete="off" required=""/>
                </span>

                <span>
                    <label for="email">E-mail</i> </label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" autocomplete="off" required=""/>
                </span>

                <span>
                    <label for="assunto">Assunto</i> </label>
                    <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto" autocomplete="off" required=""/>
                </span>

                <span>
                    <label for="Anexo">Anexo</label>
                    <input type="file" class="form-control" id="arquivo" name="arquivo" placeholder="Anexo" autocomplete="off" required=""/>
                </span>

                <span>
                    <label for="mensagem">Mensagem</i> </label>
                    <textarea type="text" class="form-control" id="mensagem" name="mensagem" rows="3" placeholder="Mensagem" autocomplete="off" required=""></textarea>
                </span>

                <div class="row mt-4 mb-4"><!--botoes-->
                    <div class="col-sm-1">
                    <button type="submit" class="btn btn-success"><i class="icon icon-paper-plane-o"></i> Enviar</button>
                    </div>
                </div>
                
            </form>

        </div>

    </div>
</form>
