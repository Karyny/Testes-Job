# Teste

## teste upload fotos (Mysql, symfony, php, html, css)

## Classe upload fotos
	classe responsável por todo o upload 

## Function uploadAction
	conexão inicial com o BD 
	envio do arquivo pelo usuário
	opção do tamanho
	quantidade fotos
	insert no BD
	

## Function test
	valida arquivo enviado
	descreve informações do arquivo


## Function resize_value
	converte a imagem nas dimensões desejadas 
	salva quantidade de imagens em cada dimensão 
	calcula valor baseado na quantidade de imagens de cada dimensão


## Function filterPhotos
	filtros 1- Escala de cinza ou 2- Sepia
	aplica filtro desejado e salva nova imagem 


## Function showPhotos 
	exibe todas as imagens enviadas com os detalhes de cada etapa 



## Classe cont
	classe com conteudo HTML 
	
	apresentação da tela de upload 
	botões para upload/save 
	botão com opções de medidas e filtros 


## Classe BD
	classe responsável por conexões e ações no BD 
	acesso ao banco de imagens 



## Classe routes 
	### classe responsável pelas rotas de acesso 

