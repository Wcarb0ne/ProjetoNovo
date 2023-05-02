/////////////////formulario Departamento ///////////
function CadastrarDepartamento(){
 
    let nome_Departamento = $('#txtNome').val();
    let status_Departamento = $('#txtStatus').val();
    let descricao_Departamento = $('#txtDescricao').val();
    
    // console.log('testee');
    
    let action = 'DepartamentoBtoCadastrar.php';
    
        $.ajax({
            url: action,
            type: 'post',
            data: {
                txtNome: nome_Departamento,
                txtStatus: status_Departamento,
                txtDescricao: descricao_Departamento

            },
            success: function (data, status, xhr) {
                $("#resultado").empty().html(data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#resultado').empty('Error ' + errorMessage);
            }
    
        })
    }
    function PesquisarDepartamento(){
    
        //console.log('testtetttt');
    
        let id_Departamento = $('#txtID').val();
      
        let action = 'DepartamentoBtoPesquisa.php';
    
    
        $.ajax({
            url: action,
            type: 'post',
            data: {
                txtID: id_Departamento
               
            },
            success: function (data, status, xhr) {
    
                $("#resultado").empty().html( data );
                $("#txtID").val($('#idGerado').text());
                $("#txtData").val($('#PesquisaData').text());
                $("#txtNome").val($('#PesquisaNome').text());            
                $("#txtStatus").val($('#PesquisaStatus').text());
                $("#txtDescricao").val($('#PesquisaDescricao').text());
               
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#resultado').empty().html('Error ' + errorMessage);
            }
    
        })
    
    }
    function ExcluirDepartamento(){
    
        let id_Departamento = $('#txtID').val();
      
        let action = 'DepartamentoBtoExcluir.php';
    
    
        $.ajax({
            url: action,
            type: 'post',
            data: {
                txtID: id_Departamento
               
            },
            beforend : function(){
                $("#resultado").html("ENVIANDO...");
            },
            success: function(data, status, xhr){
                $( "#resultado" ).empty().html( data );
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#resultado').empty().html('Error' + errorMessage);
            }
    
        })
    }
    function AlterarDepartamento(){
    
        //console.log('testtetttt');
    
        let id_Departamento = $('#txtID').val();
        let nome_Departamento = $('#txtNome').val();
        let status_Departamento = $('#txtStatus').val();
        let descricao_Departamento = $('#txtDescricao').val();

      
        let action = 'DepartamentoBtoAlterar.php';
    
    
        $.ajax({
            url: action,
            type: 'post',
            data: {
                txtID: id_Departamento,
                txtNome: nome_Departamento,
                txtStatus: status_Departamento,
                txtDescricao: descricao_Departamento
               
            },
            beforend : function(){
                $("#resultado").html("ENVIANDO...");
            },
            success: function (data, status, xhr) {
    
                $("#resultado").empty().html( data );
                PesquisarDepartamentor();
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#resultado').append('Error ' + errorMessage);
            }
    
        })
    
    }/////////////////formulario Departamento ///////////

/////////////////formulario Funcionario ///////////
function CadastrarFuncionario(){

}
function PesquisarFuncionario(){
    
}
function ExcluirFuncionario(){
    
}
function AlterarFuncionario(){
    
}/////////////////formulario Funcionario ///////////
