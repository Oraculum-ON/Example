<?php Oraculum\Register::set('titulo', 'Suporte'); ?>
<div id="content">
    <h1>Banco de Dados: Active Record</h1>
<p><a href="http://en.wikipedia.org/wiki/Active_record_pattern">Active Record</a> &eacute; um padr&atilde;o de desenvolvimento que realiza o gerenciamento de registros de entidades de bancos de dados atrav&eacute;s de objetos. Veja o exemplo abaixo...</p>
<p>
<?php highlight_string('<?php
    use Oraculum\Model;

    /* Carrega a configuracao do banco */
    $db = new Model(\'mysql\');
    
    $db->loadTable(\'noticias\');
    
    /*
        A classe procura por um arquivo mysql.php dentro da pasta models.
        A partir de entao, ja e possivel utilizar a classe
        Oraculum\Tables\ENTIDADE, que ira mapear a entidade/tabela
        e criar o objeto relacionado com todos os atributos
    */
    
    /* Mapeia a tabela/entidade noticias do banco */


    /* Cadastro */
    $noticia = new Oraculum\Tables\Noticias();
    $noticia->titulo = \'teste\';
    $noticia->texto = \'texto da noticia\';
    $noticia->save();

    /* Busca todas */
    $noticias = new Oraculum\Tables\Noticias();
    $noticias = $noticias->getAll();
    foreach ($noticias as $noticia) :
        echo $noticia->titulo.\'<br />\'; // Exibindo o titulo
    endforeach;

    /* Busca mais de uma com algum condicao */
    $noticias = new Oraculum\Tables\Noticias();
    $noticias = $noticias->getAllByPublicada(true);
    foreach ($noticias as $noticia) :
        echo $noticia->titulo.\'<br />\'; // Exibindo o titulo
    endforeach;
    
    /* Busca mais de uma com filtros */
    $noticias = new Oraculum\Tables\Noticias();
    $noticias = $noticias->filterByCategoria(1)
                         ->filterByAutor(1)
                         ->getAll();
    foreach ($noticias as $noticia) :
        echo $noticia->titulo.\'<br />\'; // Exibindo o titulo
    endforeach;

    /* Busca uma apenas */
    $noticias = new Oraculum\Tables\Noticias();
    $noticia = $noticias->getByCodigo(1); // Poderia ser getByTitulo ou outro campo
    echo $noticia->titulo; // Exibindo o titulo

    /* Removendo */
    $noticia->delete();'); ?></p>
<p>D&uacute;vidas podem ser sanadas atrav&eacute;s do menu suporte ;)</p>
<p>Boa sorte</p>

</p>
</div>