# modules
Problema com o FormRequest no module (packages)

Porque dentro do meu módulo o FormRequest não funciona e fora dele funciona perfeitamente?
Não está retornar os erros ao validar os campos de um formulário.

http://localhost:8000/teste1 (não funciona pois o formulário, o controller e o request estão no meu módulo)
http://localhost:8000/teste2 (funciona perfeitamente, porém, está fora do meu módulo)

# Solução
Para ficar documentado para quem passar pelo mesmo. Não encontrei nada na internet relacionado, e a solução foi dada no Grupo do Laravel no Instagram e foi simples. No arquivo de rotas do módulo, incluir Route::group(['middleware' => 'web'], function () {, ficando assim:

Route::group(['middleware' => 'web'], function () {
    Route::get('teste1', ['as'=>'teste1a', 'uses'=>'Visitantes\NovaSenhaController@teste1a']);
    Route::post('teste1', ['as'=>'teste1b', 'uses'=>'Visitantes\NovaSenhaController@teste1b']);
});
