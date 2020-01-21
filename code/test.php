<?php


use App\Controller\BlogController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

//classe para controle de upload fotos
class uploadPhoto {

    //função de controle para upload    
    public function uploadAction(){
        //imagem teste:
        //$img = '/home/auryn/dockerTest/www/blog/code/imagem.xcf';

        echo "Upload de imagens.\n";

        //conexão BD
        $con = mysql_connect("localhost", "root", "root");
        if (!$con) {
            die("Erro na conexão com o servidor MySQL: " . mysql_error());
        }
        $banco = mysql_select_db("imagem", $con);
        if (!$banco) {
            die("Erro ao conectar no BD. <br> Erro: " . mysql_error());
        }

        //upload: enviando arquivo BD
        $cmd = "INSERT INTO TabelaImagem (imagem) VALUES ('$img')";
        $arquivo_tmp = $img['arquivo']['tmp_name'];
        $dir = './imagens_tmp';

        $optam = op1; //adicionar opções de tamanho
        $qtd = $arquivo_tmp.count();

        //gravar no bd
        $codigo = $_POST['codigo'];
        $evento = $_POST['evento'];
        $descricao = $_POST['imagem']; 
        $nome_imagem = $_FILES['imagem']['nome']; 
        $tamanho_imagem = $_FILES['imagem']['size']; 
        $tipo_imagem = $_FILES['imagem']['type']; 
        $imagem = $_FILES['imagem']['tmp_name']; 

        $queryInsert = "INSERT INTO TabelaImagem (codigo, evento, imagem,
        nome_imagem, size_image, type_imagem, tmp_name_imagem) values ('$codigo', '$evento', '$descricao', '$nome_imagem',
        '$tamanho_imagem', '$tipo_imagem', '$imagem')";  


        mysql_query($queryInsercao) or die("Erro, tente novamente.");
        echo 'Registro inserido com sucesso!'; 
        header('Location: test.php');
        //teste conexao 

        if(mysql_affected_rows($conexao) > 0){
            print "A imagem foi salva na base de dados.";
        } else {
            print "Não foi possível salvar a imagem na base de dados.";}

        
        return new Response();

    }

    //verificar se foi enviado arquivo
    public function test(){
        if ( isset( $img[ 'arquivo' ][ 'name' ] ) && $img[ 'arquivo' ][ 'error' ] == 0 ) {
            echo 'Imagens: <strong>' . $img[ 'arquivo' ][ 'name' ] . '</strong><br />';
            echo 'Extensão: <strong > ' . $img[ 'arquivo' ][ 'type' ] . ' </strong ><br />';
            echo 'Tamanho <strong>' . $img[ 'arquivo' ][ 'size' ] . '</strong> bytes<br /><br />';
        } 
        else
            echo 'Erro, não pode ser realizado upload da sua imagem!';

        return new Response();
    }


    // Função para redimensionar e calcular valor
    public function resize_value($img, $imgConvertida){
        
        if ($optam == op1) {
        //Novas dimensões 10x15
            $width = 10;
            $height = 15;
            $tam = op1;
            $valor = $qtd * 0.10;
        } else if ($optam == op2) {
        //Novas dimensões 12x15
            $width = 12;
            $height = 15;
            $tam = op1;
            $valor = $qtd * 0.15;
        } else {
        //Novas dimensões 13x18
            $width = 13;
            $height = 15;
            $tam = op;
            $valor = $qtd * 0.20;
            }; 
    
        return new Response();
    }
    
        
    //função filtros da imagem 
    public function filterPhotos(){
        //seleciona filtro 1- GrayScale  2-Sepia
        $filter;

        if ($filter == "GrayScale"){
            $imgFilter = $img(grayscale());
        } else {
            $imgFilter = $img(sepia());
        }

        return new Response();

    }

    
    //função exibir todas as imagens enviadas
    public function showPhotos(){
        
        //original 
        $img;
        //convertida tamanho 
        $imgConvertida;
        //pós filtro 
        $imgFilter;

        return new Response(
            '<html><body>Imagem oritinal: '.$img.';
            Imagem convertida: '.$imgConvertida.';
            Imagem pós filtro: '.$imgFilter.';
            </body></html>');
    
        }




    }
   



?>