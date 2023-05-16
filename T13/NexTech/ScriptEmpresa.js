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
                PesquisarDepartamento();
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#resultado').append('Error ' + errorMessage);
            }
    
        })
    
}/////////////////formulario Departamento ///////////

/////////////////formulario Funcionario ///////////
function CadastrarFuncionario(){

    let status_Funcionario = $('#txtStatus').val();
    let nome_Funcionario =$('#txtNome').val();
    let cpf_Funcionario = $('#txtCpf').val();

    let cep_Funcionario = $('#txtCep').val(); 
    let logradouro_Funcionario = $('#txtLogradouro').val(); 
    let numero_Funcionario = $('#txtNumero').val();
    let complemento_Funcionario = $('#txtComplemento').val();
    let bairro_Funcionario = $('#txtBairro').val();
    let cidade_Funcionario = $('#txtCidade').val(); 
    let uf_Funcionario = $('#txtUF').val(); 

    let email_Funcionario = $('#txtEmail').val();
    let telefone1_Funcionario = $('#txtTelefone1').val(); 
    let telefone2_Funcionario = $('#txtTelefone2').val();

    let id_Departamento_Funcionario = $('#txtIDepart').val();
    let login_Funcionario = $('#txtLogin').val();
    let senha_Funcionario = $('#txtSenha').val();
    let confirmarSenha_Funcionario = $('#txtConfirmarSenha').val();
  
    let action = 'FuncionarioBtoCadastrar.php';

    if ($("#txtStatus").val() == '') {
        alert("erro");
        return;
    }
    if ($("#txtNome").val() == '') {
        alert("Campo Nome Obrigatório");
        return;
    }
    if ($.isNumeric($("#txtNome").val())) {
        alert("Apenas Letras");
        return;
    }
    if ($("#txtCpf").val() == null) {
        alert("CPF obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtCpf").val())) {
        alert("Apenas Números");
        return;
    }
    if ($("#txtCEP").val() = null) {
        alert("CEP obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtCEP").val())) {
        alert("Preencha o CEP com números")
        return;
    }
    if ($('#txtLogradouro').val() == null) {
        alert("Logradouro é obrigatório");
        return;
    }
    if ($("#txtNumero").val() == null) {
        alert("Número da Residência é obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtNumero").val())) {
        alert("Número da Residência não pode conter letras");
        return;
    }
    if ($("#txtBairro").val() == null) {
        alert("Bairro obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtBairro").val())) {
        alert("Apenas letras");
        return;
    }
    if ($.isNumeric($("#txtCidade").val() == null)) {
        alert("Campo Cidade Obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtCidade").val())) {
        alert("Apenas letras");
        return;
    }   
    if ($("#txtUF").val().trim() === '') {
        alert("Estado(UF) é Obrigatório");
        return;
    }
    if ($('#txtEmail').val() == null) {
        alert("E-mail obrigatório");
        return;
    }
    if ($("#txtTelefone1").val() == null) {
        alert("Campo Telefone1 obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtTelefone1").val())) {
        alert("Preencha telefone com números");
        return;
    }
    if ($("#txtLogin").val() == null) {
        alert("Login é Obrigatório");
        return;
    }
    if ($("#txtSenha").val() == null) {
        alert("Senha é Obrigatória");
        return;
    }
    if ($.isNumeric($("#txtSenha").val() != $("#txtConfirmarSenha").val())) {
        alert("A senha deve ser idêntica ao confirmar Senha");
        return;
    }
    else {
        $.ajax({
            url: action,
            type: 'post',
            data: {
                
                txtStatus: status_Funcionario,
                txtNome: nome_Funcionario,
                txtCpf:cpf_Funcionario,
                txtCep:cep_Funcionario,
                txtLogradouro:logradouro_Funcionario,
                txtNumero:numero_Funcionario,
                txtComplemento:complemento_Funcionario,
                txtBairro:bairro_Funcionario,
                txtCidade:cidade_Funcionario,
                txtUF:uf_Funcionario,
                txtEmail:email_Funcionario,
                txtTelefone1:telefone1_Funcionario,
                txtTelefone2:telefone2_Funcionario,
                txtIDepart:id_Departamento_Funcionario,
                txtLogin:login_Funcionario,
                txtSenha:senha_Funcionario,
                txtConfirmarSenha:confirmarSenha_Funcionario


            },
            success: function (data, status, xhr) {
                $("#resultado").empty().html(data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#resultado').empty('Error ' + errorMessage);
            }
    
        })
    }    
}
function PesquisarFuncionario(){

     let id_Funcionario = $('#txtID').val();
      
        let action = 'FuncionarioBtoPesquisa.php';
    
    
        $.ajax({
            url: action,
            type: 'post',
            data: {
                txtID: id_Funcionario
               
            },
            success: function (data, status, xhr) {
    
                $("#resultado").empty().html( data );
                $("#txtID").val($('#idGerado').text());
                $("#txtStatus").val($('#PesquisaStatus').text());
                $("#txtData").val($('#PesquisaData').text());
                $("#txtNome").val($('#PesquisaNome').text());            
                $("#txtCpf").val($('#PesquisaCpf').text());

                $("#txtCep").val($('#PesquisaCep').text());
                $("#txtLogradouro").val($('#PesquisaLogradouro').text());
                $("#txtNumero").val($('#PesquisaNumero').text());            
                $("#txtComplemento").val($('#PesquisaComplemento').text());
                $("#txtBairro").val($('#PesquisaBairro').text());
                $("#txtCidade").val($('#PesquisaCidade').text());
                $("#txtUF").val($('#PesquisaUF').text());   

                $("#txtEmail").val($('#PesquisaEmail').text());
                $("#txtTelefone1").val($('#PesquisaTelefone1').text());
                $("#txtTelefone2").val($('#PesquisaTelefone2').text());

                $("#txtIDepart").val($('#PesquisaDepart').text());            
                $("#txtLogin").val($('#PesquisaLogin').text());
                $("#txtSenha").val($('#PesquisaSenha').text());
                $("#txtConfirmarSenha").val($('#PesquisaConfirmarSenha').text());
               
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#resultado').empty().html('Error ' + errorMessage);
            }
    
        })
}
function ExcluirFuncionario(){

    let id_Funcionario = $('#txtID').val();
      
    let action = 'FuncionarioBtoExcluir.php';
    
    
    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_Funcionario
               
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
function AlterarFuncionario(){

    let status_Funcionario = $('#txtStatus').val();
    let nome_Funcionario =$('#txtNome').val();
    let cpf_Funcionario = $('#txtCpf').val();

    let cep_Funcionario = $('#txtCep').val(); 
    let logradouro_Funcionario = $('#txtLogradouro').val(); 
    let numero_Funcionario = $('#txtNumero').val();
    let complemento_Funcionario = $('#txtComplemento').val();
    let bairro_Funcionario = $('#txtBairro').val();
    let cidade_Funcionario = $('#txtCidade').val(); 
    let uf_Funcionario = $('#txtUF').val(); 

    let email_Funcionario = $('#txtEmail').val();
    let telefone1_Funcionario = $('#txtTelefone1').val(); 
    let telefone2_Funcionario = $('#txtTelefone2').val();

    let id_Departamento_Funcionario = $('#txtIDepart').val();
    let login_Funcionario = $('#txtLogin').val();
    let senha_Funcionario = $('#txtSenha').val();
    let confirmarSenha_Funcionario = $('#txtConfirmarSenha').val();
    
    let action = 'FuncionarioBtoAlterar.php';
    if ($("#txtStatus").val() == '') {
        alert("erro");
        return;
    }
    if ($("#txtNome").val() == '') {
        alert("Campo Nome Obrigatório");
        return;
    }
    if ($.isNumeric($("#txtNome").val())) {
        alert("Apenas Letras");
        return;
    }
    if ($("#txtCpf").val() == null) {
        alert("CPF obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtCpf").val())) {
        alert("Apenas Números");
        return;
    }
    if ($("#txtCEP").val() = null) {
        alert("CEP obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtCEP").val())) {
        alert("Preencha o CEP com números")
        return;
    }
    if ($('#txtLogradouro').val() == null) {
        alert("Logradouro é obrigatório");
        return;
    }
    if ($("#txtNumero").val() == null) {
        alert("Número da Residência é obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtNumero").val())) {
        alert("Número da Residência não pode conter letras");
        return;
    }
    if ($("#txtBairro").val() == null) {
        alert("Bairro obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtBairro").val())) {
        alert("Apenas letras");
        return;
    }
    if ($.isNumeric($("#txtCidade").val() == null)) {
        alert("Campo Cidade Obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtCidade").val())) {
        alert("Apenas letras");
        return;
    }   
    if ($("#txtUF").val().trim() === '') {
        alert("Estado(UF) é Obrigatório");
        return;
    }
    if ($('#txtEmail').val() == null) {
        alert("E-mail obrigatório");
        return;
    }
    if ($("#txtTelefone1").val() == null) {
        alert("Campo Telefone1 obrigatório");
        return;
    }
    if (!$.isNumeric($("#txtTelefone1").val())) {
        alert("Preencha telefone com números");
        return;
    }
    if ($("#txtLogin").val() == null) {
        alert("Login é Obrigatório");
        return;
    }
    if ($("#txtSenha").val() == null) {
        alert("Senha é Obrigatória");
        return;
    }
    if ($.isNumeric($("#txtSenha").val() != $("#txtConfirmarSenha").val())) {
        alert("A senha deve ser idêntica ao confirmar Senha");
        return;
    }
    else { 
        $.ajax({
            url: action,
            type: 'post',
            data: {
                txtID: id_Funcionario,               
                txtStatus: status_Funcionario,
                txtNome: nome_Funcionario,
                txtCpf:cpf_Funcionario,
                txtCep:cep_Funcionario,
                txtLogradouro:logradouro_Funcionario,
                txtNumero:numero_Funcionario,
                txtComplemento:complemento_Funcionario,
                txtBairro:bairro_Funcionario,
                txtCidade:cidade_Funcionario,
                txtUF:uf_Funcionario,
                txtEmail:email_Funcionario,
                txtTelefone1:telefone1_Funcionario,
                txtTelefone2:telefone2_Funcionario,
                txtIDepart:id_Departamento_Funcionario,
                txtLogin:login_Funcionario,
                txtSenha:senha_Funcionario,
                txtConfirmarSenha:confirmarSenha_Funcionario
               
            },
            beforend : function(){
                $("#resultado").html("ENVIANDO...");
            },
            success: function (data, status, xhr) {
    
                $("#resultado").empty().html( data );
                PesquisarFuncionario();
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#resultado').append('Error ' + errorMessage);
            }
    
        })
    }    
}/////////////////formulario Funcionario ///////////

/////////////////formulario planos ///////////
function CadastrarPlano(){
    
    let status_Plano = $('#txtStatus').val();
    let nome_Plano = $('#txtNome').val();
    let preco_Plano = $('#txtPreco').val();
    let duracao_Plano = $('#txtDuracao').val();
    let beneficios1_Plano = $('#txtBeneficios1').val();
    let beneficios2_Plano = $('#txtBeneficios2').val();
    let beneficios3_Plano = $('#txtBeneficios3').val();
    let beneficios4_Plano = $('#txtBeneficios4').val();
    let beneficios5_Plano = $('#txtBeneficios5').val();

        
    let action = 'PlanoBtoCadastrar.php';
    
        $.ajax({
            url: action,
            type: 'post',
            data: {
                txtNome: nome_Plano,
                txtStatus: status_Plano,
                txtPreco: preco_Plano,
                txtDuracao: duracao_Plano,
                txtBeneficios1: beneficios1_Plano,
                txtBeneficios2: beneficios2_Plano,
                txtBeneficios3: beneficios3_Plano,
                txtBeneficios4: beneficios4_Plano,
                txtBeneficios5: beneficios5_Plano


            },
            success: function (data, status, xhr) {
                $("#resultado").empty().html(data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#resultado').empty('Error ' + errorMessage);
            }
    
        })
}
function PesquisarPlano(){
    
        //console.log('testtetttt');
    
        let id_Plano = $('#txtID').val();
      
        let action = 'PlanoBtoPesquisar.php';
    
    
        $.ajax({
            url: action,
            type: 'post',
            data: {
                txtID: id_Plano
               
            },
            success: function (data, status, xhr) {
    
                $("#resultado").empty().html( data );
                $("#txtID").val($('#idGerado').text());
                $("#txtStatus").val($('#PesquisaStatus').text());
                $("#txtData").val($('#PesquisaData').text());
                $("#txtNome").val($('#PesquisaNome').text()); 
                $("#txtPreco").val($('#PesquisaPreco').text());
                $("#txtDuracao").val($('#PesquisaDuracao').text());
                $("#txtBeneficios1").val($('#PesquisaBeneficios1').text());
                $("#txtBeneficios2").val($('#PesquisaBeneficios2').text());            
                $("#txtBeneficios3").val($('#PesquisaBeneficios3').text());            
                $("#txtBeneficios4").val($('#PesquisaBeneficios4').text());            
                $("#txtBeneficios5").val($('#PesquisaBeneficios5').text());            
            
                
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#resultado').empty().html('Error ' + errorMessage);
            }
    
        })
    
}
function ExcluirPlano(){
    
        let id_Plano = $('#txtID').val();
      
        let action = 'PlanoBtoExcluir.php';
    
    
        $.ajax({
            url: action,
            type: 'post',
            data: {
                txtID: id_Plano
               
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
function AlterarPlano(){
    
        //console.log('testtetttt');
    
        let id_Plano = $('#txtID').val();
        let status_Plano = $('#txtStatus').val();
        let nome_Plano = $('#txtNome').val();
        let preco_Plano = $('#txtPreco').val();
        let duracao_Plano = $('#txtDuracao').val();
        let beneficios1_Plano = $('#txtBeneficos1').val();
        let beneficios2_Plano = $('#txtBeneficos2').val();
        let beneficios3_Plano = $('#txtBeneficos3').val();
        let beneficios4_Plano = $('#txtBeneficos4').val();
        let beneficios5_Plano = $('#txtBeneficos5').val();


      
        let action = 'PlanoBtoAlterar.php';
    
    
        $.ajax({
            url: action,
            type: 'post',
            data: {
                txtID: id_Plano,
                txtNome: nome_Plano,
                txtStatus: status_Plano,
                txtPreco: preco_Plano,
                txtDuracao: duracao_Plano,
                txtBeneficos1: beneficios1_Plano,
                txtBeneficos2: beneficios2_Plano,
                txtBeneficos3: beneficios3_Plano,
                txtBeneficos4: beneficios4_Plano,
                txtBeneficos5: beneficios5_Plano

            },
            beforend : function(){
                $("#resultado").html("ENVIANDO...");
            },
            success: function (data, status, xhr) {
    
                $("#resultado").empty().html( data );
                PesquisarPlano();
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#resultado').append('Error ' + errorMessage);
                PesquisarPlano()

            }
    
        })
    
}/////////////////formulario Plano ///////////



